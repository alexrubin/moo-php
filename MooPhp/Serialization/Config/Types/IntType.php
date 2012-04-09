<?php
namespace MooPhp\Serialization\Config\Types;
/**
 * @package MooPhp
 * @author Jonathan Oddy <jonathan at woaf.net>
 * @copyright Copyright (c) 2011, Jonathan Oddy
 */

class IntType extends PropertyType {

	public function __construct() {
		$this->setType("int");
	}
}
