<?php

use Illuminate\Database\Seeder;
use App\Announ;
class AnnounSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announ = new Announ();
        $announ ->title="Megahea asi";
        $announ ->introText="Super tutvustav tekst. Vaimustav";
        $announ ->category="muu";
        $announ ->price=5.5;
        $announ->save();

        $announ = new Announ();
        $announ ->title="Asi";
        $announ ->introText="Super tutvustav tekst. Vaimustav";
        $announ ->category="muu";
        $announ ->price=5.5;
        $announ->save();

        $announ = new Announ();
        $announ ->title="Miki";
        $announ ->introText="Super tutvustav tekst. Vaimustav";
        $announ ->category="muu";
        $announ ->price=5.5;
        $announ->save();

        $announ = new Announ();
        $announ ->title="Mingi X asi";
        $announ ->introText="Super tutvustav tekst. Vaimustav";
        $announ ->category="muu";
        $announ ->price=5.5;
        $announ->save();

        $announ = new Announ();
        $announ ->title="Hea teade";
        $announ ->introText="Super tutvustav tekst. Vaimustav";
        $announ ->category="muu";
        $announ ->price=5.5;
        $announ->save();

    }
}
