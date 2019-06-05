<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_principles extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => FALSE,
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
				'null' => False,
			),

			'info-am' => array(
				'type' => 'TEXT',
				'null' => FALSE,
			),
			'info-ru' => array(
				'type' => 'TEXT',
				'null' => FALSE,
			),
			'info-en' => array(
				'type' => 'TEXT',
				'null' => FALSE,
			)
			
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('principles');
	}

	public function down()
	{
		$this->dbforge->drop_table('principles');
	}
}