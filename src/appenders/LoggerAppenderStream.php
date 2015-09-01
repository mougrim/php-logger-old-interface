<?php
class LoggerAppenderStream extends \Mougrim\Logger\Appender\AppenderStream implements LoggerAppenderReopen
{
    public function __construct($stream)
    {
        try {
            parent::__construct($stream);
        } catch (\Mougrim\Logger\LoggerIOException $exception) {
            throw new LoggerIOException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function reopen()
    {
        try {
            parent::reopen();
        } catch (\Mougrim\Logger\LoggerIOException $exception) {
            throw new LoggerIOException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function write($priority, $message)
    {
        try {
            parent::write($priority, $message);
        } catch (\Mougrim\Logger\LoggerIOException $exception) {
            throw new LoggerIOException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
