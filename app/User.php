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
        'name', 'email', 'password', 'username', 'profile_img', 'gender', 'country'
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
        return "https://i.pravatar.cc/40?";
    }
    public function follow(User $user){
        $this->follows()->save($user);
        $con = new Conversation();
        $con->user_id=current_user()->id;
        $con->friend_id=$user->id;
        $con->save();
        return "meow";

    }

    public function unfollow(User $user){
        $con = Conversation::where('user_id', '=', current_user()->id)->where('friend_id', '=', $user->id);
        $con->delete();
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

    public function notifications()
    {
        return $this->hasMany(Notifications::class)->latest()->limit(5);
    }

    public function gallery(){
        return $this->hasMany(Gallery::class)->latest();
    }

    public function sweet_memories(){
        return $this->hasMany(SweetMemories::class)->latest();
    }

    public function to_do_list(){
        return $this->hasMany(ToDoList::class)->latest()->where('status', '=', 'active')->limit(5);
    }


    public function following(User $user){
        return $this->follows->contains($user);
    }

    public function conversations(){
//        return $this->belongsToMany(User::class, 'conversations', 'user_id', 'friend_id');
        return $this->hasMany(Conversation::class, 'user_id');
//        return $this->ConOne->merge($this->ConTwo);
    }
    public function revConversations(){
//        return $this->belongsToMany(User::class, 'conversations', 'friend_id', 'user_id');
        return $this->hasMany(Conversation::class, 'friend_id');
//        return $this->ConOne->merge($this->ConTwo);
    }






}
