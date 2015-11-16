<?php
/**
 * Created by IntelliJ IDEA.
 * User: supremewei
 * Date: 15/11/7
 * Time: 23:30
 */
function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($message);
}