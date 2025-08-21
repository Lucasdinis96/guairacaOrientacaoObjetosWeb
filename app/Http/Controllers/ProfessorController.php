<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $professors = Professor::all();
        return view('professors.index',compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('professors.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        Professor::create($request->all());
        return redirect()->route('professors.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor) {
        return view ('professors.edit',compact('professors'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professor $professor) {
        $professor->update($request->all());
        return redirect()->route('professors.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor) {
        $professor->delete();
        return redirect()->route('alunos.index');
    }
}
