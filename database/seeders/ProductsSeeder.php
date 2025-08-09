<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_products')->insert([
            'name' => 'Tela',
            'price' => 103.46,
            'description' => 'Tele de telefone para trocas.',
            'created_at' => now()->subDays(100)->addHours(2),
            'updated_at' => now()->addDays(5)->addHours(30)
        ]);

        DB::table('table_products')->insert([
            'name' => 'Caneta Azul',
            'price' => 2.37,
            'description' => 'Caneta de cor azul com sistema de clique',
            'created_at' => now()->subDays(23)->addHours(8),
            'updated_at' => now()->addDays(9)->addHours(7)
        ]);

        DB::table('table_products')->insert([
            'name' => 'Caderno',
            'price' => 10.67,
            'description' => 'Caderno espiral de capa preta com 200 folhas',
            'created_at' => now()->subDays(18)->addHours(13),
            'updated_at' => now()->addDays(13)->addHours(3)
        ]);
    }
}
