<?php
require ('users_data.php');


// echo "<pre>" . var_export($persons, true) . "</pre>";

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                <?php

                foreach ($persons as $id => $person) {
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo htmlspecialchars($person['name']) ?></td>
                        <td><?php echo $person['email'] ?></td>
                        <td><?php echo $person['age'] ?></td>

                        <td><?php echo $person['address'] ?></td>
                        <td>
                            <a href="delete.php?user=<?php echo $id ?>"> Delete</a>
                            <a href="edit.php?user=<?php echo $id ?>"> edit</a>
                            <a href="check_age.php?user=<?php echo $id ?>"> check</a>
                        </td>
                    </tr>
                    <?php
                }

                ?>

            </table>

        </div>
    </div>
</div>