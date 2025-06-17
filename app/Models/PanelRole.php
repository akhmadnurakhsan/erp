<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PanelRole extends Model
{
    use SoftDeletes, LogTrait;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
