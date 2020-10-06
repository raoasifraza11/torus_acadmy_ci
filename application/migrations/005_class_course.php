<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_class_course extends CI_Migration {

    /**
     * Create table.
     */
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
			'class_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
            'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
            ),
			'tag' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'description' => array(
				'type' => 'text',
				'default' => NULL,
			),
			'price' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),

            'created_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'updated_at' =>array (
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'deleted_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
        ));

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('class_course');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('class_course');
    }

}
