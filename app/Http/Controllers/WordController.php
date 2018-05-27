<?php

namespace App\Http\Controllers;

use App\Word;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WordController extends Controller
{
    private $word;

    public function __construct()
    {
        $this->word = new Word();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->word->del_word($request->get('no'));
        for ($i = 0; $i < count($request->get('wordlist')); $i++) {
            $word_info = array([
                'wordbook'      => $request->get('no'),
                'kanzi'         => $request->get('wordlist')[$i]['漢字'],
                'hiragana'      => $request->get('wordlist')[$i]['ひらがな'],
                'korean'        => $request->get('wordlist')[$i]['韓国語'],
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            $this->word->add_word($word_info);
        }
        return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Word::where('wordbook',$id)->select('kanzi','hiragana','korean')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no)
    {
        //
    }

    public function rand_show($no) {
        return response()->json(Word::where('wordbook',$no)->select('kanzi','hiragana','korean')->inRandomOrder()->get());
    }
}
