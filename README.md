# projeto-funcionario-e-seu-investimento
Projeto para listagem de funcionários de uma empresa e seus investimentos

<h1>Pré-requisitos</h1>
<li>PHP</li>
<li>Composer</li>
<li>MySQL</li>
<li>Utilizado a versão 7.4 do PHP. Composer versão 2.1</li>

<h1>Baixando o projeto e executando</h1>

Para clonar um repositório já existente você deve usar o comando: <i>git clone e a url do arquivo</i>

<h1>Manual de utilização</h1>

A primeira página mostra a lista com todos os funcionários, separados por seu ID; nome e sobrenome; e e -mail.

Logo na parte de cima podemos ver “Home, Adicionar Funcionário, Investimentos, Adicionar Investimentos”.  

<b>Home:</b> Voltar à página inicial de listar os personagens;<br>
<b>Adicionar Funcionário:</b> Redireciona o usuário para um formulário onde deverá ser preenchido para adicionar um funcionário;<br>
<b>Investimentos:</b> Mostra a lista com todos os investimentos cadastrados;<br>
<b>Adicionar Investimento:</b> Redireciona o usuário para um formulário onde deverá ser preenchido para adicionar um investimento. <br>

Ainda na primeira página podemos visualizar esses botões inseridos em cada nome de funcionário.

<b>Verde:</b> Um botão de visualizar o funcionário e seus investimentos; <br>
<b>Azul:</b> Um botão para editar o funcionário, seu nome e email;<br>
<b>Vermelho:</b> Um botão para excluir o funcionário da lista de funcionários;<br>
<b>Amarelo:</b> Um botão para vincular o funcionário e seus investimentos, assim também como adicionar um valor ao investimento específico.

<h3>Visualizar um funcionário</h3>

Ao clicar no botão verde na página “home”, você será redirecionado à página de visualizar o funcionário e seus investimentos. Em cima mostrará o nome do funcionário que estará acessando. Abaixo uma lista com seu ID, nome do investimento, tipo de investimento, e o valor.

<b>Azul:</b> Botão de editar o valor do investimento;<br>
<b>Vermelho:</b> Excluir o investimento associado ao funcionário.

Ao clicar no botão de editar o usuário será redirecionado para esse formulário onde deverá editar o valor do investimento. E em seguida clicar no botão “salvar”.

<h3>Editar Funcionário</h3>


Ao clicar no botão de “editar” na página home, o usuário será redirecionado para o formulário de edição de funcionário onde ele deverá preencher os campos que queira fazer a edição: nome e/ou email.<br>
Para editar os investimentos deverá ser feito na página de investimentos.
Para editar o valor do investimento deverá ser feito na página de visualização de funcionários.

<h3>Atualizar Investimento</h3>

Ao clicar no botão de “vincular e adicionar investimento”, o usuário será redirecionado para o formulário acima, onde irá conter o nome do funcionário que queria editar, logo abaixo uma lista que deverá ser selecionada o nome do investimento (lista de investimentos disponível no botão “investimentos”). E logo abaixo o valor do investimento que deverá ser preenchido. 

Ao final clicar no botão “salvar”.

<h3>Lista de Investimentos</h3>

Acima a tela de exibição da lista de investimentos cadastrados no sistema, com seu ID, Nome do Investimento e o Tipo de investimento.

Em cada investimento terá também dois botões:

<b>Azul:</b> Botão de editar o investimento, será redirecionado (assim como os outros) para um formulário de edição, onde poderá editar o nome e o tipo do investimento.<br>
<b>Vermelho:</b> Botão para excluir o investimento cadastrado.

<h3>Adicionar Investimento</h3>

A tela de “adicionar investimento” onde o usuário terá que preencher o formulário com as informações: “nome do investimento” e “tipo do investimento”.
Assim que completadas, deverá clicar no botão “enviar” para cadastrar o investimento.

<h1>O código</h1>

<h3>Controller</h3>
As controllers muitas vezes tem um elementos parecidos, como index, create, store, edit, uptade e destroy. Cada controller cuida de uma parte do código. No projeto temos:
<li><b>CriarFuncionario:</b> class criarFuncionário onde utiliza a model "Funcionario::create" para adicionar o nome (name) e o email (email);</li>
<li><b>FuncionarioInvestimentoController:</b> Onde tem a index para a visualização de funcionário assim como o create para vincular o funcionário e seu investimento. Store para armazenar os dados da create. Edit para editar o valor do investimento. Uptade para visualizar o valor depois de editado e por fim o destroy para excluir o investimento vinculado ao funcionário.</li>
<li><b>FuncionariosController</b>Assim como o "FuncionárioInvestimentosController" a controller de funcionários possui os mesmos elementos, mas a parte que será "controlada" é apenas a de funcionários, utilizando a model "funcionário"</li>
  <li><b>InvestimentosController</b>Assim como o "FuncionárioInvestimentosController" a controller de investimentos possui os mesmos elementos, mas a parte que será "controlada" é apenas a de investimentos, utilizando a model "investimento"</li>

