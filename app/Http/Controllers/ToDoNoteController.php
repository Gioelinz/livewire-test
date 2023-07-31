<?php

namespace App\Http\Controllers;

use App\Models\toDoNote;
use Illuminate\Http\Request;

class ToDoNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('to-do-notes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(toDoNote $toDoNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(toDoNote $toDoNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, toDoNote $toDoNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(toDoNote $toDoNote)
    {
        //
    }
}
