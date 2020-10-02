<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_bank_details extends CI_Migration {

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
				'unsigned' => TRUE,
			),
			'ibn' =>array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'branch_code' =>array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
			),
			'title' =>array(
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
        $this->dbforge->create_table('bank_details');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('bank_details');
    }

}
