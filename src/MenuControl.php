<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu;

use Nette\Application\UI\Control;

class MenuControl extends Control
{

	/**
	 * @var Menu
	 */
	private $menu;

	public function __construct(Menu $menu, $name = NULL)
	{
		parent::__construct($name);
		$this->menu = $menu;
	}

	public function render()
	{
		$this->template->setFile(__DIR__ . '/template/menu.latte');
		$this->template->navigationMenu = $this->menu;
		$this->template->render();
	}

}
