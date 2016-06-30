<?php
/**
 * @license    GNU/GPL, see LICENSE.php
 */
 
// No direct access // vérifie que ce fichier est inclus dans une application Joomla
defined('_JEXEC') or die;

//  inclure le fichier helper.php qui contient la classe à utiliser pour recueillir les données nécessaires
require_once dirname(__FILE__) . '/helper.php';
 
// invoquer la méthode de classe helper appropriée pour récupérer les données
$rgaatool = ModC3rbRgaaTools::rgaatools($params);
//$rgaatool = new ModC3rbRgaaTools();//::rgaatools($params); //Test birom voir helper


$doc = JFactory::getDocument();
//$doc->addScript(JPATH_SITE.'/media/mod_c3rbrgaa_tools/js/app.js');
//$doc->addStyleSheet(JPATH_SITE.'/media/mod_c3rbrgaa_tools/css/app.css');

// inclure le template pour afficher le rendu. 
require JModuleHelper::getLayoutPath('mod_c3rbrgaa_tools');