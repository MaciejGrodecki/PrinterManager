<?php

class PrinterController extends Controller
{
    public $layout = '//layouts/column2';
    
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionAdd()
    {
        $model = new Printer;
        
        if(isset($_POST['Printer']))
        {
            $model->attributes=$_POST['Printer'];
            var_dump($model);
            if($model->save())
            {
                $this->redirect(array('index'));
            }
        }
        
        $this->render('add', array('model'=>$model));
    }
    
    public function actionManage()
    {
        $model = new Printer('search');
        $model->unsetAttributes();
        
        if(isset($_GET['Printer']))
        {
            $model->attributes=$_GET['Printer'];
        }
        
        $this->render('manage', array('model'=>$model));
    }
}

