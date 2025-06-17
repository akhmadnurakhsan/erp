<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessPartnerCategory extends Model
{

    use SoftDeletes;
    use LogTrait;

    public function titleGroup()
    {
        return $this->belongsTo(TitleGroup::class);
    }
}
