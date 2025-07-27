<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
{
    Event::create([
        'title' => 'Tech Conference 2025',
        'description' => 'A large-scale conference focusing on emerging tech trends.',
        'date' => '2025-08-15',
    ]);

    Event::create([
        'title' => 'Startup Meetup',
        'description' => 'An event for startups to pitch and network.',
        'date' => '2025-09-05',
    ]);

    Event::create([
        'title' => 'AI Workshop',
        'description' => 'Hands-on training for AI tools and frameworks.',
        'date' => '2025-10-12',
    ]);
}
}
