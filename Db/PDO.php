<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/8
 * Time: 13:15
 */
//header("Content-type:text/html;charset=utf-8");
namespace Db;
class PDO implements IDatabase
{
    function connect()
    {
        // TODO: Implement connect() method.
        echo 'p';
    }

    function query()
    {
        // TODO: Implement query() method.
        echo 'd';
    }

    function close()
    {
        // TODO: Implement close() method.
        echo 'o';
    }

}