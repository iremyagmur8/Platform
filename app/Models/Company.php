<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $with = ['logos', 'information','cities','types', 'images', 'users'];
    protected $appends = ['parents'];

    public function logos()
    {
        return $this->hasOne(Logo::class, 'id', 'logo_id');
    }

    public function getParentsAttribute()
    {
        $result=new ArrayObject();
        $adres = json_decode($this->address);
        if(isset($adres->city)) {$result = Address::find($adres->city); }
        return $result;
    }

    public function information()
    {
        return $this->hasOne(CompanyInformation::class, 'id', 'company_info_id');
    }

    public function cities(){
        return $this->hasOne(Address::class, 'id', 'city_id');
    }
    public function types(){
        return $this->hasOne(category::class, 'id', 'type');
    }

    public function images(){
        return $this->hasMany(Image::class, 'company_id', 'id');
    }

    public function users(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
