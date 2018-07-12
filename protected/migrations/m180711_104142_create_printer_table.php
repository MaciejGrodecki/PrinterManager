<?php

class m180711_104142_create_printer_table extends CDbMigration
{
	public function safeUp()
	{
            $this->createTable('tbl_printer', array(
                'id' => 'pk',
                'name' => 'string NOT NULL',
                'inventoryNumber' => 'string NOT NULL',
                'room_id' => 'integer NOT NULL'
            ));
            
            $this->addForeignKey('FK_printer_room', 
                    'tbl_printer', 'room_id', 'tbl_room', 'id', 'NO ACTION', 'NO ACTION');
	}
        
        
        

	public function safeDown()
	{
            $this->dropTable('tbl_printer');
	}
	
}