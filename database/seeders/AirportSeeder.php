<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    public function run()
    {
        DB::table('airports')->insert([
            ['name' => 'Aeroporto Internacional de Brasília - Presidente Juscelino Kubitschek', 'city' => 'Brasília', 'country' => 'Brasil', 'acronym' => 'BSB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de São Paulo/Guarulhos - Governador André Franco Montoro', 'city' => 'São Paulo', 'country' => 'Brasil', 'acronym' => 'GRU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional do Rio de Janeiro/Galeão - Antônio Carlos Jobim', 'city' => 'Rio de Janeiro', 'country' => 'Brasil', 'acronym' => 'GIG', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Belo Horizonte/Confins - Tancredo Neves', 'city' => 'Belo Horizonte', 'country' => 'Brasil', 'acronym' => 'CNF', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Salvador - Deputado Luís Eduardo Magalhães', 'city' => 'Salvador', 'country' => 'Brasil', 'acronym' => 'SSA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Fortaleza - Pinto Martins', 'city' => 'Fortaleza', 'country' => 'Brasil', 'acronym' => 'FOR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Recife/Guararapes - Gilberto Freyre', 'city' => 'Recife', 'country' => 'Brasil', 'acronym' => 'REC', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Natal - Governador Aluízio Alves', 'city' => 'Natal', 'country' => 'Brasil', 'acronym' => 'NAT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Belém/Val de Cans - Júlio Cezar Ribeiro', 'city' => 'Belém', 'country' => 'Brasil', 'acronym' => 'BEL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Manaus/Eduardo Gomes', 'city' => 'Manaus', 'country' => 'Brasil', 'acronym' => 'MAO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Porto Alegre - Salgado Filho', 'city' => 'Porto Alegre', 'country' => 'Brasil', 'acronym' => 'POA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Curitiba/Afonso Pena', 'city' => 'Curitiba', 'country' => 'Brasil', 'acronym' => 'CWB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Florianópolis - Hercílio Luz', 'city' => 'Florianópolis', 'country' => 'Brasil', 'acronym' => 'FLN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Vitória - Eurico de Aguiar Salles', 'city' => 'Vitória', 'country' => 'Brasil', 'acronym' => 'VIX', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Aracaju - Santa Maria', 'city' => 'Aracaju', 'country' => 'Brasil', 'acronym' => 'AJU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de São Luís - Marechal Cunha Machado', 'city' => 'São Luís', 'country' => 'Brasil', 'acronym' => 'SLZ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Palmas - Brigadeiro Lysias Rodrigues', 'city' => 'Palmas', 'country' => 'Brasil', 'acronym' => 'PMW', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Macapá - Alberto Alcolumbre', 'city' => 'Macapá', 'country' => 'Brasil', 'acronym' => 'MCP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Boa Vista - Atlas Brasil Cantanhede', 'city' => 'Boa Vista', 'country' => 'Brasil', 'acronym' => 'BVB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Porto Velho - Governador Jorge Teixeira', 'city' => 'Porto Velho', 'country' => 'Brasil', 'acronym' => 'PVH', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Cuiabá - Marechal Rondon', 'city' => 'Cuiabá', 'country' => 'Brasil', 'acronym' => 'CGB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aeroporto Internacional de Campo Grande - Pedro Pedrossian', 'city' => 'Campo Grande', 'country' => 'Brasil', 'acronym' => 'CGR', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
