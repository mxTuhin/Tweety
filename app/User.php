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
        'name', 'email', 'password',
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

    public function timeline(){
        //Include Own Post
        //Include post from S/He follows
        //In descending order with date
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id', $ids)->latest()->get();
}
    public function getAvatarAttribute(){
        return "https://i.pravatar.cc/40?u=$this->email";
    }
    public function follow(User $user){
        return $this->follows()->save($user);

    }

    public function unfollow(User $user){
        return $this->follows()->detach($user);

    }


    public function follows(){
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }
    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }
    public function following(User $user){
        return $this->follows->contains($user);
    }






}
