<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('telefone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('[Novo Lead] LP - Dina Vila Nova');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@dinavilanova.com.br","Dina Vila Nova");
            $this->email->to('contato@dinavilanova.com.br');
            $this->email->cc('front.baronista@gmail.com, luciano@jrgdi.com.br');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Dina Vila Nova';
        $data['description'] = 'Apartamento com arquitetura moderna, boa localização, vista incrível para o parque Ibirapuera São Paulo, SP';
        $data['keywords'] = 'Apartamento de luxo, apartamento com entrega em 2022, apartamento próximo ao parque Ibirapuera, cobertura em São Paulo, apartamento com arquitetura moderna, são paulo, sp, apartamento em sp, apartamento novo em são paulo, apartamento de luxo em são paulo, cobertura com vista para a natureza, apartamento com 4 quartos em São Paulo, Dina Vila Nova';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
