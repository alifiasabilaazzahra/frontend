<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgressAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Progress Per BAB";
        $menu = 1;
        return view('mahasiswa/progress-admin/index',compact('title','menu'));
    }

    public function dokumen(){
        $title = "Dokumen";
        $menu = 2;
        return view('mahasiswa/progress-admin/dokumen',compact('title','menu'));
    }

    public function tak(){
        $title = "TAK";
        $menu = 3;
        return view('mahasiswa/progress-admin/tak',compact('title','menu'));
    }

    public function eprt(){
        $title = "EPRT";
        $menu = 4;
        return view('mahasiswa/progress-admin/eprt',compact('title','menu'));
    }

    public function add(){
        return view('mahasiswa/progress-admin/add-progress-admin');
    }

    
    public function edit(){
        return view('mahasiswa/progress-admin/edit-progress-admin');
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
