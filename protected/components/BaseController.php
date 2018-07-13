<?php

class BaseController extends Controller
{
    public $layout = '//layouts/column2';
    
    protected function getModel($id)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('id',$id);
        $modelName = $this->getModelName();
        $model = $modelName::model()->find($criteria);
        
        return $model;
    }
    
    protected function add($model)
    {
        if(Yii::app()->request->getPost($this->getModelName()) !== null)
        {
            $model->attributes=$_POST[$this->getModelName()];

            if($model->save())
            {
                $this->redirect(array('index'));
            }
        }
    }
    
    protected function update($model)
    {
        if(Yii::app()->request->getPost($this->getModelName()) !== null)
        {
            $model->attributes=$_POST[$this->getModelName()];

            if($model->save())
            {
                $this->redirect(array('view', 'id'=>$model->id));
            }
        }
    }
    
    private function getModelName()
    {
        return ucfirst(Yii::app()->controller->id);
    }
}


