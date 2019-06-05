<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_lori_mozzarella_image_slide extends CI_Migration {

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
		    'categorie' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('lori_mozzarella_image_slide');
	}

	public function down()
	{
		$this->dbforge->drop_table('lori_mozzarella_image_slide');
	}
}