<?php
/**
 * phpstorm_perfect_helper
 *jetbrains idea phpstorm helper &&php_perfect_helper
 * 本文件使用方式：
 *
 * Yaf开发，在IDE中打开/导入本文件即可
 * 如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可.
 *
 * PhpStorm 另一种方法:
 * WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
 * 复制 Yaf.namespace.php 到路径：com/jetbrains/php/lang/psi/stubs/data/
 * 保存文件，重启Phpstorm.
 *
 * PS:替换前请备份php.jar 若发生错误便于恢复
 *
 * @author ding21st@gmail.com
 * @copyright Copyright (c) 2016
 */

define('YAR_VERSION', "1.2.5");
/**
 *
 */
define('YAR_CLIENT_PROTOCOL_HTTP', 1);
/**
 *
 */
define('YAR_CLIENT_PROTOCOL_TCP', 2);
/**
 *
 */
define('YAR_CLIENT_PROTOCOL_UDP', 3);
/**
 *
 */
define('YAR_CLIENT_PROTOCOL_UNIX', 4);
/**
 *
 */
define('YAR_PACKAGER_PHP', 'PHP');
/**
 *
 */
define('YAR_PACKAGER_JSON', 'JSON');
/**
 *
 */
define('YAR_PACKAGER_MSGPACK', 'MSGPACK');
/**
 *
 */
define('YAR_OPT_PACKAGER', 1);
/**
 *
 */
define('YAR_OPT_PERSISTENT', 2);
/**
 *
 */
define('YAR_OPT_TIMEOUT', 4);
/**
 *
 */
define('YAR_OPT_CONNECT_TIMEOUT', 8);
/**
 *
 */
define('YAR_ERR_OKEY', 0);
/**
 *
 */
define('YAR_ERR_PACKAGER', 1);
/**
 *
 */
define('YAR_ERR_PROTOCOL', 2);
/**
 *
 */
define('YAR_ERR_REQUEST', 4);
/**
 *
 */
define('YAR_ERR_OUTPUT', 8);
/**
 *
 */
define('YAR_ERR_TRANSPORT', 16);
/**
 *
 */
define('YAR_ERR_FORBIDDEN', 32);
/**
 *
 */
define('YAR_ERR_EXCEPTION', 64);
/**
 *
 */
define('YAR_ERR_EMPTY_RESPONSE', 128);

/**
 * Class Yar_Server
 */
class Yar_Server
{
    /**
     * @var
     */
    protected $_executor;

    /**
     * Yar_Server constructor.
     * @param $obj
     */
    final public function __construct($obj) { }

    /**
     *
     */
    public function handle() { }
}

/**
 * Class Yar_Client
 */
class Yar_Client
{
    /**
     * @var
     */
    protected $_protocol;
    /**
     * @var
     */
    protected $_uri;
    /**
     * @var
     */
    protected $_options;
    /**
     * @var
     */
    protected $_running;
    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function __call($method, $parameters) { }
    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function call($method, $parameters) { }

    /**
     * Yar_Client constructor.
     * @param $url
     */
    final public function __construct($url) { }

    /**
     * @param string $name it can be: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (Need server support), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT
     * @param $value
     */
    public function setOpt($name, $value) { }
}

/**
 * Class Yar_Concurrent_Client
 */
class Yar_Concurrent_Client
{
    /**
     * @var
     */
    static $_callstack;
    /**
     * @var
     */
    static $_callback;
    /**
     * @var
     */
    static $_error_callback;

    /**
     * Clean all registered calls
     */
    public static function reset(){}
    /**
     * @param $uri
     * @param $method
     * @param $parameters
     * @param callable $callback [optional] <p>
     * 优先级高于loop中的callback
     * </p>
     * @param callable $error_callback [optional] <p>
     * 优先级高于loop中的error_callback
     * </p>
     */
    public static function call($uri, $method, $parameters,$callback='callback', $error_callback='callback') { }

    /**
     * @param callable $callback [optional] <p>
     * The function to be called.
     * 统一回调函数
     * </p>
     * @param callable $error_callback [optional] <p>
     * The function to be called.
     * 统一错误回调函数
     * </p>
     */
    public static function loop($callback='callback', $error_callback='callback'){ }
}

/**
 * Class Yar_Server_Exception
 */
class Yar_Server_Exception extends Exception
{
    /**
     * @var
     */
    protected $_type;

    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Server_Request_Exception
 */
class Yar_Server_Request_Exception extends Exception
{
    /**
     * @var
     */
    protected $_type;

    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Server_Protocol_Exception
 */
class Yar_Server_Protocol_Exception extends Exception
{
    /**
     * @var
     */
    protected $_type;

    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Server_Packager_Exception
 */
class Yar_Server_Packager_Exception extends Exception
{
    /**
     * @var
     */
    protected $_type;

    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Server_Output_Exception
 */
class Yar_Server_Output_Exception extends Exception
{
    /**
     * @var
     */
    protected $_type;

    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Client_Exception
 */
class Yar_Client_Exception extends Exception
{
    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Client_Packager_Exception
 */
class Yar_Client_Packager_Exception extends Exception
{
    /**
     *
     */
    public function getType() { }
}

/**
 * Class Yar_Client_Protocol_Exception
 */
class Yar_Client_Protocol_Exception extends Exception
{
    /**
     *
     */
    public function getType() { }
}