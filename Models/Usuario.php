<?php
class Usuario extends Conectar
{
    public function login()
    {
        $conectar = parent::conexion();
        parent::set_names();
        if (isset($_POST["enviar"])) {
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $rol = $_POST["rol_id"];
            if (empty($correo) and empty($pass)) {
                header("Location:" . conectar::ruta() . "index.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM usuario WHERE correo=? and rol_id=? and estado=1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $rol);
                $stmt->execute();
                $resultado = $stmt->fetch();

                if (is_array($resultado)) {
                    $contraseña = $resultado['pass'];
                    if (password_verify($pass, $contraseña)) {
                        if (is_array($resultado) and count($resultado) > 0) {
                            $_SESSION["usuario_id"] = $resultado["usuario_id"];
                            $_SESSION["nombre"] = $resultado["nombre"];
                            $_SESSION["apellido"] = $resultado["apellido"];
                            $_SESSION["rol_id"] = $resultado["rol_id"];
                            header("Location:" . Conectar::ruta() . "view/Home/indexlogin.php");
                            exit();
                        }
                    }
                } else {
                    header("Location:" . Conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }

    public function insert_usuario($nombre, $apellido, $correo, $pass, $rol_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO usuario (usuario_id,nombre,apellido,correo,pass,rol_id,fecha_creacion,fecha_mod,fecha_elim,estado) VALUES (NULL,?,?,?,?,?,NOW(),NULL,NULL,'1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $nombre);
        $sql->bindValue(2, $apellido);
        $sql->bindValue(3, $correo);
        $contraseña = password_hash($pass, PASSWORD_DEFAULT);
        $sql->bindValue(4, $contraseña);
        $sql->bindValue(5, $rol_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_pass($pass, $correo)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE usuario SET pass = ? WHERE correo = ?";
        $stmt = $conectar->prepare($sql);
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $stmt->bindValue(1, $pass);
        $stmt->bindValue(2, $correo);
        $stmt->execute();
        return $resultado = $stmt->fetchAll();
    }


    public function get_usuario_x_correo($correo)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT usuario_id FROM usuario WHERE correo = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $correo);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if (is_array($resultado)) {
            $_SESSION["usuario_id"] = $resultado["usuario_id"];
        }
    }
}
