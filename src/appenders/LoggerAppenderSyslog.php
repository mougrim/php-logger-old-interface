<?php
class LoggerAppenderSyslog extends \Mougrim\Logger\Appender\AppenderSyslog
{
    public function write($priority, $message)
    {
        try {
            parent::write($priority, $message);
        } catch (\Mougrim\Logger\LoggerIOException $exception) {
            throw new LoggerIOException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public static function parseOptions($options)
    {
        try {
            return parent::parseOptions($options);
        } catch (\Mougrim\Logger\LoggerConfigurationException $exception) {
            throw new LoggerConfigurationException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
