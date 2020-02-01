<?php
/**
*
* Quick Ads extension for the phpBB Forum Software package
*
* @copyright (c) 2014 o0johntam0o
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace o0johntam0o\quickads\controller;

use phpbb\controller\helper;
use phpbb\template\template;

class main
{
	/** @var helper */
	protected $helper;
	/** @var template */
	protected $template;
	
	public function __construct(helper $helper, template $template)
	{
		// Formally ;)
		$this->helper = $helper;
		$this->template = $template;
	}
	
	public function base()
	{
		return $this->helper->render('quick_ads.html');
	}
}
