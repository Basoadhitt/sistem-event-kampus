<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        {
        $this->call(EventSeeder::class);
        }
        Event::create([
            'nama_event' => 'Seminar Teknologi',
            'deskripsi' => 'Seminar tentang teknologi terbaru',
            'tanggal_event' => '2026-01-10',
            'lokasi' => 'Aula Kampus',
        ]);

        Event::create([
            'nama_event' => 'Workshop Web',
            'deskripsi' => 'Workshop Laravel dasar',
            'tanggal_event' => '2026-01-15',
            'lokasi' => 'Lab Komputer',
        ]);
    }
}
