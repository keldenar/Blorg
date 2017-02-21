<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function getTitleAttribute($value)
    {
        $parser = new \Parsedown();
        return $parser->text($value);
    }

    public function getPostAttribute($value)
    {
        $parser = new \Parsedown();
        return $parser->text($value);
    }

}
