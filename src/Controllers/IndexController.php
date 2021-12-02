<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Services\IndexService;

class IndexController
{
  private $indexService;

  public function __construct()
  {
    $this->indexService = new IndexService();
  }

  public function index()
  {
    $args['hello'] = $this->indexService->getHello();
    return View::render('index', $args);
  }

  public function notFound()
  {
    return View::render('404');
  }

}
