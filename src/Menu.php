<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu;

class Menu
{

	/**
	 * @var string
	 */
	private $title;

	/**
	 * @param string $title
	 */
	public function __construct(string $title)
	{
		$this->title = $title;
	}

	/**
	 * @var Item[]
	 */
	private $items = [];

	/**
	 * @return Item[]
	 */
	public function getItems(): array
	{
		return $this->items;
	}

	/**
	 * @param Item $item
	 * @return $this
	 */
	public function addItem(Item $item)
	{
		$this->items[] = $item;
		return $this;
	}

	/**
	 * @param string $title
	 * @param string $link
	 * @return Item
	 */
	public function createItem(string $title, string $link)
	{
		$item = new Item();
		$item->setLink($link);
		$item->setTitle($title);
		$this->items[] = $item;
		return $item;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return $this
	 */
	public function setTitle(string $title)
	{
		$this->title = $title;
		return $this;
	}

}
