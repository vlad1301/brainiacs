<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=[
        'projectName',
        'projectUrl',
        'user',
        'search_engine_name',
        'search_engine_language',
        'location_name',
        'task_id',
        'search_engine_id',
        'location_id',
        'frequency',
        'keyword'
    ];

}
