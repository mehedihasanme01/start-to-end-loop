<?php
/**
 * Created by PhpStorm.
 * User: Mehedi Hasan
 * Date: 12/27/2017
 * Time: 8:14 AM
 */

class SwitchClass
{
      function myLogic($data){


          $btnr = $data['radio_btn'];
          $firstNumber = $data['first_number'];
          $lastNumber = $data['sec_number'];
          $submitVal = $data['btn'];
          $result = ' ';

          if ($firstNumber < $lastNumber) {
              for ($x = $firstNumber; $x <= $lastNumber; $x++) {
                      $result .= $x.' ';
                  }
              }

          else{
              for ($x = $firstNumber; $x >= $lastNumber; $x--) {

                      $result .=$x.' ';
                  }
              }




          switch ($btnr){


              case 'odd':
                  if ($firstNumber < $lastNumber) {
                      for ($x = $firstNumber; $x <= $lastNumber; $x++) {


                          if(($x % 2 != 0)) {//$result = ($result % 2 != 0);

                              $result .= $x.' ';
                          }
                      }

                  }else{
                      for ($x = $firstNumber; $x >= $lastNumber; $x--) {
                          if(($x % 2 != 0)) {
                               $result .=$x.' ';
                          }
                      }
                  }


                  break;

              case 'even':
                  if ($firstNumber < $lastNumber) {
                      for ($x = $firstNumber; $x <= $lastNumber; $x++) {

                          if(($x % 2 == 0)){

                              $result .=$x.' ';
                          }


                      }}else{
                      for ($x = $firstNumber; $x >= $lastNumber; $x--) {

                          if(($x % 2 == 0)){

                              $result .= $x.' ';
                          }
                      }
                  }

                  break;


              default:
                  break;
          }

return $result;

      }

}