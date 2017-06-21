<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	  function __construct() {
	  	parent::__construct();
        $this->load->helper('url');
    }

	public function index(){
		$dados = array(
			'titulo' => 'Search Digital | Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('index', $dados);

	}

	public function homeNova(){
		$dados = array(
			'titulo' => 'Search Digital | Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('index2', $dados);

	}

	public function Sobrenos(){
		$dados = array(
			'titulo' => 'Sobre nós | Search Digital Consultoria especializada em Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('Sobrenos', $dados);

	}

	public function linksPatrocinados(){
		$dados = array(
			'titulo' => 'Links Patrocinados do Google Adwords | Search Digital Consultoria especializada em Digital Analytics e Search Marketing',
			'descricao' => 'Descrição teste',
			'keywords' => 'palavra chave teste'
		);

		$this->load->view('links-patrocinados', $dados);

	}

	public function digitalAnalytics(){
		$dados = array(
			'titulo' => 'Digital Analytics | Search Digital Consultoria especializada em Digital Analytics e Search Marketing',
			'descricao' => 'Consultoria especializada em web analytics e digital analytics para pequenas e médias empresas.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('digital-analytics', $dados);

	}

	public function digitalAnalytics_b(){
		$dados = array(
			'titulo' => 'Digital Analytics | Search Digital Consultoria especializada em Digital Analytics e Search Marketing',
			'descricao' => 'Consultoria especializada em web analytics e digital analytics para pequenas e médias empresas.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('digital-analytics-b', $dados);

	}

	public function mensuracao(){
		$dados = array(
			'titulo' => 'Mensuração de dados | Search Digital Consultoria em Digital Analytics e Search Marketing',
			'descricao' => 'Para que suas análises e estudos sejam feitos de maneira eficiente e que obtenham uma melhora significativa nos resultados de suas campanhas, é indispensável que sua implementação seja feita de forma customizada para seu negócio.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('mensuracao-de-dados', $dados);

	}


	public function clientes(){
		$dados = array(
			'titulo' => 'Clientes | Search Digital Consultoria especializada em Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('clientes', $dados);

	}

	public function contato(){
		$dados = array(
			'titulo' => 'Contato | Search Digital Consultoria em Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->library('email');

		// Regras de validação dor formulário
		$this->form_validation->set_rules("nome", "Nome", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("telefone", "Telefone", "trim|required");
		$this->form_validation->set_rules("mensagem", "Mensagem", "trim|required");

		$sucesso = $this->form_validation->run();

		// Verificação da validação das regras do formulários
		if ($sucesso == FALSE) {
			$dados["formerror"] = validation_errors();
		}else{
			// Pegando todos os dados dos inpunts e armazendo em um array
			$dados_form = $this->input->post();

			// Adicionado dados aos lugares certos
			// $this->email->from("teste@teste.com", "Nome teste");
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to("gaya@searchdigital.com.br");
			$this->email->subject("Contato do site da Search Digital");
			$this->email->message($dados_form['mensagem']);

			// Validando se o email foi enviado com sucesso
			if ($this->email->send()) {
				$dados["formerror"] = "Seu contato foi enviado com sucesso. Obrigado.";
			}else{
				$dados["formerror"] = "Ocorreu um erro ao tentar enviar!";
			}

		}
		$this->load->view('contato', $dados);

	}

	public function planos(){
		$dados = array(
			'titulo' => 'Planos | Search Digital Consultoria em Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);

		$this->load->view('planos', $dados);

	}

	public function proposta(){
	$dados = array(
		'titulo' => 'Proposta Comercial e Plano de Mídia | Search Digital Consultoria em Digital Analytics e Search Marketing',
		'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
		'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
	);

	$this->load->view('proposta', $dados);

	}


	public function googleAdwords(){
	$dados = array(
		'titulo' => 'Google Adwords Especializado | Search Digital Consultoria em Digital Analytics e Search Marketing',
		'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
		'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
	);

	$this->load->view('google-adwords-especializado', $dados);

	}

	public function googleAnalytics(){
	$dados = array(
		'titulo' => 'Google Analytics Especializado | Search Digital Consultoria em Digital Analytics e Search Marketing',
		'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
		'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
	);

	$this->load->view('google-analytics', $dados);

	}

	public function obrigadoPage(){
	$dados = array(
		'titulo' => 'Google Analytics Especializado | Search Digital Consultoria em Digital Analytics e Search Marketing',
		'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
		'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
	);

	$this->load->view('obrigado', $dados);

	}

	public function erroPaginaNaoEncontrada(){
	$dados = array(
		'titulo' => 'Página não encontrada | Search Digital Consultoria em Digital Analytics e Search Marketing',
		'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
		'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
	);

	$this->load->view('404', $dados);

	}

	public function obrigado(){
		$dados = array(
			'titulo' => 'Enviando email de contato | Search Digital Consultoria em Digital Analytics e Search Marketing',
			'descricao' => 'Somos uma empresa de consultoria em Web Analytics/Digital Analytics e Links Patrocinados. Aplicamos todo nosso know how em analises de dados para otimizar os resultados de suas ações digitais.',
			'keywords' => 'Digital Analytics, Web analytics, links patrocinados, google adwords, google analytics, google tag manager'
		);
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->library('email');

		// Regras de validação dor formulário
		$this->form_validation->set_rules("nome", "Nome", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("telefone", "Telefone", "trim|required");
		$this->form_validation->set_rules("mensagem", "Mensagem", "trim|required");

		$sucesso = $this->form_validation->run();

		// Verificação da validação das regras do formulários
		if ($sucesso == FALSE) {
			$dados["formerror"] = validation_errors();
		}else{
			// Pegando todos os dados dos inpunts e armazendo em um array
			$dados_form = $this->input->post();

			// Adicionado dados aos lugares certos
			// $this->email->from("teste@teste.com", "Nome teste");
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to("gaya@searchdigital.com.br");
			$this->email->subject("Contato do site da Search Digital");
			$this->email->message($dados_form['mensagem']);

			// Validando se o email foi enviado com sucesso
			if ($this->email->send()) {
				$dados["formerror"] = "Seu contato foi enviado com sucesso. Obrigado.";
			}else{
				$dados["formerror"] = "Ocorreu um erro ao tentar enviar!";
			}

		}
		$this->load->view('obrigado', $dados);

	}

}
