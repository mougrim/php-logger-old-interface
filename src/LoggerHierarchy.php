<?php
class LoggerHierarchy extends \Mougrim\Logger\LoggerHierarchy
{
    public function getAppender($name)
    {
        try {
            return parent::getAppender($name);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function getLayout($name)
    {
        try {
            return parent::getLayout($name);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
