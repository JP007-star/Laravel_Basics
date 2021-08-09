<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class AppUser extends Model
{
    
    public $table="mUsers";
    public $timestamps=false;
    //accessor in laravel
    public function getNameAttribute($value)
    {
        return ucFirst($value);
    }
    // mutator
    public function setNameAttribute($value)
    {
       $this->attributes['Name']="Mr".$value;
    }
    public function getCompany()
    { 
        return $this->hasOne(Company::class,'foreign_key');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
