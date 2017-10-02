# Lavarel-Angular-Restful-App

A Lavarel-Angular-Restful Application

Create and copy your files to the folder /public/import on your web server 
eg: /var/www/html/tewlfth/public/import

to run the seeder run the command
php artisan db:seed


TODO: Create migrations script app/database/migrations/
TODO: downloadImage and uploadImage functions
TODO: Create partials abd use ng-view for the links



#SQL

CREATE SCHEMA `twelfthman` DEFAULT CHARACTER SET latin1 ;

CREATE TABLE `twelfthman`.`images` (
  `image_id` INT NOT NULL AUTO_INCREMENT,
  `image_url`  VARCHAR(150) NULL,
  `image_name` VARCHAR(100) NULL,
  `image_alt_text` VARCHAR(45) NULL,
  `image_mimeType` VARCHAR(45) NULL,
  `image_ext` TINYTEXT NULL,
  `deleted` INT NULL DEFAULT 0,
  PRIMARY KEY (`images_id`),
  UNIQUE INDEX `images_id_UNIQUE` (`images_id` ASC));
)
