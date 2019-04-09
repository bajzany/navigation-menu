<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu\Controls;

interface IMenuControl
{

	/**
	 * @return MenuControl
	 */
	public function create(): MenuControl;

}
