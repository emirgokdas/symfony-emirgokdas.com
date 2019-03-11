<?php
/**
 * Created by PhpStorm.
 * User: ARİF
 * Date: 12.03.2019
 * Time: 02:09
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Test{
    public function generate_number(){
        $number = random_int(0,100);

        return new Response(
          '<html><body>Emir : '.$number.'</body></html>'
        );
    }
}
