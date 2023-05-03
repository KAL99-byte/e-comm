<?php

use yii\helpers\html;

$this->title = ' Home Photo Management';
$this->params['breadcrumbs'][] = $this->title;
?>

 <p align='right'>
    <a href="/control/homephotos/create" class="btn btn-sm btn-primary">+Add</a>
  </p>

<div class="container">
<div class="card">
<div class="card-body">
  <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category </th>
      <th scope="col"> Photo</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->title; ?></td>
        <td><?= $field->description; ?></td>
        <td><?= $field->category; ?></td>
        <td> 
        <?= Html::img('@web/uploads/imgs/'. $field->photo, ['alt' => 'My logo','width'=>'100','height'=>'50','onclick' => 'window.open(this.src)']) ?>
        </td>
<td>
<?= html::a("view",['/control/homephotos/view','uid'=>$field->hid],['class'=>'badge badge-primary  fa fa-eye']); ?>|
<?= html::a("Edit",['/control/homephotos/edit','uid'=>$field->hid],['class'=>'   badge badge-success  fa fa-pencil']); ?>|
<?= html::a("Delete",['/control/homephotos/del','uid'=>$field->hid],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
       
    </tr>
   
    <?php }?>
  </tbody>
 
</table>
</div>
</div>
</div>
</div>


