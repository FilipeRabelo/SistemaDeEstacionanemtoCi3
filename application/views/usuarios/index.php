<?php $this->load->view('layout/navbar'); ?>
<!--CARREGAMENTO DAS PAGINAS SAO FEITAS AQUI, NAO NO CONTROLLER-->

<div class="page-wrap">

  <?php $this->load->view('layout/sidebar'); ?>
  <!--CARREGAMENTO DAS PAGINAS SAO FEITAS AQUI, NAO NO CONTROLLER-->


  <div class="main-content">

    <div class="container-fluid">

      <div class="page-header">

        <div class="row align-items-end">

          <div class="col-lg-8">
            <div class="page-header-title">
              <i class="ik ik-users bg-blue"></i>

              <div class="d-inline">

                <!-- INFORMAÇÃO DIMAMICA -->
                <h5> <?= $titulo   ?> </h5>
                <span> <?= $sub_titulo ?> </span>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a title="Home" href="<?= base_url('/') ?>"><i class="ik ik-home"></i></a>
                </li>

                <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
              </ol>
            </nav>
          </div>

        </div> <!-- FIM DIV class="row align-items-end"> -->

      </div> <!-- FIM DIV class="page-header" -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <div class="card-header ">
              <a href="#" class="btn btn-success">+ &nbsp; Novo</a>
            </div>

            <div class="card-body">
              <table id="data_table" class="table">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Nome</th>
                    <th>Ativo</th>
                    <th class="nosort">Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($usuarios as $usuario) : ?>

                    <tr>
                      <td><?= $usuario->id;         ?></td>
                      <td><?= $usuario->username;   ?></td>
                      <td><?= $usuario->email;      ?></td>
                      <td><?= $usuario->first_name; ?></td>
                      <td><?= $usuario->active;     ?></td>
                      <td>
                        <a href="#" class="btn btn-primary">Editar </a>
                        <a href="#" class="btn btn-danger"> Excluir</a>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>

              </table>

            </div>
          </div>
        </div>

      </div> <!-- fim div row -->

    </div> <!-- FIM DIV class="container-fluid"> -->

  </div> <!-- FIM DIV class="main-content"> -->


  <footer class="footer">
    <div class="w-100 clearfix">
      <span class="text-center text-sm-left d-md-inline-block">Copyright © <?= date('Y') ?> ThemeKit v2.0. All Rights Reserved.</span>
      <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fa fa-heart text-danger"></i> por <a href="https://github.com/FilipeRabelo" class="text-dark" target="_blank">Filipe Rabelo F Lana</a></span>
    </div>
  </footer>

</div> <!-- FIM DIV class="page-wrap"> -->