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
                <?=(isset($_GET["from"])) ? ($_GET["from"] != "") ? 'value = ' . $_GET["from"] : '': '';?> name="from">
        </div>
        <div class="col-3">
            <input type="text" placeholder="Floor to" class="form-control"
                <?=(isset($_GET["to"])) ? ($_GET["to"] != "") ? 'value = ' . $_GET["to"] : '': '';?> name="to">
        </div>
        <div class="col-2">
            <select class="form-select" name="sort">
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 0) ? "selected" : '':'';?> selected value="0">SORT
                </option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 1) ? "selected" : '':'';?> value="1">Floor 0-9
                </option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 2) ? "selected" : '':'';?>value="2">Floor 9-0
                </option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 3) ? "selected" : '':'';?>value="3">Address A-Z
                </option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 4) ? "selected" : '':'';?>value="4">Address Z-A
                </option>
            </select>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-outline-filter">Filter</button>
        </div>
    </div>
    </div>

</form>