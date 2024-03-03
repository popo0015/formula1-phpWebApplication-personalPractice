<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    private $data = [
        [
            "name" => "Max Verstappen",
            "born" => "1997",
            "history" => "Verstappen is the son of former Formula One driver Jos Verstappen, and former go-kart racer Sophie Kumpen. He had a successful run in karting and single-seater categories – including FIA European Formula 3 – breaking several records.",
            "teams_id" => 1
        ],
        [
            "name" => "Sergio Perez",
            "born" => "1990",
            "history" => "Perez’s reputation in F1 has been built on opposite approaches to Grand Prix racing. On the one hand, he is a punchy combatant who wrestles his way through the pack and into the points. Never afraid to add a bit of spice to his on-track encounters, even his team mates don’t always escape the Mexican’s heat.",
            "teams_id" => 1
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            Driver::create($item);
        }
    }
}
