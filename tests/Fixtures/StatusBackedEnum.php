<?php

namespace Valuables\Tests\Fixtures;

use Valuables\Domain\Attributes\Label;
use Valuables\Domain\Attributes\Description;
use Valuables\Domain\Attributes\Title;
use Valuables\Domain\Traits\HasLabels;
use Valuables\Domain\Traits\HasDescription;
use Valuables\Domain\Traits\HasTitle;

#[Description('State of the backed enum')]
#[Title('Status Backend')]
enum StatusBackedEnum: string
{
	use HasLabels;
	use HasDescription;
	use HasTitle;

	#[Label('Active Status')]
	case ACTIVE = 'active';

	#[Label('Inactive Status')]
	case INACTIVE = 'inactive';

	case PENDING = 'pending';
}