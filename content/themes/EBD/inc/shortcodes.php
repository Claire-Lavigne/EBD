<?php


if (!function_exists('ebd_arquivos_ebd')) :

  function ebd_arquivos_ebd($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('arquivo_ebd', 'ebd_arquivos_ebd');


if (!function_exists('ebd_arquivos_adm')) :

  function ebd_arquivos_adm($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://ebdbr-my.sharepoint.com/:f:/g/personal/jeitoebd_ebdgrupo_com_br/EnD8FKyqmulMpaLozoMTg5IBa7yx2hupaP7iwbYYe9uHdw?e=icAkax" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('arquivo_adm', 'ebd_arquivos_adm');


if (!function_exists('ebd_arquivos_com')) :

  function ebd_arquivos_com($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://ebdbr-my.sharepoint.com/:f:/g/personal/jeitoebd_ebdgrupo_com_br/EvsgOQKbe0NEh_YtgadkWJEBCEpXZ0EhBRM9eiMETB6KGg?e=8M7kJk" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('arquivo_com', 'ebd_arquivos_com');


if (!function_exists('ebd_arquivos_log')) :

  function ebd_arquivos_log($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://ebdbr-my.sharepoint.com/:f:/g/personal/jeitoebd_ebdgrupo_com_br/ElCSRPRaQh5Hl_anTnC5kocB3Ei9r2oYh_56itDNtsS7TQ?e=3CRvFa" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('arquivo_log', 'ebd_arquivos_log');


if (!function_exists('ebd_arquivos_gg')) :

  function ebd_arquivos_gg($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://ebdbr-my.sharepoint.com/:f:/g/personal/jeitoebd_ebdgrupo_com_br/Etj3cOkYA_dLtCUUn2-af-sBMcdxHU7qa54oAAKvhwXEaw?e=7EC0ht" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('arquivo_gg', 'ebd_arquivos_gg');





/*================================ Checklist LOG ================================*/



if (!function_exists('ebd_checklist_log')) : /* Estrutura do Armazém */

  function ebd_checklist_log($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDAJyvE3G-MpDudq_rOiSwxdUM005ME5XWTZBM1Y3SUFKQzc0STcyM1QwNS4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_log', 'ebd_checklist_log');


if (!function_exists('ebd_checklist_log_QB')) : /* Quebra de Vidro */

  function ebd_checklist_log_QB($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDAJyvE3G-MpDudq_rOiSwxdUNVhCNEZUS1lLTzE1OVRTNlo3MDEwSjBOQy4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_log_QB', 'ebd_checklist_log_QB');

if (!function_exists('ebd_checklist_log_ECF')) : /* Estrutura da câmara fria */

  function ebd_checklist_log_ECF($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDAJyvE3G-MpDudq_rOiSwxdUQ1laRjZRWFdZRE5ESlpWUjJDQjQyN0VDNS4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_log_ECF', 'ebd_checklist_log_ECF');

if (!function_exists('ebd_checklist_log_RC')) : /* Rota Coaching */

  function ebd_checklist_log_RC($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDAJyvE3G-MpDudq_rOiSwxdUMjcxMUQ1M1c3U1Q5U1Y2NTlZSVo1U1NVSS4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_log_RC', 'ebd_checklist_log_RC');

if (!function_exists('ebd_checklist_log_DS')) : /* Destinaçao de Serviços */

  function ebd_checklist_log_DS($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDAJyvE3G-MpDudq_rOiSwxdUREQ3Qlc5SzRZRVExRTQzVEhVUkZDSUU3TS4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_log_DS', 'ebd_checklist_log_DS');



if (!function_exists('ebd_checklist_inspecao_de_frota_pesada')) : /* Inspeçao de frota pesada*/

  function ebd_checklist_inspecao_de_frota_pesada($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDLEc2Sp4LhdAoygd8M2Nyg9UNE9URjgyNTBQUjUwUEFFSzJZSUkwWjhTNC4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_inspecao_de_frota_pesada', 'ebd_checklist_inspecao_de_frota_pesada');


if (!function_exists('ebd_checklist_inspecao_de_frota_leve')) : /* Inspeçao de frota leve*/

  function ebd_checklist_inspecao_de_frota_leve($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDLEc2Sp4LhdAoygd8M2Nyg9URUQ0UVVQUDU3N0JRT0VBR1owT1dVVENONC4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;
add_shortcode('checklist_inspecao_de_frota_leve', 'ebd_checklist_inspecao_de_frota_leve');

/*============================== Checklist ADM ==================================*/


if (!function_exists('ebd_checklist_adm_EF')) : /* Estrutura Fisica */

  function ebd_checklist_adm_EF($attributs)
  {
    $attributs = shortcode_atts([
      'name' => 'file name',
    ], $attributs);

    $arquivoLink = '<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=sfkf3uzo0EKP46CAoSQKDLEc2Sp4LhdAoygd8M2Nyg9UQUdLNDJaRlNIRkcxTUUyNFNBREU4VzNTVy4u" target="blank">';
    $arquivoLink .= $attributs['name'];
    $arquivoLink .= '</a>';
    return $arquivoLink;
  }

endif;

add_shortcode('checklist_adm_EF', 'ebd_checklist_adm_EF');