<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{

    public function fresh() {
        $this->migrate();
        $this->seed();
    }
    

    public function migrate() {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(7)',
            'won' => 'tinyint(1)',
            'tie' => 'tinyint(1)',
            'timestamp' => 'timestamp',
        ]);

        dump('migrations complete');
    }


    public function seed() {

        $faker = Factory::create();

        for($i = 10; $i > 0; $i--) {

            $this->app->db()->insert('rounds', [
                'choice' => ['rock', 'paper', 'scissor'][rand(0,2)],
                'won' => rand(0,1),
                'tie' => rand(0,1),
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')    
            ]);
        }

        dump('seeds complete');
    }
}