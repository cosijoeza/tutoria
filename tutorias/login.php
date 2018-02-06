<?php   
    include("bd/con.php");
    if(isset($_POST['usuario']) && isset($_POST['usuario'])){
        
        $usuario = $_POST['usuario']; 
        $password = $_POST['password']; 

        $conn = conectarDB("localhost","root","usermysql","tutorias_development");

        $sql="SELECT id, nombre, password FROM admins WHERE nombre='$usuario' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_array($result, MYSQLI_NUM)){
            //Recordar que no debe haberse mandado a pantalla (-> html)  nada antes de usar la sesion
            session_start();
            $_SESSION['id']  = $row[0];
            $_SESSION['nombre'] = $row[1];
            $_SESSION['password']= $row[2];
            header('Location: admin.php');
            
        }
        else 
        {
            header('Location: login.php');
        }
    }
    else{
        cabecera("Login");        
    }
?>

<body id="uno">
   <div class="container">
        <div class="row" id="fila">
            <div class="col-lg-4 col-md-4 col-sm-2 col-xl-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xl-4" id="formul">
                <form action="login.php" method="post">
                    <div class="form-login">
                        <div class="row">
                            <div class="col-2">
                                <center><i class='fa fa-user fa-lg' aria-hidden='true'></i></center>
                            </div>
                            <div class="col-8">
                                <h5>Iniciar sesión</h5>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <input name="usuario" type="text" id="usuario" class="form-control  my-2 " placeholder="Correo electrónico" />
                        <input name="password" type="text" id="password" class="form-control my-2 " placeholder="Password" />
                        <div class="wrapper">
                            <span class="group-btn">     
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar </button>
                            </span>
                        </div>
                    </div>
                </form>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-2 col-xl-4"></div>
        </div>
    </div>
</body>
</html>    