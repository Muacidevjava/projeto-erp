<?php

namespace Database\Seeders;

use App\Models\ContaCorrente;
use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            StatusSeeder::class,
            CategoriaSeeder::class,
            UnidadeSeeder::class,
            BancoSeeder::class,
            TipoContaCorrenteSeeder::class,
            ContaCorrenteSeeder::class,
            ProdutoSeeder::class,
            ClienteSeeder::class,
            FornecedorSeeder::class,
        ]);
    }
}
