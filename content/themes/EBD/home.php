<?php
/*
Template Name: EBD Book
*/
?>

<?php get_header('EBD'); ?>

<!-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    /> -->

<?php get_template_part('/template-parts/modals/modals'); ?>
<!-- POPS -->
<?php get_template_part('/template-parts/pops/pops', 'adm'); ?>
<?php get_template_part('/template-parts/pops/pops', 'ebd'); ?>
<?php get_template_part('/template-parts/pops/pops', 'gg'); ?>
<?php get_template_part('/template-parts/pops/pops', 'log'); ?>
<?php get_template_part('/template-parts/pops/pops', 'com'); ?>

<nav class="indice-right">
  <button class="btn" type="button" data-toggle="collapse" data-target="#collapseIndiceRight" aria-expanded="false" aria-controls="collapseIndiceRight">
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  </button>
  <div class="collapse" id="collapseIndiceRight">
    <a class="btn zoom"><i class="fa fa-plus"></i></a>
    <a class="btn zoom-out"><i class="fa fa-minus"></i></a>
    <a class="btn zoom-init"><i class="fa fa-refresh"></i></a>
    <div class="indice-right__item">
      <img class="indice-right__image" go="#quesitos-adm" src="<?php echo get_theme_file_uri('/public/images/indice/Indice1-xs.png') ?>" alt="">
    </div>
    <div class="indice-right__item">
      <img class="indice-right__image" go="#quesitos-com" src="<?php echo get_theme_file_uri('/public/images/indice/Indice2-xs.png') ?>" alt="">
    </div>
    <div class="indice-right__item">
      <img class="indice-right__image" go="#quesitos-gg" src="<?php echo get_theme_file_uri('/public/images/indice/Indice3-xs.png') ?>" alt="">
    </div>
    <div class="indice-right__item">
      <img class="indice-right__image" go="#quesitos-log" src="<?php echo get_theme_file_uri('/public/images/indice/Indice4-xs.png') ?>" alt="">
    </div>
  </div>
</nav>

<div class="wrapperEBD">

  <header id="cover" class="ebook-page">
    <img id="reveal-cover-shapegreen" class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-green.png') ?>" alt="" />
    <img id="reveal-cover-shapeblue" class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />

    <div id="reveal-cover-logo">
      <img class="logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
      <h1 class="h1-ebd">Book de processos<br> <span style="font-size: 0.5em;">3° Edição</span></h1>
    </div>

    <img id="reveal-cover-shapeyellow" class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img id="reveal-cover-shapered" class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />

  </header>

  <!---
  <section id="scd-cover" class="ebook-page">
    <img class="scd-cover-logo logo-center" src="<//?php echo get_theme_file_uri('/public/images/covers/logo-ebdgrupo.png') ?>" alt="" />
  </section>
