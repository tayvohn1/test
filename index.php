<?php
$result = "";
class Calc{
  public $operater;
  public $num1;
  public $num2;
  public function __construct(string $one, int $two , int $three){
    $this->operater = $one;
    $this->num1 = $two;
    $this->num2 = $three;
  }
  public function calculator(){
    switch ($this->$operater) {
      case 'add':
        $result = $this->num1 + $this->num2 ;
        return $result;
        break;
      case 'div':
        $result = $this->num1 / $this->num2 ;
        return $result;
        break;
      case 'mult':
        $result = $this->num1 * $this->num2 ;
        return $result;
        break;
      case 'sub':
        $result = $this->num1 - $this->num2 ;
        return $result;
        break;

      default:
      echo "Error!";
        break;
    }
  }
}//class end
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <body>
    <form method="post">
      <h4>My calculator</h4>
      <input type="number" name="num1" placeholder="First Number">
      <select name="oper">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mult">Multiply</option>
        <option value="div">Divide</option>
      </select>
      <input type="number" name="num2" placeholder="second number">
      <button type="submit" name="submit" value="p">Calculate!</button>
    </form>
  </body>
</html>
