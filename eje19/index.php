try{
            
            if($udsIn <= 0){

                throw new Exception("Valor negativo en consulta de inserción/actualización");

            }catch (Exception $e){

                echo "Error: $e->getMessage()";

            }

        }