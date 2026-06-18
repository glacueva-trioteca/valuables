<?php

namespace Valuables\Domain\Traits;

use ReflectionClass;
use Valuables\Domain\Attributes\Title;

trait HasTitle
{
	public static function title(): ?string
	{
		return self::resolveTitleAttributeValue(Title::class);
	}

	private static function resolveTitleAttributeValue(string $attributeClass): ?string
	{
		$reflection = new ReflectionClass(static::class);

		foreach ($reflection->getAttributes($attributeClass) as $attribute) {
			$instance = $attribute->newInstance();

			if (isset($instance->value)) {
				return (string) $instance->value;
			}

			if (method_exists($instance, '__toString')) {
				return (string) $instance;
			}
		}

		return null;
	}
}
