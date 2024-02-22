<?php declare(strict_types=1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
/**
 * AJOUTER LE CODE MANQUANT!
 */
 
function routingPage(Array $pGetRecieved):String
{
   /**
 * AJOUTER LE CODE MANQUANT!
 */
if (!isset($pGetRecieved['page'])) {
   return 'home';
}

switch ($pGetRecieved['page']) {
  case 'home':
      return 'home';
  case 'list':
      return 'list';
  case 'details':
      return 'details';
  case 'pageinconnue':
      return 'home';
  default:
     return 'home';
}
}

function getParamSearch($pGetRecieved):String
{
  /**
 * AJOUTER LE CODE MANQUANT!
 */
if (isset($pGetRecieved['nom'])) {
   return $pGetRecieved['nom'];
} else {
return "";
}
}
function getParamDetail($pGetRecieved):String
{
   /**
 * AJOUTER LE CODE MANQUANT!
 */
   return "details";
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
