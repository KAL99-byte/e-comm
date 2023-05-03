<?php

namespace app\modules\control\controllers;

use yii\web\Controller;




/**
 * Default controller for the `control` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout= "admin_main";

    public function actionIndex()
    {
    //    $this->layout="admin_main";
        return $this->render('index');
    }
      
}
