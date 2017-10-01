<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

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

               DB::table('images')->where('image_id', $id)->limit(1)  ->update(array('name' => Input::get('name'), 'detail' => Input::get('detail'), 'image' => $newupload));

        DB::table('images')->update([
            'image_url' => $image_url,
            'image_name' => $filesystem->name($image->getPathname()),
            'image_alt_text' => 'Image '.$filesystem->name($image->getPathname()),
            'image_mimeType' => $filesystem->mimeType($image->getPathname()),
            'image_ext' => $filesystem->extension($image->getPathname()),
            'deleted' => 0
        ]);

        return Response::json(array('success' => true));
    }

}  