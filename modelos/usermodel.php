<?php

    class Usermodel extends Modelo {

        protected $arr;
        function __construt(){
            parent::__construct();
            $this->mostrarUsuarios();
        }

        public function mostrarUsuarios(){

            ?>
            <link href="public/css/tabla.css" rel="stylesheet">
            <main id="main-body">
        <div class="contenedor-consulta">
        
</br>
    <table border=1>
        <tr>

           <th>id</th>
           <th>Nombre</th>
           <th>Correo</th>
           <th>Password</th>
           <th>Tipo</th>
           
           <th>Opciones</th>


        </tr>

        <?php
        

        $consulta = mysqli_query($this->db->connect(),"SELECT*FROM usuarios");
    

        while($mostrar = mysqli_fetch_array($consulta)){
            ?>
            <tr>
                <td><?php echo  $mostrar[0] ?></td>
                <td><?php echo  $mostrar[1] ?></td>
                <td><?php echo  $mostrar[2] ?></td>
                <td><?php echo  $mostrar[3] ?></td>
                <td><?php echo  $mostrar[4] ?></td>
                
                <td>
<button onclick="location.href='editarUsuario/editar/<?php echo$mostrar[0] ?>/<?php echo $mostrar[1]?>/<?php echo $mostrar['2']?>/<?php echo$mostrar['3']?>'">Editar</button>
    <button onclick="location.href='cuenta/eliminar/<?php echo $mostrar[0]; ?> '">Eliminar</button>
                </td>
            </tr>
<?php
/*id= & nom=<?php echo $mostrar['1']?> & col=<?php echo $mostrar['2']?> & pre=<?php echo $mostrar['3']?> & cant=<?php echo $mostrar['4']?>
        */      }
    
    ?>



    </table>




    </div>

    </main>
        

    <?php

        }


        public function eliminarUsuario($parametro){
         
            
            


            print_r($parametro);

$consulta = mysqli_query($this->db->connect(),"DELETE FROM usuarios  where id like $parametro[2]");

if($consulta){
    header("location: ../../cuenta");
}else{
    echo "error";
}
        }

        protected $vieww;

        public function mostrar($para){
            require_once 'librerias/view.php';
            $this->vieww = new View();
            $this->arr = $para;
            $this->vieww->render('editarUsuario');

        }


        public function editar($para){


            
            print_r($para);
    //include('../conn.php');
    /*
    $id = $_GET['id'];
    $nombre = $_GET['nom'];
    $color = $_GET['col'];
    $precio = $_GET['pre'];
    //$cantidad = $_GET['cant'];
    */

    ?>
    <form action = "../../../../../editarUsuario/actualizarEditar" method="POST">

    <table border=1>
        <tr>
            <td>Ingresa tus Datos:</td>
            <td> <input type="text" name="id" style="visibility:hidden" value=" <?=$para[2] ?>"></td>
        </tr>

        <tr>
            <td>Alias:</td>
            <td> <input type="text" name="alias" value=" <?=$para[3] ?>" > </td>
        </tr>

        <tr>
            <td>Correo:</td>
            <td> <input type="text" name="correo" value=" <?=$para[4] ?>"></td>

        </tr>

        <tr>
            <td>Contraseña:</td>
            <td> <input type="text" name="contra" value=" <?=$para[5] ?>"></td>

        </tr>

        

        <tr>
            <td> <button onclick="location.href='../cuenta'">Regresar</button></td>
            <td> <button onclick="location.href='../main'"> Actualizar </button></td>
                
                
            
        </tr>
        
    </table>

    </form>
    <?php
        }


        public function updatebase($id,$alias,$correo,$contra){


                $aliass = trim($alias);
                $correoo = trim($correo);
                $contraa = trim($contra);
                

$consulta = mysqli_query($this->db->connect(), "UPDATE usuarios set alias='$aliass',correo='$correoo',contrasena='$contraa' where id like $id ");

if($consulta){
    header("location: ../cuenta");

}else{
    echo "error";
}
        }

    }


    

    ?>

