<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function setSlugAttribute($value) {

        if (static::whereSlug($slug = str_slug($value))->exists()) {

            $slug = $this->incrementSlug($slug);
        }

        $this->attributes['slug'] = $slug;
    }


    public function incrementSlug($slug) {

        $original = $slug;

        $count = 2;

        while (static::whereSlug($slug)->exists()) {

            $slug = "{$original}-" . $count++;
        }

        return $slug;

    }


    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }





}
