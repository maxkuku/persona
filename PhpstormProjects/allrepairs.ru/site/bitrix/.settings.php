<?php
return array(
    'utf_mode' =>
        array(
            'value' => true,
            'readonly' => true,
        ),
    /*'cache' => array(
        'value' => array(
            'type' => 'files',
        ),
        'readonly' => false,
    ),*/
    'cache' => array(
        'value' => array(
            'type' => array('class_name' => '\\Bitrix\\Main\\Data\\CacheEngineFiles',),
        ),
        'sid' => $_SERVER["DOCUMENT_ROOT"]."#01"
    ),
    'cache_flags' =>
        array(
            'value' =>
                array(
                    'config_options' => 3600,
                    'site_domain' => 3600,
                ),
            'readonly' => false,
        ),
    'cookies' =>
        array(
            'value' =>
                array(
                    'secure' => false,
                    'http_only' => true,
                ),
            'readonly' => false,
        ),
    'exception_handling' =>
        array(
            'value' =>
                array(
                    'debug' => false,
                    #'handled_errors_types' => 4437,
                    'handled_errors_types' => E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE,
                    #'exception_errors_types' => 4437,
                    'exception_errors_types' => E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT & ~E_USER_WARNING & ~E_USER_NOTICE & ~E_COMPILE_WARNING & ~E_DEPRECATED,
                    'ignore_silence' => false,
                    'assertion_throws_exception' => true,
                    'assertion_error_type' => 256,
                    'log' =>
                        array(
                            'settings' =>
                                array(
                                    'file' => 'bitrix/__log.txt',
                                    'log_size' => 1000000,
                                ),
                        ),
                ),
            'readonly' => false,
        ),
    'connections' =>
        array(
            'value' =>
                array(
                    'default' =>
                        array(
                            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
                            'host' => 'localhost',
                            'database' => 'srv80203_bd',
                            'login' => 'srv80203_user',
                            'password' => 'PaR01bd',
                            'options' => 2,
                        ),
                    'handlersocket' => array (
                        'className' => '\\Bitrix\\Main\\Data\\HsphpReadConnection',
                        'host' => 'localhost',
                        'port' => '9998',
                    ),
                ),
            'readonly' => true,
        ),
);
