<?php
use yii\helpers\Html;
?>
<p align='left'>
<a href="/control/products/index" class="btn btn-sm btn-primary">Back</a>
</p>
<div class="card">
    
<div class="card-body">
    <div class="form-row">
    <div class="col">
    <label for="name"><b>Product Name:</b></label>
     <?=   $user->name; ?>

    </div>
    <div class="col">
    <label for="description"><b>Product Description:</b></label>
   <?= $user->description; ?>
    </div>
  </div>




  <div class="form-row">
    <div class="col">
    <label for="color"><b>Product Specialization:</b></label>
    <?=   $user->specialization; ?>

    </div>
    <div class="col">
    <label for="size"><b>Product Price:</b></label>
    <?= $user->price; ?>
    </div>
  </div>







  <div class="form-row">
    <div class="col">
    <label for="color"><b>Color:</b></label>
    <?=   $user->color; ?>

    </div>
    <div class="col">
    <label for="size"><b>Size:</b></label>
    <?= $user->size; ?>
    </div>
  </div>



  <div class="form-row">
    <div class="col">
    <label for="color"><b>Product Rate:</b></label>
    <?=   $user->rate; ?>

    </div>
  </div>

  <div class="form-row">
  <div class="col">
  <label for="color"><b>Product Photo:</b></label>
    <?= Html::img('@web/uploads/imgs/'. $user->photo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>

  </div>
  </div>

  
 
</div>
</div>
</div>

