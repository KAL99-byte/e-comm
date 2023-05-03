
<?php

use app\models\Product;
use app\models\Brand;
use yii\helpers\html;
use app\models\Category;
use app\models\Subcategory;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

// use yii\bootstrap4\Html;
// use yii\widgets\ActiveForm;

// use yii\helpers\Html;

$this->title = 'Add New Product';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>
<p align='left'>
<a href="/control/products/index" class="btn btn-sm btn-primary">Back</a>
</p>

<div class="container">
<div class="card">
<div class="card-body">

<form>
  <div class="row">
    <div class="col">
      <?= $form->field($model, 'name')->textInput(['placeholder' => 'enter your product name']); ?>
    </div>
    <div class="col">
    <div class="form-group">
    <?= $form->field($model, 'photo')->fileInput() ?>
    </div>
    </div>
</div>

  <div class="row">
    <div class="col">
      <?= $form->field($model, 'description')->textarea(['placeholder' => 'enter your product description']); ?>
    </div>
    <div class="col">
      <?= $form->field($model, 'specialization')->textarea(['placeholder' => 'enter your product specialization']); ?>
    </div>
</div>

<div class="row">
    <div class="col">
      <?= $form->field($model, 'price')->textInput(['type' => 'number']) ?>
    </div>
    <div class="col">
      <?= $form->field($model, 'color')->textInput(['placeholder' => 'enter your product color']); ?>
    </div>
</div>

<div class="row">
    <div class="col">
       <?= $form->field($model, 'size')->textInput(['placeholder' => 'enter your product size']); ?>
    </div>
    <div class="col">    
      <?= $form->field($model, 'rate')->textInput(['type' => 'number']) ?>
    </div>
</div>
<div class="row">
    <div class="col">
    <?= $form->field($model, 'bid')->label('Brand Name:')->dropDownList(Product::getProductBrandOptions()
,['prompt'=>'--Select Brand Options--']); ?>
    </div>
    <div class="col">    
    <?= $form->field($model, 'scid')->label('Sub Category Name:')->dropDownList(Product::getProductSubCategoryOptions()
,['prompt'=>'--Select Sub Category Options--']); ?>
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
    




