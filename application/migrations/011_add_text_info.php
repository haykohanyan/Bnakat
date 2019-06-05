<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_text_info extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				
			),
			'page_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				
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
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('text_info');
	}

	public function down()
	{
		$this->dbforge->drop_table('text_info');
	}
}