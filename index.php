<head>
    
<?php // Arquivo de configuração do sistema

include_once 'help.php'; // inclui uma página específica
require_once 'sistema/configuracao.php'; // inclui apenas uma vêz

echo '<h1>Arquivo Index</h1>';

$texto = 'texto resumido de uma variavel';

echo saudacao();
echo '<hr>';
echo retornaTexto('texto para resumir!', 50);

?>

</head>