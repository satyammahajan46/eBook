<?php
include "validateLogin.php";
?>
<html>
    <head>
        <title>Login</title>
        <?php
        include "mainHeader.php";
        ?>
        <title>Welcome</title>
    </head>
    <body>
        <div class="heightVH">
            <?php
            include "connection.php";
            ?>
            <div class="container" style="padding-bottom:10;padding-top:10px;">
                <h1 class="center-block">Order details</h1>
                <h3 class="center-block">Want to know if you have bought all the books</h3>
                <form action="divison.php" method="post">;
                    <div class="container" style="padding-bottom:10;padding-top:10px;">

                        <input type="submit" name="submit" value="Yes Please!"/>
                    </div>
                </form>

                <?php
                include "divisonquery.php";
                ?>



            </div>
        </div>
        <footer>
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>


