<?php
namespace Library\View;

class Template
{
   public static function render($data, $fileName)
   {
       ob_start();
       extract($data);
       include '../../App/View/template/'.$fileName ;
       $html = ob_get_clean();
       return $html;
   }

}