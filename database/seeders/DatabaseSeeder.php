<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoices;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Invoices::factory(10)->create();

        // Recupera todos os registros de Invoice do banco de dados
        $invoices = Invoices::all();

        // Acessa aleatoriamente um registro da coleção
        $randomInvoice = $invoices->random();


    }
}
