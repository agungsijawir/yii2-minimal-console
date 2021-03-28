<?php

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;

class AppController extends Controller
{
    /**
     * Welcome message by prompting to ask your name and printed it back to console.
     * @return bool|int
     */
    public function actionIndex()
    {
        $name = Console::prompt("Write down your name: ", ['required' => true]);

        return Console::output($name . "\n");
    }
}