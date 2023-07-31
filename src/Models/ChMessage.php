<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Chatify\Traits\UUID;

class ChMessage extends Model
{
    use UUID;

    protected $primaryKey = 'id';
}
