<?php

class m180710_083531_create_tbl_room extends CDbMigration
{
	

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->createTable('tbl_room', array(
                'id'=>'pk',
                'name'=>'string NOT NULL'
            ));
	}

	public function safeDown()
	{
            $this->dropTable('tbl_room');
	}
	
}