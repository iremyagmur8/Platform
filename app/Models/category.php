<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class category extends Model
{
    use HasFactory, SoftDeletes;


    public $fillable = ['title', 'parent_id', 'sort', 'description', 'active', 'type'];
    protected $appends = ['parents'];
    public $with = ['files'];

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id')->orderBy('sort');
    }

    public function getParentsAttribute()
    {
        $data = [];
        $kosul = true;
        $category = category::where('id', $this->id)->first();
        $obj_data["id"] = $category->id;
        $obj_data["title"] = $category->title;
        array_push($data, $obj_data);
        while ($kosul) {
            if ($category->parent_id > 1) {
                $category = category::where('id', $category->parent_id)->first();
                if ($category) {
                    $obj_data["id"] = $category->id;
                    $obj_data["title"] = $category->title;
                    array_push($data, $obj_data);
                } else
                    $kosul = false;
            } else
                $kosul = false;
        }
        $data = array_reverse($data);
        return $data;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany('App\Models\files', 'type_id', 'id')->where("type", "1")->orderBy('sort');
    }

}