-->


  <section id="objetivo" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/jeitoebd/shape-top.png') ?>" alt="" />
    <h2 class="h2-ebd">OBJETIVO</h2>
    <div class="ebook-text myFadeIn">
      <p>
        O book de Processos <b>"Um Jeito EBD"</b> tem como principal objetivo a
        harmonização e a padronização de processos e rotinas, com foco na
        excelência e na produtividade de resultados sustentáveis, com a MISSÃO
        de aperfeiçoar e implementar tais procedimentos, <b>apoiando</b> e
        <b>engajando</b> as <b>pessoas</b> envolvidas, na busca pela
        <b>excelência</b> do <b><i>Nosso Jeito de Fazer</i></b>.
      </p>
      <p class="title-alike">ESSA É A EVOLUÇÃO DO NOSSO JEITO!</p>
    </div>

    <h2 class="h2-ebd">REGULAMENTO GERAL</h2>
    <div class="ebook-text myFadeIn">
      <p>
        Todo o conteúdo aqui apresentado, incluindo qualquer material complementar, é de propriedade
        da Empresa Brasileira de Distribuição LTDA e, portanto, deverão ser utilizados exclusivamente para
        fins do exercício da função de cada colaborador.</p><br>
      <p>Sempre que for necessário realizar qualquer tipo de alteração, inclusão e/ou exclusão dos materiais
        do programa “<b>Um Jeito EBD</b>”, a fim de aprimorar nossos processos na busca pela excelência,
        somente poderão ser feitos mediante aprovação do Departamento de Qualidade &amp; Processos.
        Qualquer outro material, seja novo, seja um ajuste, não será considerado válido no momento das
        avaliações.</p><br>
      <p>Toda e qualquer mudança será válida quando informada aos colaboradores mediante comunicados
        oficiais expedidos pelo Departamento de Qualidade &amp; Processos.
      </p>
    </div>
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/jeitoebd/shape-bottom.png') ?>" alt="" />
  </section>

  <section id="indice" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/indice/shape-top.png') ?>" alt="" />
    <h2 class="h2-ebook">ÍNDICE</h2>
    <div>
      <br>
      <p class="nav-title">INTRODUÇÃO</p>
      <a class="nav-subtitle" href="#cultura-ebd">CULTURA EBD<span class="indice-number">4</span></a>
      <a class="nav-subtitle" href="#mensagem-da-presidencia">MENSAGEM DA PRESIDÊNCIA<span class="indice-number">5</span></a>
      <p class="nav-title">DEFINIÇÕES DO PROGRAMA</p>
      <a class="nav-subtitle" href="#elegiveis">ELEGÍVEIS<span class="indice-number">7</span></a>
      <a class="nav-subtitle" href="#guardioes-do-programa">GUARDIÕES DO PROGRAMA<span class="indice-number">8</span></a>
      <a class="nav-subtitle" href="#pontuacao">PONTUAÇÃO<span class="indice-number">9</span></a>
      <a class="nav-subtitle" href="#criterios-de-apuracao">CRITÉRIOS DE APURAÇÃO<span class="indice-number">12</span></a>
      <a class="nav-subtitle" href="#tipos-de-quesitos">TIPOS DE QUESITOS<span class="indice-number">13</span></a>
      <a class="nav-subtitle" href="#avaliacao">AVALIAÇÕES<span class="indice-number">14</span></a>
      <a class="nav-subtitle" href="#pleitos">PLEITOS<span class="indice-number">15</span></a>
      <a class="nav-subtitle" href="#merito-destaque-ano">RECONHECIMENTO POR MÉRITO<span class="indice-number">16</span></a>
      <p class="nav-title">DIRECIONAMENTOS</p>
      <a class="nav-subtitle" href="#lider">DNA LIDER<span class="indice-number">19</span></a>
      <a class="nav-subtitle" href="#ebdv">EBDV<span class="indice-number">20</span></a>
      <a class="nav-subtitle" href="#ebde">EBDE<span class="indice-number">21</span></a>
      <a class="nav-subtitle" href="#execucao-basica">EXECUÇÃO BÁSICA<span class="indice-number">22</span></a>
      <p class="nav-title">INICIATIVAS</p>
      <a class="nav-subtitle" href="#escola-de-lideranca">PROGRAMA DE DESENVOLVIMENTO<span class="indice-number">24</span></a>
      <p class="nav-title">METODOLOGIA DE GESTÃO</p>
      <!-- <a class="nav-subtitle" href="#escola-de-lideranca">ESCOLA DE LIDERANÇA<span class="indice-number">23</span></a> -->
      <a class="nav-subtitle" href="#pdca">CICLO PDCA<span class="indice-number">26</span></a>
    </div>
    <h2 class="h2-ebook">Competências</h2>
    <div class="indice-competencias">
      <img class="indice-competencias-img" go="#quesitos-adm" src="<?php echo get_theme_file_uri('/public/images/indice/Indice1.png') ?>" alt="">
      <img class="indice-competencias-img" go="#quesitos-com" src="<?php echo get_theme_file_uri('/public/images/indice/Indice2.png') ?>" alt="">
      <img class="indice-competencias-img" go="#quesitos-gg" src="<?php echo get_theme_file_uri('/public/images/indice/Indice3.png') ?>" alt="">
      <img class="indice-competencias-img" go="#quesitos-log" src="<?php echo get_theme_file_uri('/public/images/indice/Indice4.png') ?>" alt="">
    </div>
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/indice/shape-bottom.png') ?>" alt="" />
  </section>

  <!--
      <section id="page-break" class="ebook-page">
    <img class="image-full" src="<//?php echo get_theme_file_uri('/public/images/covers/page-break.png') ?>" alt="" />
  </section>
  -->


  <section id="cultura-ebd" class="ebook-page">
    <div class="cultura-ebd-images">
      <img class="cultura-ebd-left-item" id="reveal2" src="<?php echo get_theme_file_uri('/public/images/cultura/cultura-text-blue.png') ?>" alt="" />
      <img class="cultura-ebd-left-item" id="reveal3" src="<?php echo get_theme_file_uri('/public/images/cultura/cultura-text-yellow.png') ?>" alt="" />
      <img class="cultura-ebd-left-item" id="reveal4" src="<?php echo get_theme_file_uri('/public/images/cultura/cultura-text-red.png') ?>" alt="" />
      <img class="cultura-ebd-left-item" id="reveal5" src="<?php echo get_theme_file_uri('/public/images/cultura/cultura-text-grey.png') ?>" alt="" />
      <img class="cultura-ebd-right-item" src="<?php echo get_theme_file_uri('/public/images/cultura/cultura-shape.png') ?>" alt="" />
    </div>
    <!-- <img class="image-full" src="< ?php echo get_theme_file_uri('/public/images/cultura/cultura.png') ?>" alt="" /> -->

  </section>

  <section id="mensagem-da-presidencia" class="ebook-page">
    <h3 class="h3-ebd">MENSAGEM DA <br><span>PRESIDÊNCIA</span></h2>
      <img src="<?php echo get_theme_file_uri('/public/images/photos/book-presidente.png') ?>" alt="" />
      <h3 class="h3-ebook">FAMÍLIA EBD,</h3>
      <div class="ebook-text">
        <p>
          Temos a compreensão muito clara de ser reconhecida pelos clientes,
          fornecedores e colaboradores como uma das empresas preferidas do nosso
          segmento e no mercado onde atuamos, por meio de um trabalho
          diferenciado, atendendo e superando expectativas.
        </p>
        <p>
          Foi pensando nisso que, em 2014, tomamos a decisão de definir
          processos mais estruturados, garantindo a padronização das nossas
          operações de ponta a ponta.
        </p>
        <p>
          Nosso compromisso é de evolução contínua e, por isso, decidimos em
          2017 montar um departamento de “Qualidade & Processos”, com o objetivo
          de definir, capacitar, apoiar e auditar as nossas operações,
          reconhecendo as melhores performances, e multiplicando as melhores
          práticas. E já sob o comando do departamento, foi lançada a 2ª edição
          do nosso book de processos <b>"Um Jeito EBD"</b>.
        </p>
        <p>
          Em 2018, a decisão foi a de investir mais em tecnologia com o intuito
          de modernizar os nossos processos, trazendo ganhos de produtividade e
          eficiência. Dessa forma, lançamos o Projeto EBD 40+, no qual estamos
          substituindo o nosso “ERP”, o sistema de automação de vendas, a folha
          de pagamento e introduzindo o WMS. Atualmente, estamos justamente
          passando por essa etapa de “mudança”, superando todos os obstáculos
          com muita dedicação e trabalho em equipe.
        </p>
        <p>
          Chegamos a 2020 e na 3ª edição do nosso book de processos. Vocês
          perceberão uma interação muito maior entre os processos e os novos
          sistemas, trazendo mais agilidade e confiabilidade nas informações e
          tomadas de decisões.
        </p>
        <p>
          Ambos são “vivos”, ou seja, terão a sua evolução com o passar dos
          meses, e foi pensando nisso que o departamento de Qualidade e
          Processos encontrou uma forma bastante eficiente de garantir que as
          atualizações do sistema, e possivelmente de rotinas, sejam feitas com
          agilidade e assertividade nas filiais.
        </p>
        <p>
          Em vista disso, o book de processos <b>"Um Jeito EBD"</b> estará
          disponível a todos os colaboradores em uma plataforma digital, com
          fácil acesso e maior segurança das informações.
        </p>
        <p>
          Deixo meu registro de parabenização a todas as filiais que se
          superaram nos últimos anos e que conquistaram os Destaques do Ano e o
          Destaque Promissão.
        </p>
        <p>
          Conto com o apoio e a dedicação de todos para garantirmos a evolução
          dos nossos processos e a capacitação da nossa gente.
        </p>
        <p>Um forte abraço a todos,</p>
        <p>Djalma Bezerra</p>
      </div>
  </section>

  <section id="definicoes-do-programa" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">DEFINIÇÕES DO PROGRAMA</h2>
    <img class="logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section>

  <section id="elegiveis" class="ebook-page">
    <h3 class="h3-ebd">ELEGÍVEIS</h3>
    <p class="ebook-text">
      Filiais que iniciem suas atividades até o dia 1° de março são
      elegíveis e deverão ser avaliadas. A regra se aplica tanto para as
      novas filiais quanto para aquelas que façam algum desmembramento de
      área.
    </p>
    <div class="mapBrasil">
      <img id="mapBrasil" src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/elegiveis-map.png') ?>" alt="" />
      <div class="coord" id="coord1"></div>
      <div class="coord" id="coord2"></div>
      <div class="coord" id="coord3"></div>
      <div class="coord" id="coord4"></div>
      <div class="coord" id="coord5"></div>
      <div class="coord" id="coord6"></div>
      <div class="coord" id="coord7"></div>
      <div class="coord" id="coord8"></div>
      <div class="coord" id="coord9"></div>
    </div>
    <div class="tables">
      <div class="table">
        <h4 class="h4-ebook">Norte 1</h4>
        <ul>
          <li id="boavista">EBD Boa Vista</li>
          <li id="manaus">EBD Manaus</li>
          <li id="santarem">EBD Santarém</li>
        </ul>
      </div>
      <div class="table">
        <h4 class="h4-ebook">Norte 2</h4>
        <ul>
          <li id="ananindeua">EBD Ananindeua</li>
          <li id="macapa">EBD Macapá</li>
          <li id="saoluis">EBD São Luis</li>
          <li id="imperatriz">EBD Imperatriz</li>
        </ul>
      </div>
      <div class="table">
        <h4 class="h4-ebook">Nordeste</h4>
        <ul>
          <li id="fortaleza">EBD Fortaleza</li>
          <li id="juazeiro">EBD Juazeiro (<dfn title="Escritório Avançado">E.A</dfn>)</li>
          <li id="caruaru">EBD Caruaru</li>
          <li id="petrolina">EBD Petrolina</li>
        </ul>
      </div>
      <div class="table">
        <h4 class="h4-ebook">Rio de Janeiro</h4>
        <ul>
          <li id="duquedecaxias">EBD Duque de Caxias</li>
          <li id="taquara">EBD Taquara</li>
          <li id="saogoncalo">EBD São Gonçalo</li>
          <li id="pirai">EBD Piraí</li>
        </ul>
      </div>
      <div class="table">
        <h4 class="h4-ebook">São Paulo</h4>
        <ul>
          <li id="saopaulo">EBD São Paulo</li>
          <li id="guarulhos">EBD Guarulhos</li>
          <li id="itapevi">EBD Itapevi</li>
          <li id="litoral">EBD Litoral (<dfn title="Escritório Avançado">E.A</dfn>)</li>
        </ul>
      </div>
    </div>
    <dfn>E.A : Escritório Avançado</dfn>
  </section>

  <section id="guardioes-do-programa" class="ebook-page">
    <h3 class="h3-ebd">GUARDIÕES DO <span>PROGRAMA</span></h3>
    <!-- <div class="ebook-text"> -->
    <p>É a equipe facilitadora que garante que todos os colaboradores conheçam e executem os processos
      em suas rotinas.</p>
    <h4 class="h4-ebd">Guardião</h4>
    <p>
      O regional deve nomear uma pessoa em cada filial, devendo ser um líder de área e que tenha a
      facilidade de interação e de comunicação entre todas as áreas para ser o “Guardião” do programa
      na filial. As principais contribuições são:
    </p>
    <ul class="table-grey myFadeIn">
      <li>Consolidar as autoavaliações e solicitações de pleitos, garantindo os envios para o
        Departamento de Qualidade &amp; Processos, conforme datas preestabelecidas.
      </li>
      <li>Envio da proposta de criação e/ou melhoria do processo e procedimento do Book.
      </li>
      <li>É o responsável em estreitar a comunicação com o Departamento de Qualidade &amp;
        Processos para assuntos de impacto na filial:<br>
        - Validar a data da avaliação na filial.<br>
        - Manter a equipe de monitores informados sobre as solicitações e orientações enviadas
        pelo Departamento de Qualidade &amp; Processos.<br>
        - Atualizar no quadro mural de Gente &amp; Gestão a lista dos guardiões do programa, sempre
        que necessário.<br>
        - Enviar a estrutura dos guardiões do programa para o Departamento de Qualidade &amp;
        Processos sempre que esta sofrer qualquer alteração.
      </li>
      <li>Manter os monitores e apoiadores informados sobre qualquer tipo de mudança ou inclusão
        realizada pelo Departamento de Qualidade &amp; Processos.
      </li>
    </ul>
    <!-- <hr class="hr-ebook"> -->
    <h4 class="h4-ebd">Monitor</h4>
    <p>O Gestor de cada área será o “Monitor” da sua competência e terá as seguintes contribuições:</p>
    <ul class="table-grey myFadeIn">
      <li>Treinar 100% a sua equipe garantindo que todos exerçam suas atividades, executando os
        processos e procedimentos da EBD dentro das suas rotinas. Os treinamentos devem ser
        aplicados no momento da integração funcional dos colaboradores da sua área.
      </li>
      <li>Acompanhar constantemente as atividades dos colaboradores da sua área, garantindo que
        os processos e procedimentos estejam implementados em suas rotinas.</li>
      <li>Ter a posse e garantir a utilização dos anexos padrões disponibilizados pelo Departamento
        de Qualidade &amp; Processos.
      </li>
      <li>Garantir o envio dos documentos e informações referente à sua área de atuação, conforme
        solicitadas pelo Departamento de Qualidade &amp; Processos ao longo do ano.</li>
      <li>Realizar as autoavaliações junto à sua equipe:<br>
        - Certificar-se de que os atendimentos dos quesitos tenham todas as evidências para
        validação.<br>
        - Mapear os itens não pontuados para a elaboração dos planos de ação.<br>
        - Executar os planos de ação definidos, implementando os processos e procedimentos na
        rotina dos colaboradores da sua área.<br>
        - Garantir o envio das autoavaliações para o “Guardião” com tempo hábil para que as
        informações sejam consolidadas dentro do prazo preestabelecido.
      </li>
      <li>Garantir o envio dos pleitos para o “Guardião” com tempo hábil para que as informações
        sejam consolidadas dentro do prazo preestabelecido.</li>
    </ul>
    <!-- <hr class="hr-ebook"> -->
    <p>Sempre que o Gestor de área for eleito como “Guardião”, ele assume o papel de
      “Monitor/Guardião”.</p>
    <!-- <h4 class="h4-ebd">Apoiador: Supervisão/Técnico</h4>
    <p>
      É um agente catalisador de transformações, que detém um conhecimento
      específico sobre um processo, um modelo, uma ferramenta, uma forma de
      gerir pessoas e mudanças – ou qualquer conhecimento que seja
      importante para empresa – e que tem condições de replicar esse
      conhecimento a outras pessoas por intermédio de treinamentos e
      reuniões internas. Será necessário eleger no mínimo um colaborador por
      competência.
    </p>
    <p>É de responsabilidade do apoiador:</p>
    <ul>
      <li>
        Auxiliar os colaboradores no cumprimento das rotinas e processos.
      </li>
      <li>
        Ampliar as experiências e o conhecimento técnico dos colaboradores.
      </li>
      <li>
        Estimular constantemente o desenvolvimento de competências e propiciar
        a integração do público interno.
      </li>
      <li>
        Desenvolver uma cultura de compartilhamento de conhecimento entre os
        colaboradores.
      </li>
    </ul>
    <p>
      A lista dos guardiões do programa deverá ser atualizada sempre que
      necessário e colocada no quadro mural de Gente e Gestão, contendo os
      nomes dos guardiões e as funções que ocupam.
    </p> -->
    <!-- </div> -->

    <!-- <img class="shape-bottom shape-small" src="< ?php echo get_theme_file_uri('/public/images/shapes/shape-bl-red.png') ?>" alt="" /> -->

  </section>

  <!--
      <section id="page-break" class="ebook-page">
    <img class="image-full" src="<//?php echo get_theme_file_uri('/public/images/covers/page-green.png') ?>" alt="" />
  </section>
  -->


  <section id="pontuacao" class="ebook-page">
    <h3 class="h3-ebd">PONTUAÇÃO</h3>
    <p class="ebook-text">As filiais serão avaliadas e pontuadas com até 800 pontos em meios, e 200 pontos em resultados.
      Além do total de 1.000 pontos referente às categorias, ainda será possível pontuar 150 pontos
      extras.</p>
    <h4 class="h4-ebd">Categoria Meios</h4>
    <p class="ebook-text">
      É o conjunto de rotinas e processos necessários para se obter maior produtividade e assertividade
      em suas tarefas garantindo o atingimento das metas de forma sustentável.
      <br>A categoria meios está dividida em quatro competências, com as suas respectivas pontuações
      possíveis:
    </p>
    <div class="ebd-bar bar-small bar-blue">Administrativo<span>200</span></div>
    <div class="ebd-bar bar-small bar-red">Comercial<span>250</span></div>
    <div class="ebd-bar bar-small bar-yellow">Gente & Gestão<span>150</span></div>
    <div class="ebd-bar bar-small bar-green">Logística<span>200</span></div>

    <h4 class="h4-ebd">Categoria Resultados</h4>
    <p class="ebook-text">
      É o conjunto dos principais indicadores definidos pela Diretoria Corporativa que nos leva ao
      atingimento do nosso “Objetivo”.
      <br>A categoria resultados está dividida em cinco competências, com os seus respectivos indicadores e
      pontuações possíveis:</p>
    <img class="image-full" src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/pontuacao-tabela.png') ?>" alt="" />
  </section>

  <section id="pontuacao-extra-suite" class="ebook-page">
    <h4 class="h4-ebd">EXTRA</h4>
    <p class="ebook-text">São atividades preestabelecidas que possibilitam o ganho de até 150 pontos adicionais ao
      programa, conforme o seu cumprimento e desempenho.
      <br>A pontuação extra está dividida em três atividades, com suas respectivas pontuações possíveis:
    </p>
    <div class="text">
      <div class="ebd-bar bar-grey">Propóstas de melhorias do book<span>50</span></div>
      <p class="ebook-text">É a realização da proposta de criação e/ou melhoria em processos e procedimentos do Book:</p>
      <ul class="table-grey">
        <li>A proposta deve ser elaborada utilizando os arquivos padrões, <b>Arquivo – EBD – POP</b> para elaboração do Procedimento Operacional Padrão (POP) e o <b>Arquivo – EBD – Quesito</b> para elaboração do Quesito.
        </li>
        <li>O POP deve conter os seguintes tópicos: <br>
          - Nome do Procedimento: descrito de forma simples e objetiva.<br>
          - Responsável: é a pessoa que tem autonomia para garantir que o processo aconteça, mesmo não sendo ele o responsável em realizar o procedimento.<br>
          - Objetivo: deve ser escrito pensando de maneira objetiva, deixando claro qual o principal ganho do procedimento.<br>
          - Referências: é o nome de todo o material que auxilia a execução do procedimento. Ex.: planilha, rotinas do sistema, fluxogramas etc.<br>
          - Passo a Passo do POP: é o descritivo de todas as etapas para orientar a correta execução do procedimento para o atendimento do processo.
        </li>
        <li>O Quesito deve conter os seguintes tópicos:<br>
          - Nome do Quesito: deve ser o mesmo nome utilizado no POP.<br>
          - Quesito: é a pergunta feita para a verificação do cumprimento do processo.<br>
          - Atendimento Total (AT): são os itens e/ou etapas que certificam o cumprimento do processo.<br>
          - Atendimento Parcial (AP): são os itens e/ou etapas que certificam o cumprimento do processo, porém não em sua totalidade.<br>
          - Evidência: É toda a documentação necessária para validar os itens e/ou etapas solicitadas para o AT.<br>
          - Não Aplicável (NA): são as condições que impossibilitam a execução do processo.
        </li>
        <li>Após a elaboração da proposta, os arquivos devem ser previamente validados pelo Regional e enviados para o Departamento de Qualidade & Processos dentro do ano vigente.
        </li>
        <li>O envio deve ser realizado pelo guardião da filial.
        </li>
        <li>A pontuação será considerada somente após a validação do Departamento de Qualidade & Processos, cuja análise considerará os seguintes critérios:<br>
          - promover melhoria significativa;<br>
          - ser aplicável a todas as filiais;<br>
          - permitir validação através de evidências, preferencialmente via sistema;<br>
          - nível de vulnerabilidade no cumprimento e controle do processo;<br>
          - não contrapor a legislação vigente;<br>
          - aprovação orçamentária das áreas competentes (quando necessário);<br>
          - previsão de implantação, em todas as demais filiais, no ano subsequente.
        </li>
      </ul>
  </section>

  <section id="pontuacao-extra" class="ebook-page">
    <div class="text">
      <div class="ebd-bar bar-grey">PROGRAMA DE EXCELÊNCIA DAS INDÚSTRIAS<span>50</span></div>
      <p class="ebook-text">É o conjunto de procedimentos adotados pelas indústrias para que possam medir e classificar os distribuidores. Por isso, devemos manter a excelência para continuarmos sendo a empresa preferida dos nossos fornecedores:
      </p>
      <ul class="table-grey">
        A filial deverá evoluir a pontuação em relação à avaliação anterior de cada programa de excelência a qual tem participação:<br>
        - Para filiais que já atingiram a pontuação máxima nos programas, esta deverá manter o seu resultado.<br>
        - Para as indústrias que não realizam apuração por pontos, será considerada a sua classificação.
      </ul>
      <p class="ebook-text">A divulgação dos programas de excelência das indústrias que ocorrerem após a apuração final do programa “Um Jeito EBD” será considerada para avaliação subsequente.</p>
    </div>
      <div class="ebd-bar bar-grey">DISPERSÃO VS AUTOAVALIAÇÃO<span>50</span></div>
      <ul class="table-grey">
        <li>Envio das autoavaliações dentro do prazo preestabelecido pelo Departamento de
          Qualidade &amp; Processo.
        </li>
        <li>Desvio da avaliação oficial em relação à última autoavaliação solicitada pelo Departamento
          de Qualidade &amp; Processos, conforme o gráfico a seguir:
        </li>
      </ul>
      <img class="image-full"  src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/autoavaliacao.png') ?>" alt="" />
         
  </section>
