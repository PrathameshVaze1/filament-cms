<?php

namespace App\Models;

use App\FetureStatus;
use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [

            'publish_status' => PublishStatus::class,
            'feature_status' => FetureStatus::class,

        ];

    }
}
