<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;
    protected $with =['category'];
    protected $appends = ['bottom', 'detail', 'overviews', 'features', 'rankings', 'satisfaction', 'safety', 'employment'];
    public function getBottomAttribute()
    {
        return  json_decode($this->card_bottom);
    }

    public function getDetailAttribute()
    {
        return  json_decode($this->card_detail_info);
    }

    public function getOverviewsAttribute()
    {
        return  json_decode($this->overview);
    }

    public function getFeaturesAttribute()
    {
        return  json_decode($this->features_includes);
    }


    public function getRankingsAttribute()
    {
        return  json_decode($this->ranking);
    }

    public function getSatisfactionAttribute()
    {
        return  json_decode($this->city_satisfaction);
    }

    public function getSafetyAttribute()
    {
        return  json_decode($this->city_safety);
    }

    public function getEmploymentAttribute()
    {
        return  json_decode($this->employment_satisfaction);
    }

    public function category()
    {
        return $this->hasOne(category::class, 'id', 'type');
    }
}

