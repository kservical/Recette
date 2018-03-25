<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
<form action="recipe/ingredients">
  <div class="field">
    <label class="label">Titre</label>
    <div class="control">
      <input class="input" type="text" placeholder="Text input">
    </div>
  </div>

  <div class="field">
    <label class="label">temps preparation</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-success" type="text" placeholder="minute" value="40">
      <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
      </span>

    <div class="field">
    <label class="label">temps cuisson</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-success" type="text" placeholder="minute" value="bulma">
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
          <option>Select dropdown</option>
          <option>With options</option>
        </select>
      </div>
    </div>
  </div>

  <div class="field">
    <label class="label">Description</label>
    <div class="control">
      <textarea class="textarea" placeholder="Textarea"></textarea>
    </div>
  </div>



  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Submit</button>
    </div>
    <div class="control">
      <button class="button is-text">Cancel</button>
    </div>
  </div>

</form>