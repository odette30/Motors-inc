<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/equipment_inventory.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Equipment_Inventory_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Equipment_Inventory_css $Pcbs_location_css $Bootstrap_4_6_0_css";?>
    <title>Equipment Inventory</title>
</head>
<body>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>

        <?php //?Contenido?>
        <div class="content-container">
            <div class="title-container">
            <h1>Equipment Inventory</h1>
            </div>
            <div class="equipment-inventory-container">
            <?php//?Menú para ver o modificar inventario y la barra de busqueda?>
                <div class='search-container-equipment-inventory'>
                    <button class="btn btn-outline-primary">+ add</button>
                    <form action='' method='get'>
                        <button class='Search-button-equipment-inventory' id='Search-equipment-inventory-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        <input id='Search-input-equipment-inventory' class='Search-input-equipment-inventory' type='search' name='name' placeholder='Search name here...'>
                    </form>
                </div>
                <div class="inventory-container">
                    <div class="table-container">
                        <table class="table table-secondary table-hover">
                            <thead>
                            <tr>
                                <td >Name</td>
                                <td>Hostname</td>
                                <td>IP Adress</td>
                                <td>Classification</td>
                                <td>Location</td>
                                <td>Department</td>
                                <td>Assigned To</td>
                                <td>Trademark</td>
                                <td>Model</td>
                                <td>CPU</td>
                                <td>HDD Size</td>
                                <td>RAM Size</td>
                                <td>Service Tag</td>
                                <td>Serial Number</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                if (isset($_GET['name'])) {
                                    $name = $_GET['name'];
                                    search_EquipmentInventory($connection, $name);
                                } else {
                                    EquipmentInventory($connection);
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js $Back_Button_js";?>
</body>
</html>