<?php 
    require_once '../core/dbc.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    //get brands from database
    $sql = "SELECT * FROM brand ORDER BY brand";
    $results = mysqli_query($conn, $sql);
?>
<h2 class="text-center">Brands</h2>
<table class="table table-border table-striped table-auto">
    <thead>
        <th></th>
         <th>Brand</th>
          <th></th>
    
    </thead>
    <tbody>
        <?php while($brand = mysqli_fetch_assoc($results)){ ?>
            <tr>
                <td><a href="brand.php?edit=<?php echo $brand['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><?php echo $brand['brand']; ?></td>
                <td><a href="brand.php?delete=<?php echo $brand['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
            </tr>
        <?php } ?>
        
    </tbody>
    
</table>
<?php include 'includes/footer.php'; ?>