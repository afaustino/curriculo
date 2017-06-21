<?php 

$this->load->view('header');
$this->load->view('menu');

 ?>

	<div class="w-section hero">
		<div class="hero-overlay">
			<div class="w-container hero-container">
				<div class="w-row">
					<div class="w-col w-col-12">
						<h1 class="hero-title" data-ix="hero-title">Consultoria especializada em</h1>
						<h1 class="hero-title word" data-ix="hero-title-2">Search Marketing</h1>
						<h1 class="hero-title word" data-ix="hero-title-3"></h1>
						<h1 class="hero-title word" data-ix="hero-title-4">&amp;&nbsp;Digital Analytics</h1>
						<h1 class="hero-title title-2" data-ix="hero-title-6">Você ainda acha que negocios e dados não andam juntos?</h1>
						<div class="hero-buttons-wrapper">
							<a class="hero-button" href="#servicos" data-ix="hero-button">Serviços</a>
							<a class="hero-button _2" href="<?php echo base_url("contato"); ?>" data-ix="hero-button-2">Entre em Contato</a></div>
						</div>
					</div>
			</div>
		</div>
	</div>

<div id="sobrenos" class="w-section section">
	<div class="w-container container centered">
		<div class="section-title-block centered">
			<h1 class="section-title">Sobre nós</h1>
			<h2 class="section-title subtitle">SEARCH MARKETING E DIGITAL ANALYTICS</h2>
			<div class="section-divider-line"></div>
		</div>
		<div class="w-row">
			<div class="w-col w-col-12">
				<p class="paragrafo">Consultoria especializada em <b>Digital Analytics</b> e <b>Search Marketing</b>, ajudamos nossos clientes a melhorar a performance em sua campanhas de Search Marketing. Melhoramos sua performance digital com as melhores e mais atuais soluções de Digital Analytics e Marketing Digital.</p>
				<br>
				<p class="paragrafo">Nós da Search Digital, respiramos performance 24 horas por dia e contamos com um equipe de profissionais certificados e especialistas com ampla experiência no mercado digital. Atuamos no mercado Digital há mais de 8 anos trabalhando marcas de diversos segmentos e ajudando a contruir resultados sólidos para nossos clientes.</p>
				
				<br>
			</div>
		</div>
	</div>
</div>

<!-- #3b3b3b -->
	 <div class="w-section section escuro">
        <div class="w-container container centered">
            <div class="section-title-block centered">
                <h2 class="section-title">SOMOS UMA EMPRESA FOCADA EM DADOS</h2>
                <h2 class="section-title subtitle"></h2>
                <div class="section-divider-line"></div>
            </div>
            <div class="w-row">
            	<div class="w-col w-col-12">
            		<p class="paragrafo">Aqui não trabalhamos com achismo e sim com dados, todas as tomadas de decisões estratégicas são baseadas em muitas analises e estudos. Não atingimos resultados por meio de "Fórmulas mágicas" ou "Receitas de bolo". O conhecimento é nossa principal matéria prima e fator essencial para nos destacarmos no mercado digital.</p>
            		<p class="paragrafo">A Search Digital trabalha com algoritmos próprios e modelos de atribuição para predição e analises de dados além do funíl de conversão. Enxergamos mais do que apenas funíl de conversão, enxergamos a jornada completa do cliente, integrando diversas fontes de dados para analises do comportamento do cliente no ambiente Online e Offline.</p>
            	</div>
            	<!-- <p class="selo-google">
					<a href="https://www.google.com/partners/?hl=pt-BR#a_profile;idtf=1580464349;" target="_blank">
						<img id="selo-partners" src="img/PartnerBadge-151030.png" width='300' border='0' alt="Selo de parceiro do Google - Google Partners" target="_blank">
					</a>
            	<img src="img/selo.jpg" width='100' border='0'>
				</p> -->
            </div>
        </div>
    </div>

