<?php

namespace app\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

 class Infosite extends ActiveRecord{

    public static function tableName()
    {
        return 'site_informations';
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
 
            [['about','name','address'  ,'email','phone','twitter_url','facebook_url','linkedin_url','insta_url'],'required'],
            ['email','email'],
            [['logo'], 'file', 'extensions' => 'png, jpg', 'maxSize' => 1024 * 1024],
            [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],
 
         ];
     }



     public function attributeLabels()
     {
         return [
             'about'=>'About',
             'name'=>'Name of Site',
             'address'=>'Site Address',
             'email'=>'Site email Address',
             'phone'=>'Site Dials',
             'twitter_url'=>'Site Twitter Link',
             'facebook_url'=>'Site Facebook Link',
             'linkedin_url'=>'Site Linkedin Link',
             'insta_url'=>'Site Instagram Link',
            
             
         ];
     }


   }
   
   

   


