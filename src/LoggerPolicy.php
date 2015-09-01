<?php
class LoggerPolicy extends \Mougrim\Logger\LoggerPolicy
{
    public static function setConfigurationErrorPolicy($policy)
    {
        try {
            parent::setConfigurationErrorPolicy($policy);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public static function setIoErrorPolicy($policy)
    {
        try {
            parent::setIoErrorPolicy($policy);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
