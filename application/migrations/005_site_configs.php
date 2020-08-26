<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_site_configs extends CI_Migration {

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
            'entity' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => NULL,
            ),
			'value' => array(
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
        $this->dbforge->create_table('site_configs');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('site_configs');
    }

}
