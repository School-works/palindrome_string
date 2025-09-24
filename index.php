<?php
$str = "anna";
$isPalindrome = false;
if ($str == strrev($str)) {
    $isPalindrome = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <h1 class="center">La parola:  <span id="word"><?php echo $str ?></span></h1>
    <h3 class="center"> <span style="color: green">
            <?php if ($isPalindrome) {
                echo "È palindroma";
            }  ?>
        </span>
        <span style="color: red">
            <?php if (!$isPalindrome) {
                echo "NON è palindroma";
            } ?> </span>
    </h3>
</body>

</html>