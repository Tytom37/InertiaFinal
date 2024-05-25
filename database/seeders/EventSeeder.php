<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Gale Under the Stars',
                'place' => 'Central Park Conservatory Garden, New York City, NY',
                'venue' => 'Central Park Conservatory Garden',
                'timestart' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                'timeend' => now()->addDays(rand(1, 30))->addHours(rand(13, 23))
            ],
            [
                'name' => 'Tech Innovators Summit',
                'place' => 'Silicon Valley Convention Center, San Jose, CA',
                'venue' => 'San Jose McEnery Convention Center',
                'timestart' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                'timeend' => now()->addDays(rand(1, 30))->addHours(rand(13, 23))
            ],
            [
                'name' => 'Art & Culture Extravaganza',
                'place' => 'The Louvre Museum, Paris, France',
                'venue' => 'The Louvre Museum',
                'timestart' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                'timeend' => now()->addDays(rand(1, 30))->addHours(rand(13, 23))
            ],
            [
                'name' => 'Global Sustainability Forum',
                'place' => 'Tokyo International Forum, Tokyo, Japan',
                'venue' => 'Tokyo International Forum',
                'timestart' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                'timeend' => now()->addDays(rand(1, 30))->addHours(rand(13, 23))
            ],
            [
                'name' => 'Wellness Weekend Retreat',
                'place' => 'Sedona Mago Retreat, Sedona, AZ',
                'venue' => 'Sedona Mago Retreat Center',
                'timestart' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                'timeend' => now()->addDays(rand(1, 30))->addHours(rand(13, 23))
            ],
            
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
