<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        
        //สร้างการเชื่อมต่อ
        $conn=\yii::$app->db;
        
        
        //คำสั่งsql
        $sql='select * from com where com_type_id=:id';
        
        
        //สร้างquery
        $cmd=$conn->createCommand($sql);
        
        //ใส่ค่าให้กับ parameter
        $cmd->bindValue(':id',$id);
        
        //runquery
        $data=$cmd->queryAll();
           
        return $this->render('index',['data'=>$data]);
    }

}
