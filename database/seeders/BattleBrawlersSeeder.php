<?php

namespace Database\Seeders;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Helpers\BakuganHelper;
use App\Models\Bakugan;
use Database\Factories\BakuganFactory;
use Illuminate\Database\Seeder;

class BattleBrawlersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakugan = new BakuganHelper(BakuganSeason::BATTLE_BRAWLERS);

        /**
         * @var $factory BakuganFactory
         */
        $factory = Bakugan::factory();

        /**
         * @param  BakuganAttribute[]  $attributes
         */
        $register = fn (string $name, array $attributes) => $factory->createMany($bakugan->dataForMany($name, $attributes));

        // cf. https://bakugandb.com/battle-brawlers

        $register('Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Delta Dragonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Preyas', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Preyas Diablo', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Preyas II', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Tigrerra', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Blade Tigrerra', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Skyress', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Storm Skyress', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Gorem', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hammer Gorem', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hydranoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Dual Hydranoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Alpha Hydranoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Fourtress', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Sirenoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Tentaclear', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS, // JP
        ]);

        $register('Harpus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Cycloid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Reaper', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Centipoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Falconeer', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Fear ripper', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Griffon', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Juggernoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Laserman', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Robotallion', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Saurus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Serpenoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Stinglash', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Gargonoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Hynoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Manion', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Mantris', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Siege', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Terrorclaw', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Tuskor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Bee striker', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('El condor', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Limulus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Monarus', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Rattleoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Ravenoid', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Warius', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Wormquake', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Apollonir', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Frosch', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Lars lion', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Oberus', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Clayf', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Exedra', [
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Wavern', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Naga', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
            BakuganAttribute::ATTRIBUTELESS,
        ]);
    }
}
