<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <!--               <meta charset="UTF-8">-->
        <title>Meu Projeto FrameWork</title>
        <!--        Bootstrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet"/>
        <!--Datatable-->
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        <?php if ($this->session->userdata('estou_logado')) { ?>
            <div class="container">
                <nav class="navbar navbar-brand navbar-light bg-light">
                    <a class="btn-info" href="<?php echo base_url() . 'home'; ?>">HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="btn-link" href="<?php echo base_url() . 'contato'; ?>">CONTATO<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn-link" href="<?php echo base_url() . 'funcao'; ?>">FUNÇÃO<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn-link" href="<?php echo base_url() . 'usuario'; ?>">USUÁRIO<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="btn-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
                                    ATALHO
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url() . 'contato'; ?>">CONTATO</a>
                                    <a class="dropdown-item" href="<?php echo base_url() . 'funcao'; ?>">FUNÇÃO</a>
                                    <a class="dropdown-item" href="<?php echo base_url() . 'usuario'; ?>">USUÁRIO</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        <?php } ?>