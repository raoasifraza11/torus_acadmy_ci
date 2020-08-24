<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_personal_Info extends CI_Migration {

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
			'parent_name' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			),
			'parent_mobile' =>array(
				'type' => 'BIGINT',
				'default' => NULL,
			),
			'registration_date' =>array(
				'type' => 'DATE',
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

        ));

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('personal_Info');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('personal_Info');
    }

}
