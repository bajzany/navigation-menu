## NavigationMenu - Nette menu


#### Create control

````php
use Bajzany\NavigationMenu\MenuFactory;

/**
 * @var MenuFactory @inject
 */
public $SaleMenu;

public function createComponentSaleMenu()
{
	$menu = new Menu('Seznam sekcí');
	$saleItemId = $this->getParameter('id');
	$menu->createItem('Detail', ":Admin:SaleItem:detail", ['id' => $saleItemId]);
	return $this->SaleMenu->createMenu($menu);
}
````

#### In .latte

````slash
{control saleMenu}
````
