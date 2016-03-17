<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const USER = 3;
}
