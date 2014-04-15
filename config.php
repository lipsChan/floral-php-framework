 <?php
 /**
 * 系统配置文件
 * @copyright   Copyright(c) 2014
 * @author      LipsChan
 * @version     1.0
 */

/*数据库配置*/
$CONFIG['system']['db'] = array(
    'db_host'           =>      'localhost',
    'db_user'           =>      'root',
    'db_password'       =>      '',
    'db_database'       =>      'app',
    'db_table_prefix'   =>      'app_',
    'db_charset'        =>      'urf8',
    'db_conn'           =>      '',             //数据库连接标识; pconn 为长久链接，默认为即时链接

);

$CONFIG['system']['route'] = array(
    'default_controller'             =>      'welcome',  //系统默认控制器
    'default_action'                 =>      'index',  //系统默认控制器
    'url_type'                       =>      1          /*定义URL的形式 1 为PATHINFO   index.php/controller/action/id/2(暂时不实现)
                                                         *              2 为普通模式    index.php?c=controller&a=action&id=2 
                                                         */
);

/*缓存配置*/
$CONFIG['system']['cache'] = array(
    'cache_dir'                 =>      'cache', //缓存路径，相对于根目录
    'cache_prefix'              =>      'cache_',//缓存文件名前缀
    'cache_time'                =>      1800,    //缓存时间默认1800秒
    'cache_mode'                =>      2,       //mode 1 为serialize ，model 2为保存为可执行文件
);