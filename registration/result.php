<?php 

$input=0;
$sum =0 ;
 foreach($_POST['optradio'] as $option_num => $option_val){
 	$input++;
 	$sum += $option_val;
 }
 	$sum /= $input; 
 	echo $input;
    echo "Total ".$sum."<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
    <?php
    for($i=1;$i<=5;$i++){
        ?>
        <div class="well well-sm well-primary">
            <input type="hidden" name="ques"/>ilan ang lalabas?
        </div>
        <div class="well well-sm">
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="75">Option 1</label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="85">Option 2</label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="100">Option 3</label>
            </div>
        </div>
        <?php
    }
    ?>
    <button type="submit" class="btn btn-success" name="submit">Finish</button>
</form>

</body>
</html>