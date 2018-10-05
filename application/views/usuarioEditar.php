<!DOCTYPE html>



<div class="container">



    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

            <h5 style="background-color: #bd2130">EDITAR USUÀRIO</h5>

            <?php echo form_open('usuario/atualizar'); ?>

            <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input name="nomeUsuario" type="text" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" required/>
            </div>
            <p></p>
            <div class="form-group">
                <label>Usuário</label>
                <input name="user" type="text" value="<?php echo $usuarioEditar[0]->user; ?>" required/>
            </div>
            <p></p>
            <div class="form-group">
                <label>Senha</label>
                <input name="senha" type="password"  required/>
            </div>
            <p></p>
            <div class="form-group">
                <label for="perfilAcesso">Perfil:</label>
                <select class="form-control" required="required" id="perfilAcesso" name="perfilAcesso" >
                    <option>Selecionar Perfil... </option>
                    <option value="ADM">Administrador</option>
                    <option value="USER">Usuário</option>
                </select>
            </div>
            <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <?php form_close(); ?>
            <p></p>
            <a href="<?php echo base_url() . 'usuario'; ?>">Cancelar</a>

            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        </div>
    </div>
</div>
