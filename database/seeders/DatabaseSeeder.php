<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@igreja.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Editor de Conteúdo',
            'email' => 'editor@igreja.com',
            'role' => 'editor',
        ]);

        User::factory()->create([
            'name' => 'Membro',
            'email' => 'membro@igreja.com',
            'role' => 'member',
        ]);

        $this->call(SermonSeeder::class);
    }
}

