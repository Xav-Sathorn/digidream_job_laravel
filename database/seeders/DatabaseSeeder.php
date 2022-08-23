<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(6)->create();

        Listing::factory(6)->create();

        /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@acme.com',
            'website' => 'http://www.acme.com',
            'description' => 'Egere expediendum autem postea longe nefariis qui ad subito egere ad est nefariis egere ad ad nefariis ideo vocibus heiulans qui ideo vivus homines sunt orsi subito expediendum quidam nefariis.'
        ]);
        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email@stark.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Egere expediendum autem postea longe nefariis qui ad subito egere ad est nefariis egere ad ad nefariis ideo vocibus heiulans qui ideo vivus homines sunt orsi subito expediendum quidam nefariis.'
        ]); */
    }
}