<h3>Models</h3>
As models são responsáveis por fazer o meio de campo entre o dado armazenado e as requisições do usuário.No projeto será utilizada apenas três models elas são: Funcionário, Investimento e por fim FuncionárioInvestimento. <i>Models sempre são no singular</i>

<b>Funcionário</b>
A model será configurada para pegar os dados "name" e "email" do banco de dados. Também irá dizer que "o retorno pertence a muitos investimentos e que terá uma tabela pivot chamada "valor" na tabela.

<b>Investimento</b>
A model será configurada para pegar os dados "nome" e "tipo" do banco de dados. Também irá dizer que "o retorno pertece a muitos funcionarios e que terá uma tabela pivot chamda "valor" na tabela.

<b>FuncionarioInvestimento</b>
A model será configurada para pegar os dados da tabela "funcionario_investimento" onde terá uma ligação entre as tabelas "funcionario" e "investimento". A model irá pegar apenas o "funcionario_id" o "investimento_id" e o "valor".

<h3>Migrations</h3>
A migration consiste em manter o versionamento da base de dados de uma aplicação e realizar sua manipulação através do código, possibilitando o compartilhamento de todo o seu histórico de alterações. No projeto iremos utilizar três migrations: funcionario, investimento e funcionario_investimento.

A tabela funcionário (assim como na model configurada) irá armazenar os dados "name" e "email".<br>
A tabela investimento (assim como na model configurada) irá armazenar os dados "nome" e "tipo".<br>
Por fim a tabela funcionario_investimento irá fazer uma ligação entre as duas tabelas, o método utilizado foi o "Many To Many" ou seja "Muitos para Muitos".
Para interligar as duas tabelas foi preciso apenas criar uma nova migration utilizando o _ para fazer a interligação das duas. Depois foi preciso configurar a migration para pegar os "id's" do funcionario e investimento, e por fim criar uma terceira tabela (dentro dessa migration) para conter o campo "valor".

<h3>Views</h3>
<h4>Layout</h4>
Layout nada mais é que a primeira camada da blade. No projeto foi utilizado para que a "Nav" fique igual em todas as páginas do projeto. <br>
Lá foi colocado os links para utilização do bootstrap. Em seguida ja foi especificado que o "cabeçalho" terá a nav e os botões do menu: "home, adicionar funcionário, investimentos e adicionar investimento". O botão foi colocado como "href" sendo dentro das aspas a rota espeficiando onde esse botão irá levar o usuário. Também foi colocado um style para que o botão fique na cor verde, utilizando seu código.

<h4>Blade</h4>
Todas as blades foram editadas para que cada uma mostre ao usuário uma página especifica.<br>
A primeira página criada foi a "index" onde mostra os funcionários. Ao colocar @section('cabecalho') no inicio do código já importou o código no layout.<br>
Em @section('conteudo') foi utilizado elementos do bootstrap como a lista, e os botões inseridos. Para puxar os dados registrados no banco de dados foi implementado um @foreach.<br>
Cada botão foi codificado para que realizasse uma função diferente, cada um com uma rota especifica, como a de "alterar_funcionario" para edição e "createFuncionarioInvestimento" para vincular o funcionário ao investimento e adicionar o valor. Também foi colocado um botão para visualização do funcionário e por fim um botão de excluir o funcionário selecionado.


Outras blades criadas foram:
<li><b>Create.blade:</b>Criada com a intenção de adicionar um formulário para adicionar o funcionário;</li><br>
<li><b>criarInvestimento.blade:</b>Formulário para adicionar o investimento;</li><br>
<li><b>edit.blade:</b>Formulário para edição;</li><br>
<li><b>editarValor.blade:</b>Formulário para editar valor;</li><br>
<li><b>editInvestimentos.blade:</b>Formulário para edição de investimentos;</li><br>
<li><b>index.blade:</b>Página para listar os funcionários;</li><br>
<li><b>investimentos.blade:</b>Página para listar os investimentos;</li><br>
<li><b>vincularFuncionarioInvestimento.blade:</b>Formulário para vincular o funcionário ao investimento e adicionar um valor;</li><br>
<li><b>visualizarfuncionario.blade:</b>Página para visualizar um funcionário especifico.</li><br>

<h3>Web</h3>
A ultima parte é a Web onde fica as rotas.<br>
Cada rota foi configurada como get (pegar), post (publicar), delete (deletar) e patch (correção). Entre () foi colocado o nome da rota e seu caminho que irá prosseguir. Em alguns casos foi colocar o {id} para especificar um funcionário ou um investimento para visualização, edição ou exclusão. Depois foi colocado o caminho do controller onde será configurado cada rota e por fim um nome para diferenciamento de cada rota. 
<hr>


