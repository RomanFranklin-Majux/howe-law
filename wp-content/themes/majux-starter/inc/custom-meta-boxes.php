<?php 
/**
 * Register meta boxes.
 */
function al_register_meta_boxes( $post ) {
    global $post;
    print_r($post->ID);
    if ($post->ID == get_field('attorney_archive_page', 'option')) :
        add_meta_box( 'al-attorney', __( 'Attorneys', 'al' ), 'al_display_callback', 'page' );
    endif;
}
add_action( 'add_meta_boxes', 'al_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function al_display_callback( $post ) {
    $screen = $post->ID;
    ?> 

    <script>
        function updateOrder($) {
            var i = 1;
            jQuery('.admin-attorney li:not(.hide)').each(function() {
                jQuery(this).attr('data-order', i);
                jQuery(this).find('.handle').html(i);
                jQuery(this).find('input[type="hidden"]').val(i);
                i++;
            })
        }

        jQuery( function($) {
            $( ".admin-attorney" ).sortable({
                update: function( event, ui ) {
                    updateOrder();
                }
            });
        } ); 

        var instance = new acf.Model({
            events: {
                'change select': 'onChangeSelect',
            },
            onChange: function(e, $el){
                var val = $el.val();
            },            
            onChangeSelect: function(e, $el) {
                
                jQuery('.admin-attorney li[data-id="' + $el.val() +'"] input[type="hidden"]').val(0);
                
                updateOrder();
                this.onChange(e, $el);
            }
        });        
    </script>   

    <div class="majux-field">
        <div class="majux-label">
            <label>Attorney Display Order</label>
        </div>
        <ul class="admin-attorney">

        <?php
        $args = array('post_type' => 'attorney', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order'); 
        $pages = get_posts( $args );
        $i = 0;
        foreach ( $pages as $page ) : setup_postdata( $page ); 

            $display = '';

            $order = $page->menu_order;
            ?>

            <li data-order="<?php echo $i; ?>" data-id="<?php echo $page->ID; ?>" class="<?php echo $display; ?>">
                <div class="handle"><?php echo $order; ?></div>
                <div class="name"><?php echo $page->post_title; ?></div>
                <input type="hidden" name="attorney_order[<?php echo $page->ID; ?>]" value="<?php echo $i; ?>">
            </li>

            <?php
            
            $i++;
        endforeach; 
        wp_reset_postdata();

        ?>

        </ul>
    </div>

    <?php
   
}


/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function al_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }

    $fields = array( 'attorney_title', 'attorney_description' );

    foreach($fields as $field) :
        if ( isset( $_POST[$field] ) ) :
            update_post_meta( $post_id, $field, $_POST[$field] );
        endif;
    endforeach;

    if ( isset( $_POST['attorney_order'] ) ) :

        // If calling wp_update_post, unhook this function so it doesn't loop infinitely
        remove_action('save_post', 'al_save_meta_box');

        // Call wp_update_post update, which calls save_post again.
        foreach( $_POST['attorney_order'] as $attorney_page_id => $order ) :
            $order_post = array(
                  'ID'           => $attorney_page_id,
                  'menu_order'   => $order
              );
            wp_update_post( $order_post );
        endforeach;

        // re-hook this function
        add_action('save_post', 'al_save_meta_box');

    endif;

}
add_action( 'save_post', 'al_save_meta_box' );
