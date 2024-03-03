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
            "history" => "The 2021, 2022 and 2023 World Champion, known for his aggressive driving style and becoming the youngest driver to compete in Formula 1.",
            "teams_id" => 1
        ],
        [
            "name" => "Sergio Perez",
            "born" => "1990",
            "history" => "The Mexican driver has multiple race wins and is known for his tire management and strong race-day performances.",
            "teams_id" => 1
        ],
        [
            "name" => "Charles Leclerc",
            "born" => "1997",
            "history" => "A Monaco-born driver known for his quick qualifying pace and has multiple race wins with Ferrari, aiming to bring a championship to the team.",
            "teams_id" => 2,
        ],
        [
            "name" => "Carlos Sainz",
            "born" => "1994",
            "history" => "aving driven for several teams, Sainz has proven his consistency and speed, securing his first F1 victory with Ferrari in 2022.",
            "teams_id" => 2,
        ],
        [
            "name" => "Lewis Hamilton",
            "born" => "1985",
            "history" => "A seven-time World Champion, Hamilton holds records for the most wins, pole positions, and podium finishes in F1 history.",
            "teams_id" => 3,
        ],
        [
            "name" => "George Russell",
            "born" => "1998",
            "history" => "Ascending from Williams to Mercedes in 2022, Russell is considered one of F1's promising talents, achieving his first win in São Paulo in 2022.",
            "teams_id" => 3,
        ],
        [
            "name" => "Esteban Ocon",
            "born" => "1996",
            "history" => "The French driver won his first Grand Prix in Hungary in 2021 and is known for his strong defensive driving.",
            "teams_id" => 4,
        ],
        [
            "name" => "Pierre Gasly",
            "born" => "1996",
            "history" => "Having won the Italian Grand Prix in 2020 with AlphaTauri, Gasly is known for his quick pace and ability to capitalize on opportunities.",
            "teams_id" => 4,
        ],
        [
            "name" => "Kevin Magnussen",
            "born" => "1992",
            "history" => "Returning to Haas in 2022 after a year away from the sport, Magnussen has scored points and a pole position, known for his aggressive racing style.",
            "teams_id" => 5,
        ],
        [
            "name" => "Nico Hulkenberg",
            "born" => "1987",
            "history" => "Returning to a full-time seat in 2023 with Haas, Hulkenberg is experienced and holds the record for the most F1 starts without a podium.",
            "teams_id" => 5,
        ],
        [
            "name" => "Fernando Alonso",
            "born" => "1981",
            "history" => "A two-time World Champion, Alonso returned to F1 in 2021 with Alpine and moved to Aston Martin in 2023, known for his aggressive driving and strategic mind.",
            "teams_id" => 6,
        ],
        [
            "name" => "Lance Stroll",
            "born" => "1998",
            "history" => "Son of Aston Martin's owner, Stroll has shown flashes of speed with podium finishes and a pole position in his career.",
            "teams_id" => 6,
        ],
        [
            "name" => "Yuki Tsunoda",
            "born" => "2000",
            "history" => "The Japanese driver, known for his aggressive style and radio messages, continued with AlphaTauri into his third season in 2023.",
            "teams_id" => 7,
        ],
        [
            "name" => "Nyck de Vries",
            "born" => "1995",
            "history" => "Making his full-time debut in 2023 with AlphaTauri, de Vries is the 2019 Formula 2 Champion and has experience in various racing series.",
            "teams_id" => 7,
        ],
        [
            "name" => "Lando Norris",
            "born" => "1999",
            "history" => "Since debuting in 2019, Norris has shown remarkable talent and consistency, becoming McLaren's lead driver.",
            "teams_id" => 8,
        ],
        [
            "name" => "Oscar Piastri",
            "born" => "2001",
            "history" => "The 2021 Formula 2 champion, Piastri made his F1 debut in 2023 with McLaren, highly regarded for his success in junior categories.",
            "teams_id" => 8,
        ],
        [
            "name" => "Valtteri Bottas",
            "born" => "1989",
            "history" => "After several years as Hamilton's teammate at Mercedes, Bottas joined Alfa Romeo in 2022, bringing experience and leadership to the team.",
            "teams_id" => 9,
        ],
        [
            "name" => "Zhou Guanyu",
            "born" => "1999",
            "history" => "Making history as the first full-time Chinese F1 driver, Zhou debuted in 2022 and has shown promising performances.",
            "teams_id" => 9,
        ],
        [
            "name" => "Alex Albon",
            "born" => "1996",
            "history" => "After a year as a test and reserve driver, Albon returned to the grid with Williams in 2022, known for his overtaking abilities and versatility.",
            "teams_id" => 10,
        ],
        [
            "name" => "Logan Sargeant",
            "born" => "2001",
            "history" => "A rookie in 2023, Sargeant is the first full-time American F1 driver since 2015, stepping up from Formula 2 with promising results.",
            "teams_id" => 10,
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
