<?php
/**
 * User row model
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/09/15
 */

namespace Models\Row;
use Core\Orm\RowGateway;
class User extends RowGateway {

    public function combinedName() {
        return $this->last_name . ' ' . $this->first_name;
    }
}