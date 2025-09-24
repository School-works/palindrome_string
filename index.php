<?php
$str = "saippuakivikauppias";
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
    <h1>La parola:  <span id="word"><?php echo $str ?></span></h1>
    <h3> <span style="color: green">
            <?php if ($isPalindrome) {
                echo "È palindroma";
            }  ?>
        </span>
        <span style="color: red">
            <?php if (!$isPalindrome) {
                echo "NON è palindroma";
            } ?> </span>
    </h3>

    <h3>
        <div>
            E diventa <span style="color: turquoise"><?php 
            echo str_replace(['a', 'e', 'i', 'o', 'u'], '', $str);
        ?> </span>se tolte le vocali
        </div>
        
    </h3>
</body>

</html>