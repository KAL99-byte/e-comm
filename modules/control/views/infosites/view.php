<?php
use yii\helpers\Html;
?>
<p align='left'>
<a href="/control/infosites/index" class="btn btn-sm btn-primary">Back</a>
</p>
<div class="card">
    
<div class="card-body">
    <div class="form-row">
    <div class="col">
    <label ><b>Site Name:</b></label>
     <?=   $user->name; ?>

    </div>
    <div class="col">
    <label ><b>About:</b></label>
   <?= $user->about; ?>
    </div>
  </div>
  <div class="form-row">
    <div class="col">
    <label ><b>Email:</b></label>
     <?=   $user->email; ?>

    </div>
    <div class="col">
    <label ><b>Phone:</b></label>
   <?= $user->phone; ?>
    </div>
  </div>

<div class="form-row">
    <div class="col">
    <label ><b>Twitter Link:</b></label>
     <?=   $user->twitter_url; ?>

    </div>
    <div class="col">
    <label ><b>Linkedin Link:</b></label>
   <?= $user->linkedin_url; ?>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label ><b>Facebook Link:</b></label>
     <?=   $user->facebook_url; ?>

    </div>
    <div class="col">
    <label ><b>Insta Link:</b></label>
   <?= $user->insta_url; ?>
    </div>
  </div>
  <div class="form-row">
    
    <div class="col">
    <label ><b>Address:</b></label>
   <?= $user->address; ?>
    </div>
  </div>

  <div class="form-row">

<div class="col">
    <label ><b>Logo:</b></label>
     <?= Html::img('@web/uploads/imgs/'. $user->logo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>

    </div>
  </div>



</div>
</div>
</div>

