<?php 
// No direct access
defined('_JEXEC') or die; 

// Add Js :
$doc->addScript('media/mod_c3rbrgaa_tools/js/app.js');
$doc->addScript('media/mod_c3rbrgaa_tools/js/jquery.cookie.js');
// Add css :
$doc->addStyleSheet('media/mod_c3rbrgaa_tools/css/app.css');

//echo $params ;
// On recup les config de l'admin :
$opt_btcontrast = $params->get('contrast_opt01') ;
$opt_btdyslex 	= $params->get('dyslexic_opt') ;
$opt_btfs 		= $params->get('fs_opt') ;
?>

<div class="lignebtaccessib">
	<?php if ($opt_btcontrast == '1') : ?>
		<button type="button" class="btn btn-default" id="btcontrast01"><?php echo JText::_('MOD_C3RBRGAA_TOOLS_BT_CONTRAST'); ?></button>
	<?php endif; ?>

	<?php if ($opt_btdyslex == '1') : ?>
		<button type="button" class="btn btn-default" id="btdyslexic01"><?php echo JText::_('MOD_C3RBRGAA_TOOLS_BT_DYSLEXIC'); ?></button>
	<?php endif; ?>

	<?php if ($opt_btfs == '1') : ?>
	<div class="btn-group" role="group" aria-label="Increase font-size">
		<button type="button" class="btn btn-default" id="btincreaze"><?php echo JText::_('MOD_C3RBRGAA_TOOLS_BT_FS'); ?></button>
		<button type="button" class="btn btn-default" id="btincreazex"><?php echo JText::_('MOD_C3RBRGAA_TOOLS_BT_FSX'); ?></button>
		<button type="button" class="btn btn-default" id="btincreazexx"><?php echo JText::_('MOD_C3RBRGAA_TOOLS_BT_FSXX'); ?></button>
	</div>
	<?php endif; ?>
</div>