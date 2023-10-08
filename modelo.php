<?php
class UsuarioModelo {
    public function guardarDatosEnSesion($nombre, $ap_paterno, $ap_materno, $direccion, $fecha_nacimiento, $telefono, $celular, $lugar_nacimiento, $pais, $correo, $carrera) {
        session_start();

        $_SESSION['datos'] = array(
            'nombre' => $nombre,
            'ap_paterno' => $ap_paterno,
            'ap_materno' => $ap_materno,
            'direccion' => $direccion,
            'fecha_nacimiento' => $fecha_nacimiento,
            'telefono' => $telefono,
            'celular' => $celular,
            'lugar_nacimiento' => $lugar_nacimiento,
            'pais' => $pais,
            'correo' => $correo,
            'carrera' => $carrera
        );
    }
}
?>
