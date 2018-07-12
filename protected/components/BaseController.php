<?php

class BaseController extends Controller
{
    public $layout = '//layouts/column2';
    
    protected function getModel($id, $modelName)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('id',$id);
        $model = $modelName::model()->find($criteria);
        
        return $model;
    }
}

