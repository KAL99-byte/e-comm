<?php
use yii\helpers\Html;
?>
<p align='left'>
<a href="/control/subcategories/index" class="btn btn-sm btn-primary">Back</a>
</p>
<div class="card">
    
<div class="card-body">
    <div class="form-row">
    <div class="col">
    <label ><b>SubCategory Name:</b></label>
     <?=   $user->name; ?>
    </div>
  </div>

  <div class="form-row">
  <div class="col">
    <label ><b>SubCategory Photo:</b></label>
    <?= Html::img('@web/uploads/imgs/'. $user->photo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>
    </div>
  </div>
</div>
</div>

