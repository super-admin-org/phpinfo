<?php

namespace SuperAdmin\PHPInfo\Http\Controllers;

use Illuminate\Routing\Controller;
use SuperAdmin\Admin\Layout\Content;
use SuperAdmin\PHPInfo\PHPInfo;

class PHPInfoController extends Controller
{
    public function index(Content $content, PHPInfo $info)
    {
        $info = $info::toCollection();

        return $content
            ->title('PHP info')
            ->description('An overview of your php ini settings')
            ->body(view('phpinfo::index', ['info'=>$info]));
    }
}
