<?php


namespace app\controllers;
use yii\web\Controller;


class FirstTestController extends Controller
{
   public function actionIndex(){
       echo "First-Test Index File";die;
   }
  
   public function actionDemoFirst(){
       echo "First-Test Demo First";die;
   }


   public function actionDemo_second(){
       echo "First-Test Demo Second";die;
   }
  
}