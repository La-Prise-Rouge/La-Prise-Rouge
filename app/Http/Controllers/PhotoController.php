<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;
use App\Models\Evenement;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(10);
        return view('Accueil')->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evenements = Evenement::all();
        //Envoi sur le formulaire de création
        return view('photo.formAjoutPhoto', compact('evenements'));
    }

    /**
     * Store a newly created resource in storage.
     *profile_image
     * @param  \App\Http\Requests\StorePhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoRequest $request)
    {
        $photo= new Photo();
        $photo->titre=$request->get('titre');
        if($request->hasFile('url')) {
            //get filename with extension
            $filenamewithextension = $request->file('url')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('url')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;


            //Upload File
            $request->file('url')->storeAs('public/profile_images', $filenametostore);
            $request->file('url')->storeAs('public/profile_images/thumbnail', $filenametostore);

            //create small thumbnail
            $smallthumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
            $this->createThumbnail($smallthumbnailpath, 150, 93);

            $photo->url=$filenametostore;
            $photo->description=$request->get('description');
            $photo->evenement_id=$request->get('evenement');
            $photo->save();

            return redirect('creation-photo')->with('success', "Image uploaded successfully.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $id)
    {
        //Permet de visualiser une photo
        $photo = Photo::find($id);
        return view('Accueil')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoRequest  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoRequest $request, Photo $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $file = storage_path('app/public/profile_images/'.$photo->url);
        $sfile = storage_path('app/public/profile_images/thumbnail/'.$photo->url);
        unlink($file);
        unlink($sfile);
        Photo::destroy($id);
        return redirect()->route('photos');
    }

    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height)->save($path);
    }

    //retour à la page des photos
    public function retournePhotos()
    {
        $photos = Photo::all();
        $photos = Photo::paginate(10);
        return view('photos', compact('photos'));
    }

    //retour à la page de la photo
    public function retournePhoto($id)
    {
        $photo = Photo::find($id);
        return view('photo', compact('photo'));
    }
}
