<?php

class Lib_Enum_WsdlType extends Lib_Enum_GenericAbstract
{
    /**
     * @var string
     */
    public const PARTNER = 'partner';

    /**
     * @var string
     */
    public const ENTERPRISE = 'enterprise';

    /**
     * @var array
     */
    protected $_values = array(
                    '1' => Lib_Enum_WsdlType::PARTNER,
                    '2' => Lib_Enum_WsdlType::ENTERPRISE);
}
