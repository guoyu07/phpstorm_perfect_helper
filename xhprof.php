<?php
/**
 * phpstormHelperPerfect
 *
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
// Start of xhprof v.0.9.4

/**
 * (PHP &gt;= 5.2.0, PECL xhprof &gt;= 0.9.0)<br/>
 * Start xhprof profiling.
 *
 * @link http://php.net/manual/en/function.xhprof-enable.php
 *
 * @param int   $flags   <p>Optional flags to add additional information to the profiling. See the a
 *                       href="http://php.net/manual/en/xhprof.constants.php">XHprof constants</a> for further
 *                       information about these flags, e.g., <strong>XHPROF_FLAGS_MEMORY</strong> to enable memory
 *                       profiling.</p>
 * @param array $options <p>An array of optional options, namely, the 'ignored_functions' option to pass in functions
 *                       to be ignored during profiling.</p>
 *
 * @return null
 */
function xhprof_enable( $flags = 0, array $options )
{
}

/**
 * (PHP &gt;= 5.2.0, PECL xhprof &gt;= 0.9.0)<br/>
 * Stops the profiler, and returns xhprof data from the run.
 *
 * @link http://php.net/manual/en/function.xhprof-disable.php
 * @return array an array of xhprof data, from the run.
 */
function xhprof_disable()
{
}

/**
 * (PHP &gt;= 5.2.0, PECL xhprof &gt;= 0.9.0)<br/>
 * Starts profiling in sample mode, which is a lighter weight version of {@see xhprof_enable()}. The sampling interval
 * is 0.1 seconds, and samples record the full function call stack. The main use case is when lower overhead is
 * required when doing performance monitoring and diagnostics.
 *
 * @link http://php.net/manual/en/function.xhprof-sample-enable.php
 * @return null
 */
function xhprof_sample_enable()
{
}

/**
 * (PHP &gt;= 5.2.0, PECL xhprof &gt;= 0.9.0)<br/>
 * Stops the sample mode xhprof profiler, and returns xhprof data from the run.
 *
 * @link http://php.net/manual/en/function.xhprof-sample-disable.php
 * @return array an array of xhprof sample data, from the run.
 */
function xhprof_sample_disable()
{
}

/**
 * @type int
 * @link http://php.net/manual/en/xhprof.constants.php#constant.xhprof-flags-no-builtins
 */
const XHPROF_FLAGS_NO_BUILTINS = 1;
/**
 * @type int
 * @link http://php.net/manual/en/xhprof.constants.php#constant.xhprof-flags-cpu
 */
const XHPROF_FLAGS_CPU = 2;
/**
 * @type int
 * @link http://php.net/manual/en/xhprof.constants.php##constant.xhprof-flags-memory
 */
const XHPROF_FLAGS_MEMORY = 4;
const XHPROF_SAMPLING_INTERVAL=100000;
const XHPROF_MAX_IGNORED_FUNCTIONS=256;
const XHPROF_IGNORED_FUNCTION_FILTER_SIZE=XHPROF_MAX_IGNORED_FUNCTIONS + 7)/8;
const XHPROF_VERSION='0.9.4';
const XHPROF_MODE_HIERARCHICAL=1;
const XHPROF_MODE_SAMPLED=620002;

// End of xhprof v.0.9.4
