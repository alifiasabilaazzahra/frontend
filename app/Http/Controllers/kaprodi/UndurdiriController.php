<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UndurdiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = "Undur Diri";
        $side_menu = 0;
        $title = "Undur Diri";
        return view('kaprodi/undurdiri/undurdiri',compact('title','section','side_menu'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
     

    public function add()
    {
        $title = "Tambah Undur Diri";
        return view('kaprodi/undurdiri/add-undurdiri',compact('title'));
    }
    public function edit()
    {
       $title = "Edit Undur Diri";
        return view('kaprodi/undurdiri/edit-undurdiri',compact('title'));
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
