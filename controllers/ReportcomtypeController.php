<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //สร้างการเชื่อมต่อ
        $conn=\yii::$app->db;
        //คำสั่งsql
        $sql='select * from com_type';
        //สร้างquery
        $cmd=$conn->createCommand($sql);
        //runquery
        $data=$cmd->queryAll();
           
        return $this->render('index',['data'=>$data]);
    }
}
