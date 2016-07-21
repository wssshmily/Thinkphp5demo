<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']]
    ],
    /*'__pattern__' => [
        'usersid' => '\S+',
    ],
    'user/index' => 'index/user/index',
    'user/create' => 'index/user/create',
    'user/add' => 'index/user/add',
    'user/add_list' => 'index/user/addList',
    'user/update/:usersid' => 'index/user/update',
    'user/delete/:usersid' => 'index/user/delete',
    'user/:usersid' => 'index/user/read',*/


];
