<?php
class Printer extends CActiveRecord
{
    public $room_name;
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
        return 'tbl_printer';
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'name'=>'Nazwa',
            'inventoryNumber'=>'Numer inw.',
            'rooms.name' => 'Pomieszczenie'
        );
    }
    
    public function rules()
    {
        return array(
            array('name', 'required'),
            array('inventoryNumber', 'required'),
            array('room_id', 'required'),
            array('room_name', 'safe', 'on'=>'search')
        );
    }
    public function relations()
    {
        return array(
            'rooms' => array(self::BELONGS_TO, 'Room', 'room_id'),
        );
    }
    
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name);
        $criteria->compare('inventoryNumber', $this->inventoryNumber);
        $criteria->with = array('rooms');
        $criteria->compare('rooms.name', $this->room_name, true);
        
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria
        ));
    }
}


