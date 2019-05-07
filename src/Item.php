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
	private $destination;

	/**
	 * @var array
	 */
	private $parameters = [];

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
	public function getDestination(): string
	{
		return $this->destination;
	}

	/**
	 * @param string $destination
	 * @return $this
	 */
	public function setDestination(string $destination)
	{
		$this->destination = $destination;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getParameters(): array
	{
		return $this->parameters;
	}

	/**
	 * @param mixed $parameters
	 * @return $this
	 */
	public function setParameters(array $parameters)
	{
		$this->parameters = $parameters;
		return $this;
	}

	/**
	 * @param $key
	 * @param $value
	 * @return $this
	 */
	public function addParameter($key, $value)
	{
		$this->parameters[$key] = $value;
		return $this;
	}

}
