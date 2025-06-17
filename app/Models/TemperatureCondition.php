<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemperatureCondition extends Model
{
    use SoftDeletes;
    use LogTrait;
}
