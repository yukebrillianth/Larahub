<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function index($pertanyaan_id) {
        $answers = Answer::get_all()->where('question_id', $pertanyaan_id);
        $questions = Question::get_all()->where('id', $pertanyaan_id)->all();;
        return  view('answer.index', compact('answers', 'questions'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'isi' => 'required|min:6|max:60000'
        ],
        [
            'isi.required'=>'Isi jawaban harus diisi!',
            'isi.min'=>'Isi jawaban tidak boleh kurang dari 6 karakter!',
            'isi.max'=>'Isi jawaban tidak boleh lebih dari 60000!'

        ]);
        $new_answer = Answer::submit($request->all());

        return back();
    }
}
