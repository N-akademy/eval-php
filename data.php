<?php
include "templates/header.php";


if(isset($_POST) && !empty($_POST)) {
    if($_POST=["lala@gmail.com"] as $_POST=["totoestgentil"])
        ?>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <?php
                            {foreach($_POST as $key => $value) {
                                echo "<th>$key</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            foreach($_POST as $key => $value) {
                                echo "<td>$value</td>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php
    $_SESSION["mail"] = $_POST["email"]&& header('Location: admin.php');
    }else{
        header('Location: index.php');
    }
}

include "templates/footer.php";
