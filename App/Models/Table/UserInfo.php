<?php
/**
 * UserInfo table model
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/09/15
 */

namespace Models\Table;
use Core\Orm\TableGateway;

class UserInfo extends TableGateway {
    protected $_name = 'user_info';
    protected $_primary = 'user_info_id';
    protected $_rowClass = 'Models\Row\UserInfo';

    protected $_belongs_to = array(
        'User' => array(
            'refTableClass' => 'Models\Table\User',
        )
    );
}