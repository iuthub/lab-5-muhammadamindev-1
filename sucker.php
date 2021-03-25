<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php $allParametersSet = true;
?>

<?php foreach($_REQUEST as $param){
    if(empty($param)) {
        $allParametersSet = false;
    }
}
if(!isset($_REQUEST['creditCardType']))
{
    $allParametersSet = false;
}
?>

<?php if($allParametersSet==true){
    $name = $_POST['fullName'];
    $sectionNumber = $_POST['sectionNumber'];
    $creditCard = $_POST['creditCard'];
    $cardType = $_POST['creditCardType'];
    ?>

    <h2>Thanks, sucker!</h2>
    <p>Your information has been recorded.</p>
    <p>Name</p>
    <pre>
<?php
print("\t".$name)?>
<p>Section</p>
<?php
print("\t".$sectionNumber)?>
<p>Credit card</p>
<?php
print("\t".$creditCard."(".$cardType.")")?>

        <?php $dataToBeSaved = $name.";".$sectionNumber.";".$creditCard.";".$cardType."\n";
        file_put_contents("suckers.txt", $dataToBeSaved,FILE_APPEND)?>

        <?php $dataToBeDisplayed = file_get_contents("suckers.txt")
        ?>
</pre>
    <p>Here are all the suckers who have submitted here:</p>
    <pre>
<?php
print($dataToBeDisplayed);?>
</pre>

<?php }else{ ?>

    <h2>Sorry</h2>
    <p>You didn't fill out form completely. <a href="buyagrade.html">Try again?</a></p>

<?php } ?>

</body>
</html>
