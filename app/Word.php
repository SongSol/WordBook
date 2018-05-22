<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'word';

    public function add_word (Array $word_info) {
        Word::insert($word_info);
    }

    public function del_word ($no) {
        Word::where('wordbook',$no)->delete();
    }
}
