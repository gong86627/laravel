<?php


namespace App\Repositories\Admin\Common;


class BaseRepository
{
    /**
     * 成功时返回
     * @param $msg
     * @param $data
     * @return array
     */
    protected function successReturn($msg, $data = [])
    {
        return ['code' => 0, 'msg'=> $msg, 'data'=> $data];
    }

    /**
     * 失败返回
     * @param $msg
     * @param $data
     * @return array
     */
    protected function failReturn($msg, $data = [])
    {
        return ['code' => 1, 'msg'=> $msg, 'data'=> $data];
    }
}
