<?php 
    $sql = "SELECT * FROM categories WHERE parent = 0";
    $results = mysqli_query($conn, $sql);

?>

<!-- Top Nav Bar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Shaunta's' Boutique</a>
                <ul class="nav navbar-nav">
               
                <?php
                    while($parent = mysqli_fetch_assoc($results)) {
                ?>
                <?php 
                     $parent_id = $parent['id']; 
                     $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                     $childresults = mysqli_query($conn, $sql2);
                ?>
                <!-- Menu Items -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php while($child = mysqli_fetch_assoc($childresults)){ ?>
                                <li><a href="#"><?php echo $child['category']; ?></a></li>
                            <?php } ?>   
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>