<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate nomer HP secara otomatis
        $char = '0123456789';
        $charlen = strlen($char);
        // Membuat data dummy secara random
        for ($i=0;$i<10;$i++){
            $str = '082';
            for ($j=0;$j<9;$j++){
                $str .= $char[rand(0, $charlen-1)];
            }
            Anggota::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'hp' => $str,
                'address' => fake()->address()
            ]);
        }
    }
}
