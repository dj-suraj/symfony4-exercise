<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 12:15
 */

namespace App\Controller;


use App\Exceptions\MethodNotImplementedException;
use App\Factory\DistanceCalculatorFactory;
use App\Form\DistanceCalculatorFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DistanceController extends Controller
{

    /**
     * @Route("/calculate", name="app_distance_calculator")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculate(Request $request)
    {

        $result = 0;
        $distance = 0;
        $mode = 0;

        $form = $this->createForm(DistanceCalculatorFormType::class);

        // Handle data on Post request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $result = 5;
            $request = $request->request->all();

            $mode = $request['distance_calculator_form']['choices'];
            $distance = $request['distance_calculator_form']['distance'];

            $client = DistanceCalculatorFactory::build($mode);

            try {
                $result = $client->drive($distance);
            }
            catch (MethodNotImplementedException $e) {
                return $this->redirect('app_distance_error');
            }


        }

        return $this->render('tut/distance_calculator.html.twig', array('form' => $form->createView(), 'result'
                                                                               => $result, 'distance' => $distance,
                                                                        'mode' => $mode));

    }


    /**
     * @Route("/error", name="app_distance_error")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function error()
    {

        return $this->render('tut/distance_error.html.twig', array('message' => 'Error page'));

    }

}