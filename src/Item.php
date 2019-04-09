<?php

/**
 * Author: Radek Zíka
 * Email: radek.zika@dipcom.cz
 */

namespace Bajzany\NavigationMenu;

class Item
{

	/**
	 * @var string
	 */
	private $title;

	/**
	 * @var string
	 */
	private $link;

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

	/**
	 * @return string
	 */
	public function getLink(): string
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 * @return $this
	 */
	public function setLink(string $link)
	{
		$this->link = $link;
		return $this;
	}

}
