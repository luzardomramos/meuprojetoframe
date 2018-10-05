



<div class="container">



    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">

            <h5 style="background-color: #bd2130">EDITAR FUNÇÃO</h5>

            <?php echo form_open('funcao/atualizar'); ?>

            <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
            <div class="form-group">
                <label>Função</label>
                <input name="nomefuncao" type="text" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
            </div>
            <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <?php form_close(); ?>
            <p></p>
            <a href="<?php echo base_url() . 'funcao'; ?>">Cancelar</a>

            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        </div>
    </div>
</div>
