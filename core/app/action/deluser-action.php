<?php
/**
* @author adolfojos
* @brief Eliminar un usuario
**/
$p = UserData::getById($_GET["id"]);
$p->del();
Core::redir("./?view=users");
?>