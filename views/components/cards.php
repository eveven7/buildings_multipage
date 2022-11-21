<?php foreach ($houses as $house) {?>
<div class=" container grid mb-2 ">
    <div class=" card">
        <div class="slide slide1 mb-3">
            <div class="text">
                <div class="blue center">
                    <i class="" aria-hidden="true">
                        <a href="<?=$_OUTER_PATH . '/views/house/show.php?' . "id=$house->id" . '&show='?>"
                            class="main">

                            <h2><?=$house->address?></h2>

                            <p id="">
                                <?php
                                    if ($house->isHouse) {
                                        echo "House";
                                    } else {
                                        echo "Flat";
                                    }
                                        ?>
                            </p>

                            <p id="">
                                <?php if (($house->isHouse)) {
                                echo "";
                                } else {
                                echo "Floor: " . $house->floor;
                                }
                                ?>
                            </p>
                            <p>Rooms: <?=$house->roomCount?></p>
                        </a>
                    </i>
                </div>
            </div>
        </div>
        <div class="slide slide2">

            <div class="content">

                <form action="<?=$_OUTER_PATH . '/views/house/edit.php'?>" method="get">
                    <input type="hidden" name="id" value=" <?=$house->id?>">
                    <button id="edit-btn" type="submit" name="edit" class="btn btn-success">edit</button>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="id" value=" <?=$house->id?>">
                    <button type="submit" name="destroy" class="btn btn-danger">delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }?>