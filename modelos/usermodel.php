<?php

    class Usermodel extends Model {

                
        function __construt(){
            parent::__construct();
            $this->mostrarUsuarios();
        }

        public function mostrarUsuarios(){
            ?>
            <main id="main-body">
        <div class="contenedor-consulta">
        <form action="consultas-almacen/buscar-producto.php" method="post">
</br>
    <label>Ingresa el id a buscar: </label>
    <input type="text" name="id">
    <button>Buscar</button>

    </form>
</br>
    <table border=1>
        <tr>

           <th>id</th>
           <th>Nombre</th>
           <th>Color</th>
           <th>Precio</th>
           <th>Cantidad</th>
           <th>Imagen</th>
           <th>Opciones</th>


        </tr>

        <?php
        

        $consulta = mysqli_query($conexion,"SELECT*FROM producto_cuarzo");
    

        while($mostrar = mysqli_fetch_array($consulta)){
            ?>
            <tr>
                <td><?php echo  $mostrar[0] ?></td>
                <td><?php echo  $mostrar[1] ?></td>
                <td><?php echo  $mostrar[2] ?></td>
                <td><?php echo  $mostrar[3] ?></td>
                <td><?php echo  $mostrar[4] ?></td>
                <td><?php echo  $mostrar[5] ?></td>
                <td>
<button onclick="location.href='consultas-almacen/modificar-producto.php? id=<?php echo $mostrar['0']?>  & nom=<?php echo $mostrar['1']?> & col=<?php echo $mostrar['2']?> & pre=<?php echo $mostrar['3']?> & cant=<?php echo $mostrar['4']?> '">Editar</button>
    <button onclick="location.href='consultas-almacen/eliminar-producto.php? id=<?php echo $mostrar['0']?>'">Eliminar</button>
                </td>
            </tr>
<?php

        }

    ?>



    </table>




    </div>

    </main>
        }

    }




?>