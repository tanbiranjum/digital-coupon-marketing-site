<?php include_once('header.view.php') ?>
<table style="height: 100%; width: 100%;">
    <tr>
        <td align="center">
            <h1><u><b>You have 5 messages</b></u></h1>
        </td>
    </tr>
    <tr>
        <td>
            <table border="1px" style="width: 100%;">
                <tr align="center">
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>User Message</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
                <tr align="center">
                    <td>1</td>
                    <td>Tanbir</td>
                    <td>tanbiranjum@gmail.com</td>
                    <td>Issue on order no - 1</td>
                    <td>Seller</td>
                    <td>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr align="center">
                    <td>1</td>
                    <td>Tanbir</td>
                    <td>tanbiranjum@gmail.com</td>
                    <td>Issue on order no - 1</td>
                    <td>Customer</td>
                    <td>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr align="center">
                    <td>1</td>
                    <td>Tanbir</td>
                    <td>tanbiranjum@gmail.com</td>
                    <td>Issue on order no - 1</td>
                    <td>Seller</td>
                    <td>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr align="center">
                    <td>1</td>
                    <td>Tanbir</td>
                    <td>tanbiranjum@gmail.com</td>
                    <td>Issue on order no - 1</td>
                    <td>Customer</td>
                    <td>
                        <button>Delete</button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr align="center">
        <td>
            <h3>Email to user</h3>
        </td>
    </tr>
    <tr>
        <td>
            <form action="mail.inc.php" method="post" style="width: 250px;">
                <fieldset>
                    <legend>Mail</legend>
                    <label for="email" style="display: block;">User Email</label>
                    <input type="email" name="email" id="email">
                    <label for="subject" style="display: block;">Subject</label>
                    <input type="text" name="subject" id="subject">
                    <label for="message" style="display: block;">Message</label>
                    <input type="text" style="height: 90px;">
                    <button type="submit" name="submit" style="display: block;">Send</button>
                </fieldset>
            </form>
        </td>
    </tr>
</table>
<?php include_once('footer.view.php') ?>