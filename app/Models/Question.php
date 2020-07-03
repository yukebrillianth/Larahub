<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Question {
    public $timestamps = true;
    
    public static function get_all() {
        $questions = DB::table('questions')->get();
        return $questions;
    }

    public static function save($data) {
        unset($data["_token"]);
        $new_question = DB::table('questions')->insert($data);
        return $new_question;
    }

    public static function showById($id) {
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function update($id, $request) {
        $question = DB::table('questions')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                        ]);
        return $question;
    }
    public static function destroy($id) {
        $question = DB::table('questions')
                        ->where('id', $id)
                        ->delete();
        return $question;
    }
}