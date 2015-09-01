<?php
class LoggerLayoutPattern extends \Mougrim\Logger\Layout\LayoutPattern implements LoggerLayoutInterface
{
    public function __construct($pattern = null, array $additionalPatternMap = [])
    {
        try {
            parent::__construct($pattern, $additionalPatternMap);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function formatMessage(\Mougrim\Logger\Logger $logger, $level, $message, \Exception $throwable = null)
    {
        try {
            return parent::formatMessage($logger, $level, $message, $throwable);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
