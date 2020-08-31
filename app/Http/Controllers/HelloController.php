<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function __invoke(){
    return <<<EOF
    <html>
    <head>
    <title>Hello</title>
    </head>
    <style>
    body {font-size:16pt; color:#999;}
    h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
    <body>
    <h1>Single Action</h1>
    <p>これはシングルアクションです</p>
    </body>
    </html>
    EOF;
  }
}


