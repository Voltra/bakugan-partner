<?php

namespace Database\Seeders;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Helpers\BakuganHelper;
use App\Models\Bakugan;
use Database\Factories\BakuganFactory;
use Illuminate\Database\Seeder;

class NewVestroiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakugan = new BakuganHelper(BakuganSeason::NEW_VESTROIA);

        /**
         * @var $factory BakuganFactory
         */
        $factory = Bakugan::factory();

        /**
         * @param  BakuganAttribute[]  $attributes
         */
        $register = fn (string $name, array $attributes) => $factory->createMany($bakugan->dataForMany($name, $attributes));

        // cf. https://bakugandb.com/new-vestroia

        $register('Spin Ravenoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Neo Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Cross Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Elfin', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Minx Elfin', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Nemus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Mega Nemus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Ingram', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Master Ingram', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Wilda', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Thunder Wilda', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Percival', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Knight Percival', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Viper Helios', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Cyborg Helios', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Turbine Helios', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
        ]);

        $register('Helios MKII', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Elico', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Blast Elico', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Brontes', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Mega Brontes', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Alto Brontes', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Altair', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Wired', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Premo Vulcan', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hades', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Turbine Hades', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Fencer', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Leefram', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Spindle', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Klawgor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Scraper', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Foxbat', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Abis omega', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Atmos', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Freezer', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Stug', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Verias', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
        ]);

        $register('Moskeeto', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Vandarus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Spin Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Turbine Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Pyro Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hyper Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Ultra Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Dual Elfin', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Boost Ingram', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Cosmic Ingram', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Midnight Percival', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Alpha Percival', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Orbit Helios', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Mystic Elico', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Shadow Vulcan', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Myriad Hades', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);
    }
}
