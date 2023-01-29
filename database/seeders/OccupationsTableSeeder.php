<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = [
            ['name' => 'Administrativa'],
            ['name' => 'Arquitetura'],
            ['name' => 'Artes / Música / Teatro / Cultural'],
            ['name' => 'Assistência Técnica'],
            ['name' => 'Atendimento'],
            ['name' => 'Auditoria'],
            ['name' => 'Bancária / Mercado Financeiro'],
            ['name' => 'Beleza / Estética'],
            ['name' => 'Biblioteconomia'],
            ['name' => 'Ciências Agrárias / Agribusiness'],
            ['name' => 'Comercial / Vendas'],
            ['name' => 'Comunicação / Publicidade'],
            ['name' => 'Comércio Exterior / Relações Internacionais'],
            ['name' => 'Construção Civil'],
            ['name' => 'Controle e Sistema de Qualidade'],
            ['name' => 'Educação / Ensino'],
            ['name' => 'Enfermagem'],
            ['name' => 'Engenharia'],
            ['name' => 'Engenharia Civil'],
            ['name' => 'Engenharia Eletrônica / Computação'],
            ['name' => 'Engenharia Mecânica / Mecatrônica'],
            ['name' => 'Engenharia de Alimentos'],
            ['name' => 'Engenharia de Materiais / Química'],
            ['name' => 'Engenharia de Produção'],
            ['name' => 'Esportes'],
            ['name' => 'Farmácia'],
            ['name' => 'Financeira'],
            ['name' => 'Fisioterapia'],
            ['name' => 'Fonoaudiologia'],
            ['name' => 'Gráfica'],
            ['name' => 'Hotelaria'],
            ['name' => 'Idiomas'],
            ['name' => 'Industrial'],
            ['name' => 'Informática / Internet / T.I.'],
            ['name' => 'Jornalismo'],
            ['name' => 'Jurídica'],
            ['name' => 'Logística'],
            ['name' => 'Marketing'],
            ['name' => 'Medicina'],
            ['name' => 'Meio Ambiente / Biologia'],
            ['name' => 'Moda'],
            ['name' => 'Nutrição'],
            ['name' => 'ONGs / Terceiro Setor'],
            ['name' => 'Odontologia'],
            ['name' => 'Psicologia'],
            ['name' => 'Química'],
            ['name' => 'Recursos Humanos'],
            ['name' => 'Saúde'],
            ['name' => 'Segurança Pessoal / Patrimonial'],
            ['name' => 'Segurança do Trabalho'],
            ['name' => 'Seguros'],
            ['name' => 'Serviço Social'],
            ['name' => 'Suprimentos / Compras'],
            ['name' => 'Telecomunicações'],
            ['name' => 'Telemarketing / Call Center'],
            ['name' => 'Terapia Ocupacional'],
            ['name' => 'Transportes'],
            ['name' => 'Turismo'],
            ['name' => 'Veterinária'],
        ];

        foreach ($occupations as $occupation) {
            Occupation::create($occupation);
        }
    }
}
