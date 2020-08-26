<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];
}
