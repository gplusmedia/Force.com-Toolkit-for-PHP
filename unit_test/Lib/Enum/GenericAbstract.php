<?php

abstract class Lib_Enum_GenericAbstract
{
    public $_values;
    public $values;
    /**
     * Get style by id.
     *
     * @param int $id
     * @return mixed or NULL on failure
     */
    public function getById($id)
    {
        $id = (int)$id;
        if ($id <= 0 || $id > count($this->_values)) {
            return null;
        }

        return $this->_values[$id];
    }

    /**
     * Validates id
     *
     * @param $value
     * @return boolean
     */
    public function validateId($id)
    {
        if (!is_numeric($id)) {
            return false;
        }
        $id = (int)$id;
        if ($id <= 0) {
            return false;
        }

        return $id <= count($this->_values);
    }

    /**
     * Validates value
     *
     * @param $value
     * @return boolean
     */
    public function validateValue($value)
    {
        if ($value == '') {
            return false;
        }
        return in_array($value, $this->_values);
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }
}
