<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Informações</title>
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
        .header h2 {
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
            <h2>Relatório de Informações da Filial-<span>{{$empresa_filial->nome_empresa}}</span></h2>
            <p>Emitido em: {{ now()->format('d/m/Y') }}</p>
        </div>

        <!-- Tabela de Informações Gerais -->
        <h2 class="section-title">Informações Gerais</h2>
        <table>
            <tr>
                <th>Nome do Titular</th>
                <td>{{ $empresa_filial->nome_empresa }}</td>
            </tr>
            <tr>
                <th>Nome do Titular</th>
                <td>{{ $empresa_filial->nome_dono }}</td>
            </tr>
            <tr>
                <th>Endereço</th>
                <td>{{ $empresa_filial->endereco }}</td>
            </tr>
            <tr>
                <th>Empresa Matriz</th>
                <td>{{ $empresa_filial->empresa->nome_empresa}}</td>
            </tr>
            <tr>
                <th>Email(Caso exista)</th>
                <td>{{ $empresa_filial->email }}</td>
            </tr>
            <tr>
                <th>Celular</th>
                <td>{{ $empresa_filial->celular}}</td>
            </tr>
            <tr>
                <th>WhatsApp</th>
                <td>{{ $empresa_filial->whatsapp }}</td>
            </tr>
        </table>

        <h2 class="section-title">Informações de Criação</h2>
        <table>
            <tr>
                <th>Criado em</th>
                <td>{{ $empresa_filial->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Última Atualização</th>
                <td>{{ $empresa_filial->updated_at->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
    </div>
</body>
</html>