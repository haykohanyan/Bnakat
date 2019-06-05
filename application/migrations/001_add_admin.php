<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_admin extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'surname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => FALSE,
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('admin');
	}

	public function down()
	{
		$this->dbforge->drop_table('admin');
	}
}