<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function statusStatusGroups()
    {
        return $this->hasMany(StatusStatusGroup::class);
    }
}
