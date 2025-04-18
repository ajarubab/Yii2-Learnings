<?php


namespace app\controllers;
use yii\web\Controller;


class FirstController extends Controller
{
   public function actionIndex(){
       echo "Index File";die;
   }
   
   public function actionTest(){
        // $this->layout = false;
        // return $this->render('test');
        // OR

        $res = [];
        $res['name'] = "Raja kumar Prasad";
        $res['list'] = ['Jai','Siya','Ram'];
       return $this->renderPartial('test',$res);
   }
  
   public function actionDemoFirst(){
       echo "Demo First";die;
   }


   public function actionDemo_second(){
       echo "Demo Second";die;
   }
  
}