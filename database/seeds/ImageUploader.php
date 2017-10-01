<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;

class ImageUploader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {

        $filesystem = new Filesystem();

        $from = base_path('public/import/images');

        $images = $filesystem->allFiles($from);

        foreach ($images as $key => $image) {

        	if($filesystem->size($image->getPathname()) > 2000000 ){
        		//TODO: resize the file if is too big (http://image.intervention.io)
        		echo ' WARNING! '.$image->getPathname().' is too big: Please optimize this image to less than 2MB and try again ';

        	}else{
        		//copy the original file to storage 
                $image_url = 'images/'. date( 'Y-m-d' ) . '-' . str_random( 10 ) . $image->getFilename();
        		$imageFile = $filesystem->get($image->getPathname());

                Storage::disk('public')->put($image_url, $imageFile);

        		//save a copy in the database and give a unique name, could use  'image_blob' => file_get_contents($image) if i want save the image as blob ;]

	        	DB::table('images')->insert([
		            'image_url' => $image_url,
		            'image_name' => $filesystem->name($image->getPathname()),
		            'image_alt_text' => 'Image '.$filesystem->name($image->getPathname()),
                    'image_mimeType' => $filesystem->mimeType($image->getPathname()),
		            'image_ext' => $filesystem->extension($image->getPathname()),
		            'deleted' => 0
		        ]);
        	}
        }
    }
}
