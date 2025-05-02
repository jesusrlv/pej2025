<?php
include('qc.php');

$sqlCategoria = "SELECT * FROM categorias ORDER BY id ASC";
$resultadoCategorias = $conn->query($sqlCategoria);
while($rowCategoria=$resultadoCategorias->fetch_assoc()){
    $categoria = $rowCategoria['id'];
    echo'
    <p class="h2">
          <i class="bi bi-flag-fill text-success"></i> 
          '.$rowCategoria['nombre'].'
              <a href="#inicio">
                <i class="bi bi-arrow-bar-up"></i>
              </a>
          </p>
          <table class="table">
            <thead class="text-light text-center" style="background:#e4037d">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Edad</th>
                <th scope="col">Municipio</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Documentos</th>
                </tr>
            </thead>
            <tbody class="text-center">

    ';

    // while interno
    $sqlUsr = "SELECT * FROM usr WHERE categoria = '$categoria' AND perfil = 1 ORDER BY id ASC";
    $resultadoUsr = $conn->query($sqlUsr);
    $x=0;
    while($rowUsr=$resultadoUsr->fetch_assoc()){
        $idD = $rowUsr['id'];
        $sqlDoc = "SELECT * FROM documentos WHERE id_ext='$idD'";
        $resultadoDoc = $conn->query($sqlDoc);
        $noDocs=$resultadoDoc->num_rows;
        if($noDocs == 11){
        $x++;
        echo'
        <tr>
            <td>'.$x.'</td>
            <td>'.strtoupper($rowUsr['nombre']).'</td>
            <td>'.$rowUsr['curp'].'</td>
            <td>'.$rowUsr['edad'].'</td>';
            $idMun = $rowUsr['municipio'];
            $idMun = "SELECT * FROM municipio WHERE id = '$idMun'";
            $resultadoMun = $conn->query($idMun);
            $rowMun = $resultadoMun->fetch_assoc();
        echo'
            <td>'.$rowMun['municipio'].'</td>
            ';
        echo'
            <td>'.$rowUsr['telefono'].'</td>';

        if($noDocs==0){
            echo'
            <td><span class="badge text-bg-danger">'.$noDocs.'</span></td>
            ';
        }
        else if($noDocs >= 1 && $noDocs <= 10 ){
            echo'
            <td><a href="listado_docs.php?id='.$idD.'"><span class="badge text-bg-warning">'.$noDocs.'</span></a></td>
            ';
        }
        else if($noDocs == 11 ){
            echo'
            <td><a href="listado_docs.php?id='.$idD.'"><span class="badge text-bg-primary">'.$noDocs.'</span></a></td>
            ';
        }
        echo'</tr>
        ';
    }//fin de if docs
}
    // while interno
        echo '
            </tbody>
        </table>

        ';
}
?>