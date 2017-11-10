
// Coloque o código abaixo no arquivo functions.php do seu tema. O número 80 é a quantidade de caracteres a exibir.

// Limite de caracteres
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}

//Coloque o loop abaixo no seu codigo
<?php echo excerpt('Aqui você digita o número de caracteres desejados'); ?>

