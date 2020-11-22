<?php include_once('header.view.php') ?>
<table style="height: 100%; width: 100%;">
    <tr>
        <td align="center">
            <h1><u><b>Product Management</b></u></h1>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <form action="product.inc.php" method="post">
            <td>
                <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                <label for="id" style="display: block;">Product ID</label>
                <input type="text" name="id">
                <button type="submit" name="search">Search</button>
                <label for="id" style="display: block;">Product Name</label>
                <input type="text" name="id">
                <label for="id" style="display: block;">Product Price</label>
                <input type="number" name="price">
                <label for="type" style="display: block;">Product Type</label>
                <select name="type" id="type" style="display: block;">
                    <option value=""></option>
                    <option value="Leather">Leather</option>
                    <option value="Gadget">Gadget</option>
                    <option value="Mobile & Laptop">Mobile & Laptop</option>
                </select>
                <button type="submit" name="create">Create</button>
                <button type="submit" name="delete">Delete</button>
                <button type="submit" name="details">Details</button>
            </td>
        </form>
    </tr>
    <tr>
        <td>
            <hr>
            <h2><b>View Product</b></h2>
            <!-- <label for="">Fiter Price</label>
                <input type="checkbox" name="checkbox" id="checkbox"> -->
        </td>
    </tr>
    <tr>
        <td>
            <table border="1px">
                <tr>
                    <th>Product</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Type</th>
                    <th>Product Details</th>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>

                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/img/cocacolacan.webp" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2</td>
                        <td>Coke Can</td>
                        <td>$120</td>
                        <td>Uncatagorized</td>
                        <td>
                            <button>Details</button>
                        </td>
                    </form>
                </tr>
            </table>

        </td>
    </tr>
</table>
<?php include_once('footer.view.php') ?>