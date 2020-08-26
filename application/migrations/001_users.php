<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_users extends CI_Migration {

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
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 255,
            ),
            'token' => array(
                'type' => 'VARCHAR',
                'constraint' => 500,
                'default' => NULL
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
			'country' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'phone' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'gender' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'city' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'zip_code' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'dob' =>array(
				'type' => 'DATE',
			),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
				'default' => NULL,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
				'default' => NULL,
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            ),
            'is_verified' => array(
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
        $this->dbforge->create_table('users');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('users');
    }

}
