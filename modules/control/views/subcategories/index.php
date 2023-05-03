
<?php

use yii\helpers\html;


$this->title = 'Sub Category Management';
$this->params['breadcrumbs'][] = $this->title;
?>
 <p align='right'>
    <a href="/control/subcategories/create" class="btn btn-sm btn-primary">+Add</a>
  </p>
<div class="container">
<div class="card">
<div class="card-body">
  <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SubCategory Name</th>
      <th scope="col">SubCategory Photo</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->name; ?></td>
        <td>
        <?= Html::img('@web/uploads/imgs/'. $field->photo, ['alt' => 'My logo','width'=>'100','height'=>'100','onclick' => 'window.open(this.src)']) ?>
        </td>
       
        <td>
<?= html::a("view",['/control/subcategories/view','uid'=>$field->scid],['class'=>'badge badge-primary  fa fa-eye']); ?>|
 <?= html::a("Edit",['/control/subcategories/edit','uid'=>$field->scid],['class'=>'   badge badge-success  fa fa-pencil']); ?>|
<?= html::a("Delete",['/control/subcategories/del','uid'=>$field->scid],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
       
    </tr>
   
    <?php }?>
  </tbody>
  
  











  </tbody>
 
</table>
</div>
</div>
</div>
</div>


