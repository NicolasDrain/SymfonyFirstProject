<?php
// src/Controller/CalculController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class CalculController
{
    /**
    * @Route("/calcul")
    */
    public function calcul(): Response
    {
        $number1 = 1;
        $number2 = 2;
        $add = $number1 + $number2;
        return new Response(
            '<html><body>'.$add.'</body></html>'
        );
    }
}
?>