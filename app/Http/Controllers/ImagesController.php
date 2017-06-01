<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Imagenes;
use Redirect;
use Session;
use Carbon\Carbon;
use Auth;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('foto');
        
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            
            $name = Carbon::now()->second.$fileName;
            \Storage::disk('local')->put($name, \File::get($file));
            
            $imagen = new Imagenes;
            $imagen->name = $name;
            $imagen->status = 'no_process';
            $imagen->send = 'no';
            $imagen->id_user = Auth::user()->id;
            $imagen->save();
        }
        Session::flash('img_save', 1);
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadFile($file){
        $pathtoFile = public_path().'/pedidos/'.$file;

        return response()->download($pathtoFile);
    }
}
