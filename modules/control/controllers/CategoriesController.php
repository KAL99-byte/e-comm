<?php

namespace app\modules\control\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Category;
use yii\widgets\ActiveForm;

class CategoriesController extends Controller
{
  public $layout= "admin_main";
  // public function actionCreate(){
  //   // $this->layout="admin_main";
  //   $model = new Category();
  //   if($model->load(Yii::$app->request->post()) && $model->validate())
  //   {
  //     $model->save();
  //     Yii::$app->session->setFlash('success','Category added successfully');
  //    return $this->redirect('index');
  //   }
  //   return $this->render('create',['model'=>$model]);

  // }
  
  public function actionCreate()
  {
      $model = new Category();
      $model->status = "active";

      if ($model->load(Yii::$app->request->post())) {
          $model->photo = UploadedFile::getInstance($model, 'photo');
          if ($model->save()) {
              if ($model->photo) {
                  $photo =   time() . '.' . $model->photo->extension;
                  $model->photo->saveAs(Yii::getAlias('@webroot/uploads/imgs/' . $photo));
                  Yii::$app->db->createCommand("UPDATE product_categories SET photo ='$photo' WHERE cid ='$model->cid'")->execute();
              }
             
              Yii::$app->session->setFlash('success', "Product Category Added successful");
              return $this->redirect(['index']);
          } else {
              Yii::$app->session->setFlash('danger', 'Failed to Add Product Category');
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
      $user=Category::find()->all();
    
      return $this->render('index',['user'=>$user]);

  }


  public function actionView($uid)
  {
   
      $user=Category::findOne($uid);
   
return $this->render('view',['user'=>$user]);
  }



public function actionEdit($uid)



  {
$model=Category::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
  $model->save();
  Yii::$app->session->setFlash('success','Category  changed successfully');

  return $this->redirect('index');

}

return $this->render('edit',['model'=>$model]);

  }
  public function actionDel($uid){
      $user=Category::findOne($uid);
      if($user){
          $user->delete();
          
          Yii::$app->session->setFlash('success','Category deleted succesful');
        
          return  $this->redirect('index');
      }
      Yii::$app->session->setFlash('success','Category not found');
  }




  
}
