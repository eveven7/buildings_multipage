<div class="container">
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

                    <a href="<?=$_OUTER_PATH . '/views/house/show.php?' . "id=$house->id" . '&show='?>" class="show ">

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