<div id="servicos" class="w-section image-section">
	<div class="image-section-overlay _2">
		<div class="w-container container">
			<div class="section-title-block centered">
				<h2 class="section-title">Para cada desafio, uma solução.</h2>
				<h2 class="section-title subtitle">Focado em resultados, adequado ao seu negócio.</h2>
				<div class="section-divider-line"></div>
			</div>
			<div class="w-row features-row">
				<!-- <div class="w-col w-col-4 feature-column">
					<div class="feature-block">
						<h2 class="feature-title">Mídia Performance</h2>
						<h2 class="feature-title subtitle">Performance digital</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>A Mídia Performance da Search Digital é uma das melhores do mercado, e isso quem mostra são os resultados. Aumentamos suas conversões online, com nossas estratégias de performance digital e estudos complexos de modelos de atribuição canais. Converta mais, investindo menos.</p>
						<a class="button feature-button" id="btn-midia-performance" href="midia-performance.php">Saiba mais</a>
					</div>
				</div> -->
				<div class="w-col w-col-4 feature-column">
					<div class="feature-block">
						<h2 class="feature-title">Digital Analytics</h2>
						<h2 class="feature-title subtitle">Consultoria</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>A consultoria de <b>Digital Analytics</b> da Search Digital adiciona uma camada de inteligência em suas estratégias digitais. Aqui na Search Digital, nós geramos insights valiosos para nossos clientes tomarem decisões mais assertivas.</p>
						<a class="button feature-button" id="btn-web-analytics" href="<?php echo base_url("consultoria/digital-analytics"); ?>">Saiba mais</a>
					</div>
				</div>
				<div class="w-col w-col-4 feature-column last">
					<div class="feature-block">
						<h2 class="feature-title">Mensuração de dados</h2>
						<h2 class="feature-title subtitle">Consultoria e operação</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>Parte fundamental no trabalho de Search Marketing, as <b>informações analíticas</b> são idolatradas na Search Digital, gostamos de mensurar e acompanhar tudo nos mínimos detalhes.</p>
						<a class="button feature-button" id="btn-dev-web" href="<?php echo base_url("consultoria/mensuracao-e-coleta-de-dados"); ?>">Saiba mais</a>
					</div>
				</div>
				<div class="w-col w-col-4 feature-column">
					<div class="feature-block">
						<h2 class="feature-title">Google Adwords</h2>
						<h2 class="feature-title subtitle">Consultoria e operação</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>Realizamos tanto consultoria como o gerenciamento das campanhas do Google Adwords. Planejamento de ações e definição das melhores estratégias para o seu negócio? Isso é nossa obrigação! Com o nosso conhecimento utilizamos recursos avançados da ferramenta criando soluções personalizadas para cada desafio. Acredite!</p>
						<a class="button feature-button" id="btn-midia-performance" href="<?php echo base_url("consultoria/google-adwords"); ?>">Saiba mais</a>
					</div>
				</div>
			</div>

			<div class="w-row features-row">
				<div class="w-col w-col-4 feature-column">
					<div class="feature-block">
						<h2 class="feature-title">Dashboards</h2>
						<h2 class="feature-title subtitle">Dashboards com dados integrados</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>Usamos as melhores e mais atuais ferramentas de visualização de dados. Nossos dashboards geralmente viram ferramentas essenciais que nossos clientes. <b>Cuidado, vocẽ pode ficar dependente!</b></p>
						<!-- <a class="button feature-button" id="btn-midia-performance" href="links-patrocinados.php">Saiba mais</a> -->
					</div>
				</div>
				<div class="w-col w-col-4 feature-column">
					<div class="feature-block">
						<h2 class="feature-title">Digital Analytics e Data Science</h2>
						<h2 class="feature-title subtitle">Data Science</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>Análise de dados de diversas fontes; Inteligência de Mercado e Competitiva; Atribuição Multicanal; Criação de Modelos Preditivos. Tudo isso é básico! Criamos insights realmente valiosos e úteis para seu negócio.</p>
						<!-- <a class="button feature-button" id="btn-web-analytics" href="social-ads.php">Saiba mais</a> -->
					</div>
				</div>
				<div class="w-col w-col-4 feature-column last">
					<div class="feature-block">
						<h2 class="feature-title">Treinamentos</h2>
						<h2 class="feature-title subtitle">Treinamentos In-Company</h2>
						<div class="section-divider-line feature-divider"></div>
						<p>Capacitação de Clientes através de cursos In-Company, voltado à equipes com conhecimento do básico ao avançado. Acreditamos que a melhor forma de conhecimento é o compartilhado.</p>
						<!-- <a class="button feature-button" id="btn-dev-web" href="web-analytics.php">Saiba mais</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div id="como-trabalhamos" class="w-section section cinza">
	<div class="w-container container centered">
		<div class="section-title-block centered">
			<h2 class="section-title">Nossos Pilares</h2>
			<h2 class="section-title subtitle">Conheça nossa Metodologia de trabalho</h2>
			<div class="section-divider-line"></div>
		</div>

		<div class="w-row features-row">
			<div class="w-col w-col-4 feature-column">
				<div class="feature-block2">
					<h2 class="feature-title">Atração de audiencia</h2>
					<h2 class="feature-title subtitle">Meeting</h2>
					<div class="section-divider-line feature-divider"></div>
					<p>Essa estratégia se base na compra de tráfego qualificado para seu site.</p>
				</div>
			</div>

			<div class="w-col w-col-4 feature-column">
				<div class="feature-block2">
					<h2 class="feature-title">Performance</h2>
					<h2 class="feature-title subtitle">Conhecimento é nossa maior matéria prima</h2>
					<div class="section-divider-line feature-divider"></div>
					<p>Performar o tráfego adquirido.</p>
				</div>
			</div>

			<div class="w-col w-col-4 feature-column last">
				<div class="feature-block2">
					<h2 class="feature-title">Branding</h2>
					<h2 class="feature-title subtitle">Acreditamos na transparência total</h2>
					<div class="section-divider-line feature-divider"></div>
					<p>Trabalhar a concientizaçãoe conciência da sua marca.</p>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div id="cases-de-sucesso" class="w-section section cinza">
    <div class="w-container container centered">
        <div class="section-title-block centered">
            <h1 class="section-title">Resultados</h1>
            <h2 class="section-title subtitle">Resultados que entregamos nossos clientes</h2>
            <div class="section-divider-line"></div>
        </div>
        <div class="w-row">
            <div class="w-col w-col-6">
                <div class="w-col w-col-12 feature-column">
                    <div class="feature-block">
                        <h2 class="feature-title"><img class="brand-logo" src="<?php echo base_url("assets/img/logo-plantei.png"); ?>"></h2>
                        <h2 class="feature-title subtitle">Google Adwords &amp; Digital Analytics</h2>
                        <p>A Plantei <b>aumentou em 166%</b> o número total de transações e teve um <b>aumento de 187% na receita</b> oriunda do canal de links patrocinados (Google Adwords), todas nossas analises, predição e recomendação de produtos certos para os compradores nos momentos certos com nossa solução de anúncios personalizados e remarketing dinâmico especializado.</p>
                        <!-- <a class="button feature-button" id="btn-web-analytics" href="<?php echo base_url("consultoria/web-analytics"); ?>">Saiba mais</a> -->
                    </div>
                </div>
            </div>
             <div class="w-col w-col-6">
                <div class="w-col w-col-12 feature-column">
                    <div class="feature-block">
                        <h2 class="feature-title"><img class="brand-logo-case" src="<?php echo base_url("assets/img/logo-decabron.png"); ?>"></h2>
                        <h2 class="feature-title subtitle">Digital Analytics &amp; Facebook Ads</h2>
                        <div class="section-divider-line feature-divider"></div>
                        <p>Com a consultoria de Digital Analytics a loja De Cabron teve uma redução real de <b>62%</b> no custo por aquisição (CPA), com um <b>Roi Lift de 8</b>. Trabalhamos com segmentações mais assertivas no Facebook, atigindo as pessoas certas e principalmente no momento de certo. Usando sempre como base muitas analises de comportamento dos usuários, para assim criar melhores peças criativas, oferencendo os produtos certos para as pessoas certas. </p>
                        <!-- <a class="button feature-button" id="btn-web-analytics" href="<?php echo base_url("consultoria/web-analytics"); ?>">Saiba mais</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Parceiros -->
