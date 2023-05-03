<?php
use yii\helpers\Html;
?>
<p align='left'>
<a href="/control/homephotos/index " class="btn btn-sm btn-primary">Back</a>
</p>
<div class="card">
    
<div class="card-body">
    <div class="form-row">
    <div class="col">
    <label ><b>Title:</b></label>
     <?=   $user->title; ?>

    </div>
    <div class="col">
    <label ><b>Description:</b></label>
   <?= $user->description; ?>
    </div>
  </div>


    <div class="form-row">
    <div class="col">
    <label ><b>Category Name:</b></label>
     <?=   $user->category; ?>
    </div>
   
  </div>
  <div class="form-row">

  <div class="col">
    <label ><b> Photo:</b></label>
   <?= Html::img('@web/uploads/imgs/'. $user->photo, ['alt' => 'My logo','width'=>'100','height'=>'50','onclick' => 'window.open(this.src)']) ?>
    </div>
  </div>

  </div>
</div>

