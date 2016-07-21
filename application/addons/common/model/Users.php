<?php

/**
 * 用户表:tab_users
 * User: wss
 * Date: 2016/7/20
 * Time: 9:49
 * @Author:大魔仙
 */
namespace app\addons\model;


class Users
{
    protected $pk='userId';
    public function users(){
        // 显示数据库列表
        // $result = Db::query('show tables from demo');
        //dump($result);
        // 清空数据表
        //$result = Db::execute('TRUNCATE table think_data');
        //dump($result);
        // 查询数据
        //$result = Db::query('select * from Users ');
        //dump($result);
        // 更新记录
        //$result = Db::execute('update think_data set name = "framework" where id = 5 ');
        //dump($result);
        /*$users= users::get(1);
        $users->usersid='atriclephp5';
        $users->save();*/

    }
    // 新增用户数据
    public function add()
    {
        $user = new UserModel;
        $user->nickname = '流年';
        $user->email = 'thinkphp@qq.com';
        $user->birthday = strtotime('1977-03-05');
        if ($user->save()) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }
    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => strtotime('1988-01-15')],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => strtotime('1990-09-19')],
        ];
        if ($user->saveAll($list)) {
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }
    // 读取用户数据
    public function read($id='')
    {
        $user = UserModel::get($id);
        echo $user->nickname . '<br/>';
        echo $user->email . '<br/>';
        echo date('Y/m/d', $user->birthday) . '<br/>';
    }




}
