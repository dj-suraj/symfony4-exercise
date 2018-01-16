<?php
/**
 * Author: Suraj Gusain
 * Date: 15-01-2018
 * Time: 17:49
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @return Response
     */
    public function index()
    {
        return $this->render('tut/index.html.twig', ['name' => 'SURAJ']);
    }

}