<?php

namespace Database\Seeders;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Helpers\BakuganHelper;
use App\Models\Bakugan;
use Database\Factories\BakuganFactory;
use Illuminate\Database\Seeder;

class GundalianInvadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakugan = new BakuganHelper(BakuganSeason::GUNDALIAN_INVADERS);

        /**
         * @var $factory BakuganFactory
         */
        $factory = Bakugan::factory();

        /**
         * @param  BakuganAttribute[]  $attributes
         */
        $register = fn (string $name, array $attributes) => $factory->createMany($bakugan->dataForMany($name, $attributes));

        // cf. https://bakugandb.com/gundalian-invaders

        $register('Zeon Hylash', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Dartaak', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Helix Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lumino Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Blitz Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Akwimos', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Aranaut', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hawktor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Coredem', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Linehalt', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Rubanoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Phosphos', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Contestir', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Plitheon', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Avior', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Krakix', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lythirus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lumagrowl', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Strikeflier', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Sabator', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Dharak', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Phantom Dharak', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Aksela', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Damakor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Fangoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Gren', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Hakapoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Jetro', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lockanoid', [
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Luxtor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Megarus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Nastix', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Olifus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Ramdol', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Rickoran', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Scaboid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Snapzoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Spidaro', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Apexeon', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Breezak', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Buz hornix', [
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Clawsaurus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Cobrakus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Farakspin', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Glotronoid', [
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Gyrazor', [
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Irisca', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
        ]);

        $register('Longfly', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lumitroid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
        ]);

        $register('Merlix', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Mystic Chancer', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Raptorix', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Splight', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Sprayzer', [
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Venoclaw', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
        ]);

        $register('Volt Elezoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
        ]);

        $register('Ziperator', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Quakix Gorem', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Quake Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Chance Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Sky & Gaia Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Battalix Dragonoid', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Brawlacus Dharak', [
            BakuganAttribute::DARKUS,
        ]);
    }
}
