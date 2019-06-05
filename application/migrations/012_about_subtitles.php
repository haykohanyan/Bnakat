<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_about_subtitles extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				
			),
			'subtitle-am' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => False,
			),
			'subtitle-ru' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => False,
			),
			'subtitle-en' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => False,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('about_subtitles');
	}

	public function down()
	{
		$this->dbforge->drop_table('about_subtitles');
	}
}
