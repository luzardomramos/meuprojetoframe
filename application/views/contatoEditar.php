<!DOCTYPE html>


       
   <div class="container">
   
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>                                                                              
        <div class="col-xs-10 col-sm-10 col-lg-6">
        <h2>Editar Contato</h2>
        <?php echo form_open('contato/atualizar'); ?>
        
        <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
        <div class="form-group">
        <label>Nome</label>
        <input name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
        </div>
        <p></p>
         <div class="form-group">
        <label>E-mail</label>
        <input name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
        </div>
        <p></p>
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() . 'contato'; ?>">Cancelar</a>
  
         <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        </div>
        </div>
   </div>