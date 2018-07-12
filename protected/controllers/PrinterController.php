<?php

class PrinterController extends BaseController
{
    
    
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
    
    public function actionView($id)
    {
        $model = $this->getModel($id, 'Printer');
        
        $this->render('view', array(
            'model'=>$model
        ));
    }
    
    public function actionDelete($id)
    {
        $model = $this->getModel($id, 'Printer');
        $model->delete();
        
        if(!isset($_GET['ajax']))
        {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
        }
    }
    
    public function actionUpdate($id)
    {
        $model = $this->getModel($id, 'Printer');
        
        if(isset($_POST['Printer']))
        {
            $model->attributes=$_POST['Printer'];
            if($model->save())
            {
                $this->redirect(array('view', 'id'=>$model->id));
            }
        }
        
        $this->render('edit', array('model'=>$model));
    }
}

