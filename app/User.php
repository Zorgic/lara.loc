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
        'surname', 'name', 'patronymic', 'dev_number', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'dev_number', 'password', 'remember_token',
    ];

    public function services()
    {
        return $this->hasMany(Service::class,'id_users');
    }

    public function lastService($name)
    {
        return $this->hasMany(Service::class,'id_users')->where('service_name',$name)->orderBy('id','desc')->first();
    }
}
