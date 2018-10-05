



<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

           <h5 style="background-color: #bd2130">USUÁRIO</h5>
           
            <?php echo form_open('usuario/inserir'); ?>
            <div class="form-group">
                <label for="nomeUsuario">Nome Usuário:</label>
                <input class="form-control" id="nomeUsuario" name="nomeUsuario" type="text" required/>
            </div>
            <div class="form-group">
                <label for="user">Usuário:</label>
                <input class="form-control" id="nomeUsuario" name="user" type="text" required/>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input class="form-control" id="senha" name="senha" type="password" required/>
            </div>
            <div class="form-group">
                <label for="perfilAcesso">Perfil:</label>
                <select class="form-control" required="required" id="perfilAcesso" name="perfilAcesso" >
                    <option>Selecionar Perfil... </option>
                    <option value="ADM">Administrador</option>
                    <option value="USER">Usuário</option>
                </select>
            </div>
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-primary" type="reset" value="Limpar"/>
            <a class="btn btn-primary" id="btn-lista" href="#">Listar Usuário</a>
            <?php form_close(); ?>
            <p></p>
            <div id="div-lista" class="hide">
                <table id="lista" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>User</th>
                            <th>Perfil</th>
                            <th>Funçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($usuario == false): ?>
                            <tr><td>Nenhum Adicionado</td></tr>
                        <?php else: ?>
                            <?php foreach ($usuario as $row): ?>
                                <tr>
                                    <td><?php echo $row->nomeUsuario; ?></td>
                                    <td><?php echo $row->user; ?></td>
                                    <td><?php echo $row->perfilAcesso; ?></td>
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'usuario/editar/' . $row->idusuario;
                                        ?>">Editar</a>
                                        ||
                                        <a href="<?php
                                        echo base_url() .
                                        'usuario/excluir/' . $row->idusuario;
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
