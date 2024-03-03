<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    private $data = [
        [
            "name" => "Red Bull Racing",
            "origin" => "1997",
            "history" => "Red Bull Racing, currently competing as Oracle Red Bull Racing and also known simply as Red Bull or RBR, is a Formula One racing team, racing under an Austrian licence and based in the United Kingdom. It is one of two Formula One teams owned by conglomerate Red Bull GmbH, the other being RB Formula One Team. The Red Bull Racing team has been managed by Christian Horner since its formation in 2005.",
            "color_hex" => "011629"
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            Team::create($item);
        }
    }
}
