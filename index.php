<?php
$number = 1;
$number2 = 2;
function comparaison ($numberpara, $number2para)
{
  if ($numberpara < $number2) {
    $message = 'Le premier nombre est plus petit';
  } elseif ($number1para > $number2para) {
    $message = 'Le premier nombre est plus grand';
  } else {
    $message = 'les deux nombres sont identique';
  }
  return $message ;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex3 partie4 php</title>
</head>
<body>
  <?php
  $result = comparaison($number,$number2);?>
  <p> <?php echo $result;?></p>
</body>
</html>
