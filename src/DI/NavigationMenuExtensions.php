<?php
/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 * Created: 13.12.2018
 */

namespace Bajzany\NavigationMenu\DI;

use Bajzany\NavigationMenu\Controls\IMenuControl;
use Bajzany\NavigationMenu\Controls\MenuFactory;
use Nette\Configurator;
use Nette\DI\Compiler;
use Nette\DI\CompilerExtension;

class NavigationMenuExtensions extends CompilerExtension
{

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('menuControl'))
			->setImplement(IMenuControl::class);

		$builder->addDefinition($this->prefix('menuFactory'))
			->setFactory(MenuFactory::class)
			->setInject(TRUE);
	}

	/**
	 * @param Configurator $configurator
	 */
	public static function register(Configurator $configurator)
	{
		$configurator->onCompile[] = function ($config, Compiler $compiler) {
			$compiler->addExtension('NavigationMenu', new NavigationMenuExtensions());
		};
	}

}
