<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Imagenes;
use Redirect;
use Session;
use Carbon\Carbon;
use App\ImagenEditada;
use Auth;
use Storage;
use Response;


class ImagesController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }
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
     public function getUpload()
    {
        return view('pages.upload');
    }

    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }

    public function uploadImage(Request $request){

        $files = $request['files'];

        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $nameRandom = $this->generateRandomString();
            $name = Carbon::now()->second.$nameRandom.'-'.$fileName;
            \Storage::disk('local')->put($name, \File::get($file));

            $imagen = new Imagenes;
            $imagen->name = $name;
            $imagen->status = 'no_process';
            $imagen->send = 'no';
            $imagen->id_user = Auth::user()->id;
            $imagen->save();
        }

        return response()->json([
            'mensaje' => 'Picture upload successfully!',
            'status' => true,
            'file' => $imagen,
            'success' => true
        ]);

    }

    public function store(Request $request)
    {

    //   $file = Request::file('file');
    // if ($file) {
    //       //move it to our public folder and rename it to $name
    //       $file->move('images', 'insert_file_name.'.$file->getClientOriginalExtension());
    //       echo 'file uploaded!';
    //       return Response::json([
    //           'error' => false,
    //           'code'  => 200,
    //           'filename' => $allowed_filename
    //       ], 200);
    //       var_dump($file);
    //   }else{
    //     return Response::json([
    //         'error' => false,
    //         'code'  => 500
    //     ], 200);
    //   }

        $files = $request->file('foto');

        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $nameRandom = $this->generateRandomString();
            $name = Carbon::now()->second.$nameRandom.'-'.$fileName;
            \Storage::disk('local')->put($name, \File::get($file));

            $imagen = new Imagenes;
            $imagen->name = $name;
            $imagen->status = 'no_process';
            $imagen->send = 'no';
            $imagen->id_user = Auth::user()->id;
            $imagen->save();
        }
        Session::flash('panel', 1);
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

    public function deletedFile($file, $id){

        Storage::delete($file);

        $imagenes = Imagenes::find($id);
        $imagenes->delete();

        Session::flash('panel', 1);
        return Redirect::to('/')->with('message', 'Image Deleted Correctly');
    }

    public function changeStatus(Request $request)
    {
        $imagenes = Imagenes::find($request->id);
        $imagenes->status = 'editing';
        $imagenes->save();

        Session::flash('panel', 1);
        return Redirect::to('/')->with('message', 'Change Status "Editing" Correctly');
    }

    public function uploadNewImage(Request $request)
    {
        $files = $request->file('foto');

        foreach($files as $file){
            $fileName = $file->getClientOriginalName();

            $nameRandom = $this->generateRandomString();
            $name = Carbon::now()->second.$nameRandom.'-'.$fileName;

            $imagenes = Imagenes::find($request->img);
            $imagenes->send = 'yes';
            $imagenes->status = 'completed';
            $imagenes->save();

            $imagen = new ImagenEditada;
            $imagen->name = $name;
            $imagen->id_imagen = $request->img;
            $imagen->id_user = $imagenes->id_user;
            $imagen->save();

            \Storage::disk('user')->put($name, \File::get($file));
        }
        Session::flash('panel', 1);
        return Redirect::to('/')->with('message', 'Image Uploaded Correctly');;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
