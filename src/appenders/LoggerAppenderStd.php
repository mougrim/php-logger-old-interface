<?php
class LoggerAppenderStd extends \Mougrim\Logger\Appender\AppenderStd
{
    public function setStream($streamName)
    {
        try {
            parent::setStream($streamName);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
