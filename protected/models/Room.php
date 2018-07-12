<?php

class Room extends CActiveRecord
{
    public static function model($className = __CLASS__) 
    {
        return parent::model($className);
    }
    
    public function tableName() 
    {
        return 'tbl_room';
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'name'=>'Nazwa'
        );
    }
    
    public function rules()
    {
        return array(
            array('name', 'required')
        );
    }
    
    
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name,true);
        
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria
        ));
    }
    
}