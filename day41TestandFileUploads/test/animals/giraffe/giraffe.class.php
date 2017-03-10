<?php

/*--- write your code ONLY between here ---*/

    namespace giraffe_namespace; 

    use \animal as animal;  

/*--- and here ---*/

class giraffe extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}