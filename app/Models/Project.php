<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['author', 'title', 'description', 'website_url', 'thumbnail'];
}