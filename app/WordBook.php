<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class WordBook extends Model
{
    protected $table = 'Wordbook';

    public function regWordBook($name) {
        WordBook::insert([
            'name' => $name,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function getWordbookList() {
        return
        WordBook::orderBy('created_at','desc')->get();
    }

    public function del_wordbook($no) {
        WordBook::where('no',$no)->delete();
        Word::where('wordbook',$no)->delete();
    }
}
