<?php
class RoomController extends BaseController
{
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionAdd()
    {
        $model = new Room;
        
        $this->add($model);
        
        $this->render('add', array('model'=>$model));
    }
    
    public function actionManage()
    {
        $model = new Room('search');
        $model->unsetAttributes();
        
        if(isset($_GET['Room']))
        {
            $model->attributes=$_GET['Room'];
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
        
        if(!isset($_GET['ajax']))
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