<?php

class BaseController extends Controller
{
    protected function getModel($id, $modelName)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('id',$id);
        $model = $modelName::model()->find($criteria);
        
        return $model;
    }
}

