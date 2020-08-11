<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_school_user_details extends CI_Migration {

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
            'user_id' => array(
                'type' => 'BIGINT',
            ),
			'school_role_id' => array(
				'type' => 'BIGINT',
			),
            'first_name' =>array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => NULL,
            ),
			'last_name' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
            'school_name' =>array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => NULL,
            ),
			'certification_name' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'verification_number' =>array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				'default' => NULL,
			),
			'phone_number' =>array(
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
			'school_first_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'school_second_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'state' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
			'postal_code' => array(
				'type' => 'INT',
				'constraint' => 255,
				'default' => NULL,
			),
            'rating' =>array (
                'type' => 'BIGINT',
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
        $this->dbforge->create_table('school_user_details');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('school_user_details');
    }

}