<div class="w-section section">
	<div class="w-container container centered">
		<div class="section-title-block centered">
			<h2 class="section-title">Quem já trabalhou com a gente</h2>
			<h2 class="section-title subtitle">Conheça alguns dos nossos clientes</h2>
			<div class="section-divider-line"></div>
		</div>
		<img class="brand-logo" src="<?php echo base_url("assets/img/Logo-boutique.jpg"); ?>">
		<img class="brand-logo" src="<?php echo base_url("assets/img/logo-plantei.png"); ?>">
		<img class="brand-logo" src="<?php echo base_url("assets/img/logo-emania.png"); ?>">
		<img class="brand-logo" src="<?php echo base_url("assets/img/logo-drw.png"); ?>">
		<br>
		<img class="brand-logo" src="<?php echo base_url("assets/img/logo-guiaInvest.png"); ?>">
		<img class="brand-logo" src="<?php echo base_url("assets/img/logo-wksaude.png"); ?>">
        <img class="brand-logo" src="<?php echo base_url("assets/img/logo-armarinhos.png"); ?>">
        <img class="brand-logo" src="<?php echo base_url("assets/img/logo-dolce-cheiro.png"); ?>">
        <br>
        <img class="brand-logo" src="<?php echo base_url("assets/img/logo-realhunter.png"); ?>">
        <img class="brand-logo" src="<?php echo base_url("assets/img/padora.png"); ?>">
		<img class="brand-logo" src="<?php echo base_url("assets/img/habitare casa.png"); ?>">
        <img class="brand-logo" src="<?php echo base_url("assets/img/logo-decabron.png"); ?>">

	</div>
</div>




 <?php include "footer.php"; ?>