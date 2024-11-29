<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Verificação da Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #000;
            line-height: 1.5;
        }
        .container {
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .header p {
            font-size: 12px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .section-title {
            font-size: 14px;
            margin: 20px 0 10px;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <div class="header">
            <h2>Relatório da empresa <span>{{$VerificacaoEmpresa->nome_fantasia}}</span></h2>
            <p>Emitido em: {{ now()->format('d/m/Y') }}</p>
        </div>

        <!-- Tabela de Informações Gerais -->
        <h2 class="section-title">Informações Gerais</h2>
        <table>
            <tr>
                <th>Ano</th>
                <td>{{ $VerificacaoEmpresa->ano }}</td>
            </tr>
            <tr>
                <th>Número da Pasta</th>
                <td>{{ $VerificacaoEmpresa->numero_pasta }}</td>
            </tr>
            <tr>
                <th>Nome Fantasia</th>
                <td>{{ $VerificacaoEmpresa->nome_fantasia }}</td>
            </tr>
            <tr>
                <th>Inscrição Municipal</th>
                <td>{{ $VerificacaoEmpresa->inscricao_municipal }}</td>
            </tr>
            <tr>
                <th>Data de Validade</th>
                <td>{{\Carbon\Carbon::parse($VerificacaoEmpresa->data_validade)->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <th>Área Total</th>
                <td>{{ $VerificacaoEmpresa->area_total }}</td>
            </tr>
            <tr>
                <th>Área Utilizada</th>
                <td>{{ $VerificacaoEmpresa->area_utilizada }}</td>
            </tr>
        </table>

        <!-- Informações de Criação -->
        <h2 class="section-title">Informações de Criação</h2>
        <table>
            <tr>
                <th>Criado em</th>
                <td>{{ $VerificacaoEmpresa->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Última Atualização</th>
                <td>{{ $VerificacaoEmpresa->updated_at->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
    </div>
</body>
</html>