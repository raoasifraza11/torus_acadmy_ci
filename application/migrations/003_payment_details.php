<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_payment_details extends CI_Migration {

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
            'user_id' =>array(
                'type' => 'BIGINT',
            ),
            'ccname' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
            ),
			'ccnumber' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
            ),
            'ccmonth' =>array(
                'type' => 'INT',
            ),
			'ccyear' =>array(
                'type' => 'INT',
            ),
            'cccvv' =>array(
                'type' => 'INT',
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
        $this->dbforge->create_table('payment_details');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('payment_details');
    }

}
