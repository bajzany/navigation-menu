<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu;

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
	 * @param Menu $menu
	 * @return MenuControl
	 */
	public function createMenu(Menu $menu)
	{
		return $this->control->create($menu);
	}


}
