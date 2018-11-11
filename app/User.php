<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class User extends Authenticatable

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

//    public  function sendEmail(){
//
//        $to = $this->email;
//        $subject = 'Confirm your email';
//        $verifyUrl = url('auth/verify/'.$this->Token);
//        $message = 'Please confirm your account by clicking this link: <a href= '.$verifyUrl.'>link</a >';
//        // Always set content-type when sending HTML email
//        $headers = "MIME-Version: 1.0" . "\r\n";
//        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
//        // More headers
//        $headers .= 'From: <zhangm67@myunitec.ac.nz>' . "\r\n";
//        try {
//            mail($to, $subject, $message, $headers);
//        } catch (\Exception $e) {
//
//        }


//    }
}