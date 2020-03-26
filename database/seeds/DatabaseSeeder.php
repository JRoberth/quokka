<?php

use Illuminate\Database\Seeder;
use App\Models\Hobby;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hobbies = ["Leer","Netflix","Desarollador","Cinefilo","Pescar","Coleccionista","Amante de las peliculas","Amante de la luna ","Mirar las nubes","Ejercicio","Escuchar musica",
        "Coleccionar antiguedades","Cazar","Barcelona","Real Madrid","Viajar","Dormir","Pintar","Cantar","Jugar futbol",
        "Religioso","Salir a la playa","Tocar la guitarra","Crucigramas","Cocinar","Jardineria","Cosplay","Bailar","Fotografia",
        "Esgrima","Ir al cine","Salir a comer afuera","Nadar","Acampar","Caminar","correr","Escribir","Armar Rompecabezas","Andar en Bicicleta",
        "Armar Legos","Practicar magia","Meditar","Paracaidismo","Armar Origami","Horseback Riding","Ir de compras","Teatro","Jugar billar","Gamer","Youtuber"];



        foreach ($hobbies as $hobby){
            Hobby::create([
                'name' => $hobby
            ]);
        }


    }
}
