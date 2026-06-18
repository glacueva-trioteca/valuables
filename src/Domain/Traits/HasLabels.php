<?php

namespace Valuables\Domain\Traits;

use BackedEnum;
use ReflectionEnumUnitCase;
use Valuables\Domain\Attributes\Label;

trait HasLabels
{
	/**
	 * @return array<string, mixed>
	 */
	public static function labels(): array
	{
		$labels = [];

		foreach (self::cases() as $case) {
			$labels[$case->name] = self::resolveLabelAttributeValue($case->name, Label::class);
		}

		return $labels;
	}

	/**
	 * @return array<int|string, mixed>
	 */
	public static function options(): array
	{
		$options = [];

		foreach (self::cases() as $case) {
			$key = $case instanceof BackedEnum ? $case->value : $case->name;
			$options[$key] = self::resolveLabelAttributeValue($case->name, Label::class);
		}

		return $options;
	}

	public function label(): mixed
	{
		return self::resolveLabelAttributeValue($this->name, Label::class);
	}

	private static function resolveLabelAttributeValue(string $caseName, string $attributeClass): ?string
	{
		$reflectionCase = new ReflectionEnumUnitCase(static::class, $caseName);

		foreach ($reflectionCase->getAttributes($attributeClass) as $attribute) {
			$arguments = $attribute->getArguments();

			if (array_key_exists(0, $arguments)) {
				return $arguments[0];
			}

			$instance = $attribute->newInstance();

			if (isset($instance->value)) {
				return $instance->value;
			}

			if (method_exists($instance, '__toString')) {
				return (string) $instance;
			}

			return null;
		}

		return null;
	}
}