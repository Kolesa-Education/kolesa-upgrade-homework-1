<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .mainWrapper{
        border: 2px solid black;
        width: 250px;
        display: flex;
        flex-direction: column;
        align-items: center;

      }
      .submits{
        display: flex;
        align-items: center;
        justify-content: center;
        width:100%;
        flex-wrap: wrap;
        margin: 5px
      }
      input{
        margin: 3px;


      }

    </style>
  </head>
  <body>







    <form action="site.php" method="get" class="mainWrapper">
       <h1>Calculator</h1>

       Enter A:<input type="number" step="0.001" name="number1">
       <br>


       Enter B:<input type="number" step="0.001" name="number2">
       <br>

       Enter Operation:<input type="text"  name="operator">
       <br>


       <div class="submits">
       <input type="submit">
       </div>


       <?php

       $number1 = $_GET["number1"];
       $number2 = $_GET["number2"];
       $operator = $_GET["operator"];


      if(isset($number1) && isset($number2)){
       switch ($operator) {
         case '/':
          $result = $number1 / $number2;
            break;

         case '+':
            $result = $number1 + $number2;
            break;

          case '*':
            $result = $number1 * $number2;
              break;

          case '-':
            $result = $number1 - $number2;
                break;

          case '√':
          $result = pow($number1,1/$number2);
                break;

        case '%':
        $result = $number1%$number2;
          break;
        case '^':
          $result = pow($number1,$number2);
            break;

        case '>':
            $comp =$number1 > $number2;
            if($comp)
            $result= "number1 > number2";
            else
            $result= "number1 < number2";

          break;


       case '<':

       $comp =$number1 < $number2;
       if($comp)
       $result= "number1 < number2";
       else
       $result= "number1 > number2";
            break;

            case '=':

            $comp =$number1 == $number2;
            if($comp)
            $result= "number1 = number2";
            else
            $result= "number1 != number2";
                 break;
         default:
          $result = null;
           break;
       }



       if(isset($result)){
        echo ("N1: ");
        echo (gettype(+$number1)). PHP_EOL;
        echo ("N2: ");
        echo (gettype(+$number2)). PHP_EOL;




       $restype = gettype($result);

       echo ("<h6>The Answer: <input type=\"text\" name=\"result\" value=\"$result \" disabled></h6>
                <h3>  result type: $restype</h3>

       ");
     }}

       ?>





     </form>






  </body>
</html>
