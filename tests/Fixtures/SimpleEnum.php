<?php

namespace Valuables\Tests\Fixtures;

use Valuables\Domain\Attributes\Label;
use Valuables\Domain\Attributes\Description;
use Valuables\Domain\Attributes\Title;
use Valuables\Domain\Traits\HasLabels;
use Valuables\Domain\Traits\HasDescription;
use Valuables\Domain\Traits\HasTitle;

#[Description('State of the simple enum')]
#[Title('Simple Non-Backed Enum')]
enum SimpleEnum
{
	use HasLabels;
	use HasDescription;
	use HasTitle;

	#[Label('First Case')]
	case FIRST;

	#[Label('Second Case')]
	case SECOND;
}