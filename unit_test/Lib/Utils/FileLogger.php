<?php

/**
 * @author andrey
 *
 */
class Lib_Utils_FileLogger
{
    private $_hanlder;
    private $_withTimeStamps;

    public function __construct($filename, $mode = 'a+', $withTimeStamps = false)
    {
        $this->_hanlder = fopen($filename, $mode);
        $this->_withTimeStamps = $withTimeStamps;
    }

    public function __destruct()
    {
        fclose($this->_hanlder);
    }

    public function write($message)
    {
        fwrite(
            $this->_hanlder,
            ($this->_withTimeStamps ? date(DateTime::ATOM) . ' ' : '') . $message . "\n"
        );
    }
}
