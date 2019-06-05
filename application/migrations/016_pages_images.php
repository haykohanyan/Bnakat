<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_pages_images extends CI_Migration {

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
			'page_id' => array(
			     'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('pages_images');
	}

	public function down()
	{
		$this->dbforge->drop_table('pages_images');
	}
}