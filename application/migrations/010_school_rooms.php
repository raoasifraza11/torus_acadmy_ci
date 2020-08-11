<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_school_rooms extends CI_Migration {

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
			'school_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
			'session_id' => array(
				'type' => 'BIGINT',
				'default'=>0,
			),
			'teacher_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
            'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
            ),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'avatar' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'visibility' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
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
        $this->dbforge->create_table('school_rooms');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('school_rooms');
    }

}
