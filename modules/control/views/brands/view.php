<?php
use yii\helpers\Html;
?>
<p align='left'>
<a href="/control/brands/index" class="btn btn-sm btn-primary">Back</a>
</p>
<div class="card">
    
<div class="card-body">
    <div class="form-row">
    <div class="col">
    <label ><b>Brand Name:</b></label>
     <?=   $user->name; ?>

    </div>
    <div class="col">
    <label ><b>Brand Description:</b></label>
     <?=   $user->description; ?>
    </div>
  </div>
  <div class="form-row">
    <div class="col">
    
     <label ><b>Brand Logo:</b></label>
    <?= Html::img('@web/uploads/imgs/'. $user->logo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>
    </div>
    





</div>
</div>
</div>