<!--
    <section id="page-break" class="ebook-page">
    <img class="image-full" src="<//?php echo get_theme_file_uri('/public/images/covers/page-blue.png') ?>" alt="" />
  </section>
-->


  <section id="criterios-de-apuracao" class="ebook-page">
    <h3 class="h3-ebd">CRITÉRIOS DE <span>APURAÇÃO</span></h3>
    <p>A apuração define quantos pontos serão atingidos da pontuação total definida para cada quesito,
      conforme quadro a seguir:
    </p>
    <table id="table-avaliacao">
      <tr>
        <td class="item-left">
          <p><span class="item-span item-span--green">AT</span>- Atendimento Total</p>
        </td>
        <td class="item-right">Quando o processo for 100% implantado na filial, sua pontuação é a total definida para cada quesito.</td>
      </tr>
      <tr>
        <td class="item-left">
          <p><span class="item-span item-span--yellow">AP</span>- Atendimento Parcial</p>
        </td>
        <td class="item-right">Quando o processo for parcialmente implantado na filial, sua pontuação é o percentual em relação à pontuação total definida para cada quesito.</td>
      </tr>
      <tr>
        <td class="item-left">
           <p><span class="item-span item-span--blue">N/A</span>- Não se aplica</p>
        </td>
        <td class="item-right">Conforme regra definida para cada quesito (quando existir), sua pontuação é redistribuída para os demais quesitos de sua competência.</td>
      </tr>
      <tr>
        <td class="item-left">
          <p><span class="item-span item-span--red">NO</span>- Não Operacionalizado</p>
        </td>
        <td class="item-right">Quando o processo não atende às especificações mínimas de implementação, sua pontuação é zero.</td>
      </tr>
    </table>
    <p>As validações serão aplicadas mediante comprovação de sua implementação por meio de
      apresentação de evidências, conforme definido para cada quesito e solicitado pelo avaliador.
    </p>
    <p>Quando o período de solicitações de evidências não for descrito nos processos e/ou
      procedimentos, será considerado o período dos últimos 12 meses.
    </p>
    <!-- <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/definicoes-do-programa/shape-bottom2.png') ?>" alt="" /> -->
  </section>

  <section id="tipos-de-quesitos" class="ebook-page">
    <h3 class="h3-ebd">TIPOS DE QUESITOS</h3>
    <div class="ebook-text">
      <h4 class="h4-ebd">Orientativo</h4>
      <p>É aquele que não tem pontuação, porém, deve ser cumprido em sua totalidade e será verificado no
        momento das avaliações.
      </p>
      <h4 class="h4-ebd">Avaliativo</h4>
      <p>É aquele que tem pontuação, podendo ser de questão única ou dividido em subquesitos. A
        subdivisão de um quesito ocorre quando é necessário ter duas ou mais questões fazendo referência
        a um mesmo Procedimento Operacional Padrão (POP).
      </p>
      <h4 class="h4-ebd">Deflator</h4>
      <p>É aquele que quando avaliado como Não Operacionalizado (NO), a sua pontuação será subtraída da
        pontuação total da competência.
      </p>
      <h4 class="h4-ebd">Imprescindível</h4>
      <p>É aquele que quando avaliado como Não Operacionalizado (NO), a área de competência não estará
        elegível à premiação de “Destaque da Ano”.
      </p>
    </div>
    <!--
        <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/definicoes-do-programa/shape-bottom.png') ?>" alt="" />
    -->
  
  </section>

  <section id="avaliacao" class="ebook-page">
    <h3 class="h3-ebd">AVALIAÇÕES</h3>
    <div class="ebook-text">
      <p>As avaliações são divididas em dois formatos, sendo descritas a seguir:</p>
      <h4 class="h4-ebd">Autoavaliação</h4>
      <p>É a verificação do cumprimento dos processos realizada por cada monitor para que se possa elaborar planos de ação para os itens que não tiverem atendimento total:</p>
      <ul class="table-grey">
        <li>A filial deverá realizar no mínimo duas autoavaliações ao longo do ano vigente conforme calendário definido pelo Departamento de Qualidade & Processos.
        </li>
        <li>Autoavaliações devem ter as justificativas para os quesitos que não tiverem atendimento total.
        </li>
        <li>As autoavaliações deverão ser enviadas para o e-mail jeitoebd@ebdgrupo.com.br, dentro dos prazos preestabelecidos.</li>
        <li>O Departamento de Qualidade & Processos analisará as autoavaliações dando o suporte necessário para que as filiais mantenham a evolução constante no cumprimento dos processos.</li>
      </ul>
      <h4 class="h4-ebd">Avaliação Oficial</h4>
      <p>É a avaliação realizada pela equipe do Departamento de Qualidade & Processos para verificar a aderência no cumprimento dos processos e procedimentos na filial:
      </p>
      <ul class="table-grey">
        <li>A avaliação oficial ocorrerá em qualquer período do ano, mediante prévio aviso.
        </li>
        <li>Os processos que são acompanhados pelo corporativo serão avaliados ao final do ano vigente.
        </li>
        <li>Mesmo após avaliação oficial, qualquer processo poderá ser invalidado pelo Departamento de Qualidade & Processos ou por qualquer integrante da Diretoria Corporativa.
        </li>
      </ul>
    </div>
  </section>

  <section id="pleitos" class="ebook-page">
    <h3 class="h3-ebd">Pleitos</h3>
    <div class="ebook-text">
      <p>É um recurso utilizado para solicitar a reavaliação de um quesito após a avaliação oficial do Book de Processos:
      </p>
      <ul class="table-grey">
        <li>Após a avaliação oficial, o Departamento de Qualidade & Processos enviará o arquivo contendo todos quesitos avaliados, com a descrição do motivo pelo não atendimento.
        </li>
        <li>O monitor de cada área deverá identificar, entre os quesitos não atendidos, os que necessitam de uma reavaliação.
        </li>
        <li>Descrever as solicitações dos pleitos na planilha padrão enviada pelo Departamento de Qualidade & Processos, de maneira sucinta e objetiva, a fim de esclarecer o motivo para a validação:
          <br>- Sempre que para validação for necessário a comprovação por evidências, estas devem ser enviadas junto à solicitação dos pleitos.
          <br>- As evidências devem contemplar todo o período de avaliação.
          <br>- Os arquivos das evidências dos quesitos devem ser identificados (nome do arquivo) com o número do quesito correspondente.
          <br>- Sempre que existir um ou mais pleitos que necessitam da apresentação da Planilha – EBD – Plano de Ação como evidência para reavaliação do quesito, esta deve constar em um único arquivo.
        </li>
        <li>Os pleitos deverão ser enviados para o e-mail jeitoebd@ebdgrupo.com.br, dentro dos prazos preestabelecidos.
        </li>
        <li>A análise dos pleitos é realizada em conjunto pelo Departamento de Qualidade & Processos e a Diretoria Corporativa.
        </li>
      </ul>
      <p>Após realizada a análise dos pleitos, o Departamento de Qualidade & Processos enviará o arquivo com a devolutiva para equipe dos Guardiões do Programa.</p>
    </div>
  </section>

  <!--
      <section id="page-break" class="ebook-page">
    <img class="image-full" src="<//?php echo get_theme_file_uri('/public/images/covers/page-yellow.png') ?>" alt="" />
  </section>
  -->


  <section id="merito-destaque-ano" class="ebook-page">
    <h3 class="h3-ebd">Reconhecimento <span>por mérito</span></h3>
    <p>São as premiações para reconhecer as áreas de competência e a filial com os melhores resultados:
    </p>
    <h4 class="h4-ebd">Destaque do Ano</h4>
    <p>Será considerado “Destaque do Ano” as áreas que obtiverem a maior pontuação, acima de 70% e atingirem a meta do indicador definido para a competência.</p>
    <div class="destaque">
      <div class="destaque-item myFadeIn" >
        <div class="ebd-bar bar-blue">Destaque administrativo</div>
        <img  src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-admfin.png') ?>" alt="" />
        <p>Indicador: <b>DESPESA DA FILIAL</b>
        </p>
      </div>
      <div class="destaque-item myFadeIn">
        <div class="ebd-bar bar-red">Destaque comercial</div>
        <img src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-comercial.png') ?>" alt="" />
        <p>Indicador: <b>FATURAMENTO</b>
        </p>
      </div>
      <div class="destaque-item myFadeIn">
        <div class="ebd-bar bar-yellow">Destaque gente & gestão</div>
        <img src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-gentegestao.png') ?>" alt="" />
        <p>Indicador: <b>TURNOVER</b>
        </p>
      </div>
      <div class="destaque-item myFadeIn">
        <div class="ebd-bar bar-green">Destaque logistica</div>
        <img src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-logistica.png') ?>" alt="" />
        <p>Indicador: <b>DEVOLUÇÃO</b>
        </p>
      </div>
    </div>
    <p>As filiais vencedoras do “Destaque do Ano”, receberão uma placa de reconhecimento para ser
      colocada em um local de alta circulação da filial.</p>
  </section>

  <section id="merito-destaque-promissao" class="ebook-page">
    <h4 class="h4-ebd">Destaque Promissão</h4>
    <p>Fará jus ao reconhecimento como Destaque Promissão a filial que obtiver a melhor média na avaliação geral das competências (acima de 70%) e atingir sua meta de rentabilidade para o ano.
    </p>
    <p>A filial vencedora irá receber um <b>TROFÉU</b> criado com exclusividade, que ficará na posse temporária da filial até o próximo ano, uma <b>PLACA</b> de reconhecimento da operação e uma <b>PALESTRA/TREINAMENTO</b> escolhido pelo gestor da filial para o desenvolvimento de seus colaboradores.
    </p>
    <div class="destaque">
      <div class="destaque-item">
        <img id="quadro-size"  src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-promissao.png') ?>" alt="" />
      </div>
      <div class="destaque-item">
        <img src="<?php echo get_theme_file_uri('/public/images/definicoes-do-programa/destaque-trofeu.png') ?>" alt="" />
      </div>
    </div>
    <p>Essa é a maior honra ao mérito dentro do Grupo EBD, pois se trata de uma operação com a melhor
      gestão, não apenas de meios, mas também de resultados.</p>
    <p>A posse definitiva do troféu ocorrerá quando a filial for vencedora por 3 edições. O troféu e a placa
      deverão ficar expostos em locais de destaque na filial.
    </p>
  </section>

  <!-- <section id="programa-de-desenvolvimento" class="ebook-page">
    <img class="shape-top" src="<//?php echo get_theme_file_uri('/public/images/programa-de-desenvolvimento/shape-top.png') ?>" alt="" />
    <h2 class="h2-ebd">Programa de <br>desenvolvimento</h2>
    <img class="logo-center" src="<//?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/programa-de-desenvolvimento/shape-bottom.png') ?>" alt="" />
  </section> -->
  <section id="direcionamentos" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">DIRECIONAMENTOS</h2>
    <img class="logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section>

  <section id="lider" class="ebook-page">
    <img class="image-full myFadeIn" src="<?php echo get_theme_file_uri('/public/images/direcionamentos/lider.png') ?>" alt="" />
  </section>

  <section id="ebdv" class="ebook-page">
    <img class="image-full myFadeIn" src="<?php echo get_theme_file_uri('/public/images/direcionamentos/ebdv.png') ?>" alt="" />
  </section>

  <section id="ebde" class="ebook-page">
    <img class="image-full" src="<?php echo get_theme_file_uri('/public/images/direcionamentos/EBDE.png') ?>" alt="" />
  </section>

  <section id="execucao-basica" class="ebook-page">
    <img class="image-full" src="<?php echo get_theme_file_uri('/public/images/direcionamentos/execucao-basica.png') ?>" alt="" />
  </section>

  <section id="iniciativas" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">Iniciativas</h2>
    <img class="logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section>

  <section id="escola-de-lideranca" class="ebook-page">
    <h3 class="h3-ebd">Programa de <span>desenvolvimento</span></h3>
    <div class="ebd-bar bar-red">Escola de liderança</div>
    <div class="ebook-text">
      <img class="logo-escola" src="<?php echo get_theme_file_uri('/public/images/programa-de-desenvolvimento/escola-lideranca-logo.png') ?>" alt="" />
      <p>
        Atrair e reter talentos é uma das prioridades do Grupo EBD,
        independentemente da área ou do cargo de atuação. Acreditamos que uma
        equipe qualificada e engajada com os objetivos da EBD traçará o melhor
        caminho para o sucesso e para o crescimento sustentável do negócio.
      </p>
      <p>
        A <b>Escola de Liderança</b> é uma iniciativa do Grupo EBD para mapear
        os talentos e estruturar o plano de sucessão, formando, além de bons
        profissionais, gestores completos e capacitados a pensar em
        rentabilidade e gente.
      </p>
      <p>
        Esse programa de desenvolvimento conta com a participação da Liderança
        do Grupo EBD.
      </p>
    </div>
    <p>
      Todo conteúdo e atividades realizadas na <b>ESCOLA DE LIDERANÇA</b> são baseadas em <b>PILARES
        FUNDAMENTAIS</b> para o Grupo EBD.
    </p>
    <img class="image-full myFadeIn" src="<?php echo get_theme_file_uri('/public/images/programa-de-desenvolvimento/escola-tabela1.png') ?>" alt="" />

    <div class="ebook-text">
      <p><b>ÁREAS DE NEGÓCIO</b> com conhecimentos necessários para crescer de acordo com o objetivo do
        Grupo EBD.</p>
    </div>

    <div class="ebook-text">
      <div class="row">
        <div class="col"><span>&#x2713;</span> ADM&amp;FIN</div>
        <div class="col"><span>&#x2713;</span> COMERCIAL</div>
        <div class="col"><span>&#x2713;</span> G&amp;G</div>
        <div class="col"><span>&#x2713;</span> LOGÍSTICA</div>
      </div>
      <div class="row">
        <div class="col"><span>&#x2713;</span> TI</div>
        <div class="col"><span>&#x2713;</span> FISC.&amp;CONT</div>
        <div class="col"><span>&#x2713;</span> QUALIDADE &amp; PROCESSOS</div>
      </div>
    </div>

    <div class="ebook-text myFadeIn">
      <img class="img-proportion" src="<?php echo get_theme_file_uri('/public/images/programa-de-desenvolvimento/escola-tabela2.png') ?>" alt="" />
      <p class="text-proportion">Direcionados pela <b>CULTURA DO GRUPO EBD</b> e sustentada pelos
        comportamentos do DNA do Líder. A metodologia da <b>Escola de
          Liderança</b> é pensada para proporcionar equilíbrio entre teoria e prática.</p>
    </div>
  </section>

  <section id="definicoes-do-programa" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">Metodologia de gestão</h2>
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section>

  <!-- <section id="metodologia-de-gestao" class="ebook-page">
    <img class="shape-top" src="<//?php echo get_theme_file_uri('/public/images/metodologia-de-gestao/shape-top.png') ?>" alt="" />
    <h2 class="h2-ebd">Metodologia de gestão</h2>
    <img class="logo-center" src="<//?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/metodologia-de-gestao/shape-bottom.png') ?>" alt="" />
  </section> -->

  <section id="pdca" class="ebook-page">
    <h3 class="h3-ebd">Metodologia <span>de gestão</span></h3>
    <h4 class="h4-ebd">Ciclo PDCA</h4>
    <div class="pdca-block">
      <img class="pdca-img" src="<?php echo get_theme_file_uri('/public/images/metodologia-de-gestao/ciclo.png') ?>" alt="" />
      <ul class="pdca-details">
        <ol id="reveal6" class="pdca-details-item">
          1. Identificação do Problema
        </ol>
        <ol id="reveal7" class="pdca-details-item">
          2. Observação do Problema
        </ol>
        <ol id="reveal8" class="pdca-details-item">
          3. Análise das causas
        </ol>
        <ol id="reveal9" class="pdca-details-item">
          4. Elaboração do Plano de Ação
        </ol>
        <ol id="reveal10" class="pdca-details-item">
          5. Treinar e Orientar
        </ol>
        <ol id="reveal11" class="pdca-details-item">
          6. Executar Plano de Ação
        </ol>
        <ol id="reveal12" class="pdca-details-item">
          7. Coletar Dados
        </ol>
        <ol id="reveal13" class="pdca-details-item">
          8. Verificar Atinginmento
        </ol>
        <ol id="reveal14" class="pdca-details-item">
          Plano de Ação
        </ol>
        <ol id="reveal15" class="pdca-details-item">
          9. Atuar Corretivamente
        </ol>
        <ol id="reveal16" class="pdca-details-item">
          10. Padronização
        </ol>
      </ul>
    </div>
    <p>
      O ciclo <b>PDCA</b> é um método gerencial que promove a melhoria
      contínua. Desenvolvido por Walter Shewhart, na década de 1930, mas
      somente difundida por Deming nos anos 1950, o método é atualmente
      utilizado pela maioria das empresas multinacionais, visando controlar
      e melhorar os processos de forma contínua, dado que não apresenta
      intervalos ou interrupções.
    </p>
    <p class="table-grey">
      <b>A ferramenta</b> – quando bem entendida e aplicada no dia a dia pelo
      gestor – é um diferencial competitivo no atingimento contínuo da meta.
    </p>
    <p>
      O ciclo <b>PDCA</b> tem o seu início na etapa <b>PLAN</b>. O objetivo
      dessa etapa é focar na parte estratégica do ciclo, levantando e
      analisando as informações. Em seguida, ocorre a execução –
      <b>DO</b> –, em que é executado tudo aquilo que foi planejado,
      provocando a necessidade de avaliar a qualidade daquilo que está sendo
      feito e nos levando à etapa seguinte – <b>CHECK</b>. Nessa etapa,
      verificamos tudo o que foi feito, comparando o que havia sido
      planejado com o resultado, e entendendo as falhas e/ou dificuldades
      que possam ter ocorrido durante todo o processo. Por fim, essa análise
      implica na necessidade de tomada de decisão – <b>ACT</b> – e na
      correção dos problemas e de divergências encontradas.
    </p>
