<?php

require_once "./config/config.php";
require_once "./include/funcoes/verifica.php";
require_once "./include/models/Main.php";
require_once "./include/models/Pagination.php";

// SE EXISTIR USUARIO LOGADO ABRE A PAGINA
if ($esta_logado == "SIM") {
    // PAGINA ACESSIVEL APENAS PARA ADMINISTRADOR E SUPERVISOR
    if ($nivel == "Administrador" || $nivel == "Supervisor") {

        $mainVisitado = new Main(); // INSTANCIANDO A CLASSE MAIN()
        $mainVisitado->setNivel($nivel);
        $mainVisitado->setUsuario($_SESSION["usuario"]);
        
        $mainVisitado->startVisitado(); // CHAMANDO A FUNCAO DE INICIALIZAÇÃO DO CADASTRO DE VISITADO
        
        
    } else {
        header("location: index.php");
    }
} else {
    header("location: index.php");
}
?>
