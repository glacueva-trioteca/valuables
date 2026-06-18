<?php

namespace Valuables\Domain\Traits;

use ReflectionClass;
use Valuables\Domain\Attributes\Description;

trait HasDescription
{
	public static function description(): ?string
	{
		return self::resolveDescriptionAttributeValue(Description::class);
	}

	private static function resolveDescriptionAttributeValue(string $attributeClass): ?string
	{
		$reflection = new ReflectionClass(static::class);

		foreach ($reflection->getAttributes($attributeClass) as $attribute) {

			$instance = $attribute->newInstance();

			if (isset($instance->value)) {
				return $instance->value;
			}

			if (method_exists($instance, '__toString')) {
				return (string) $instance;
			}
		}

		return null;
	}
}