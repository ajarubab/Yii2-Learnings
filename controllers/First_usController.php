<?php


namespace app\controllers;
use yii\web\Controller;


class First_usController extends Controller
{
   public function actionIndex(){
       echo "First_underscore Index File";die;
   }
  
   public function actionDemoFirst(){
       echo "First_underscore Demo First";die;
   }


   public function actionDemo_second(){
       echo "First_underscore Demo Second";die;
   }
  
}