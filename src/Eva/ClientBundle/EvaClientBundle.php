<?php

namespace Eva\ClientBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EvaClientBundle extends Bundle
{
    
      public function getParent()
   {
     return 'FOSUserBundle';
   }
    
    
}
