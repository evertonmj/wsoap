<?php

class WebServiceController extends Controller {
    public function actions()
    {
        return array(
            'soapservice'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }

    /**
    * Retorna um hello world!
    * @return string
    * @soap
    */
    public function helloWorld() {
        return "Hello World!";
    }

    /**
    * Calculator!
    * @param string $operation
    * @param float $num1
    * @param float $num2
    * @return float $result
    * @soap
    */
    public function calculator($operation, $num1, $num2) {
        $result = 0;
        if($operation === "SUM") {
            $result = $num1 + $num2;
        } else if($operation === "MULT") {
            $result = $num1 * $num2;
        } else if($operation === "SUB") {
            $result = $num1 - $num2;
        } else if($operation === "DIV") {
            if($num2 > 0 ) {
                $result = $num1 / $num2;
            }
        }

        return $result;
    }
}
