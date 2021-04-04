<?php
/**
 * @var $this View
 */
use globalindex\phpmvc\View;

$this->title = "Create an account";
?>
<h1>Create an account</h1>

<?php $form = \globalindex\phpmvc\form\Form::begin("", "post") ?>
  <div class="row">
    <div class="col">
      <?= $form->field($model, "firstname") ?>
    </div>
    <div class="col">
      <?= $form->field($model, "lastname") ?>
    </div>
  </div>
  <?= $form->field($model, "email") ?>
  <?= $form->field($model, "password")->passwordField() ?>
  <?= $form->field($model, "confirmPassword")->passwordField() ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php \globalindex\phpmvc\form\Form::end() ?>
