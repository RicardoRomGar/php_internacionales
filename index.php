<html>
    <head>
        <title>Conexion de php my sql</title>    
    
    <body>
        <?php
        require_once('cors.php');
        require_once('conexion.php');
        require_once('controller.php');
        require_once('getall.php');

        $methodHTTP = $_SERVER['REQUEST_METHOD'];

            switch($methodHTTP){
                case 'GET':
                    if(empty($_GET)) {
                        $ctl = new Controller();
                        $data = $ctl->GetProductos();
                        echo json_encode([$data]);
                    }else{
                        $data = $_GET;
                        $ctl = new Controller();
                        $result = $ctl->GetProductos($data);
                        echo json_encode([$data]);
                    }break;
            }
        ?>
    </body>
    </head>
</html>
