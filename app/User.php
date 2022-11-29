<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nickName', 'phone', 'address', 'gender', 'profilePhoto', 'coverPhoto',
        'occupation', 'school', 'college', 'university', 'website', 'facebook', 'twitter', 'instragram', 'youtube', 'whatsApp',
        'linkedin', 'DOB', 'religion', 'relationship_status', 'role', 'status_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function friendsofMine()
    {
        return $this->belongsToMany('App\user', 'add_friends', 'user_requested', 'acceptor');
    }
    public function friendOf()
    {
        return $this->belongsToMany('App\user', 'add_friends', 'acceptor', 'user_requested');
    }
    public function friends()
    {
        return $this->friendsofMine()->wherePivot('status', 1)->get()->marge($this->friendOf()->wherePivot('status', 1)->get());
    }
}
