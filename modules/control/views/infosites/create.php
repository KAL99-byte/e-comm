
<?php

use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Add New Site Information';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>
<p align='left'>
<a href="/control/infosites/index" class="btn btn-sm btn-primary">Back</a>
</p>

<div class="container">
<div class="card">
<div class="card-body">

<form>
  <div class="row">
    <div class="col">
      <?= $form->field($model, 'about')->textarea(['placeholder' => 'enter  about this site']); ?>
    </div>
    <div class="col">
    <div class="form-group">
      <?= $form->field($model, 'name')->textInput(['placeholder' => 'enter  name of the site']); ?>
    </div>
    </div>
</div>

  <div class="row">
    <div class="col">
      <?= $form->field($model, 'address')->textInput(['placeholder' => 'enter  address of the site']); ?>
    </div>
    <div class="col">
      <?= $form->field($model, 'email')->textInput(['placeholder' => 'enter  email of the site']); ?>
    </div>
</div>

<div class="row">
    <div class="col">
      <?= $form->field($model, 'phone')->textInput(['placeholder' => 'enter phone number of the site']);?>
    </div>
    <div class="col">
      <?= $form->field($model, 'twitter_url')->textInput(['placeholder' => 'enter twitterlink of the site']); ?>
    </div>
</div>

<div class="row">
    <div class="col">
       <?= $form->field($model, 'facebook_url')->textInput(['placeholder' => 'enter facebook link of the site']); ?>
    </div>

    <div class="col">    
      <?= $form->field($model, 'linkedin_url')->textInput(['placeholder' => 'enter linkedin link of the site']); ?>
    </div>
</div>

<div class="row">
    <div class="col">
       <?= $form->field($model, 'insta_url')->textInput(['placeholder' => 'enter instagram link of the site']); ?>
    </div>

    <div class="col">    
    <?= $form->field($model, 'logo')->fileInput(); ?>
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
    




