<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Infosite;
use yii\widgets\ActiveForm;

class InfositesController extends Controller
{
  public $layout= "admin_main";
  public function actionCreate()
  {
      $model = new Infosite();
      
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->logo = UploadedFile::getInstance($model, 'logo');
          if ($model->save()) {
              if ($model->logo) {
                  $logo = time() . '.' . $model->logo->extension;
                  $model->logo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $logo));
                  Yii::$app->db->createCommand("UPDATE site_informations SET logo ='$logo' WHERE inid ='$model->inid'")->execute();
              }
              
              Yii::$app->session->setFlash('success', "Site Information added successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to Add Site Information');
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
      $user=Infosite::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Infosite::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Infosite::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Site information  changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Infosite::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Site information deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Site information not found');
  }




  
}
