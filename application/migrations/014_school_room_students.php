<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_school_room_students extends CI_Migration {

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
			'room_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
			'student_id' => array(
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
        $this->dbforge->create_table('school_room_students');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('school_room_students');
    }

}
