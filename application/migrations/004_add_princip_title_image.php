<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_princip_title_image extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				
			),
			'title-am' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => False,
			),
			'title-ru' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => False,
			),
			'title-en' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => FALSE,
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('princip_title_image');
	}

	public function down()
	{
		$this->dbforge->drop_table('princip_title_image');
	}
}