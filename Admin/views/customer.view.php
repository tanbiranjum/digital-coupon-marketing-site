<?php include_once('header.view.php') ?>
<form action="product.inc.php" method="post">
    <table style="height: 100%; width: 100%;">
        <tr>
            <td align="center">
                <h1><u><b>Customer Management</b></u></h1>
            </td>
        </tr>
        <tr style="border: 1px solid black;">
            <td>
                <label for="id" style="display: block;">User ID</label>
                <input type="text" name="id">
                <button type="submit" name="search">Search</button>
                <label for="id" style="display: block;">First Name</label>
                <input type="text" name="id">
                <label for="id" style="display: block;">Last Name</label>
                <input type="number" name="price">
                <label for="email" style="display: block;">Email</label>
                <input type="email" name="email" style="display: block;">
                <button type="submit" name="create">Details</button>
            </td>
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
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Type</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Customer</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Seller</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Customer</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Seller</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Customer</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Seller</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>Sparrow</td>
                        <td>jack@gmail.com</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>Customer</td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</form>
<?php include_once('footer.view.php') ?>