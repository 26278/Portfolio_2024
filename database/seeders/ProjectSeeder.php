<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title'      => 'Journey of the DevKing',
            'subtitle'   => 'Game in Java met JavaFXGL library',
            'image'      => 'devking.jpg',
            'type'       => 'JavaFX game',
            'main_text'  => 'Tijdens mijn propedeuse jaar op de Hogeschool Leiden moest ik een game bouwen met drie andere Informatica studenten. Hiervoor moesten we de JavaFXGL library gebruiken, een verrijking op de JavaFX library waarmee je grafische weergaven in een client applicatie kan bouwen. Met behulp van JavaFXGL hebben we gebruik gemaakt van features zoals een introductie scherm, een pauze optie waar je de game instellingen kan veranderen en het maken van de  ‘game-mechanics’.
Ondanks dat de documentatie vaak niet duidelijk was of functies van voorafgaande versies bevatte is het ons gelukt om de shooter game werkend te krijgen.
Mijn aandeel in dit project zijn voornamelijk de ‘physics’, oftewel de logica dat de speler niet door de obstakels kan lopen of van de map af kan lopen, en dat kogels dus ook niet door de obstakels heen kunnen. Ook heb ik de levels gemaakt met behulp van Tiled en Adobe Photoshop zodat deze er visueel leuk uit zien en het spel moeilijker wordt naarmate de speler langer speelt. Ook heb ik veel tijd gespendeerd aan het repareren van de versiebeheer, dit is goed terug te zien bij de commits op GitHub.',
            'github'     => 'https://github.com/26278/Journey-Of-The-Dev-King',
            'extra_link' => '',

        ]);

        Project::create([
            'title'      => 'MaRequest',
            'subtitle'   => 'Laravel website voor charity-event, gebouwd in 1 week',
            'image'      => 'ma-request.jpg',
            'type'       => 'Laravel website',
            'main_text'  => 'Op het Mediacollege Amsterdam werd mij de vraag gesteld of ik mee wou werken aan een website voor MaRequest, een evenement met activiteiten om geld op te halen voor Make A Wish Foundation. Ondanks de hoge tijdsdruk leek dit mij een leuke uitdaging en een goede manier om meer te oefenen met Laravel. De website moest in 1 week klaar zijn en ik kreeg veel verschillende assets aangeleverd om de site te realiseren.

Om meer te oefenen met object georiënteerd programmeren wou ik de titels, teksten en afbeelding namen van de 9 verschillende activiteiten in een database plaatsen, maar op het moment dat ik de website live zette kwam ik erachter dat er geen database bij de hosting van school mogelijk was. Om dit op te lossen heb ik de activiteiten in een .json bestand geplaatst. Hierdoor kon ik nog steeds itereren door alle activiteiten in de weergaven en werden de activiteiten toch object georiënteerd weergegeven.
Bij dit project heb ik ook ervaren hoe het is om een week lang 12 uur per dag te werken aan hetzelfde project. Ik was enorm tevreden met het eindresultaat op dat moment, dus ik haalde er ook genoeg voldoening uit.',
            'github'     => 'https://github.com/26278/ma-request',
            'extra_link' => '',
        ]);

        Project::create([
            'title'      => 'JustPoké',
            'subtitle'   => 'Pokebowl order app gebouwd met Dart en Flutter',
            'image'      => 'pokebowl.jpg',
            'type'       => 'Flutter app',
            'main_text'  => 'Nadat ik ervaring heb opgedaan met HTML, CSS en JS kreeg ik les in hoe ik een app moest bouwen in Dart en Flutter. Het gebruiken van de Google componenten werkte erg makkelijk en vervolgens maakte ik er een gesture detector omheen, een soort event listener, waarmee alles interactief kan worden gemaakt.

Na de basisvaardigheden onder de knie te krijgen kreeg ik de opdracht om met drie andere leerlingen een app te bouwen waarmee klanten een pokébowl kunnen samenstellen en kunnen bestellen. Ik maakte een huisstijl met een logo, de About Us pagina en de Order pagina met bijbehorende styling. Hierdoor heb ik een leuk idee gekregen van wat de mogelijkheden zijn van Dart en Flutter, en zou ik hier in de toekomst met de documentatie en wat onderzoek mee aan de slag kunnen gaan om een app te realiseren.',
            'github'     => 'https://github.com/RobbeLee/JustPoke',
            'extra_link' => '',

        ]);

        Project::create([
            'title'      => 'Super Orange Graphic Design',
            'subtitle'   => 'Catalogs, magazine prints en social media posts',
            'image'      => 'superorange.jpg',
            'type'       => 'Graphic Design',
            'main_text'  => 'Super Orange Skateboarding is een skateboard merk van Nederlandse bodem met Canadese roots. Vanuit de skatewinkel kreeg ik de vraag of ik social media berichten kon ontwerpen voor promotie doeleinden van Super Orange en inmiddels maak ik flyers, stickers en catalogussen voor nieuwe oplagen van de skateboard decks.',
            'github'     => '',
            'extra_link' => '/super-orange',
        ]);
    }
}
