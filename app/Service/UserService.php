<?php

/**
 * Created By PhpStorm
 * User: trungphuna
 * Date: 4/4/24
 * Time: 3:44 PM
 */

namespace App\Service;

use App\Core\ConstantGlobal;
use App\Core\Model\ModelSqlService;
use App\Models\User;


class UserService extends ModelSqlService
{

    public static function insert($data = [])
    {
        $user = User::create($data);
        return $user;
    }

    public static function findByEmail($email)
    {
        $user = User::where('email', $email)->first();
        return $user;
    }

}
