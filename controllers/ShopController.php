<?php
namespace app\controllers;
use Yii;
use app\models\Product;
use yii\web\Controller;

class ShopController extends Controller{

    public function actionRecentProducts(){
       
       $recentproducts=Product::find()->orderBy('created_at desc')->all();

        return $this->render('recent_products',compact($recentproducts));
       
    }

}