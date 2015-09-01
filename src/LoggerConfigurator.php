<?php
class LoggerConfigurator extends \Mougrim\Logger\LoggerConfigurator
{
    public function configure(\Mougrim\Logger\LoggerHierarchy $hierarchy, array $config)
    {
        try {
            parent::configure($hierarchy, $config);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
