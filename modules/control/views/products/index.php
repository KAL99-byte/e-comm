
<?php

use yii\helpers\html;

use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\models\Subcategory;
// use yii\bootstrap4\Html;
// use yii\widgets\ActiveForm;

// use yii\helpers\Html;

$this->title = 'Product Management';
$this->params['breadcrumbs'][] = $this->title;
?>

 <p align='right'>
    <a href="/control/products/create" class="btn btn-sm btn-primary">+Add</a>
  </p>
<div class="container">
<div class="card">
<div class="card-body">
  <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Specialization</th>
      <th scope="col">Product Price</th>
      <th scope="col">Color</th>
      <th scope="col">Size</th>
      <th scope="col">Rate</th>
      <th scope="col">Photo</th>
     
 
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
  

    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->name; ?></td>
        <td><?= $field->description; ?></td>
        <td><?= $field->specialization; ?></td>
        <td><?= $field->price; ?></td>
        <td><?= $field->color; ?></td>
        <td><?= $field->size; ?></td>
        <td><?= $field->rate; ?></td>
        <td>
        <?= Html::img('@web/uploads/imgs/'. $field->photo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>
        </td>
   
       
        <td>
<?= html::a("view",['/control/products/view','uid'=>$field->pid],['class'=>'badge badge-primary  fa fa-eye']); ?>|
 <?= html::a("Edit",['/control/products/edit','uid'=>$field->pid],['class'=>'   badge badge-success  fa fa-pencil']); ?>|
<?= html::a("Delete",['/control/products/del','uid'=>$field->pid],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
       
    </tr>
  
    <?php }?>
  </tbody>
  
  











  </tbody>
 
</table>
</div>
</div>
</div>
</div>


