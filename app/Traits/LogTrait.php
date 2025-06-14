<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Support\Facades\Auth;
use Kenepa\ResourceLock\Models\Concerns\HasLocks;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

trait LogTrait
{
    // use LogsActivity;
    // use HasLocks;
    use HasUlids;

    // public function getActivitylogOptions(): LogOptions
    // {
    //     return LogOptions::defaults()
    //         ->logAll();
    // }

    public function uniqueIds()
    {
        // Tell Laravel you want to use ULID for your secondary 'ulid' column instead
        return [
            'ulid',
        ];
    }

    public function getRouteKeyName()
    {
        return 'ulid';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $user = Auth::user();
            $model->created_by = $user->username;
            $model->updated_by = $user->username;
            $model->record_title = $model->description;
        });

        static::updating(function ($model) {
            $user = Auth::user();
            $model->updated_by = $user->username;
            $model->record_title = $model->description;
        });
    }
}
