<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JobsPost extends Model
{
    use HasFactory;
    protected $softDelete = true;

    protected $table = 'job_post';
}
