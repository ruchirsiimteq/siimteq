<?php
    $query = "SELECT attribute_name FROM attributes WHERE attribute_type = 'Shape'"; 
    $result = mysqli_query($con, $query);
    $counter = 0;
?>
<?php if (mysqli_num_rows($result) > 0): ?>
<?php foreach($result as $shape): ?>
<?php  $shpkey ='tab-'.md5($shape['attribute_name']); ?>
<li class="nav-item">
    <a class="nav-link <?php $counter == 0 ? 'active' : ''?>" id="<?php echo $shpkey; ?>-tab" data-toggle="tab"
        href="#<?php echo $shpkey; ?>" role="tab" aria-controls="<?php echo $shpkey; ?>"
        aria-selected="true"><?php echo $shape['attribute_name'] ?></a>
</li>

<?php $counter++; ?>
<?php endforeach; ?>
<?php endif; ?>