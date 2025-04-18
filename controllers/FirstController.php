<?php


namespace app\controllers;
use yii\web\Controller;


class FirstController extends Controller
{
   public function actionIndex(){
       echo "Index File";die;
   }
   
   public function actionTest(){
        $this->layout = false;
       return $this->render('test');
   }
  
   public function actionDemoFirst(){
       echo "Demo First";die;
   }


   public function actionDemo_second(){
       echo "Demo Second";die;
   }
  
}