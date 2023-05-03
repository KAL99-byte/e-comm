
<?php

use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Add Home Photo';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$category = [
    
  ' slider '=>'Slider',
  'special_offer '=>'Special Offer ',
  
];


?>
<?php $form = ActiveForm::begin(); ?>
<p align='left'>
<a href="/control/homephotos/index" class="btn btn-sm btn-primary">Back</a>
</p>

<div class="container">
<div class="card">
<div class="card-body">

<form>
  <div class="row">
    <div class="col">
      <?= $form->field($model, 'title')->textInput(['placeholder' => 'enter  title of the Photo']); ?>
    </div>
    <div class="col">
    <div class="form-group">
      <?= $form->field($model, 'description')->textarea(['placeholder' => 'enter  description of the photo']); ?>
    </div>
    </div>
</div>
<div class="row">
    <div class="col">
    <?= $form->field($model,'category')->dropDownList($category ,['prompt'=> '--select category--']); ?>
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
    




