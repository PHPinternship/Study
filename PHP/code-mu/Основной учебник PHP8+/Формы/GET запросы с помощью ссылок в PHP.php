<!--1-->
<a href="?par=1">1</a>
<a href="?par=2">2</a>
<a href="?par=3">3</a>

<?php if (isset($_GET['par'])) {
    echo '<br>'.$_GET['par'];
}
echo '<br>';
//2
for ($i = 1; $i <= 10; $i++) {
    ?> <a href="?par2=<?=$i?>"><?=$i?> </a>
<?php }
if (isset($_GET['par2'])) {
    echo '<br>'.$_GET['par2'];
}
echo '<br>';
//3
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $elem) {
?> <a href="?par3=<?=$elem?>"><?=$elem?> </a>
<?php }
if (isset($_GET['par3'])) {
    echo '<br>'.$_GET['par3'];
}