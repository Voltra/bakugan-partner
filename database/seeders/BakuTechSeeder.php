<?php

namespace Database\Seeders;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Helpers\BakuganHelper;
use App\Models\Bakugan;
use Database\Factories\BakuganFactory;
use Illuminate\Database\Seeder;

class BakuTechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bakugan = new BakuganHelper(BakuganSeason::BAKUTECH);

        /**
         * @var $factory BakuganFactory
         */
        $factory = Bakugan::factory();

        /**
         * @param  BakuganAttribute[]  $attributes
         */
        $register = fn (string $name, array $attributes) => $factory->createMany($bakugan->dataForMany($name, $attributes));

        // cf. https://bakugandb.com/bakutech

        $register('Flare Dragaon', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Gren Dragaon', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Rise Dragaon', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Kilan Leoness', [
            BakuganAttribute::HAOS,
        ]);

        $register('Shield Leoness', [
            BakuganAttribute::HAOS,
        ]);

        $register('Van Falco', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Tri Falco', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Gran Panzer', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Ken Panzer', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Destroy Munikis', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Zero Munikis', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Hollow Munikis', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Dio Sivac', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Sechs Tavanel', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::AQUOS,
            BakuganAttribute::HAOS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::SUBTERRA,
            BakuganAttribute::DARKUS,
        ]);

        $register('Seis Tavanel', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Acro Gezard', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Act Jile', [
            BakuganAttribute::HAOS,
        ]);

        $register('Blan Shoult', [
            BakuganAttribute::HAOS,
        ]);

        $register('Bone Skuls', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Borg Mahisas', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Butta Gill', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Co Tanker', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Dagger Odos', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Dive Fujo', [
            BakuganAttribute::AQUOS,
        ]);

        $register('En Glide', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Flame Aigle', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Gavli Anacon', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Gif Jinryu', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Gigan Taures', [
            BakuganAttribute::HAOS,
        ]);

        $register('Goon Icarus', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Gravity Nome', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Gus Burnan', [
            BakuganAttribute::PYRUS,
        ]);

        $register('G-Ganadora', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Hagger Dguma', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Hammer Cannon', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Kachia Gell', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Kal Lucan', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Killer Volca', [
            BakuganAttribute::AQUOS,
        ]);

        $register("Let's Gao", [
            BakuganAttribute::PYRUS,
        ]);

        $register('Mika Laurel', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Nata Nagina', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Saint Aquas', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Sea Slug', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Sha Nozchi', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Twin Doubrew', [
            BakuganAttribute::AQUOS,
        ]);

        $register('War Cry', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Well Galow', [
            BakuganAttribute::HAOS,
        ]);

        $register('Win Dmill', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Zak Jaguard', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Jigen Dragaon', [
            BakuganAttribute::PYRUS,
            BakuganAttribute::VENTUS,
            BakuganAttribute::DARKUS,
        ]);

        $register('Ogre Leoness', [
            BakuganAttribute::HAOS,
        ]);

        $register('Lashow Falco', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Zeta Munikis', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Barri Beyond', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Gaga Horus', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Go Garyu', [
            BakuganAttribute::HAOS,
        ]);

        $register('Jigen Garyu', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Go Fudo', [
            BakuganAttribute::HAOS,
        ]);

        $register('Jiba Fudo', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Jiba Dragaon', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Naga Daja', [
            BakuganAttribute::HAOS,
        ]);

        $register('Nino Daishow', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Os Press', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Sanzu Hollowbos', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Tor Nado', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Yodan Shifour', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Made Lastboss', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Rekka Hiryu', [
            BakuganAttribute::PYRUS,
        ]);

        $register('Hado Kaio', [
            BakuganAttribute::AQUOS,
        ]);

        $register('Ogon Houoh', [
            BakuganAttribute::HAOS,
        ]);

        $register('Shippu Zeku', [
            BakuganAttribute::VENTUS,
        ]);

        $register('Koppa Kudaku', [
            BakuganAttribute::SUBTERRA,
        ]);

        $register('Yasha Tagaras', [
            BakuganAttribute::DARKUS,
        ]);

        $register('Ikki Tosen', [
            BakuganAttribute::HAOS,
        ]);
    }
}
