<?php

require_once('../config/conexion.php');
require_once('../models/TelevisoresModels.php');

$televisores = new Televisores();

switch ($_GET['op']) {
    case 'listar':
        # code...
        $datos = $televisores->gettelevisor();
        
        $data = [];
        foreach ($datos as $row ) {
            $subarr = [];
            $subarr[]= $row['idtelevisor'];
            $subarr[]= $row['marca'];
            $subarr[]= $row['modelo'];
            $subarr[]= $row['serie'];
            $subarr[]= $row['tamaño'];
            $subarr[]= $row['año'];
            $subarr[]= '<button type="button" onClick="editar(' . $row["idtelevisor"] . ');"  id="' . $row["idtelevisor"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa-solid fa-pen-to-square"></i></div></button>
            <button type="button" onClick="eliminar(' . $row["idtelevisor"] . ');"  id="' . $row["idtelevisor"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            
            $data[] = $subarr;
        }
        $result = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData" => $data
        );
        echo json_encode($result);
        break;
    
    case 'eliminar':
        $televisores->deleteTelevisor($_POST["idtelevisor"]);
        break;
    
   
}