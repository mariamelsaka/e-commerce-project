<?php
//
//namespace App\Models;
//
//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;
//
//class User extends Authenticatable
//{
//    use HasApiTokens, HasFactory, Notifiable;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var string[]
//     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];
//
//    /**
//     * The attributes that should be hidden for serialization.
//     *
//     * @var array
//     */
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//
//    /**
//     * The attributes that should be cast.
//     *
//     * @var array
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
//
//    public function gender(){
//        return $this->belongsTo(Gender::class,'gender_id','id');
//        // en user le one gender f hs55dem belongsto
//        //b2sem el m-to 1
//    }
//
////    public function sentMessages(){
////        return $this->hasMany(Chat::class,'first_user_id');
////    }
////
////    public function receivedMessages(){
////        return $this->hasMany(Chat::class,'second_user_id');
////    }
//
//    public function image(){
//        return $this->belongsTo(Image::class,'image_id');
//    }
//}


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fb_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

    public function sentMessages()
    {
        return $this->hasMany(Chat::class, 'first_user_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Chat::class, 'second_user_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    protected $appends = [
        'profile_photo_url',
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }

}
