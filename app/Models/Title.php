<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function titleTitleGroups()
    {
        return $this->hasMany(TitleTitleGroup::class);
    }
}
