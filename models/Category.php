<?php

namespace app\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

 class Category extends ActiveRecord{

    public static function tableName()
    {
        return 'product_categories';
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
 
            [['name','photo'],'required'],
            [['photo'], 'image', 'extensions' => 'jpg, png'],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }



     public function attributeLabels()
     {
         return [
             'name'=>'Category Name',
             'photo'=>'Category Photo'
          
            
             
         ];
     }


   }
   
   

   


