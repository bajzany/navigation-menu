<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu\Controls;

class MenuFactory
{

	/**
	 * @var IMenuControl
	 */
	private $control;

	public function __construct(IMenuControl $control)
	{

		$this->control = $control;
	}

	/**
	 * @return MenuControl
	 */
	public function createMenu()
	{
		return $this->control->create();
	}

}
