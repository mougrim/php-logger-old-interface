<?php
class LoggerAppenderSocket extends \Mougrim\Logger\Appender\AppenderSocket
{
    public function write($priority, $message)
    {
        try {
            parent::write($priority, $message);
        } catch (\Mougrim\Logger\LoggerIOException $exception) {
            throw new LoggerIOException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
