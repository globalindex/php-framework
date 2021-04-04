<?php
/** @var $model User
 * @var $this View
 */
use globalindex\phpmvc\View;
use App\models\User;

$this->title = "Login";
?>

<h1>Login</h1>

<?php $form = \globalindex\phpmvc\form\Form::begin("", "post") ?>
<?= $form->field($model, "email") ?>
<?= $form->field($model, "password")->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \globalindex\phpmvc\form\Form::end() ?>
