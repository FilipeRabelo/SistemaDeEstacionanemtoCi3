<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Usuarios extends CI_Controller{

  public function index(){

    //PARA RECUPERAR OS USUARIOS DO BANCO DE DADOS//
    $data = array(

      'titulo'        => 'Usuários Cadastrados',
      'sub_titulo'    => 'Listando todos os Usuários cadastrados no Banco de Dados',
      'titulo_tabela' => 'Lista de Usuários',

      'styles' => array(

        'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'

      ),

      'scripts' => array(

        'plugins/datatables.net/js/jquery.dataTables.min.js',
        'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        'plugins/datatables.net/js/estacionamento.js',  

      ),
      
      'usuarios'      => $this->ion_auth->users()->result(),  //pega todos os usuários
      //USANDO O PLUGUIM ION AUTH // Agora $Usuarios ja contem os usuarios ja cadastrados no banco de dados

    );

    // Para debugar 
    // echo '<pre>';
    // print_r($data['usuarios']);
    // exit();

    $this->load->view('layout/header', $data);
    $this->load->view('usuarios/index');
    $this->load->view('layout/footer');

  }

}