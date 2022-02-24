<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
    * @Route("/helloWorld")
    */
    public function helloWorld(): Response
    {
        $helloWorld = "Hello World !";

        return new Response(
            '<html><body>'.$helloWorld.'</body></html>'
        );
    }
}
?>