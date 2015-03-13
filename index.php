<?php
   class Variables
   {
      public function __construct()
      {

      }
      /**
       * Valida la si una variable esta definida
       *
       * @param int o string
       * @return bolean
       */
      public function validarVariableIsset($variale)
      {
         if( isset($variale) ) {
            echo "Esta variable esta definida </br>" ;
         } else {
            echo "Esta variable No esta definida </br>";
         }
      }

      public function validarVariableEmpy($variale)
      {
         if( empty($variale) ) {
            echo "La variable esta vacia </br>" ;
         } else {
            echo "La variable No esta vacia </br>";
         }
      }
   }

  $modelClase = new Variables();
  $mensaje = "Holas";
  $modelClase->validarVariableIsset($mensaje);
  $modelClase->validarVariableEmpy($mensaje);