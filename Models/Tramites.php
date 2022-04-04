<?php
class Usuario extends Conectar
{

    public function insert_tramitea($tipodoc, $otrotip, $numdoc, $pnombre, $snombre, $papellido, $sapellido, $profesion, $telefono, $correo, $direccion, $entidadvinc, $cargo, $numaut, $titulo, $numcert, $nomproyecto, $desctipo, $descmet, $descmate, $cantidad, $anexos, $pais, $ciudad, $institucion, $lugar, $fecha_salida, $fecha_retorno, $nombre_encargado, $estado)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tramite (id_tramite,tipodoc,otrotip,numdoc,pnombre,snombre,papellido,sapellido,profesion,telefono,correo,direccion,entidadvinc,cargo,numaut,titulo,numcert,nomproyecto,desctipo,descmet,descmate,cantidad,anexos,pais,ciudad,institucion,lugar,fecha_salida,fecha_retorno,nombre_encargado,estado) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tipodoc);
        $sql->bindValue(2, $otrotip);
        $sql->bindValue(3, $numdoc);
        $sql->bindValue(4, $pnombre);
        $sql->bindValue(5, $snombre);
        $sql->bindValue(6, $papellido);
        $sql->bindValue(7, $sapellido);
        $sql->bindValue(8, $profesion);
        $sql->bindValue(9, $telefono);
        $sql->bindValue(10, $correo);
        $sql->bindValue(11, $direccion);
        $sql->bindValue(12, $entidadvinc);
        $sql->bindValue(13, $cargo);
        $sql->bindValue(14, $numaut);
        $sql->bindValue(15, $titulo);
        $sql->bindValue(16, $numcert);
        $sql->bindValue(17, $nomproyecto);
        $sql->bindValue(18, $desctipo);
        $sql->bindValue(19, $descmet);
        $sql->bindValue(20, $descmate);
        $sql->bindValue(21, $cantidad);
        $sql->bindValue(22, $anexos);
        $sql->bindValue(23, $pais);
        $sql->bindValue(24, $ciudad);
        $sql->bindValue(25, $institucion);
        $sql->bindValue(26, $lugar);
        $sql->bindValue(27, $fecha_salida);
        $sql->bindValue(28, $fecha_retorno);
        $sql->bindValue(29, $nombre_encargado);
        $sql->bindValue(30, $estado);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_detalle($usu_id, $categoria, $tick_estado)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tramite_detalle (tick_id,usu_id,categoria,tick_estado,fecha_creacion) VALUES (null,?,?,?,now())";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->bindValue(2, $categoria);
        $sql->bindValue(3, $tick_estado);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_tramites($sql)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_comentarios($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT comentarios.com_id,comentarios.comentario,comentarios.fecha_creacion,usuario.nombre,usuario.apellido,usuario.rol_id FROM comentarios
        INNER JOIN usuario ON comentarios.usuario_id = usuario.usuario_id 
        WHERE tramite_id = ? ORDER BY com_id asc" ;
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insertar_comentario($tramite_id, $usuario_id, $comentario)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO comentarios (com_id,tramite_id,usuario_id,comentario,fecha_creacion,est) VALUES (null,?,?,?,now(),'1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $usuario_id);
        $sql->bindValue(3, $comentario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
