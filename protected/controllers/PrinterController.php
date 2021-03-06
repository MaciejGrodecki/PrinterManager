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
        $this->add($model);
        $this->render('add', array('model'=>$model));
    }
    
    public function actionManage()
    {
        $model = new Printer('search');
        $model->unsetAttributes();

        if(Yii::app()->request->getQuery('Printer') !== null)
        {
            $model->attributes=$_GET['Printer'];
        }
        $this->render('manage', array('model'=>$model));
    }
    
    public function actionView($id)
    {
        $model = $this->getModel($id);
        $this->render('view', array(
            'model'=>$model
        ));
    }
    
    public function actionDelete($id)
    {
        $model = $this->getModel($id);
        $model->delete();
        
        if(Yii::app()->request->getQuery('ajax') === null)
        {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
        }
    }
    
    public function actionUpdate($id)
    {
        $model = $this->getModel($id);
        $this->update($model);
        $this->render('edit', array('model'=>$model));
    }
}

