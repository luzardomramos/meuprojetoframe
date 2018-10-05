




<div class="container">

    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

            <h5 style="background-color: #bd2130">FUNÇÃO</h5>

            <?php echo form_open('funcao/inserir'); ?>
            <div class="form-group">
                <label for="nomefuncao">Função:</label>
                <input class="form-control" id="nomefuncao" name="nomefuncao" type="text" required/>
            </div>

            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-primary" type="reset" value="Limpar"/>
            <a class="btn btn-primary" id="btn-lista" href="#">Listar Função</a>
            <?php form_close(); ?>
            <p></p>
            <div id="div-lista" class="hide">
                <table id="lista" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                            <th>Função</th>
                            <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($funcao == false): ?>
                            <tr><td>Nenhum Adicionado</td></tr>
                        <?php else: ?>
                            <?php foreach ($funcao as $row): ?>
                                <tr>
                                    <td><?php echo $row->nomefuncao; ?></td>
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'funcao/editar/' . $row->idfuncao;
                                        ?>">Editar</a>
                                        ||
                                        <a href="<?php
                                        echo base_url() .
                                        'funcao/excluir/' . $row->idfuncao;
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
