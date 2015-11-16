<?php
namespace App\Http;
/**
 * Created by IntelliJ IDEA.
 * User: supremewei
 * Date: 15/11/7
 * Time: 23:56
 */
class Flash
{
    public function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    public function info($title = null, $message = null)
    {
        return $this->create($title, $message, 'info');
    }

    public function success($title = null, $message = null)
    {
        return $this->create($title, $message, 'success');
    }

    public function error($title = null, $message = null)
    {
        return $this->create($title, $message, 'error');
    }

    public function confirmUploadPdf($title = null, $message = null)
    {
        return session()->flash('uploadPdf', [
            'title' => $title,
            'message' => $message,
            'level' => 'info'
        ]);
    }
}