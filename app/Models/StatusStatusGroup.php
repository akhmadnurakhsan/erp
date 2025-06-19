<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusStatusGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    protected $table = 'status_status_groups';

    public function statusGroups()
    {
        return $this->belongsToMany(StatusGroup::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }

    public function statusGroup()
    {
        return $this->belongsTo(StatusGroup::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
