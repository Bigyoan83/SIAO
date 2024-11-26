<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\OptionsResolver;

use Symfony\Component\OptionsResolver\Exception\AccessException;

final class OptionConfigurator
{
<<<<<<< HEAD
    private $name;
    private $resolver;

    public function __construct(string $name, OptionsResolver $resolver)
    {
        $this->name = $name;
        $this->resolver = $resolver;
=======
    public function __construct(
        private string $name,
        private OptionsResolver $resolver,
    ) {
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
        $this->resolver->setDefined($name);
    }

    /**
     * Adds allowed types for this option.
     *
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function allowedTypes(string ...$types): self
=======
    public function allowedTypes(string ...$types): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setAllowedTypes($this->name, $types);

        return $this;
    }

    /**
     * Sets allowed values for this option.
     *
     * @param mixed ...$values One or more acceptable values/closures
     *
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function allowedValues(...$values): self
=======
    public function allowedValues(mixed ...$values): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setAllowedValues($this->name, $values);

        return $this;
    }

    /**
     * Sets the default value for this option.
     *
<<<<<<< HEAD
     * @param mixed $value The default value of the option
     *
=======
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function default($value): self
=======
    public function default(mixed $value): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setDefault($this->name, $value);

        return $this;
    }

    /**
     * Defines an option configurator with the given name.
     */
    public function define(string $option): self
    {
        return $this->resolver->define($option);
    }

    /**
     * Marks this option as deprecated.
     *
     * @param string          $package The name of the composer package that is triggering the deprecation
     * @param string          $version The version of the package that introduced the deprecation
     * @param string|\Closure $message The deprecation message to use
     *
     * @return $this
     */
<<<<<<< HEAD
    public function deprecated(string $package, string $version, $message = 'The option "%name%" is deprecated.'): self
=======
    public function deprecated(string $package, string $version, string|\Closure $message = 'The option "%name%" is deprecated.'): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setDeprecated($this->name, $package, $version, $message);

        return $this;
    }

    /**
     * Sets the normalizer for this option.
     *
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function normalize(\Closure $normalizer): self
=======
    public function normalize(\Closure $normalizer): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setNormalizer($this->name, $normalizer);

        return $this;
    }

    /**
     * Marks this option as required.
     *
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function required(): self
=======
    public function required(): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setRequired($this->name);

        return $this;
    }

    /**
     * Sets an info message for an option.
     *
     * @return $this
     *
     * @throws AccessException If called from a lazy option or normalizer
     */
<<<<<<< HEAD
    public function info(string $info): self
=======
    public function info(string $info): static
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
    {
        $this->resolver->setInfo($this->name, $info);

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Sets whether ignore undefined options.
     *
     * @return $this
     */
    public function ignoreUndefined(bool $ignore = true): static
    {
        $this->resolver->setIgnoreUndefined($ignore);

        return $this;
    }
>>>>>>> 41783e32f3206a74ba32d807a30cdf090aa7d188
}
