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
            "history" => "Red Bull Racing, based in Milton Keynes, England, has been a prominent team since its inception, winning four consecutive drivers' and constructors' championships from 2010 to 2013 with Sebastian Vettel. The team is known for its aggressive marketing and competitive performance.",
            "summary" => "Known for their competitive edge and marketing flair, Red Bull has been a top contender with multiple championship wins.",
            "color_hex" => "011629"
        ],
        [
            "name" => "Scuderia Ferrari",
            "origin" => "1950",
            "history" => "he most storied and historic team in Formula 1, Ferrari, based in Maranello, Italy, has competed in every season of the championship's history. They have the most constructors' championships and are known for their passionate fanbase, known as the Tifosi.",
            "summary" => "Ferrari, the most iconic F1 team, boasts a rich history of success and a global fanbase.",
            "color_hex" => "DC0000"
        ],
        [
            "name" => "Mercedes-AMG Petronas Formula One Team",
            "origin" => "1954 (as Mercedes), re-entered in 2010",
            "history" => "Based in Brackley, England, Mercedes returned to Formula 1 in 2010, taking over the Brawn GP team. They have dominated the sport since 2014, winning multiple constructors' championships and drivers' championships with Lewis Hamilton and Nico Rosberg.",
            "summary" => "A dominant force in modern F1, Mercedes combines engineering excellence with top driving talent.",
            "color_hex" => "00D2BE"
        ],
        [
            "name" => "Alpine F1 Team",
            "origin" => "2021 (as Alpine, previously known as Renault F1 Team)",
            "history" => "Alpine F1 Team, the racing arm of the French automotive manufacturer Alpine, is based in Enstone, England, and Viry-Châtillon, France. It represents Renault's latest foray into F1, focusing on promoting the Alpine sports car brand.",
            "summary" => "Alpine, representing Renault's racing heritage, combines French engineering prowess with competitive ambitions.",
            "color_hex" => "0090FF"
        ],
        [
            "name" => "Haas F1 Team",
            "origin" => "1986",
            "history" => "The first American-led F1 team since 1986, Haas F1 Team is based in Kannapolis, United States, and Banbury, England. Founded by industrialist Gene Haas, the team aims to be competitive by leveraging technical partnerships.",
            "summary" => "Haas F1 Team brings American ambition to the global stage, focusing on strategic partnerships for competitive performance.",
            "color_hex" => "9c9c9c"
        ],
        [
            "name" => "Aston Martin F1 Team",
            "origin" => "2021 (as Aston Martin, previously raced under different names including Jordan, Force India, and Racing Point)",
            "history" => "The Aston Martin F1 Team, based in Silverstone, England, marked the return of the Aston Martin brand to Formula 1 racing after decades. The team is known for its British racing green livery and ambitious goals.",
            "summary" => "Aston Martin re-entered F1 with a rich history and aims to climb to the top ranks with significant investment.",
            "color_hex" => "006F62"
        ],
        [
            "name" => "AlphaTauri",
            "origin" => "2020 (previously raced as Toro Rosso from 2006)",
            "history" => "Scuderia AlphaTauri, based in Faenza, Italy, serves as Red Bull Racing's sister team. Renamed to promote Red Bull's fashion brand, the team aims to nurture young talent and compete at a high level.",
            "summary" => "AlphaTauri, Red Bull's sister team, combines youth development with competitive racing under a fashion-forward brand.",
            "color_hex" => "2B4562"
        ],
        [
            "name" => "McLaren F1 Team",
            "origin" => "1966",
            "history" => "Based in Woking, England, McLaren is one of the oldest and most successful teams in F1, with multiple championship wins. Known for innovation and a strong racing heritage, they have been home to many legendary drivers.",
            "summary" => "McLaren's rich heritage in F1 is marked by innovation, legendary drivers, and numerous victories.",
            "color_hex" => "FF8700"
        ],
        [
            "name" => "Alfa Romeo Racing",
            "origin" => "2019 (as Alfa Romeo Racing, in partnership with Sauber)",
            "history" => "Alfa Romeo Racing, operated by Sauber Motorsport, is based in Hinwil, Switzerland. The team competes under the Alfa Romeo name, bringing back a historic marque to modern F1 with a focus on Italian flair and engineering collaboration.",
            "summary" => "Alfa Romeo Racing blends historic charm with modern engineering through its partnership with Sauber.",
            "color_hex" => "900000"
        ],
        [
            "name" => "Williams Racing",
            "origin" => "1977",
            "history" => "Based in Grove, England, Williams Racing is one of the most successful teams in F1 history, known for its family-run beginnings, innovation, and multiple championships in the 1980s and 1990s.",
            "summary" => "Williams Racing, a family-founded team, has a storied legacy marked by innovation and success.",
            "color_hex" => "005AFF"
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
