<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Pcbs_location_css $Table_css";?>
    <title>PCB's Location</title>
</head>
<body>
    <?php //? CONTENEDOR PRINCIPAL?>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>
        
        <?php //? CONTENIDO?>
        <div class="content-container">
            <div class="title-container">
                <h1>PCB's Location</h1>
            </div>
            <div class="pcbs-location-container">
                <div class='search-container-pcbs-location'>
                    <form action='/buscar' method='get'>
                        <button class='Search-button-pcbs-location' id='Search-pcbs-locatiob-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        <input id='Search-input-pcbs-location' class='Search-input-pcbs-location' type='search' name='Search' placeholder='Search here...'>
                    </form>
                </div>
                    <div class="pcbs-location-table">
                        <table class="table table-secondary table-hover">
                            <thead>
                                <tr>
                                    <td>Cliet</td>
                                    <td>Model</td>
                                    <td>Departament</td>
                                    <td>Expiration Verification</td>
                                    <td>Status</td>
                                    <td>TitPCB typele</td>
                                    <td>Position</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="sinContenido">
                                    <td colspan="7">No data available in table</td>
                                    </tbody>
                                </tr>
                            </table>
                    </div>
            </div>
        </div>

        
        <?php //? footer?>
        <?php echo "$footer";?>
        <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
    </div>    
</body>
</html>