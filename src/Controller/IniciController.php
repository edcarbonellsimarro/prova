<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class IniciController
{
/**
* @Route("/", name="inici")
*/
public function inici()
{
// mostra un missatge de benvinguda amb un objecte Response
return new Response("Benvinguda al web de contactes");
}
}
?>