<?php
    class Controller{
        public function GetProductos(){
            try{
                $list = array();
                $conexion = new Conexion();
                $db = $conexion->GetConexion();
                $query = "SELECT * FROM internacionales";
                $statement = $db->prepare($query);
                $statement->execute();

                while($row = $statement->fetch())
                {
                    $list[] = array(
                        "ID" => $row['ID'],
                        "Destino" => $row['Destino'],
                        "Salida" => $row['Salida'],
                        "Precio" => $row['Precio'],
                        "Duracion" => $row['Duracion']
                    );
                }

                return $list;
            }
            catch(PDOException $e){
                echo "Error", $e->getMessage();
            }
        }
    }
?>