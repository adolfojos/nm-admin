<?php
/**
* @author adolfojos
* @brief Eliminar un post
**/
		CommentData::delById($_GET["id"]);
		Core::redir("./?view=comments");
?>