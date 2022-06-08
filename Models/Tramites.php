<?php

# Funciones CRUD Tramites analisis

class Usuario extends Conectar
{

    # Crear nuevo tramite de analisis
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

    # Crear detalle del tramite de analisis
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

    # Listar tramites de analisis
    public function listar_tramites($sql)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Listar tramites de exhibicion por ID
    public function listar_tramites_exh_x_usuario($sql)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Listar tramites de analisis por ID
    public function listar_tramites_x_usuario($sql)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Crear comentario en el tramite de exhibicion
    public function insertar_com_exh($tramite_id, $usuario_id, $comentario)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO comentarios_exh (com_id,tramite_id,usuario_id,comentario,fecha_creacion,est) VALUES (null,?,?,?,now(),'1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $usuario_id);
        $sql->bindValue(3, $comentario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Listar los comentarios del tramite de exhibicion
    public function listar_com_exh($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT comentarios_exh.com_id,comentarios_exh.comentario,comentarios_exh.fecha_creacion,usuario.nombre,usuario.apellido,usuario.rol_id FROM comentarios_exh
        INNER JOIN usuario ON comentarios_exh.usuario_id = usuario.usuario_id 
        WHERE tramite_id = ? ORDER BY com_id asc";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Listar los comentarios del tramite de analisis
    public function listar_comentarios($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT comentarios.com_id,comentarios.comentario,comentarios.fecha_creacion,usuario.nombre,usuario.apellido,usuario.rol_id FROM comentarios
        INNER JOIN usuario ON comentarios.usuario_id = usuario.usuario_id 
        WHERE tramite_id = ? ORDER BY com_id asc";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Crear comentario en el tramite de analisis
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

    # Cerrar tramite exhibicion
    public function update_estado_cerrado($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite SET estado = 'Cerrado' WHERE id_tramite = ?;
                UPDATE tramite_detalle SET tick_estado = 'Cerrado' WHERE tick_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Abrir tramite exhibicion
    public function update_estado_abierto($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite SET estado = 'Abierto' WHERE id_tramite = ?;
                UPDATE tramite_detalle SET tick_estado = 'Abierto' WHERE tick_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Actualizar tramite analisis
    public function update_tramitea($tipodoc, $otrotip, $numdoc, $pnombre, $snombre, $papellido, $sapellido, $profesion, $telefono, $correo, $direccion, $entidadvinc, $cargo, $numaut, $titulo, $numcert, $nomproyecto, $desctipo, $descmet, $descmate, $cantidad, $anexos, $pais, $ciudad, $institucion, $lugar, $fecha_salida, $fecha_retorno, $nombre_encargado, $estado, $id_tramite)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite SET tipodoc = ?,otrotip = ?,numdoc = ?,pnombre = ?,snombre = ?,papellido = ?,sapellido = ?,profesion = ?,telefono = ?,correo = ?,direccion = ?,entidadvinc = ?,cargo = ?,numaut = ?,titulo = ?,numcert = ?,nomproyecto = ?,desctipo = ?,descmet = ?,descmate = ?,cantidad = ?,anexos = ?,pais = ?,ciudad = ?,institucion = ?,lugar = ?,fecha_salida = ?,fecha_retorno = ?,nombre_encargado = ?,estado = ? WHERE id_tramite = ?";
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
        $sql->bindValue(31, $id_tramite);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Cerrar tramite de exhibicion
    public function update_estado_cerrado_exh($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite_exh SET estado = 'Cerrado' WHERE id_tramite = ?;
                UPDATE tramite_det_exh SET tick_estado = 'Cerrado' WHERE tick_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Abrir tramite de exhibicion
    public function update_estado_abierto_exh($tramite_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite_exh SET estado = 'Abierto' WHERE id_tramite = ?;
                UPDATE tramite_det_exh SET tick_estado = 'Abierto' WHERE tick_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tramite_id);
        $sql->bindValue(2, $tramite_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    # Actualizar tramite de exhibicion
    public function update_tramite_exh($num_certf, $nom_solic, $tipo_doc, $cual, $num_doc, $num_piezas, $p_nombre, $s_nombre, $p_apellido, $s_apellido, $tipo_doc_r, $cual_r, $num_doc_r, $correo, $f_inicion_exp, $f_final_exp, $pais, $ciudad, $lugar, $nombre_exp, $fecha_salida, $fecha_retorno, $anexos, $piezas, $datos_adic, $estado, $id_tramite)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tramite_exh SET num_certf = ?,nom_solic = ?,tipo_doc = ?,cual = ?,num_doc = ?,num_piezas = ?,p_nombre = ?,s_nombre = ?,p_apellido = ?,s_apellido = ?,tipo_doc_r = ?,cual_r = ?,num_doc_r = ?,correo = ?,f_inicion_exp = ?,f_final_exp = ?,pais = ?,ciudad = ?,lugar = ?,nombre_exp = ?,fecha_salida = ?,fecha_retorno = ?,anexos = ?,piezas = ?,datos_adic = ?, estado = ? WHERE id_tramite = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $num_certf);
        $sql->bindValue(2, $nom_solic);
        $sql->bindValue(3, $tipo_doc);
        $sql->bindValue(4, $cual);
        $sql->bindValue(5, $num_doc);
        $sql->bindValue(6, $num_piezas);
        $sql->bindValue(7, $p_nombre);
        $sql->bindValue(8, $s_nombre);
        $sql->bindValue(9, $p_apellido);
        $sql->bindValue(10, $s_apellido);
        $sql->bindValue(11, $tipo_doc_r);
        $sql->bindValue(12, $cual_r);
        $sql->bindValue(13, $num_doc_r);
        $sql->bindValue(14, $correo);
        $sql->bindValue(15, $f_inicion_exp);
        $sql->bindValue(16, $f_final_exp);
        $sql->bindValue(17, $pais);
        $sql->bindValue(18, $ciudad);
        $sql->bindValue(19, $lugar);
        $sql->bindValue(20, $nombre_exp);
        $sql->bindValue(21, $fecha_salida);
        $sql->bindValue(22, $fecha_retorno);
        $sql->bindValue(23, $anexos);
        $sql->bindValue(24, $piezas);
        $sql->bindValue(25, $datos_adic);
        $sql->bindValue(26, $estado);
        $sql->bindValue(27, $id_tramite);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
