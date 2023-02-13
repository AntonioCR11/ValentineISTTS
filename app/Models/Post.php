<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    // relationships
    public function posts()
    {
        /*
            RELATION DESCRIPTION :
            Type : One to Many
            Related Table : User & Posts
            Desc : User can have many posts - a Post belongs to a user
        */
        return $this->belongsTo(User::class);
    }
}
