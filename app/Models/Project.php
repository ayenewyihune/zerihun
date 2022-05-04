<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_type_id', 'name', 'location', 'latitude', 'longitude',
        'client', 'consultant', 'description', 'picture',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function project_type()
    {
        return $this->belongsTo('App\Models\ProjectType');
    }
}
