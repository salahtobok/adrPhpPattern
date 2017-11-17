<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 27-09-2017
 * Time: 8:24
 */
namespace Controller\System;


use System\ADRdp\Request;
use System\ADRdp\Response;

class NotFound
{
    protected $request;

    protected $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function __invoke()
    {
        $url_path = parse_url(
            $this->request->server['REQUEST_URI'],
            PHP_URL_PATH
        );

        $this->response->setView('system/not-found.html.php');
        $this->response->setVars(array(
            'url_path' => $url_path,
        ));

        return $this->response;
    }
    public function lolo()
    {


        echo "The total volume is: ";
    }

}