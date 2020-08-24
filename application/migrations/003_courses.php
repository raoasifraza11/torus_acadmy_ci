<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_courses extends CI_Migration {

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
			'course_name' =>array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'professor_name_id' =>array(
				'type' => 'INT',
				'constraint' => 11,
				'default' => NULL,
            ),
            'number_of_students' =>array(
				'type' => 'BIGINT',
				'constraint' => 100,
				'default' => NULL,
            ),
            'course_start_date' =>array(
				'type' => 'DATE',
				'default' => NULL,
            ),
            'course_type_id' =>array(
				'type' => 'INT',
				'constraint' => 11,
				'default' => NULL,
            ),
            'course_duration' =>array(
				'type' => 'BIGINT',
				'constraint' => 100,
				'default' => NULL,
            ),
            'course_price' =>array(
				'type' => 'BIGINT',
				'constraint' => 100,
				'default' => NULL,
            ),
            'brief' =>array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
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
        // $this->dbforge->addForeignkey('course_type_id', 'course_type' , 'id');
        // $this->dbforge->add_Foreign_key('professor_id', 'professors' , 'id');

        $this->dbforge->create_table('courses');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('courses');
    }

}
