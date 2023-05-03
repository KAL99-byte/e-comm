
<?php

use yii\helpers\html;
use app\models\Category;
use app\models\Subcategory;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;



$this->title = 'Add Product Sub Category';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php $form = ActiveForm::begin(); ?>
<p align='left'>
<a href="/control/subcategories/index" class="btn btn-sm btn-primary">Back</a>
</p>

<div class="container">
<div class="card">
<div class="card-body">

<form>
  <div class="row">
    <div class="col">
    <?= $form->field($model, 'cid')->label('Category Name:')->dropDownList(Subcategory::getProductCategoryOptions()
,['prompt'=>'--Select Category--']); ?>
     
    </div>
    <div class="col">
    <div class="form-group">
      <?= $form->field($model, 'photo')->label('Sub Category Photo:')->fileInput(); ?>
    </div>
    </div>
</div>
<div class="row">
    <div class="col">
    
     <?= $form->field($model, 'name')->label('Sub Category Name:')->textInput(['placeholder' => 'enter  name of the SubCategory']); ?>
    </div>
    <div class="col">
    <div class="form-group">
    
    </div>
    </div>
</div>


<div class="row">
    <div class="col">
    
    
    </div>
    <div class="col">
    <div class="form-group">
    
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
    




