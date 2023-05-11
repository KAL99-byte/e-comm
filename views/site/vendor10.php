<?php


use yii\helpers\Html;
?>
    <!-- Vendor Start -->

    <div class="container-fluid py-5">
    
        <div class="row px-xl-5">

            <div class="col">
           
                <div class="owl-carousel vendor-carousel">
                <?php foreach($brands as $brand): ?>
                    <div class="bg-light p-4">
                     
                        <?= Html::img('@web/uploads/imgs/'.$brand->logo, [ 'alt' => '','style' => 'max-width: 100%; height: 100;']) ?>
                    </div>

               
                    <?php endforeach ?>
                </div>
               
            </div>
            
        </div>
       
    </div>
  
    <!-- Vendor End -->

    
