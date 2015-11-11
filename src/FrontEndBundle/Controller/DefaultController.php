<?php

namespace FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $ip="41.140.229.244";
        //$ip=$this->container->get('request')->getClientIp(); 
        $json=file_get_contents("http://ip-api.com/json/".$ip);
      
        $villeinfo = json_decode($json);
      
       // var_dump($villeinfo);
        $latitude =  $villeinfo->lat;
        $longitude = $villeinfo->lon;
        $ville=$villeinfo->city;
        echo $ville;
        $weatherjson=file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=$latitude&lon=$longitude&lang=fr&units=metric&appid=5b59fdb400856d9efc39fa09a73c6620");
        $weather = json_decode($weatherjson);
        $json = file_get_contents('http://api.openweathermap.org/data/2.5/group?id=2561668,2555745,2553604,7280528,2549259,2548885,2546906,2542997,2541472,2540483,2538474,2537878,2530335,2462881,2463447,6547304&units=metric&lang=fr&units=metric&appid=5b59fdb400856d9efc39fa09a73c6620');
        $obj = json_decode($json);
        var_dump($weather);

        return $this->render('FrontEndBundle:Default:index.html.twig', array("name"=>$ville));
    }
}
