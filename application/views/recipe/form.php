<?php echo validation_errors(); ?>

<?php echo form_open('/insert'); ?>
<form action="<?php echo site_url("insert") ?>"
  <div class="field">
    <label class="label">Titre</label>
    <div class="control">
      <input class="input " type="text" name="titre" placeholder="Text input">
    </div>
  </div>

  <div class="field">
    <label class="label">temps preparation</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-success" type="text" placeholder="minute" name="time_cook" value="40">
      <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
      </span>

    <div class="field">
    <label class="label">temps cuisson</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-success" type="text" placeholder="minute" name="time_make" value="bulma">
      <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
      </span>

  <div class="field">
    <label class="label">Select ingredient</label>
    <div class="control">
      <div class="select">
        <select>
          <?php 
            foreach ($ingredients as $ingredient)
            {
                #echo $objet->atchotribut
                
                foreach($ingredient as $attr){
                    ?> 
                    <div>
                    <option>
                        <?php
                    echo $attr; 
                    ?>
                    </div>
                    <?php 
                }
            }
          ?>
        </select>
      </div>
    </div>
  </div>


   <div class="field is-grouped is-grouped-multiline">
  <?php 
            foreach ($ingredients as $ingredient)
            {
                #echo $objet->atchotribut
                
                foreach($ingredient as $attr){
                    ?>   
                    <p class="control">
                      <a class="button"> 
                        <?php
                    echo $attr; 
                    ?>
                      </a>
                    </p>
                    <?php 
                }
            }
        ?>
    </div>
    

  <div class="field">
    <label class="label">Etape</label>
    <div class="control">
      <textarea class="textarea" name="step" placeholder="Pour commencer..."></textarea>
    </div>
  </div>




  <div class="field is-grouped">
    <div class="control">
      <input type="submit" name="submit" value="entrer"></input>
      <button class="button is-link">Submit</button>
    </div>
    <div class="control">
      <button class="button is-text">Cancel</button>
    </div>
  </div>

</form>