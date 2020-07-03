<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create() {
        return view('question.form');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|min:6|max:255',
            'isi' => 'required|min:20|max:60000',
        ],
        [
            'judul.required'=>'Judul harus diisi!',
            'judul.min'=>'Judul tidak boleh kurang dari 6 karakter!',
            'judul.max'=>'Judul tidak boleh lebih dari 255 karakter!',
            'isi.required'=>'Isi pertanyaan harus diisi!',
            'isi.min'=>'Isi pertanyaan tidak boleh kurang dari 20 karakter!',
            'isi.max'=>'Isi pertanyaan tidak boleh lebih dari 60000!'

        ]);
        $new_question = Question::save($request->all());

        return redirect('/pertanyaan')->with('status', 'Pertanyaan Berhasil Ditambahkan!');
    }

    public function index() {
        $questions = Question::get_all();
        return view('question.index', compact('questions'));
    }

    public function show($id) {
        $question = Question::showById($id);

        return view('Question.show', compact('question'));
    }

    public function edit($id) {
        $question = Question::showById($id);
        return view('question.edit', compact('question'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'judul' => 'required|min:6|max:255',
            'isi' => 'required|min:20|max:60000',
        ],
        [
            'judul.required'=>'Judul harus diisi!',
            'judul.min'=>'Judul tidak boleh kurang dari 6 karakter!',
            'judul.max'=>'Judul tidak boleh lebih dari 255 karakter!',
            'isi.required'=>'Isi pertanyaan harus diisi!',
            'isi.min'=>'Isi pertanyaan tidak boleh kurang dari 20 karakter!',
            'isi.max'=>'Isi pertanyaan tidak boleh lebih dari 60000!'

        ]);
        $question = Question::update($id, $request->all());
        return redirect('/pertanyaan')->with('status', 'Pertanyaan Berhasil Diperbarui!');
    }

    public function destroy($id) {
        $question = Question::destroy($id);

        return redirect('/pertanyaan')->with('deleted', 'Pertanyaan Berhasil Dihapus!');
    }
}
