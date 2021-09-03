<a type="button" id="modal" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getURL("ResultadoAprendizaje", "ResultadoAprendizaje", "getInsertModal", false, "ajax") ?>">
    <div style="background-color: #FF8001;padding:5px;">
        <p style="margin:0;">Añadir Resultado de Aprendizaje</p>
    </div>
</a>
<table class="table table-hover table-striped mt-3 table-light" id="tabla">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Resultado Aprendizaje</th>
        <th>Competencia</th>
    </thead>

    <tbody>
        <?php
        foreach ($resultadoApr as $resApr) {
            echo "<tr>";
                echo "<td>" . $resApr['ReApCod'] . "</td>";
                echo "<td>" . $resApr['ReApDesc'] . "</td>";
                echo "<td>" . $resApr['CompDesc'] . "</td>";
                echo "<td>
                    <a id='modal' data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' data-url='" . getURL('ResultadoAprendizaje', 'ResultadoAprendizaje', 'getUpdateModal', array("ReApCod"=>$resApr['ReApCod']), 'ajax') . "'>
                        <svg id='edit' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 445.08 444.8' style='height:15px'>
                            <title>Edit</title>
                            <path class='cls-1' d='M391.2,219.75,149.57,461.37l-99,11s-22.72,1.25-23.14-22.93L38.93,349.8,280.55,108.18Z' transform='translate(-27.46 -27.6)'/>
                            <path class='cls-1' d='M299.52,88.59,411.16,200.22l49.2-49.2s27.41-27.41,0-59.31L408.08,39.44s-27.88-26.63-58.94,0Z' transform='translate(-27.46 -27.6)'/>
                        </svg>
                    </a>
                </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>