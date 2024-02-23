<?php declare(strict_types=1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
/**
 * AJOUTER LE CODE MANQUANT!
 */
 
function routingPage(Array $pGetRecieved):String
{
if (!isset($pGetRecieved['page'])) {
   return 'home';
}

switch ($pGetRecieved['page']) {
  case 'list':
      return 'list';
  case 'details':
      return 'details';
  default:
     return 'home';
}
}

function getParamSearch($pGetRecieved):String
{
if (isset($pGetRecieved['nom'])) {
    $pGetRecieved=strtoupper($pGetRecieved['nom']);
   return $pGetRecieved;
} else {
return "";
}
}
function getParamDetail($pGetRecieved):String
{
if (isset($pGetRecieved['id'])) {
    return $pGetRecieved['id'];}
    else {
        return "";
    }
}
function showPage(String $pTemplate,$data = [])
{
    /**
 * NE PAS TOUCHER LE CODE ICI
 */
    if (!file_exists($pTemplate))
        throw new ParseError('file not found');
    ob_start();
    include $pTemplate;
    return  ob_get_clean();
        /**
     * NE PAS TOUCHER LE CODE ICI
     */
}
