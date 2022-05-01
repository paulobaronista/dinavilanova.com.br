<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
