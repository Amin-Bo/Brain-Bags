<?php
use App\Entreprise;
use Illuminate\Database\Seeder;

class EntreprisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Entreprise::class, 10)->create();
    }
}
