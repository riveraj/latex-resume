<?php
require __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader);
$lexer = new Twig_Lexer($twig, array(
    'tag_comment'   => array('<#', '#>'),
    'tag_block'     => array('<%', '%>'),
    'tag_variable'  => array('<<', '>>'),
    'interpolation' => array('#<', '>'),
));
$twig->setLexer($lexer);

$template = $twig->load('resume.tex');

$resume = yaml_parse_file(__DIR__ . '/resume.yml');

$file = fopen(__DIR__ . '/resume.tex', 'w');
fwrite($file, $template->render($resume));
fclose($file);
