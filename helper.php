<?php
/**
 * Helper class
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license GNU/GPL, see LICENSE.php
 */

class ModC3rbRgaaTools
{
	// Exemple passage Var Biromain
	//	public $app 	;
	//	public $pathway ;
	//	public $items   ;
	//	public $lang    ;
	//	public $menu    ;
	//
	//	public function __construct()
	//	{
	//    	$this->app      = JFactory::getApplication();
	//		$this->pathway 	= $this->app->getPathway();
	//		$this->items    = $this->pathway ->getPathWay();
	//		$this->lang     = JFactory::getLanguage();
	//		$this->menu     = $this->app->getMenu();
	//		return $this;
	//	}

    /**
     * Retrieves the return see below
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function rgaatools()
    {
    	// variables de bases
    	$app     = JFactory::getApplication();
		$pathway = $app->getPathway();
		$items   = $pathway->getPathWay();
		$lang    = JFactory::getLanguage();
		$menu    = $app->getMenu();
        return '' ;
    }
}