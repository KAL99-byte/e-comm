
<?php

use yii\helpers\html;


$this->title = ' Product Category Management';
$this->params['breadcrumbs'][] = $this->title;
?>
 <p align='right'>
    <a href="/control/categories/create" class="btn btn-sm btn-primary">+Add</a>
  </p>
<div class="container">
<div class="card">
<div class="card-body">
  <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Photo</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->name; ?></td>
        <td>
        <?= Html::img('@web/uploads/imgs/'. $field->photo, ['alt' => 'My logo','width'=>'50','height'=>'50','onclick' => 'window.open(this.src)']) ?>
        </td>
       
        <td>
<?= html::a("view",['/control/categories/view','uid'=>$field->cid],['class'=>'badge badge-primary  fa fa-eye']); ?>|
 <?= html::a("Edit",['/control/categories/edit','uid'=>$field->cid],['class'=>'   badge badge-success  fa fa-pencil']); ?>|
<?= html::a("Delete",['/control/categories/del','uid'=>$field->cid],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
       
    </tr>
   
    <?php }?>
  </tbody>
  
  











  </tbody>
 
</table>
</div>
</div>
</div>
</div>


