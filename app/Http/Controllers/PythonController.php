<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class PythonController extends Controller
{
    public function python()
    {
        $process = new Process(['python', 'try.py']);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        // dd($process);
        echo $process->getOutput();
    }
}