<!--
  <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/shapes/shape-bl-red.png') ?>" alt="" />
-->
    

  </section>

  <!-- Metodologia de gestao : planejamento -->
  <section id="planejamento" class="ebook-page">
    <h4 class="h4-ebd">Planejamento (plan)</h4>
    <p>
      Deve-se estabelecer um plano com base nas diretrizes da empresa,
      estabelecendo também os objetivos, caminhos e métodos a serem seguidos.
      Em seguida, é feita a identificação e correção dos problemas encontrados
      por meio de uma ação efetiva e eficiente. Nessa parte, constam os itens
      descritivos do problema, as questões que se pretendem responder, as
      experiências vividas e o desenvolvimento do plano de ação.
    </p>
    <h4 class="h4-ebook">Fatores críticos de sucesso:</h4>
    <ul class="table-grey">
      <li>
        Quem executa não participa do planejamento (e não entende o motivo do
        plano).
      </li>
      <li>
        Quem planeja não executa (e não entende as dificuldades de quem
        executa).
      </li>
      <li>
        Quem controla não executa, e raramente participa do planejamento (age
        no automático e não ajuda 100% naquilo que poderia).
      </li>
      <li>Erro na definição da meta.</li>
    </ul>

    <img class="image-full myFadeIn" src="<?php echo get_theme_file_uri('/public/images/metodologia-de-gestao/objetivoSMART.png') ?>" alt="" />

  </section>

  <!-- Metodologia de gestao : execuçao + checagem -->
  <section id="checagem" class="ebook-page">
    <h4 class="h4-ebd">Execuçao (do)</h4>
    <p>
      Significa colocar o planejamento em prática, isto é, executar o plano de
      ação previamente elaborado na etapa de planejamento do ciclo PDCA.
      Disciplina militar é fundamental na execução da tarefa.
    </p>
    <p>
      Todos os envolvidos precisam ser treinados nos procedimentos que têm
      como finalidade bater as metas estabelecidas. Realizam as atividades e
      colhem dados para a fase seguinte (checagem).
    </p>
    <p>
      Nessa etapa, o termo liderança, pelo exemplo, fica bastante evidenciado,
      pois o gestor deverá atuar junto ao seu time na execução do plano. Dessa
      forma, o gestor consegue saber rapidamente se o plano é factível de ser
      executado e se a equipe realmente entendeu o que precisava ser feito.
    </p>
    <h4 class="h4-ebook">Fatores críticos de sucesso:</h4>
    <ul class="table-grey">
      <li>
        <b>COMUNICAÇÃO</b> – É a arte de fazer o outro entender o que se quer
        dizer. Por esse motivo, é fundamental que a equipe entenda o plano
        para que consiga executá-lo.
      </li>
      <li>
        <b>DAR FEEDBACK</b> – Processo de comunicação entre 2 ou mais pessoas
        visando a melhoria ou o reconhecimento.
      </li>
      <li>
        <b>LIDERANÇA PELO EXEMPLO</b> – Executar o plano junto ao time,
        mostrando como se faz e colhendo informações.
      </li>
    </ul>

    <h4 class="h4-ebd">Checagem (check)</h4>
    <p>
      Nessa etapa é importante avaliar o que foi feito durante a etapa de
      execução, fazendo comparações e identificando as diferenças entre o
      planejado e o realizado. Sendo assim, conseguimos observar se as metas
      foram atingidas ou não. <i>FOLLOW-UP</i>.
    </p>
    <br>
    <div class="quote-author">
      <p>
        <q class="quote-ebook">"CONFIAR CONFERINDO PARA NÃO DESCONFIAR!"</q>
        <br>Djalma Bezerra
      </p>
    </div>
    <h4 class="h4-ebook">Fatores críticos de sucesso:</h4>
    <ul class="table-grey">
      <li>Abrir meta e não acompanhar.</li>
      <li>
        Orientar e não checar se a orientação foi entendida e/ou não cumprida.
      </li>
    </ul>
  </section>

  <!-- Metodologia de gestao : tomada de decisao + conclusao -->
  <section id="conclusao" class="ebook-page">

    <h4 class="h4-ebd">Tomada de decisão (act)</h4>
    <p>
      Etapa na qual realizamos as ações corretivas que visam a retificação das
      falhas encontradas durante o processo. Após realizada a correção,
      deve-se repetir o ciclo. É nesta etapa que o ciclo se reinicia, dando
      continuidade ao processo de melhoria contínua.
      <br>
      Se o planejamento tiver sido bem-sucedido, devemos padronizar o
      processo.
    </p>
    <h4 class="h4-ebook">Fatores críticos de sucesso:</h4>
    <ul class="table-grey">
      <li>
        Agir sempre em concordância com o planejado (não mudar o rumo sem
        motivo justo e que tenha sido comunicado).
      </li>
      <li>
        Ocorrendo erro na ação, sempre registrar os motivos para futuro
        replanejamento.
      </li>
      <li>Ações bem-sucedidas devem ser padronizadas.</li>
    </ul>

    <h4 class="h4-ebd">Conclusão</h4>
    <p>
      É importante se atentar ao método PDCA que é um ciclo, e, portanto, deve
      “rodar” continuamente. Para que isso ocorra, todas as suas fases devem
      acontecer, sem exceção, pois a omissão de uma das etapas (qualquer uma
      delas) pode causar prejuízos e falhas no processo como um todo. Sendo
      assim, ao rodar o PDCA, devemos evitar tomar algumas atitudes:
    </p>
    <ul class="table-grey">
      <li>Fazer sem planejar.</li>
      <li>Parar após o ciclo completar uma volta.</li>
      <li>Fazer e não checar.</li>
      <li>Planejar, fazer, checar, mas não agir corretivamente.</li>
      <li>
        Definir metas, mas não ter uma equipe preparada para executá-las.
      </li>
      <li>
        Definir metas, mas não saber os métodos determinados para atingi-las.
      </li>
    </ul>

    <!-- <img class="shape-bottom shape-small" src="<//?php echo get_theme_file_uri('/public/images/shapes/shape-bl-red.png') ?>" alt="" /> -->
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/metodologia-de-gestao/shape-bottom.png') ?>" alt="" />

  </section>

  <section id="direcionamentos" class="ebook-page">
    <img class="shape-top" src="<?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">Competências</h2>
    <img class="logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section> 

  <!-- <section id="direcionamentos" class="ebook-page">
    <img class="shape-top" src="<//?php echo get_theme_file_uri('/public/images/covers/cover-top-blue.png') ?>" alt="" />
    <h2 class="h2-ebd">Direcionamentos</h2>
    <img class="logo-center" src="<//?php echo get_theme_file_uri('/public/images/covers/logo-jeitoebd.png') ?>" alt="" />
    <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/covers/cover-bottom-yellow.png') ?>" alt="" />
    <img class="shape-bottom" src="<//?php echo get_theme_file_uri('/public/images/covers/cover-bottom-red.png') ?>" alt="" />
  </section> -->

 


 
 


  <!-- Administrativo e Financeiro -->
  <?php get_template_part('/template-parts/quesitos/adm/adm', 'quesitos'); ?>

  <!-- Comercial -->
  <?php get_template_part('/template-parts/quesitos/comercial/comercial', 'quesitos'); ?>

  <!-- Gente & Gestao  -->
  <?php get_template_part('/template-parts/quesitos/gestao/gestao', 'quesitos'); ?>

  <!-- Logistica -->
  <?php get_template_part('/template-parts/quesitos/logistica/logistica', 'quesitos'); ?>


  <section id="page-break" class="ebook-page">
    <img class="image-full" src="<?php echo get_theme_file_uri('/public/images/covers/page-red.png') ?>" alt="" />
  </section>

  <section id="last-cover" class="ebook-page">
    <img class="scd-cover-logo logo-center" src="<?php echo get_theme_file_uri('/public/images/covers/logo-ebdgrupo.png') ?>" alt="" />
  </section>

  
</div>

<?php get_footer('EBD'); ?>