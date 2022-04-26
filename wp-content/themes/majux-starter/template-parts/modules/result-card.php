<div class="card">
    <div class="wrap">
        <div class="cover hide">
            <p class="money"><?php echo $args['amount']; ?></p> 
            <p class="title"><?php echo $args['type']; ?></p>                
        </div>
        <div class="cover">     
            <p class="money"><?php echo $args['amount']; ?></p>             
            <p class="title"><?php echo $args['type']; ?></p> 
        </div>
        <div class="description">
            <?php echo $args['description']; ?>
        </div>      
    </div>

    <div class="card-layout">
        <div class="cover">
            <p class="money"><?php echo $args['amount']; ?></p>  
            <p class="title"><?php echo $args['type']; ?></p>           
        </div>
        <div class="description">
            <?php echo $args['description']; ?>
        </div>      
    </div>
</div>