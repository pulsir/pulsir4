<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function posts() 
    {
        return $this->hasMany(Comment::class);
    }

    public function publish(Post $post) 
    {
        $this->posts()->save($post);
    }

    public function reply(Comment $comment)
    {
        $this->comments()->save($comment);
    }
}
