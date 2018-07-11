<?php
class RoomController extends Controller
{
    public $layout = '//layouts/column2';
    
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionAdd()
    {
        $model = new Room;
        
        if(isset($_POST['Room']))
        {
            $model->attributes=$_POST['Room'];
            if($model->save())
            {
                $this->redirect(array('index'));
            }
        }
        
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
        
        if(isset($_POST['Room']))
        {
            $model->attributes=$_POST['Room'];
            if($model->save())
            {
                $this->redirect(array('view', 'id'=>$model->id));
            }
        }
        
        $this->render('edit', array('model'=>$model));
    }
    
    
    private function getModel($id)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('id',$id);
        $model = Room::model()->find($criteria);
        
        return $model;
    }
    

}

