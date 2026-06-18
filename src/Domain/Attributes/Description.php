<?php

namespace Valuables\Domain\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Description
{
	public function __construct(public string $value)
	{
	}
}