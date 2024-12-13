<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\VerificacaoEmpresa;
use App\Models\Empresa;
use App\Models\Empresa_filial;



class PdfController extends Controller
{



        public function gerarPdf(VerificacaoEmpresa $verificacao_empresa, $id)
        {
            $VerificacaoEmpresa = VerificacaoEmpresa::findOrFail($id);
            // Dados para impressão (passados diretamente no controlador)

            $data = [
                'ano' => $verificacao_empresa->ano,
                'numero_pasta' => $verificacao_empresa->numero_pasta,
                'nome_fantasia' => $verificacao_empresa->nome_fantasia,
                'inscricao_municipal' => $verificacao_empresa->inscricao_municipal,
                'area_total' => $verificacao_empresa->area_total,
                'area_utilizada' => $verificacao_empresa->area_utilizada,
                'data_validade' => $verificacao_empresa->data_validade,
                'created_at' => $verificacao_empresa->created_at,
                'updated_at' => $verificacao_empresa->updated_at,
            ];
    
            // Gere o PDF usando uma view
            $pdf = Pdf::loadView('pages.impressao.pdfempresa', ['VerificacaoEmpresa' => $VerificacaoEmpresa]);

            // Retorne o PDF gerado como um arquivo para download ou exibição
            return $pdf->stream('relatorio.pdf');
    
        }

        public function ImprimirEmpresa(Empresa $empresas, $id)
        {
            $empresas = Empresa::findOrFail($id);
            // Dados para impressão (passados diretamente no controlador)

            $data = [
                'nome_empresa' => $empresas->nome_empresa,
                'nome_dono' => $empresas->nome_dono,
                'email' => $empresas->email,
                'telefone' => $empresas->telefone,
                'whatsapp' => $empresas->whatsapp,
                'created_at' => $empresas->created_at,
                'updated_at' => $empresas->updated_at,
            ];
    
            // Gere o PDF usando uma view
            $pdf = Pdf::loadView('pages.impressao.impressaoagenda', ['empresa' => $empresas]);

            // Retorne o PDF gerado como um arquivo para download ou exibição
            return $pdf->stream('relatorio.pdf');
    
        }


        public function ImprimirEmpresaFilial(Empresa_filial $empresa_filiais, $id)
        {
            $empresa_filiais = Empresa_filial::findOrFail($id);
            // Dados para impressão (passados diretamente no controlador)

            $data = [
                'nome_empresa' => $empresa_filiais->nome_empresa,
                'nome_dono' => $empresa_filiais->nome_dono,
                'email' => $empresa_filiais->email,
                'telefone' => $empresa_filiais->telefone,
                'whatsapp' => $empresa_filiais->whatsapp,
                'created_at' => $empresa_filiais->created_at,
                'updated_at' => $empresa_filiais->updated_at,
            ];
    
            // Gere o PDF usando uma view
            $pdf = Pdf::loadView('pages.impressao.impressaoagendafilial', ['empresa_filial' => $empresa_filiais]);

            // Retorne o PDF gerado como um arquivo para download ou exibição
            return $pdf->stream('relatorio.pdf');
    
        }


}