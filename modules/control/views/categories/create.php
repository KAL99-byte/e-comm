
<?php

use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Add Product Category';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>
<p align='left'>
<a href="/control/categories/index" class="btn btn-sm btn-primary">Back</a>
</p>

<div class="container">
<div class="card">
<div class="card-body">

<form>
  <div class="row">
    <div class="col">
      <?= $form->field($model, 'name')->textInput(['placeholder' => 'enter  name of the Category']); ?>
    </div>
    <div class="col">
    <div class="form-group">
    <?= $form->field($model, 'photo')->fileInput(); ?>
    </div>
    </div>
</div>


</form>  

<p align="right">
  <?= Html::submitButton("submit",['class'=>'btn btn-success']); ?>
</p>

</div>
</div>
</div>
</div>

<?php ActiveForm::end(); ?>
    




