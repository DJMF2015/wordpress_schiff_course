<p>Hello, world! The year is <?php echo date('Y'); ?>.</p>

<?php 
$names = array('David', 'john lennon', 'kafka', 'george harrison');
$count = 0;

while($count < count($names)){
    echo "<li>Names: $names[$count]</li>"
    $i++;
}

?>