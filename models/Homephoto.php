<?php

namespace app\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

 class Homephoto extends ActiveRecord{

    public static function tableName()
    {
        return 'home_photos';
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
 
            [['title','description'  ,'category','photo'],'required'],
            [['photo'], 'image', 'extensions' => 'jpg, png'],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }



     public function attributeLabels()
     {
         return [
             'title'=>'Home Photo Title',
             'description'=>'Home Photo Description',
             'category'=>'Home Photo Category',
             'photo'=>'Home Photo',
           
            
             
         ];
     }


   }
   
   

   


