<?php

namespace Thanadev\TIM\Connector;

class MainMonitoring
{
    const ACTION_SERVER_INFO = 0;

    public function main(int $action)
    {
        switch ($action) {
            case static::ACTION_SERVER_INFO:
                $this->displayServerInformation();
                break;
            default:
                $this->dieOnError();
                break;
        }
    }

    protected function displayServerInformation()
    {
        $output = array();
        exec('df', $output);

        header('Content-type: application/json;');
        echo json_encode($output);
        die();
    }

    protected function dieOnError()
    {
        die('Error on action asked');
    }
}