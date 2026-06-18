<?php

namespace Valuables\Domain\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Title
{
	public function __construct(public string $value)
	{
	}
}