<?php

/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_user_student extends CI_Migration
{

    /**
     * Create table.
     */
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
        
            'phone' => array(
                'type' => 'BIGINT',
                'constraint' => 100,
                'default' => NULL,
            ),
            'dob' => array(
                'type' => 'DATE',
                'default' => NULL,
            ),
            
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => NULL,
            ),
            'zip_code' => array(
                'type' => 'BIGINT',
                'default' => NULL,
            
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'updated_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
        ));

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('user_student');
    }

    /**
     * Drop table.
     */
    public function down()
    {
        $this->dbforge->drop_table('user_student');
    }
}
