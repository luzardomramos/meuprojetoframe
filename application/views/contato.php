



<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

            <h5 style="background-color: #bd2130">CONTATO</h5>

            <?php echo form_open('contato/inserir'); ?>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" id="nome" name="nome" type="text" required/>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control " id="email" name="email" type="email" required/>
            </div>

            <div class="form-group">
                <label for="idfuncao">Função:</label>
                <select class="form-control" required="required" id="idfuncao" name="idfuncao"  >
                    <option>Selecionar Função... </option>
                    <?php foreach ($funcao as $funcao): ?>
                        <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomefuncao; ?></option>
                    <?php endforeach; ?>        
                </select>
            </div>

            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-primary" type="reset" value="Limpar"/>
            <a class="btn btn-primary" id="btn-lista" href="#">Listar Contatos</a>
            <?php form_close(); ?>
            <p></p>
            <div id="div-lista" class="hide">
                <table id="lista" class="table table-striped table-bordered" style="width:100%">
<!--                    <caption>Contatos</caption>-->
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Funções</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($contatos == false): ?>
                            <tr><td>Nenhum Adicionado</td></tr>
                        <?php else: ?>
                            <?php foreach ($contatos as $row): ?>
                                <tr>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->nomefuncao; ?></td>
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'contato/editar/' . $row->id;
                                        ?>">Editar</a>
                                        ||
                                        <a href="<?php
                                        echo base_url() .
                                        'contato/excluir/' . $row->id;
                                        ?>">Excluir</a>
                                    </td>
                                </tr>                  
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a> 
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
<script  type="text/javascript">
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });

    $(document).ready(function () {
        $('#lista').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
            iDisplaylength: 5,
            dom: 'Bfrtip',
            buttons: [
                'copy',
                'excel',
                'pdf',
                'print'
            ]
        });

    });

</script>
