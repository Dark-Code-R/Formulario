<?php
require_once 'modelo.php';

class UsuarioControlador {
    
    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
    }

    public function procesarFormulario() {
        $datos = $this->obtenerDatosPost();

        if ($this->sonDatosValidos($datos)) {
            // Si los datos son válidos, mostrar la vista con los datos ingresados
            $this->mostrarFormularioIngresado($datos);
        } else {
            // Si hay errores, redirigir al formulario
            header("Location: vista.php");
        }
    }

    private function obtenerDatosPost() {
        return [
            'nombres' => $this->limpiarInput($_POST["nombres"]),
            'ap_paterno' => $this->limpiarInput($_POST["ap_paterno"]),
            'ap_materno' => $this->limpiarInput($_POST["ap_materno"]),
            'direccion' => $this->limpiarInput($_POST["direccion"]),
            'fecha_nacimiento' => $this->limpiarInput($_POST["fecha_nacimiento"]),
            'telefono' => $this->limpiarInput($_POST["telefono"]),
            'celular' => $this->limpiarInput($_POST["celular"]),
            'lugar_nacimiento' => $this->limpiarInput($_POST["lugar_nacimiento"]),
            'pais' => $this->limpiarInput($_POST["pais"]),
            'correo' => $this->limpiarInput($_POST["correo"]),
            'carrera' => $this->limpiarInput($_POST["carrera"]),
        ];
    }

    private function sonDatosValidos($datos) {
        // Puedes agregar validaciones aquí según tus requisitos
        // En este ejemplo, simplemente verificamos que no estén vacíos
        foreach ($datos as $dato) {
            if (empty($dato)) {
                return false;
            }
        }
        return true;
    }

    private function limpiarInput($dato) {
        return htmlspecialchars(stripslashes(trim($dato)));
    }

    private function mostrarFormularioIngresado($datos) {
        // Mostrar los datos directamente en la misma página
        echo "<h2>Datos ingresados:</h2>";
        echo "<ul>";
    
        foreach ($datos as $clave => $valor) {
            echo "<li>$clave: $valor</li>";
        }
    
        echo "</ul>";
    }
    
}

// Crear una instancia del controlador y procesar el formulario
$controlador = new UsuarioControlador();
$controlador->procesarFormulario();
?>
