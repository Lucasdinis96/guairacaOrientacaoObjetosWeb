<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    public function index() {
        $professors = Professor::all();
        return view('professors.index',compact('professors'));
    }

    public function create() {
        return view('professors.create');
    }

    public function store(Request $request) {
        Professor::create($request->all());
        return redirect()->route('professors.index');
    }

    public function show(string $id) {
        //
    }

    public function edit(Professor $professor) {
        return view ('professors.edit',compact('professors'));
    }

    public function update(Request $request, Professor $professor) {
        $professor->update($request->all());
        return redirect()->route('professors.index');
    }

    public function destroy(Professor $professor) {
        $professor->delete();
        return redirect()->route('alunos.index');
    }
}
