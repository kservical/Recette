<table class="table is-bordered">

<?php 
foreach ($ingredients as $ingredient)
{
    #echo $objet->atchotribut
    
    foreach($ingredient as $attr){
        ?> 
        <tr>

            <?php
        echo $attr; 
        ?>
        </tr>
        <?php 
    }
    #var_dump($ingredient);
}
?>