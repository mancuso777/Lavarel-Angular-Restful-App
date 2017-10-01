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
        		//TODO: resize the file if is too big
        		echo ' WARNING! '.$image->getPathname().' is too big: Please optimize this image to less than 2MB and try again ';

        	}else{
        		//copy the original file to storage
        		$path = 'public/images/'.$image->getFilename();
        		$imageFile = $filesystem->get($image->getPathname());
        		Storage::put($path, $imageFile);

        		//save a copy in the database and give a unique name
	        	DB::table('images')->insert([
		            'image_data' => file_get_contents($image),
		            'image_name' => date( 'Y-m-d' ) . '-' . str_random( 10 ) . $image->getFilename(),
		            'image_alt_text' => $image->getFilename(),
		            'image_ext' => $filesystem->extension($image->getPathname()),
		            'deleted' => 0
		        ]);
        	}
        }
    }
}
