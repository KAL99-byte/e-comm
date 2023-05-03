<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Subcategory;
use yii\widgets\ActiveForm;

class SubcategoriesController extends Controller
{
  public $layout= "admin_main";

  public function actionCreate()
  {
      $model = new Subcategory();
      
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->photo = UploadedFile::getInstance($model, 'photo');
          if ($model->save()) {
              if ($model->photo) {
                  $photo = time() . '.' . $model->photo->extension;
                  $model->photo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $photo));           
                  Yii::$app->db->createCommand("UPDATE product_sub_categories SET photo ='$photo' WHERE scid ='$model->scid'")->execute();
              }
              
              Yii::$app->session->setFlash('success', "Product Sub Category Added Successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to Add Product Sub Category');
              return $this->render('create', [
                  'model' => $model,
              ]);
          }
      }

      return $this->render('create', [
          'model' => $model,
      ]);
  }

 
  
  public function actionIndex()
  {
      $user=Subcategory::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Subcategory::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Subcategory::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Sub Category  changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Subcategory::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Sub Category deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Sub Category not found');
  }




  
}
