<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\VerificacaoEmpresa;
use App\Models\Empresa;



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
                'ano' => $empresas->nome_empresa,
                'numero_pasta' => $empresas->nome_dono,
                'nome_fantasia' => $empresas->email,
                'inscricao_municipal' => $empresas->telefone,
                'area_total' => $empresas->whatsapp,
                'created_at' => $empresas->created_at,
                'updated_at' => $empresas->updated_at,
            ];
    
            // Gere o PDF usando uma view
            $pdf = Pdf::loadView('pages.impressao.impressaoagenda', ['empresa' => $empresas]);

            // Retorne o PDF gerado como um arquivo para download ou exibição
            return $pdf->stream('relatorio.pdf');
    
        }


}