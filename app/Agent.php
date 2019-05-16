<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $username;

    public static function GetAgentByUsername($username) {
        $usernames = array('CM-George','CM-John','CM-Maria');

        if(!in_array(($username), $usernames)) {
            return false;
        }

        return true;
    }
}
