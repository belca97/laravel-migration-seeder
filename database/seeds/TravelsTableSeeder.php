<?php

use App\Travel;
use Illuminate\Database\Seeder;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {


        $travel = new Travel();  //<-- richiamo la classe model



        $travel->travels_pack_name = 'Il mio viaggo a Barcellona';
        $travel->destination = 'Barcellona';
        $travel->country = 'Spagna';
        $travel->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla velit saepe blanditiis deserunt at facere modi quidem mollitia ea vero, nemo magni dolores magnam sint ab distinctio molestiae. Officiis!';
        $travel->partenza = '2022-09-03';
        $travel->ritorno = '2022-09-10';

        $travel->save();

        $travel = new Travel();  //<-- richiamo la classe model



        $travel->travels_pack_name = 'Il mio viaggo a Lisbona';
        $travel->destination = 'Lisbona';
        $travel->country = 'Portogallo';
        $travel->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla velit saepe blanditiis deserunt at facere modi quidem mollitia ea vero, nemo magni dolores magnam sint ab distinctio molestiae. Officiis!';
        $travel->partenza = '2022-09-03';
        $travel->ritorno = '2022-09-10';

        $travel->save();


        $travel = new Travel();  //<-- richiamo la classe model



        $travel->travels_pack_name = 'Il mio viaggo a Berlino';
        $travel->destination = 'Berlino';
        $travel->country = 'Germania';
        $travel->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla velit saepe blanditiis deserunt at facere modi quidem mollitia ea vero, nemo magni dolores magnam sint ab distinctio molestiae. Officiis!';
        $travel->partenza = '2022-09-03';
        $travel->ritorno = '2022-09-10';

        $travel->save();


    }

    
}


