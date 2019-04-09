<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu;

interface IMenuControl
{

	/**
	 * @param Menu $menu
	 * @return MenuControl
	 */
	public function create(Menu $menu): MenuControl;

}
