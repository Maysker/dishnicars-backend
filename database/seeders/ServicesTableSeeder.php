<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        Service::insert([
            [
                'name' => 'Depannage 24/7',
                'description' => 'Onze evacuatiedienst is altijd klaar om te helpen, dag en nacht. Een efficiënte evacuatie tot gekwalificeerde ondersteuning - we zijn er altijd wanneer u ons nodig heeft.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aankoop & Verkoop',
                'description' => 'Bij ons kunt u zowel tweedehands auto\'s kopen als verkopen. Wij bieden een betrouwbare service, met een zorgvuldig geselecteerd aanbod voor kopers en een volledige verkoopervaring voor verkopers, waarbij tevredenheid en vertrouwen centraal staan bij elke transactie.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Onderhoud + Keuring',
                'description' => 'Zorg voor de veiligheid en de naleving van uw auto met onze professionele voorbereiding en begeleiding bij de autokeuring. Wij zorgen ervoor dat uw auto voldoet aan alle standaarden en wettelijke eisen.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Car wrapping met gekleurde folies',
                'description' => 'Transformeer uw auto met een keuze uit diverse kleuren en texturen die niet alleen het uiterlijk vernieuwen, maar ook beschermen tegen lichte krassen en verkleuring. Dit is de perfecte oplossing voor degenen die regelmatig hun stijl willen veranderen of de originele lak willen beschermen.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bescherming van auto\'s met steenslagfolie',
                'description' => 'Bied uw auto langdurige bescherming tegen wegschade door schade van grind, wegafval en zout te voorkomen. Onze film is onzichtbaar op de carrosserie en behoudt de kleur niet, waardoor het originele uiterlijk behouden blijft en de waarde van uw auto wordt verhoogd bij doorverkoop.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Carrosseriepolijsten met keramiek en vloeibaar glas',
                'description' => 'Bied uw auto het hoogste niveau aan glans en bescherming. Het aanbrengen van een keramische coating of vloeibaar glas creëert een duurzame barrière tegen corrosie, ultraviolet, chemicaliën en lichte krassen, waardoor de auto gemakkelijker te onderhouden is en het uiterlijk jarenlang behouden blijft.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
