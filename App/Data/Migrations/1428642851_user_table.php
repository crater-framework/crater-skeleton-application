<?php
/*
 * user_table migration file
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/10/2015
 */
class Migration_1428642851 extends \Core\Migration {

    public function up() {
        $this->createTable('user', array(
            'user_id' => array('type' => 'int', 'unsigned' => true, 'primary' => true, 'ai' => true),
            'first_name' => array('type' => 'varchar', 'length' => 60, 'null' => true),
            'last_name' => array('type' => 'varchar', 'length' => 60, 'null' => true),
            'email' => array('type' => 'varchar', 'length' => 40, 'null' => false),
        ));
    }

    public function down() {
        $this->dropTable('user');
    }
}