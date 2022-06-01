<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityDepartment extends Model
{
    use HasFactory;
    protected $with = ['universities'];
    public function universities()
    {
        return $this->hasOne(Company::class, 'id', 'university_id');
    }

}
