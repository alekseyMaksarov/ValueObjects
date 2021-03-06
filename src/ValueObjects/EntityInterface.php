<?php

namespace Runn\ValueObjects;

/**
 * Interface for Entities
 *
 * Interface EntityInterface
 * @package Runn\ValueObjects
 *
 * @codeCoverageIgnore
 */
interface EntityInterface
    extends ValueObjectInterface
{

    /**
     * This method always returns an array
     * @return array
     */
    public static function getPrimaryKeyFields(): array;

    /**
     * This method returns "true" if primary key is scalar
     * @return bool
     */
    public static function isPrimaryKeyScalar(): bool;

    /**
     * This method can return either single scalar value or an array consisting of all PK fields' values
     * @return mixed|array
     */
    public function getPrimaryKey();

    /**
     * This method checks if $data can be used as primary key value
     * @param mixed $data
     * @return bool
     */
    public static function conformsToPrimaryKey($data): bool;

    /**
     * @param \Runn\ValueObjects\ValueObjectInterface $object
     * @return bool
     */
    public function isSame(ValueObjectInterface $object): bool;

    /**
     * @param \Runn\ValueObjects\EntityInterface $object
     * @return bool
     */
    public function isEqual(EntityInterface $object): bool;

}