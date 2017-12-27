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
          echo '<pre>';
          print_r($_POST);

          $btnr = $data['radio_btn'];
          $firstNumber = $data['first_number'];
          $lastNumber = $data['sec_number'];
          $submitVal = $data['btn'];
          $result = '';

          switch ($btnr){


              case 'odd':
                  if ($firstNumber < $lastNumber) {
                      for ($x = $firstNumber; $x <= $lastNumber; $x++) {
                          $result = $x . ' ';
                          //echo $result;

                          if(($result % 2 != 0)) {//$result = ($result % 2 != 0);
                              echo $result;
                          }
                      }

                  }else{
                      for ($x = $firstNumber; $x >= $lastNumber; $x--) {
                          $result = $x . ' ';
                          if(($result % 2 != 0)) {//$result = ($result % 2 != 0);
                              echo $result;
                          }
                      }
                  }

                  //$odd = ($num % 2 != 0);
                  break;

              case 'even':
                  if ($firstNumber < $lastNumber) {
                      for ($x = $firstNumber; $x <= $lastNumber; $x++) {
                          $result = $x . ' ';

//                          echo $result;
                          if(($result % 2 == 0)){
                              echo $result;
                          }


                      }}else{
                      for ($x = $firstNumber; $x >= $lastNumber; $x--) {
                          $result = $x . ' ';
//                          echo $result;
                          if(($result % 2 == 0)){
                              echo $result;
                          }
                      }
                  }
                  //$even = ($num % 2 == 0);
                  break;


              default:
                  break;
          }

return $result;
      }
}