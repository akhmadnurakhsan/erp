<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function statusStatusGroups()
    {
        return $this->hasMany(StatusStatusGroup::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
}
