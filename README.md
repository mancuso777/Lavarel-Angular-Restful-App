# Lavarel-Angular-Restful-App
A Lavarel-Angular-Restful Application

to run the seeder run the command
php artisan db:seed

#SQL
CREATE SCHEMA `twelfthman` DEFAULT CHARACTER SET latin1 ;
grant all on twelfthman.* to 'root' identified by 'root';
CREATE TABLE `twelfthman`.`images` (
  `images_id` INT NOT NULL AUTO_INCREMENT,
  `image_url`  VARCHAR(150) NULL,
  `image_name` VARCHAR(100) NULL,
  `image_alt_text` VARCHAR(45) NULL,
  `image_mimeType` VARCHAR(45) NULL,
  `image_ext` TINYTEXT NULL,
  `deleted` INT NULL DEFAULT 0,
  PRIMARY KEY (`images_id`),
  UNIQUE INDEX `images_id_UNIQUE` (`images_id` ASC));
)

TODO: Create migrations script app/database/migrations/
TODO: destry to Update deleted flag
TODO: downloadImage and uploadImage