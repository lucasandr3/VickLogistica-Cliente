<!-- Container -->
<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header align-items-top">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">Olá, <?=getUser()->nome_user?></h2>
            <p>Aqui você acompanha todos os checklists do dia <strong><?=($dtf === "")? date('d/m/Y'): date('d/m/Y',strtotime($dtf))?></strong></p>
        </div>

        <div class="d-flex w-300p">
            <!-- <select class="form-control custom-select custom-select-sm mr-15">
                <option selected="">Filtrar por Data</option>
                <option value="1">CRM</option>
                <option value="2">Projects</option>
                <option value="3">Statistics</option>
            </select>
            <select class="form-control custom-select custom-select-sm mr-15">
                <option selected="">USA</option>
                <option value="1">USA</option>
                <option value="2">India</option>
                <option value="3">Australia</option>
            </select> -->
            <form class="d-flex" method="get">
                <input class="form-control" type="date" name="filter_date" value="<?=($dtf === "")? date('Y-m-d'): $dtf?>" style="font-size: 0.875rem;height: calc(1.8125rem + 4px);">
                <button class="btn btn-success" style="margin-left:5px;font-size: 0.875rem;height: calc(1.8125rem + 4px);">Filtrar</button>
            </form>
        </div>


    </div>
    <!-- /Title -->
    <!-- <h4 class="mb-10">Pesquisar por data</h4>
    <div class="row mb-30">
        <div class="col-md-3">
            <input class="form-control" type="date" name="birthday" value="10/24/1984">
        </div>
        <div class="col-md-2">
            <button class="btn btn-success">Filtrar Data</button>
        </div>
    </div> -->
    <?php if(count($checklists)): ?>
    <!-- Row -->
    <div class="row mb-20">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-12">
                    <div class="hk-row">
                    <?php foreach($checklists as $checklist_usina): ?>
                        <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header shadow">
                                        <i class="fa fa-user"></i> Mot: Rogério Luz
                                    </div>
                                    <div class="card-body shadow">
                                        <!-- <h5 class="card-title">Área de Emissão: Manutenção</h5> -->
                                        <div>
                                            <div style="display: flex;justify-content: space-between;">
                                                <p style="width: 85px;" class="card-text"><strong>Frota SR:</strong></p>
                                                <p style="flex:1;" class="card-text">PZZ1253</p>
                                            </div>
                                            <div style="display: flex;justify-content: space-between;">
                                                <p style="width: 85px;" class="card-text"><strong>Frota Reb:</strong></p>
                                                <p style="flex:1;" class="card-text">QQC7222</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <a href="javascript(0):void" data-toggle="modal" data-target="#modalC<?=$checklist_usina['id']?>" class="btn btn-danger btn-block"><i class="fa fa-eye"></i>
                                            Ver Checklist</a>
                                            <a href="<?=url('home/pdf/'.$checklist_usina['id'])?>" class="btn btn-danger btn-block mt-0 ml-10"><i class="fa fa-download"></i>
                                            Download</a>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalC<?=$checklist_usina['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Checklist - <?=$checklist_usina['id'];?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Row -->
                                            <div class="row">
                                                <div class="col-xl-12">
                                                <div class="container-fluid">
                                                <div class="row" style="border: 1px solid #000;">
                                                    <div class="col-md-2" style="border-right: 1px solid #000;">
                                                        <img src="https://unica.com.br/wp-content/uploads/2020/02/bunge.jpg" style="width: 100%;height:103px;margin-top:1px;object-fit: contain;">
                                                    </div>
                                                    <div class="col-md-7 text-center" style="height:110px;border-right: 1px solid #000;">
                                                        <h2 style="margin-top: 35px;">FORMULÁRIO</h2>
                                                        <p style="margin-top: 0px;">Inspeção Veicular  Check-List Operação de Engate</p>
                                                    </div>
                                                    <div class="col-md-3" style="height:110px;">
                                                        <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 5px;">Código: <span>FOR-XXX-00X </span></p>
                                                        <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Aplicação: <span>Corporativo</span></p>
                                                        <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Revisão:  <span></span></p>
                                                        <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Data de Emissão:<span style="font-size:13px;"> <?=substr($checklist_usina['date_final'],0,10)?></span></p>
                                                        <p style="font-weight:bold;font-size:14px;margin-bottom: 0px;margin-top: 0;">Data de Validade: <span></span></p>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom:10px;">
                                                    <table style="width:100%;" border="1">
                                                        <tr>
                                                            <td style="padding-left:3px;font-size: 12px;">Unidade de Aplicação: <span>Corporativo </span></td>
                                                            <td style="padding-left:3px;font-size: 12px;">Área de Emissão: <span>Manutenção</span></td>
                                                            <td style="padding-left:3px;font-size: 12px;">Setor de Aplicação: <span>Transporte Canavieiro</span></td>
                                                            <td style="padding-left:3px;font-size: 12px;">Autor: <span><?=json_decode($checklist_usina['checklist_json'])->motorista?></span></td>
                                                            <td style="padding-left:3px;font-size: 12px;">Autorizador: <span></span></td>
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
                                                            <span></span>
                                                        </div>
                                                        <div style="border: 1px solid #000;">
                                                            <p style="margin:0;font-size:12px;padding: 0 5px;">Frota SR:</p>
                                                            <span></span>
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

                                                    <table style="margin-top:20px;width:100%" border="1">
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
                                                </div>
                                            </div>
                                            <!-- /Row -->
                                        </div>
                                        <div class="modal-footer" style="justify-content:start;">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-arrow-left" style="margin-right:10px;"> Voltar</i></button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?=$paginator->render();?>
    <!-- /Row -->
    <?php else: ?>
        <div class="alert alert-light alert-wth-icon alert-dismissible fade show" role="alert">
            <span class="alert-icon-wrap"><i class="zmdi zmdi-notifications-active"></i></span> Sem Checklist para a data de <strong><?=date('d/m/Y')?></strong></a>
        </div>
    <?php endif; ?>
</div>
<!-- /Container -->

<style>
.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
    padding-right: 17px;
    padding-left: none;
}
tr {
        text-align:left;
        border: 1px solid #8c8c8c!important;
    }
    td {
        border: 1px solid #000;
        height: 30px !important;
        padding-top: 5px;
        color: #000;
    }
    th {
     border: 1px solid #000;
     color: #000;
     font-weight: bold;
    }
    span, p {
         color: #000;
    }
</style>