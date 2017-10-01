<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Response;
use App\Images;

class ImageController extends BaseController {

    /**
     * Send back all images as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Images::get());
    }

    /**
     * Store a newly uploaded resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        /*
        //TODO get the file from upload form
	    //save a copy in the database and give a unique name
        Images::create(array(
	        'image_data' => file_get_contents($image),
	        'image_name' => date( 'Y-m-d' ) . '-' . str_random( 10 ) . $image->getFilename(),
	        'image_alt_text' => $image->getFilename(),
	        'image_ext' => $filesystem->extension($image->getPathname()),
	        'deleted' => 0
        ));
        */
        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        if(DB::table('images')->where('image_id', $id)->value('deleted')==0){
            DB::table('images')->where('image_id', $id)->limit(1)->update(array('deleted' => 1));
        }else{
            DB::table('images')->where('image_id', $id)->limit(1)->update(array('deleted' => 0));
        }

        return Response::json(array('success' => true));
    }

}  