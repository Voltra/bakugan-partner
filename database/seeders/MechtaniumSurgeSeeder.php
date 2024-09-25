<?php

namespace Database\Seeders;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Helpers\BakuganHelper;
use App\Models\Bakugan;
use Database\Factories\BakuganFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MechtaniumSurgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakugan = new BakuganHelper(BakuganSeason::MECHTANIUM_SURGE);

        /**
         * @var $factory BakuganFactory
         */
        $factory = Bakugan::factory();

        /**
         * @param BakuganAttribute[] $attributes
         */
        $register = fn(string $name, array $attributes) => $factory->createMany($bakugan->dataForMany($name, $attributes));

        // cf. https://bakugandb.com/mechtanium-surge

        $register("Titanium Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Trister", [ // Infinity Trister
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Wolfurio", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Taylean", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Boulderon", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Infinity Helios", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Bolcanon", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Krakenoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Krowll", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
        ]);

        $register("Spyron", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Vertexx", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Horridian", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Razenoid", [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutant Elfin", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Meta Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Iron Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Flash Ingram", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Cyclone Percival", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mercury Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutant Krakenoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutant Krowll", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutant Taylean", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutant Helios", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Aerogan", [
            BakuganAttribute::AQUOS,
            // BakuganAttribute::HAOS,
        ]);

        $register("Commandix Dragonoid", [
            BakuganAttribute::PYRUS,
        ]);

        $register("Fusion Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Radizen", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Reptak", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Jaakor", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Roxtor", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Orbeum", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Skytress", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Spatterix", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Balista", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Tremblar", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Worton", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Stronk", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Mutabrid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Kodokor", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Betadron", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        // Fun surprises:

        $register("Captain America", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
        ]);

        $register("Iron Man", [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
        ]);

        $register("Red Skull", [
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Spider-Man", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
        ]);

        $register("Wolverine", [
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Beembrak", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
        ]);

        $register("Blastakor", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
        ]);

        $register("Demolotoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Katapultra", [
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Laserix", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register("Lokux", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Strikor", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Triggerdon", [
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register("Vomerix", [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
        ]);

        $register("Blast Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register("Torpedor Dragonoid", [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
        ]);
    }
}
