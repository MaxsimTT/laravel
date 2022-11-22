<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $primeryKey = 'id';
    public $incrementing = TRUE;
    // public $timestamps = FALSE;
    protected $fillable = ['name', 'description', 'author_id'];
    protected $dates = ['deleted_ad'];
}
