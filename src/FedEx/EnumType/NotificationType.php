<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NotificationType EnumType
 * @subpackage Enumerations
 */
class NotificationType
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
