
<?php

use yii\helpers\html;


$this->title = 'Site Information Management';
$this->params['breadcrumbs'][] = $this->title;
?>
 <p align='right'>
    <a href="/control/infosites/create" class="btn btn-sm btn-primary">+Add</a>
  </p>
<div class="container">
<div class="card">
<div class="card-body">
  <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">About</th>
      <th scope="col">Logo</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Twitter Link</th>
      <th scope="col">Linkedin Link</th>
      <th scope="col">Facebook Link</th>
      <th scope="col">Instagram Link</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->name; ?></td>
        <td><?= $field->about; ?></td>
        <td>

<?= Html::img('@web/uploads/imgs/'. $field->logo, ['alt' => 'My logo','width'=>'50','height'=>'50','onclick' => 'window.open(this.src)']) ?>
</td>
        <td><?= $field->address; ?></td>
        <td><?= $field->email; ?></td>
        <td><?= $field->phone; ?></td>
        <td><?= $field->twitter_url; ?></td>
        <td><?= $field->linkedin_url; ?></td>
        <td><?= $field->facebook_url; ?></td>
        <td><?= $field->insta_url; ?></td>
     
    
      
        
        <td>
<?= html::a("view",['/control/infosites/view','uid'=>$field->inid],['class'=>'badge badge-primary  fa fa-eye']); ?>|
 <?= html::a("Edit",['/control/infosites/edit','uid'=>$field->inid],['class'=>'   badge badge-success  fa fa-pencil']); ?>|
<?= html::a("Delete",['/control/infosites/del','uid'=>$field->inid],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
       
    </tr>
   
    <?php }?>
  </tbody>
  
  











  </tbody>
 
</table>
</div>
</div>
</div>
</div>


