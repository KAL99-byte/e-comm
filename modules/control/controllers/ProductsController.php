<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Product;
use yii\widgets\ActiveForm;
use app\models\UploadImageForm;


class ProductsController extends Controller
{
  public $layout= "admin_main";

  public function actionCreate()
  {
      $model = new Product();
      
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->photo = UploadedFile::getInstance($model, 'photo');
          if ($model->save()) {
              if ($model->photo) {
                  $photo = time() . '.' . $model->photo->extension;
                  $model->photo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $photo));
                  Yii::$app->db->createCommand("UPDATE products SET photo ='$photo' WHERE pid ='$model->pid'")->execute();
              }
              
              Yii::$app->session->setFlash('success', "Product added Successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to Add Product');
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
      $user=Product::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Product::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Product::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Product changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Product::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Product deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Product not found');
  }  
}
