<table class="table">

<?php 
foreach ($ingredients as $ingredient)
{
    #echo $objet->atchotribut
    
    foreach($ingredient as $attr){
        ?> 
        <div>
            <?php
        echo $attr; 
        ?>
        </div>
        <?php 
    }
    #var_dump($ingredient);
}
?>