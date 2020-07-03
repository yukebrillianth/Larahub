<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Answer {
    public $timestamps = true;
    
    public static function get_all() {
        $answers = DB::table('answers')->get();
        return $answers;
    }

    public static function submit($data) {
        // dd($data);
        unset($data["_token"]);
        $new_answer = DB::table('answers')->insert($data);
        return $new_answer;
    }

    public static function showById($pertanyaan_id) {
        $answer = DB::table('answers')->where('question_id', $pertanyaan_id)->first();
        return $answer;
    }
}