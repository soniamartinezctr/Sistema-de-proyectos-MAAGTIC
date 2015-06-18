<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistemas MAAGTICSI</title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper" class="container">
	<div id="header" class="container">
            
		<div id="logo">
                    <img src="../images/hlogo_02 1.png" alt="DGTVE" width="170" height="90">                   
		</div>
            <h3>Control de Proyectos MAAGTICSI</h3>
		<div id="menu">
			<ul>
                            <li class="current_page_item"><a href="../index.php">Inicio</a></li>
                            <li class="current_page_item"><a href="consultas.php">Consultar</a></li>
                            <li class="current_page_item"><a href="datosProyecto.php">Registrar Proyecto</a></li>
			</ul>
		</div>
	</div>
<!--            div de sombra-->
	<div><img src="../images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<!-- end #header -->
<!--      inicio  contenido-->
	<div id="page">
<div id="divdatos">
<!--    Datos del proyecto-->
<table id="tbldatos">
    <thead><th colspan="2">Datos Generales del Proyecto</th></thead>   
    <tbody>
        <tr>
            <td class="coltitulos"><label>Id</label></td>
            <td class="colinput"><input  type="text" size="5" readonly="readonly" name="id_proyecto"></td>
        </tr>
        <tr>
            <td class="coltitulos"><label>Nombre</label></td>
            <td class="colinput"><input autofocus="autofocus" type="text" size="50" name="nombre"></td>
        </tr>
        <tr>
            <td class="coltitulos"><label>Fecha de Inicio</label></td>
            <td class="colinput"><input type="date" name="fecha_ini"/></td>
        </tr>
        <tr>
            <td><label>Fecha de Termino</label></td>
            <td><input type="date" name="fecha_fin"/></td>
        </tr>
        <tr>
            <td><label>Descripción</label></td>
            <td><textarea cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><label>Proyecto PETIC</label></td>
            <td>
                <input type="radio" name="petic" value="si">Si
                <input type="radio" name="petic" value="no">No
            </td>
        </tr>
        <tr>
            <td><label>Estatus</label></td>
            <td>
                <select>
                    <option>Inicio</option>
                    <option>Proceso</option>
                    <option>Entrega</option>
                </select>
            </td>
        </tr>
    <tfoot><th colspan="2"><a href="datosResponsables.php"><input class="btnform" type="button" value="Siguiente"/></a><th></tfoot>
    </tbody>
</table>
<!--fin de datos del proyecto-->
</div>
	</div>
<!--fin contenido-->
<!--        Div de sombra-->
	<div class="container"><img src="../images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page -->
</div>
<div id="footer-content"></div>
<div id="footer">
	<p>&copy; Televisión Educativa.  <a href="#">Sistemas Web</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

