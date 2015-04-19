<?php

/*
 * user_info_table migration file
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/10/2015
 */

class Migration_1428642861 extends \Core\Migration
{

    public function up()
    {
        $this->createTable('user_info', array(
            'user_info_id' => array('type' => 'int', 'unsigned' => true, 'primary' => true, 'ai' => true),
            'city' => array('type' => 'varchar', 'length' => 20, 'null' => true),
            'birthday' => array('type' => 'datetime', 'null' => true),
        ));
    }

    public function down()
    {
        $this->dropTable('user_info');
    }
}