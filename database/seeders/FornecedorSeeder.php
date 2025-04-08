<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::Create([
            'razao_social'  => 'Fornecedor teste',
            'cnpj'          => '09689284000140',
            'telefone'      => '9899992466',
            'email'         => 'fornecedor@gmail.com',
            'cep'           => '65074410',
            'logradouro'    => 'Rua José do Patrocínio',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cohama',
            'ibge'          => '2111300',
            'status_id'     =>  config("constantes.status.ATIVO")
        ]);
        Fornecedor::create([
            'razao_social'  => 'Distribuidora Maranhão LTDA',
            'cnpj'          => '12345678000190',
            'telefone'      => '98988776655',
            'email'         => 'contato@distribuidora-ma.com',
            'cep'           => '65058000',
            'logradouro'    => 'Avenida dos Holandeses',
            'numero'        => '1500',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'Sala 305',
            'bairro'        => 'Calhau',
            'ibge'          => '2111300',
            'status_id'     => config("constantes.status.ATIVO")
        ]);

        Fornecedor::create([
            'razao_social'  => 'Auto Peças Brasil EIRELI',
            'cnpj'          => '11442233000155',
            'telefone'      => '98991234567',
            'email'         => 'vendas@autopecasbr.com',
            'cep'           => '65062000',
            'logradouro'    => 'Av. Guajajaras',
            'numero'        => '500',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'Galpão B',
            'bairro'        => 'Turu',
            'ibge'          => '2111300',
            'status_id'     => config("constantes.status.ATIVO")
        ]);
    }
}
