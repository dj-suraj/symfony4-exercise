<?php
/**
 * Author: Suraj Gusain
 * Date: 15-01-2018
 * Time: 15:46
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{

    /**
     * @Route("/lucky/number")
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function number()
    {
        return new Response('<html><body>Lucky number: ' . mt_rand(0, 100) . '</body></html>');
    }

}