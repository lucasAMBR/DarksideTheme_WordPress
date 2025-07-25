
# Darkside Theme (Wordpress)

Tema WordPress desenvolvido como teste técnico para a vaga de estagiário de Desenvolvimento de software.

# Detalhes
Tema para paginas institucionais, totalmente responsivo e personalizavel, com design de minha autoria, contando com 3 layouts de pagina: Pagina Home, Pagina de Projetos e a Pagina de reviews dos clientes.

# Pre-Requisitos
* PHP (Versão minima recomendada: 7.4);
* WordPress (A versão mais recente possivel);
* MySQL (Versão recomendada: 5.7);
* (Recomendo o uso de um Docker Composer para controlar o ambiente);

# Instalação
1 - Baixar o tema por zip ou clonando o repositorio;

2 - No painel do WordPress, Va em Aparencia > Temas > Adicionar Temas > Enviar Temas e escolha o zip desse tema;

3 - Ative o tema;

# Configuração do tema

1 - Instale os Plugins necessarios para o funcionamento: Advanced Custom Fields, Contact-Form 7, WP Mail SMTP;

2 - Configure o WP Mail para o seu servidor SMTP de preferencia e coloque seu email como destinatario;

3 - Crie uma pagina chamada Home e na configuração de leitura defina a pagina inicial do site como um arquivo estatico e escolha a pagina Home, para criar a tela principal;

4 - Para criação de uma pagina com os outros dois possiveis layouts, crie a pagina no painel do wordpress e durante a criação escolha o modelo desejo no menu lateral

5 - Configure os campos do ACF de cada pagina para exibir o conteudo desejado, aqui vai uma explicação sobre cada campo: 

### Pagina Home (barra de navegação): 
* **nav_button_text** (texto): texto do botão de ação da barra de navegação do layout para PC;
* **nav_button_url** (texto): url para a pagina que o botão ira levar quem clicar;
### Pagina Home (banner):
* **banner_image** (imagem): imagem de fundo do banner da tela principal;
* **banner_title** (texto): titulo do conteudo exibido acima do banner;
* **banner_text** (texto): texto do banner, exibido abaixo do titulo;
* **button_text** (texto): texto do botão de ação do banner;
* **banner_button_url** (texto): URL para o link do botão do banner;
### Pagina Home (sobre nós):
* **about_title** (texto): Titulo da seção;
* **about_text** (texto): texto explicativo da seção;
* **about_image** (image): imagem sobre a empresa;
### Pagina Home (serviços oferecidos):
* **service_area_title** (texto): titulo da seção;
* **service_icon_1** (imagem): icone do primeiro card;
* **service_title_1** (texto): titulo do primeiro card;
* **service_description_1** (texto): descrição do primeiro card;
* **service_icon_2** (imagem): icone do segundo card;
* **service_title_2** (texto): titulo do segundo card;
* **service_description_2** (texto): descrição do segundo card;
* **service_icon_3** (imagem): icone do terceiro card;
* **service_title_3** (texto): titulo do terceiro card;
* **service_description_3** (texto): descrição do terceiro card;
### Pagina home (formulario de contato):
* **contact_area_title** (texto): titulo da area do formulario;
### Pagina home (rodapé - informações para contato):
* **enterprise_name** (texto): nome da empresa;
* **complete_location** (texto): endereço da empresa;
* **telephone** (texto): telefone da empresa;
* **contact_email** (texto): email para contato da empresa;
### Pagina home (rodapé - Links uteis):
* **link_1_text** (texto): texto do link 1;
* **link_1_url** (texto): URL do link 1;
* **link_2_text** (texto): texto do link 2;
* **link_2_url** (texto): URL do link 2;
* **link_3_text** (texto): texto do link 3;
* **link_3_url** (texto): URL do link 3;
### Pagina home (rodapé - redes sociais):
* **linkedin_url** (texto): link para o linkedIn da empresa;
* **instagram_url** (texto): link para o instagram da empresa;
* **facebook_url** (texto): link para o facebook da empresa;
### Pagina de projetos:
* **project_page_title** (texto): titulo da pagina;
* **project_page_initial_text** (texto): texto de introdução da pagina;
* **project_1_image** (imagem): imagem do primeiro projeto;
* **project_1_name** (texto):titulo do primeiro projeto;
* **project_1_description** (texto):descrição do primeiro projeto;
* **project_2_image** (imagem): imagem do segundo projeto;
* **project_2_name** (texto):titulo do segundo projeto;
* **project_2_description** (texto):descrição do segundo projeto;
* **project_3_image** (imagem): imagem do terceiro projeto;
* **project_3_name** (texto):titulo do terceiro projeto;
* **project_3_description** (texto):descrição do terceiro projeto;
* **project_page_final_text** (texto): texto de finalização da pagina;
### Pagina de Reviews:
* **review_page_title** (texto): titulo da pagina;
* **review_page_initial_text** (texto): texto de introdução da pagina;
* **project_page_final_text** (texto): texto de finalização da pagina;

6 - Configure a exibição das paginas em Aparencia > Menus;

## Considerações finais:
* Tema desenvolvido para demonstrar conhecimento no uso de tecnologias web para processo seletivo de vaga de estagio.
