<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetlitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('mahasiswa/prodi/index');
    }

    public function pendataan(){
        $title = "Pendataan Metlit";
        return view('mahasiswa/metlit/pendataan',compact('title'));
    }

    public function addPendataan(){
        $title = "Tambah Pendataan";
        return view('mahasiswa/metlit/add-pendataan',compact('title'));
    }

    public function editPendataan(){
        $title = "Edit Pendataan";
        return view('mahasiswa/metlit/edit-pendataan',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function sign_up(){

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
