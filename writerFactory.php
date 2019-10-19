<?php
namespace kkcms;

class WriterFactory
{
   public static function getWriter($format)
   {
       $class = 'kkcms\\'.$format . 'Writer';
       if(class_exists($class)) {
           return new $class();
       }
       throw new Exception('Unsupported format');
   }

}