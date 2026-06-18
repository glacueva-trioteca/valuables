<?php

namespace Valuables\Tests;

use PHPUnit\Framework\TestCase;
use Valuables\Tests\Fixtures\SimpleEnum;
use Valuables\Tests\Fixtures\StatusBackedEnum;

class ValuableEnumsTest extends TestCase
{
	public function test_backed_enum_has_labels(): void
	{
		$this->assertSame('Active Status', StatusBackedEnum::ACTIVE->label());
		$this->assertSame('Inactive Status', StatusBackedEnum::INACTIVE->label());
		$this->assertNull(StatusBackedEnum::PENDING->label());
	}

	public function test_backed_enum_has_description(): void
	{
		$this->assertSame('State of the backed enum', StatusBackedEnum::description());
	}

	public function test_backed_enum_has_title(): void
	{
		$this->assertSame('Status Backend', StatusBackedEnum::title());
	}

	public function test_backed_enum_labels_list(): void
	{
		$expected = [
			'ACTIVE' => 'Active Status',
			'INACTIVE' => 'Inactive Status',
			'PENDING' => null,
		];

		$this->assertSame($expected, StatusBackedEnum::labels());
	}

	public function test_backed_enum_options_list(): void
	{
		$expected = [
			'active' => 'Active Status',
			'inactive' => 'Inactive Status',
			'pending' => null,
		];

		$this->assertSame($expected, StatusBackedEnum::options());
	}

	public function test_simple_enum_has_labels(): void
	{
		$this->assertSame('First Case', SimpleEnum::FIRST->label());
		$this->assertSame('Second Case', SimpleEnum::SECOND->label());
	}

	public function test_simple_enum_has_description(): void
	{
		$this->assertSame('State of the simple enum', SimpleEnum::description());
	}

	public function test_simple_enum_has_title(): void
	{
		$this->assertSame('Simple Non-Backed Enum', SimpleEnum::title());
	}

	public function test_simple_enum_labels_list(): void
	{
		$expected = [
			'FIRST' => 'First Case',
			'SECOND' => 'Second Case',
		];

		$this->assertSame($expected, SimpleEnum::labels());
	}

	public function test_simple_enum_options_list(): void
	{
		$expected = [
			'FIRST' => 'First Case',
			'SECOND' => 'Second Case',
		];

		$this->assertSame($expected, SimpleEnum::options());
	}

    public function test_simple_arrayable_enum_has_labels(): void
	{
		$this->assertSame('First Case', SimpleEnum::FIRST->label());
		$this->assertSame('Second Case', SimpleEnum::SECOND->label());
	}

	public function test_simple_arrayable_enum_has_description(): void
	{
		$this->assertSame('State of the simple enum', SimpleEnum::description());
	}

	public function test_simple_arrayable_enum_has_title(): void
	{
		$this->assertSame('Simple Non-Backed Enum', SimpleEnum::title());
	}

	public function test_simple_arrayable_enum_labels_list(): void
	{
		$expected = [
			'FIRST' => 'First Case',
			'SECOND' => 'Second Case',
		];

		$this->assertSame($expected, SimpleEnum::labels());
	}

	public function test_simple_arrayable_enum_options_list(): void
	{
		$expected = [
			'FIRST' => 'First Case',
			'SECOND' => 'Second Case',
		];

		$this->assertSame($expected, SimpleEnum::options());
	}
}