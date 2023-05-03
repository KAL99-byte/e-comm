    <?php
use yii\helpers\html;
use app\models\Homephoto;

$offers =Homephoto::find()->where(['category'=>'special_offer'])->all();
?>
    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
        <?php foreach ($offers as $offer): ?>
            <div class="col-md-6">
         
                <div class="product-offer mb-30" style="height: 300px;">
                  
                    <?= Html::img('@web/uploads/imgs/'.$offer->photo, ['class' => 'img-fluid', 'alt' => '']) ?>
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?= $offer->description?></h6>
                        <h3 class="text-white mb-3"><?= $offer->title?></h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
        </div>
            <?php endforeach ?>
        </div>
     
    </div>
    <!-- Offer End -->