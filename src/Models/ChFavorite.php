<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Chatify\Traits\UUID;

class ChFavorite extends Model
{
    use UUID;

    protected $primaryKey = 'id';
}
