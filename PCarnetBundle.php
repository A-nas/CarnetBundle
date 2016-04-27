<?php

namespace P\CarnetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PCarnetBundle extends Bundle
{
	
  public function getParent(){
    return 'FOSUserBundle';
  }
  
}
