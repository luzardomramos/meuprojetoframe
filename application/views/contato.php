<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

            <h2>Contato</h2>
            <?php echo form_open('contato/inserir'); ?>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" id="nome" name="nome" type="text" required/>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control " id="email" name="email" type="email" required/>
            </div>
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-danger" type="reset" value="Limpar"/>
            <?php form_close(); ?>
            <p></p>
            <div>
                <table id="contatos" class="table table-striped table-bordered" style="width:100%">
<!--                    <caption>Contatos</caption>-->
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
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
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'contato/editar/' . $row->id;
                                        ?>">Editar</a>
                                        |
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
    $(document).ready(function () {
        $('#contatos').DataTable({
            language: {
        "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
    },
    iDisplaylength:5,
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