<?php
/**
 * @var $this View
 * @var $model ContactForm
 */

use globalindex\phpmvc\form\Form;
use globalindex\phpmvc\form\TextareaField;
use globalindex\phpmvc\View;
use App\models\ContactForm;

$this->title = "Contact us";
?>
<h1>Contact us</h1>

<?php $form = Form::begin("", "post") ?>
<?php echo $form->field($model, "subject") ?>
<?php echo $form->field($model, "email") ?>
<?php echo new TextareaField($model, "body") ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end(); ?>