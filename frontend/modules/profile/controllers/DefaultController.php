<?php 

namespace app\modules\profile\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
	public function actionIndex($message = 'default'){
		
		return $this->render('view', ['message' => $message]);   
	}

}
