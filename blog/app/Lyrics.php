<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyrics extends Model
{
    public $id;
    public $text;
    public $author;
    public $musician;
    public $name;

    public function author() {
        return $this->hasMany('App/Author');
    }

    public function genre() {
        return $this->hasMany('App/Genre');
    }
}
