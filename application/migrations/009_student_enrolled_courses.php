<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_student_enrolled_courses extends CI_Migration {

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
			'student_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
			'course_id' => array(
				'type' => 'BIGINT',
				'unsigned' => TRUE,
			),
			'payment_method' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'payment_status' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
			),
			'proof' => array(
				'type' => 'TINYINT',
				'constraint' => 255,
				'default' => NULL,
			),
			'admin_proof' => array(
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
        $this->dbforge->create_table('student_enrolled_courses');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('student_enrolled_courses');
    }

}
