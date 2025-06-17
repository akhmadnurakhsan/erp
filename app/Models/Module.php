<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function subModules()
    {
        return $this->hasMany(SubModule::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }
}
