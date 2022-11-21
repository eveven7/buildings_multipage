<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 

?>

<body>



    <div class="wrapper">

        <div class="box header">

            <form action="" method="get">
                <div class="row category">
                    <div class="col-2">
                        <select class="form-select" name="filter">
                            <option value=""> Choose room number</option>
                            <?php foreach ($params as $key => $param) { ?>
                            <option value="<?= $param ?>"><?= $param ?></option>


                            <?php }?>

                        </select>
                    </div>
                    <div class="col-3">
                        <input type="text" placeholder="Floor from" class="form-control"
                            <?=(isset($_GET["from"])) ? ($_GET["from"] != "") ? 'value = ' . $_GET["from"] : '': '';?>
                            name="from">
                    </div>
                    <div class="col-3">
                        <input type="text" placeholder="Floor to" class="form-control"
                            <?=(isset($_GET["to"])) ? ($_GET["to"] != "") ? 'value = ' . $_GET["to"] : '': '';?>
                            name="to">
                    </div>
                    <div class="col-2">
                        <select class="form-select" name="sort">
                            <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 0) ? "selected" : '':'';?> selected
                                value="0">
                                SORT</option>
                            <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 1) ? "selected" : '':'';?> value="1">
                                Floor
                                0-9</option>
                            <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 2) ? "selected" : '':'';?>value="2">
                                Floor
                                9-0</option>
                            <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 3) ? "selected" : '':'';?>value="3">
                                Address
                                A-Z</option>
                            <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 4) ? "selected" : '':'';?>value="4">
                                Address
                                Z-A</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary-filter">Filter</button>
                    </div>
                </div>
        </div>

        </form>



        <table class="table table-striped table-hove">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">adress</th>
                    <th scope="col">rooms</th>
                    <th scope="col">house/flat</th>
                    <th scope="col">floor</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($houses as $house) { ?>

                <tr>
                    <td>

                        <a href="<?=$_OUTER_PATH . '/views/house/show.php?' . "id=$house->id" . '&show='?>"
                            class="show ">

                            <?=$house->id?>

                    </td>
                    <td><?=$house->address?></td>

                    <td><?=$house->roomCount?></td>

                    <td><?=($house->isHouse)?"house":"flat"?></td>
                    <td><?=$house->floor?></td>
                    <td>


                        <form action="<?=$_OUTER_PATH.'/views/house/show.php'?>" method="get">
                            <input type="hidden" name="id" value="<?=$house->id?>">
                            <button type="submit" name="show" class="btn btn-primary">Show</button>
                        </form>


                    </td>
                    <td>
                        <form action="<?=$_OUTER_PATH.'/views/house/edit.php'?>" method="get">
                            <input type="hidden" name="id" value="<?=$house->id?>">
                            <button type="submit" name="edit" class="btn btn-success">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$house->id?>">
                            <button type="submit" name="destroy" class="btn btn-danger">Delete</button>
                        </form>

                        </a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
</body>

</html>