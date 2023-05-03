<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Homephoto;
use yii\widgets\ActiveForm;

class HomephotosController extends Controller
{
  public $layout= "admin_main";
  
  public function actionCreate()
  {
      $model = new Homephoto();
      
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->photo = UploadedFile::getInstance($model, 'photo');
          if ($model->save()) {
              if ($model->photo) {
                  $photo = time() . '.' . $model->photo->extension;
                  $model->photo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $photo));
                  Yii::$app->db->createCommand("UPDATE home_photos SET photo ='$photo' WHERE hid ='$model->hid'")->execute();
              }
              
              Yii::$app->session->setFlash('success', "Home Photo Added Successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to add Home Photo ');
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
      $user=Homephoto::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Homephoto::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Homephoto::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Home Photo details  changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Homephoto::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Home Photo details deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Home Photo details not found');
  }




  
}
