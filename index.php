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
      public function validarVariable($variale)
      {
         if( isset($variale) ) {
            echo "Esta variable esta definida" ;
         } else {
            echo "Esta variable No esta definida";
         }
      }
   }

  $modelClase = new Variables();
  $mensaje = "Holas";
  $modelClase->validarVariable($mensaje);