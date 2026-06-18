<?php

namespace Valuables\Tests\Fixtures;

use Valuables\Domain\Attributes\Label;
use Valuables\Domain\Attributes\Description;
use Valuables\Domain\Attributes\Title;
use Valuables\Domain\Traits\ArrayableEnum;

#[Description('State of the simple enum')]
#[Title('Simple Non-Backed Enum')]
enum ArrayableSimpleEnum
{
	use ArrayableEnum;

	#[Label('First Case')]
	case FIRST;

	#[Label('Second Case')]
	case SECOND;
}