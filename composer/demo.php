<?php
require 'vendor/autoload.php';
echo "122333"."\n";

//引入第三方类库依赖 Monolog
//基本用法：https://blog.csdn.net/thinking771470736/article/details/80927889
$log = new Monolog\Logger('name');
var_dump($log);
/*$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
*/

// 引入我们自定义的类
$test = new Test();
echo $test->echoStr();
?>