<?php
/**
 * Created by PhpStorm.
 * Author: Mussawar Ahamd
 * Date: 9/18/2019
 */
class Migration_teacher_academic_details extends CI_Migration {

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
            'degree' =>array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => NULL,
            ),
			'year' =>array(
				'type' => 'VARCHAR',
				'constraint' => 100,
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
        $this->dbforge->create_table('teacher_academic_details');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('teacher_academic_details');
    }

}
