<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Checklist</title>
    <style>
        /* * {
            box-sizing: border-box;
        }
        */
        body {
            font-family: Arial;
            margin: 10px;
        } 
        .cabecalho-check {
            border: 1px solid #000;
            display: flex;
            justify-content: space-between;
            background: #ccc;
            font-size: 14px;
            text-align: center;
        }
        .cabecalho-check-options {
            display: flex;
            justify-content: space-between;
            text-align: start;
            border: 1px solid #000;
            border-top: 0;
            background: none;
            font-size: 13px;
        }
        span {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="border: 1px solid #000;">
            <div class="col-xs-2" style="border-right: 1px solid #000;">
                <img src="https://unica.com.br/wp-content/uploads/2020/02/bunge.jpg" style="width: 100%;height:110px;margin-top:1px;object-fit: contain;">
            </div>
            <div class="col-xs-7 text-center" style="height:110px;border-right: 1px solid #000;">
                <h2 style="margin-top: 35px;">FORMULÁRIO</h2>
                <p style="margin-top: -10px;">Inspeção Veicular – Check-List Operação de Engate</p>
            </div>
            <div class="col-xs-3" style="height:110px;">
                <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 5px;">Código: <span>FOR-XXX-00X </span></p>
                <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Aplicação: <span>Corporativo</span</p>
                <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Revisão:  <span></span</p>
                <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Data de Emissão: <span style="font-size:13px;"><?=substr($checklist_usina['date_final'],0,10)?></span</p>
                <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Data de Validade: <span></span</p>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px;">
            <table style="width:100%;" border="1">
                <tr>
                    <td style="padding-left:3px;">Unidade de Aplicação: <span style="font-size:13px;">Corporativo </span></td>
                    <td style="padding-left:3px;">Área de Emissão: <span style="font-size:13px;">Manutenção</span></td>
                    <td style="padding-left:3px;">Setor de Aplicação: <span style="font-size:13px;">Transporte Canavieiro</span></td>
                    <td style="padding-left:3px;">Autor: <span style="font-size:13px;text-transform:capitalize;"><?=json_decode($checklist_usina['checklist_json'])->motorista?></span></td>
                    <td style="padding-left:3px;">Autorizador: <span style="font-size:13px;"></span></td>
                </tr>
            </table>
        </div>

        <div class="row" style="border: 1px solid #000;padding:10px;">
            <div style="width:50%;float:left">
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Data: <span><?=substr($checklist_usina['date_final'],0,10)?></span></p>
                </div>
                <div style="border: 1px solid #000;border-top:0;border-bottom: 0;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">id. Mot:</p>
                </div>
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Frota SR:</p>
                </div>
            </div>
            <div style="width:50%;float:right">
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Hora: <span><?=substr($checklist_usina['date_final'],15)?> hs</span></p>
                    </div>
                <div style="border: 1px solid #000;border-top:0;border-bottom: 0;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Frota CM: <span><?=json_decode($checklist_usina['checklist_json'])->placa?></span></p>
                    </div>
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Frota Reb:</p>
                    <span></span>
                </div>
            </div>

            <table style="margin-top:70px;width:100%" border="1">
            <tr>
                    <th style="background-color:#ccc;text-align:center;" width="70%">ITENS</th>
                    <th style="background-color:#ccc;text-align:center;">OK</th>
                    <th style="background-color:#ccc;text-align:center;">NC</th>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Possui sintoma de fadiga?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta1 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>          
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Cinto de segurança funcionando corretamente?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta2 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>  
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Limpador de para-brisa funcionando com água?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta3 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>  
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Aviso maneco de freio funcionando?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta4 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>  
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Sistema elétrico funcionando?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta5 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Sinal sonoro de ré está funcionando?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta6 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Vazamento(s) de óleo visível?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta7 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Extintor de incêndio (Manômetro e lacre)</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta8 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Pneus em condições de uso?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta9 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Porcas de rodas presas?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta10 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Cabo aço caixote e corrente segurança?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta11 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Cabos aço tombamento (Apresenta fadiga)</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta12 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Placas e faixas estão limpas?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta13 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Engate reboque e semirreboque? (Boca de Lobo, Ponteira e Cabeçalho)</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta14 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Veículo seguro para seguir viagem?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta15 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th style="padding-left:5px;" width="70%">Sistema de enlonamento funcionando e seguro?</th>
                    <?php if(json_decode($checklist_usina['checklist_json'])->pergunta16 === "Conforme"): ?>
                         <td style="text-align:center;">OK</td>
                         <td style="text-align:center;"></td>
                    <?php else: ?>
                         <td style="text-align:center;"></td>
                         <td style="text-align:center;">NC</td>
                    <?php endif; ?>
                </tr>
            </table>

            <div style="width:100%;margin-top:7px;">
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Assinatura Motorista: <span style="text-transform:capitalize"><?=json_decode($checklist_usina['checklist_json'])->motorista?></span></p>
                </div>
                <div style="border: 1px solid #000;border-top:0;border-bottom: 0;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">Assinatura Pátio:</p>
                    <span></span>
                </div>
                <div style="border: 1px solid #000;">
                    <p style="margin:0;font-size:12px;padding: 0 5px;">N°: Ordem de Serviço: <span><?=$checklist_usina['id']?></span></p>
                </div>
            </div>
            
        </div> 

    </div>   
</body>
</html>