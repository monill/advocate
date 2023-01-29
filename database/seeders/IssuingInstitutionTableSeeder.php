<?php

namespace Database\Seeders;

use App\Models\IssuingInstitution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssuingInstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions = [
            ['name' => 'ABNC - Academia Brasileira de Neurocirurgia'],
            ['name' => 'CGPI - Coordenação-Geral de Privilégios e Imunidades'],
            ['name' => 'CGPI/DUREX/DPF - Coordenação Geral de Polícia de Imigração da Polícia Federal'],
            ['name' => 'CGPMAF - Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras'],
            ['name' => 'CNIG - Conselho Nacional de Imigração'],
            ['name' => 'CNT - Carteira Nacional de Habilitação'],
            ['name' => 'COREN - Conselho Regional de Enfermagem'],
            ['name' => 'CRA - Conselho Regional de Administração'],
            ['name' => 'CRAS - Conselho Regional de Assistentes Sociais'],
            ['name' => 'CRB - Conselho Regional de Biblioteconomia'],
            ['name' => 'CRC - Conselho Regional de Contabilidade'],
            ['name' => 'CRE - Conselho Regional de Estatística'],
            ['name' => 'CREA - Conselho Regional de Engenharia Arquitetura e Agronomia'],
            ['name' => 'CRECI - Conselho Regional de Corretores de Imóveis'],
            ['name' => 'CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional'],
            ['name' => 'CRF - Conselho Regional de Farmácia'],
            ['name' => 'CRM - Conselho Regional de Medicina'],
            ['name' => 'CRMV - Conselho Regional de Medicina Veterinária'],
            ['name' => 'CRN - Conselho Regional de Nutrição'],
            ['name' => 'CRO - Conselho Regional de Odontologia'],
            ['name' => 'CRP - Conselho Regional de Psicologia'],
            ['name' => 'CRPRE - Conselho Regional de Profissionais de Relações Públicas'],
            ['name' => 'CRQ - Conselho Regional de Química'],
            ['name' => 'CRRC - Conselho Regional de Representantes Comerciais'],
            ['name' => 'CSC - Carteira Sede Carpina de Pernambuco'],
            ['name' => 'CTPS - Carteira de Trabalho e Previdência Social'],
            ['name' => 'DIC - Diretoria de Identificação Civil'],
            ['name' => 'DIREX - Diretoria-Executiva'],
            ['name' => 'DPMAF - Divisão de Polícia Marítima, Área e de Fronteiras'],
            ['name' => 'DPT - Departamento de Polícia Técnica Geral'],
            ['name' => 'FIPE - Fundação Instituto de Pesquisas Econômicas'],
            ['name' => 'FLS - Fundação Lyndolpho Silva'],
            ['name' => 'GOVGO - Governo do Estado de Goiás'],
            ['name' => 'I CLA - Carteira de Identidade Classista'],
            ['name' => 'IFP - Instituto Félix Pacheco'],
            ['name' => 'IGP - Instituto Geral de Perícias'],
            ['name' => 'IICCECF/RO - Instituto de Identificação Civil e Criminal Engrácia da Costa Francisco de Rondônia'],
            ['name' => 'IIMG - Inter-institutional Monitoring Group'],
            ['name' => 'IML - Instituto Médico-Legal'],
            ['name' => 'IPF - Instituto Pereira Faustino'],
            ['name' => 'MAE - Ministério da Aeronáutica'],
            ['name' => 'MEX - Ministério do Exército'],
            ['name' => 'MMA - Ministério da Marinha'],
            ['name' => 'OAB - Ordem dos Advogados do Brasil'],
            ['name' => 'OMB - Ordens dos Músicos do Brasil'],
            ['name' => 'PCMG - Policia Civil do Estado de Minas Gerais'],
            ['name' => 'PMMG - Polícia Militar do Estado de Minas Gerais'],
            ['name' => 'POF ou DPF - Polícia Federal'],
            ['name' => 'POM - Polícia Militar'],
            ['name' => 'SDS - Secretaria de Defesa Social (Pernambuco)'],
            ['name' => 'SECC - Secretaria de Estado da Casa Civil'],
            ['name' => 'SEJUSP - Secretaria de Estado de Justiça e Segurança Pública'],
            ['name' => 'SES ou EST - Carteira de Estrangeiro'],
            ['name' => 'SESP - Secretaria de Estado da Segurança Pública'],
            ['name' => 'SJS - Secretaria da Justiça e Segurança'],
            ['name' => 'SJTC - Secretaria da Justiça do Trabalho e Cidadania'],
            ['name' => 'SJTS - Secretaria da Justiça do Trabalho e Segurança'],
            ['name' => 'SNJ - Secretaria Nacional de Justiça / Departamento de Estrangeiros'],
            ['name' => 'SPTC - Secretaria de Polícia Técnico-Científica'],
            ['name' => 'SSP/AC'],
            ['name' => 'SSP/AL'],
            ['name' => 'SSP/AM'],
            ['name' => 'SSP/AP'],
            ['name' => 'SSP/BA'],
            ['name' => 'SSP/CE'],
            ['name' => 'SSP/DF'],
            ['name' => 'SSP/ES'],
            ['name' => 'SSP/GO'],
            ['name' => 'SSP/MA'],
            ['name' => 'SSP/MG'],
            ['name' => 'SSP/MS'],
            ['name' => 'SSP/MT'],
            ['name' => 'SSP/PA'],
            ['name' => 'SSP/PB'],
            ['name' => 'SSP/PE'],
            ['name' => 'SSP/PI'],
            ['name' => 'SSP/PR'],
            ['name' => 'SSP/RJ'],
            ['name' => 'SSP/RN'],
            ['name' => 'SSP/RO'],
            ['name' => 'SSP/RR'],
            ['name' => 'SSP/RS'],
            ['name' => 'SSP/SC'],
            ['name' => 'SSP/SE'],
            ['name' => 'SSP/SP'],
            ['name' => 'SSP/TO'],
        ];

        foreach ($institutions as $institution) {
            IssuingInstitution::create($institution);
        }
    }
}
