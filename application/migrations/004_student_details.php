<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_student_details extends CI_Migration {

    /**
     * Create table.
     */
    public function up() {
        $this->dbforge->add_field(array(
        	//todo:tab 1 bio
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'BIGINT',
            ),
            'full_name' =>array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => NULL,
            ),
            'home_language' =>array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => NULL,
            ),
			'postal_code' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'nationality' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'religion' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'dob' =>array(
				'type' => 'DATE',
			),
			'telephone' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
            'gender' =>array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => NULL,
            ),
            'first_address' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'second_address' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
			//todo:tab 2 relationship
			'national_insurance_number' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
			'g_dob' =>array(
				'type' => 'DATE',
			),
			'p_first_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'p_second_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'g_telephone' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			//todo:tab 4 authority
			'a_full_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'a_relation_to_child' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'a_telephone' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'a_mobile' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			//todo:tab 3 consents
			'emergency_treatment' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
			),
			'terms_and_conditions' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
			),
			'keep_us_informed' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
			),
			'outing' => array(
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
        $this->dbforge->create_table('student_details');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('student_details');
    }

}
