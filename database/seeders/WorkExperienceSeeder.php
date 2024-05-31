<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkExperience;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkExperience::create([
            'company'     => 'GumGum',
            'image'       => 'gumgum.jpg',
            'title'       => 'Creative Front-end Developer',
            'employee'    => true,
            'header_text' => 'GumGum is een Contextual Intelligence bedrijf met een van de grootste marktplaatsen voor rich media en video-advertenties.',
            'main_text'   => 'Bij GumGum bouwde ik responsive advertentie banners met HTML en CSS en maakte ik animaties met Javascript. Ook gebruikte ik veel Adobe Photoshop om de gekregen assets te bewerken en te exporteren. Er was vaak veel vrijheid in hoe de advertenties het beste responsive weergeven konden worden, dus naar mate ik beter werd in het werk kwam ik met steeds creatievere oplossingen.',
        ]);

        WorkExperience::create([
            'company'     => 'Activate your Business',
            'image'       => 'activateyourbusiness.jpg',
            'title'       => 'Back-end stagiair',
            'employee'    => true,
            'header_text' => 'Activate your Business is een jonge onderneming waar doelgerichte websites, apps en software op maat worden gebouwd met oog voor gebruiksvriendelijkheid.',
            'main_text'   => 'Bij Activate your Business heb ik veel ervaring opgedaan in het programmeren met PHP in het framework Laravel en in Wordpress. De overgang van het maken van visuele oplossingen in front-end naar het maken van slim doordachte back-end features voelde aan als een stap in de goede richting. Het was moeilijker en uitdagender, maar toen ik bijvoorbeeld een web forum met berichten, bericht categorieën en subcategorieën werkend had gekregen werd ik enorm enthousiast.',
        ]);

        WorkExperience::create([
            'company'     => 'Wood Be Hero Skateshop',
            'image'       => 'woodbehero.jpg',
            'title'       => 'Graphic designer & IT guy',
            'employee'    => true,
            'header_text' => 'Wood Be Hero Skateshop in Oegstgeest is de lokale skateboard winkel waar mijn sport uit de hand is gelopen tot een levensstijl. Inmiddels werk ik er twee jaar.',
            'main_text'   => 'Bij Wood Be Hero onderhoud ik de webshop en zorg ik ervoor dat alle producten makkelijk gevonden kunnen worden op Google. Daarnaast ontwerp ik regelmatig catalogussen, flyers en social media berichten in Adobe Photoshop. Ik geef in het weekend vaak skate-lessen aan kinderen tussen de 6 en 16 jaar, en ik sta regelmatig achter de balie in de winkel om klanten te helpen vinden van het skateboard dat perfect bij hun past.',
        ]);

        WorkExperience::create([
            'company'     => 'Alfons Bouw.nl',
            'image'       => 'alfonsbouw.jpg',
            'title'       => 'Web developer',
            'employee'    => false,
            'header_text' => 'Alfons Bouw is een aannemer voor verschillende producten zoals uitbouwen, dakkapellen, kozijnen, enzovoort. De website kon een nieuwe uitstraling gebruiken en daar heb ik bij geholpen.',
            'main_text'   => 'Alfons Bouw had al een Wordpress website die extern onderhouden werd, maar de site kon een nieuwe uitstraling met nieuwe foto’s en teksten gebruiken. Door dit project heb ik een hoop geleerd over WordPress.',
        ]);
    }
}
