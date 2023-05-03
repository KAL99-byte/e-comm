<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Brand;
use yii\widgets\ActiveForm;

class BrandsController extends Controller
{
  public $layout= "admin_main";
  public function actionCreate()
  {
      $model = new Brand();
      
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->logo = UploadedFile::getInstance($model, 'logo');
          if ($model->save()) {
              if ($model->logo) {
                  $logo = time() . '.' . $model->logo->extension;
                  $model->logo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $logo));
                  Yii::$app->db->createCommand("UPDATE brands SET logo ='$logo' WHERE bid ='$model->bid'")->execute();
              }
              
              Yii::$app->session->setFlash('success', "Brand Added successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to Add Brand');
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
      $user=Brand::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Brand::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Brand::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Brand information  changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Brand::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Brand deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Brand information not found');
  }




  
}
