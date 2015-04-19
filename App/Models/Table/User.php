<?php
/**
 * User table model
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/09/15
 */

namespace Models\Table;

use Core\Orm\TableGateway;

class User extends TableGateway
{
    protected $_name = 'user';
    protected $_primary = 'user_id';
    protected $_rowClass = 'Models\Row\User';

    protected $_has_one = array(
        'UserInfo' => array(
            'refTableClass' => 'Models\Table\UserInfo',
            'fkColumn' => 'user_info_id'
        )
    );
}