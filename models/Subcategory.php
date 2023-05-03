<?php

namespace app\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

 class Subcategory extends ActiveRecord{

    public static function tableName()
    {
        return 'product_sub_categories';
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
 
            [['name','cid'],'required'],
            [['photo'], 'image', 'extensions' => 'jpg, png'],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }



     public function attributeLabels()
     {
         return [
             'name'=>'SubCategory Name',
            //  'name'=>'Category Name',
             'photo'=>'SubCategory Photo'
          
            
             
         ];
     }


public static function getProductCategoryOptions(){
    
$dp=Category::find()->all();
$CategoryData=ArrayHelper::map($dp,'cid','name');
return $CategoryData;
}




   }
   
   

   


