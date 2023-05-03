<?php

namespace app\models;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

 class Product extends ActiveRecord{

    public static function tableName()
    {
        return 'products';
    }


    public function behaviors()
    {
         return [
             BlameableBehavior::class,
             [
                 'class'=>TimestampBehavior::class,
                 'value'=>new Expression('NOW()')
             ],
         ];
     }
     
     public function rules()
     {
         return[
 
            [['name','price','description'  ,'specialization','color','size','photo'],'required'],
            [['photo'], 'image', 'extensions' => 'jpg, png'],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }


     public function attributeLabels()
     {
         return [
             'name'=>'Product Name',
             'price'=>'Product Price',
             'description'=>'Product Description',
             'specialization'=>'Product Specialization',
            //  'product_currency'=>'Product Currency',
             'photo'=>'Upload photo',
             'color'=>'color',
             'size'=>'size',
             'rate'=>'rate',
            
             
         ];
     }




   




public static function getProductBrandOptions(){
    $dp9=Brand::find()->all();
    $BrandData=ArrayHelper::map($dp9,'bid','name');
    return $BrandData;

    }

    public static function getProductSubCategoryOptions(){
        $dp1=Subcategory::find()->all();
        $SubcategryData=ArrayHelper::map($dp1,'scid','name');
        return $SubcategryData;
    }

    
     

   }
   
   

   


