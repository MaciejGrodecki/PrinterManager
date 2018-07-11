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
                $this->redirect(array('index.php'));
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
        $criteria = new CDbCriteria();
        $criteria->compare('id', $id);
        
        $model = Room::model()->find($criteria);
        
        $this->render('view', array(
            'model'=>$model
        ));
    }
    

}

