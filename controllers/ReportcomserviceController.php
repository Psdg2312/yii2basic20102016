<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
               
         //สร้างการเชื่อมต่อ
        $conn=\yii::$app->db;
        
        //คำสั่งsql
        $sql='select c.brand,s.* from com_service s 
        left join com c on c.com_id=s.com_id';
        
        
        //สร้างquery
        $cmd=$conn->createCommand($sql);
        
        //runquery
        $data=$cmd->queryAll();
           
        return $this->render('index',['data'=>$data]);
    }

}
?>