# Lavarel-Angular-Restful-App
A Lavarel-Angular-Restful Application

to run the seeder run the command
php artisan db:seed --class=ImageUploader

#SQL
CREATE SCHEMA `twelfthman` DEFAULT CHARACTER SET latin1 ;
grant all on twelfthman.* to 'root' identified by 'root';
CREATE TABLE `twelfthman`.`images` (
  `images_id` INT NOT NULL AUTO_INCREMENT,
  `image_data` MEDIUMBLOB NULL,
  `image_name` VARCHAR(100) NULL,
  `image_alt_text` VARCHAR(45) NULL,
  `image_ext` TINYTEXT NULL,
  `deleted` INT NULL DEFAULT 0,
  PRIMARY KEY (`images_id`),
  UNIQUE INDEX `images_id_UNIQUE` (`images_id` ASC));
)

TODO: Create migrations script app/database/migrations/
public function up()
{
    Schema::create('images', function(Blueprint $table)
    {
        $table->increments('images_id');
        ...
    });
}

