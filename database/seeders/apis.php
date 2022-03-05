<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class apis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('api')->insert([
            'id' => 1,
            'nombre' => 'Chris Redfield',
            'descripcion' => 'Chris, en palabras del diseñador Hideki Kamiya es un personaje contundente, un sujeto de tipo duro. Chris perdió a sus padres a temprana edad por lo cual, siempre fue muy sobreprotector con su hermana menor, Claire Redfield. Al unirse a la Fuerza Aérea a una edad muy temprana conoció Barry Burton quien se convirtió en un gran amigo suyo y a quien incluso vio como una figura paterna. . Fue por medio de Chris que Claire conoció a Barry y a su familia, lo que indica que la familia Burton y los Redfield son bastante unidos. Chris ha demostrado tener un gran apego en cuanto a salvar vidas, cosa que lo puso en conflicto directo con sus superiores en la Fuerza Aérea. Es coronado como el primer protagonista masculino de saga.',
            'img' => 'https://laverdadnoticias.com/__export/1589301571229/sites/laverdad/img/2020/05/12/chris_redfield_port.jpg_554688468.jpg',
        ]);

        DB::table('api')->insert([
            'id' => 2,
            'nombre' => 'Claire Redfield',
            'descripcion' =>'Claire es la hermana menor de Chris Redfield, un oficial de policía especial estadounidense y protagonista de los videojuegos Resident Evil 2 y Resident Evil Code Veronica; el rol de Claire en estos videojuegos corresponde a una superviviente del brote de zombis y que se convierte en vigilante. Regresó como una activista secuestrada en el videojuego Resident Evil: Revelations 2 después de estar ausente de la serie principal durante una década y media desde Code Veronica.Claire también ha aparecido en varios otros medios, incluidos varios videojuegos adicionales, la película animada por computadora Resident Evil: Degeneration y las películas de acción no canónicas Resident Evil: Extinción, Resident Evil: Resurreción y Resident Evil: El Capítulo Final, así como en la promoción y comercialización de la franquicia. Fue muy bien recibida por la crítica y se convirtió en uno de los personajes más populares de Resident Evil.',
            'img' => 'https://i.ytimg.com/vi/K5FyHAIQiSg/maxresdefault.jpg',
        ]);
        DB::table('api')->insert([
            'id' => 3,
            'nombre' => 'Ethan Winters',
            'descripcion' =>'es el protagonista principal del videojuego Resident Evil 7: Biohazard y uno de los protagonistas principales de Resident Evil 8: Village. Ethan Winters es un hombre caucásico estadounidense que nació en el año 1984, mide aproximadamente 1,80 m y pesa 75 kg.',
            'img' => 'https://www.somosxbox.com/wp-content/uploads/2021/05/Resident-Evil-Village-Ethan-Winters-More-Mature-Than-RE7.jpg',
        ]);
        DB::table('api')->insert([
            'id' => 4,
            'nombre' => 'Jill Valentine',
            'descripcion' =>'Jill es miembro de los STARS, un grupo de trabajo especial en el departamento de policía de Raccoon City. Es especialista en tácticas de combate, desarmar trampas explosivas y abrir cerraduras gracias a su paso por la Delta Force. Gracias a su experiencia en el entrenamiento de la fuerza de los Estados Unidos de América, Jill Valentine consigue ser uno de los supervivientes del incidente que se produjo en las Montañas Arklay y Raccon City.',
            'img' => 'https://teppenthegame.com/_materials/img/world/heroes/hero009/char_sp.png',
        ]);
        DB::table('api')->insert([
            'id' => 5,
            'nombre' => 'Leon Scott Kennedy',
            'descripcion' =>'Durante los eventos de Resident Evil 2, Leon es un oficial de policía novato que llega tarde a la condenada Raccoon City para su primer día en el trabajo, solo para enfrentar un brote de zombis. Durante el transcurso del juego, se une a la sobreviviente civil Claire Redfield, rescata a la joven Sherry Birkin y es ayudado por la misteriosa Ada Wong. Seis años más tarde, en Resident Evil 4, Leon regresa como agente del servicio secreto del Gobierno federal de los Estados Unidos asignado para rescatar a la hija del presidente, Ashley, de un culto siniestro. En Resident Evil 6, continúa trabajando para el gobierno de los Estados Unidos y se reúne con Ada y una adulta Sherry. Leon es uno de los personajes más representativos de la saga siendo el personaje favorito entre los fans y el denominado segundo protagonista principal masculino después de Chris. además, Leon el protagonista principal de las peliculas CGI.',
            'img' => 'https://img.wattpad.com/cover/200097467-256-k99983.jpg',
        ]);
        DB::table('api')->insert([
            'id' => 6,
            'nombre' => 'Ada Wong',
            'descripcion' =>'Ada es una mujer muy atractiva de ascendencia estadounidense y oriental, luciendo una figura delgada y modales elegantes. Ada se ajusta al arquetipo de la asesina elegante y hermosa o femme fatale. En Resident Evil 2, luce un vestido rojo brillante de una sola pieza atado con una correa y cortado en la parte superior del muslo. Ella lleva medias oscuras en las piernas y zapatos negros. En Resident Evil 4 su atuendo normal, es un largo y elegante vestido rojo abierto (conocido como el Qipao de Manchuria y China) con un diseño de oro de las mariposas en él y una cinta que fluye negro que llevaba alrededor de su cuello que cae por la espalda. También tiene un cinturón con un cuchillo fácilmente visto en el muslo expuesto. Su color característico es el rojo. Dos de sus tres equipos son en su mayoría de color rojo.',
            'img' => '',
        ]);
        DB::table('api')->insert([
            'id' => 7,
            'nombre' => 'Rebecca Chambers',
            'descripcion' =>'Rebecca Chambers fue una de las supervivientes del equipo Bravo de los STARS y actualmente trabaja para la BSAA, y estaba refugiada en la mansión Spencer. Aparece en el primer videojuego Resident Evil y es protagonista de Resident Evil Zero, también aparece en The Umbrella Chronicles, entre otros.',
            'img' => 'https://i.pinimg.com/originals/0c/f0/d9/0cf0d9fc0a42c025c6dd73e2aa88fafd.jpg',
        ]);
        DB::table('api')->insert([
            'id' => 8,
            'nombre' => 'Barry Burton',
            'descripcion' =>'formó parte de los STARS de Raccoon City y actualmente trabaja para la BSAA, como especialista en armas. Barry aparece en el primer videojuego Resident Evil 1 como ayudante de Jill Valentine. Podía morir en varios finales, pero se supone que sobrevive debido a que es nombrado en los siguientes. Es protagonista en el spin-off Resident Evil Gaiden y Resident Evil: Revelations 2. También aparece en The Umbrella Chronicles, entre otros.',
            'img' => 'https://static.wikia.nocookie.net/residentevil/images/2/2e/Barry_Umbrella_Corps.jpg/revision/latest?cb=20160531023204&path-prefix=es',
        ]);
        DB::table('api')->insert([
            'id' => 9,
            'nombre' => 'Mia Winters',
            'descripcion' =>'es un personaje del videojuego Resident Evil 7 y Resident Evil 8. Cónyuge de Ethan Winters y una de las víctimas de la familia Baker. Mia Winter es una mujer caucásica estadounidense que nació entre 1984 y 1985, mide 1,70 m y pesa 61 kg.',
            'img' => 'https://i.pinimg.com/736x/9f/b7/46/9fb7468f52dce27951a9c8993d570ff7.jpg',
        ]);
        DB::table('api')->insert([
            'id' => 10,
            'nombre' => 'Ashley Graham',
            'descripcion' =>'Ashley Graham es un personaje ficticio femenino del videojuego Resident Evil 4. Es la hija del presidente de los Estados Unidos de América y objetivo principal a cuidar del protagonista principal Leon Scott Kennedy. Ashley se encontraba de camino a casa desde la escuela cuando fue secuestrada por Jack Krauser, en ese momento, Leon S. Kennedy es enviado para rescatarla.',
            'img' => 'https://static.wikia.nocookie.net/residentevil/images/a/a1/Ashley_Graham_REID.png/revision/latest?cb=20210708210022&path-prefix=es',
        ]);
        DB::table('api')->insert([
            'id' => 11,
            'nombre' => 'Albert Wesker',
            'descripcion' =>'fue considerado el villano por excelencia de la saga Resident Evil. Haciendo su primera aparición como antagonista en el primer Resident Evil. En Resident Evil 5 muere definitivamente. También aparece en Resident Evil Code Veronica, Resident Evil Zero, Resident Evil 4, The Umbrella Chronicles y The Darkside Chronicles.',
            'img' => 'https://www.ecured.cu/images/9/91/A%C3%B1bert_Wesker.jpg',
        ]);

        

    }
}
