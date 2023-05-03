<?php

namespace app\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

 class Brand extends ActiveRecord{

    public static function tableName()
    {
        return 'brands';
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
 
            [['name','logo'  ,'description'],'required'],
            [['logo'], 'image', 'extensions' => 'jpg, png'],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }



     public function attributeLabels()
     {
         return [
             'name'=>'Brand Name',
             'logo'=>'Brand Logo',
             'description'=>'Brand Description',
           
            
             
         ];
     }


   }
   
   

   


