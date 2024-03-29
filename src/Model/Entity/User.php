<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    // Make all fields mass assignable except for primary key field "user_id".
    protected $_accessible = [
        '*' => true,
        'user_id' => false
        

    ];


    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

}