<?php

use App\Tipe;
use Illuminate\Database\Seeder;

class TipeDesainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe = new Tipe();
        $tipe->tipe = 'Logo';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Packaging';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Poster';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Brosur';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Menu';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Kartu Nama';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'X-Banner';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Mascot';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Voucher';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Membership Card';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Note Cover';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Invitation Card';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Crew Card';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Billboard';
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = 'Ticket';
        $tipe->save();
    }
}
