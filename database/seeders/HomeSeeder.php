<?php

namespace Database\Seeders;

use App\Models\kidkinder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kidkinder::create([
            'img' => 'header.png',
            'address' => '123 Street, New York, USA',
            'email' =>  'info@example.com',
            'phone' => '+012 345 67890',
            'open_hours' => '08:00 AM - 05:00 PM',
            'open_days' => 'Sunday - Friday:',
            'desc' => 'Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo dolore.'
        ]);
    }
}
