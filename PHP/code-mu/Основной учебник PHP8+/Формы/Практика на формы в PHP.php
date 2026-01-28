<!--1-->
<form action="" method="get">
<label> Convert °C to °F
    <input name="temp">
</label>
<input type="submit">
</form>
<?php if(isset($_GET['temp'])) {
    echo ($_GET['temp'] * 1.8) + 32 . '°F';
}?>
<!--2-->
<form action="" method="get">
    <label> Factorial
        <input name="factorial">
    </label>
    <input type="submit">
</form>
<?php if(isset($_GET['factorial'])) {
    for ($i = 1,$fact = 1; $i <= $_GET['factorial']; $i++) {
        $fact *= $i;
    }
    echo $fact;
}?>
<!--3-->
<form action="" method="get">
    <label> Divisors
        <input name="divisor">
    </label>
    <input type="submit">
</form>
<?php if(isset($_GET['divisor'])) {
    for ($i = 1; $i <= $_GET['divisor']; $i++) {
        if (is_integer($_GET['divisor']/$i)) {
            echo $i . '<br>';
        }
    }
}?>
<!--4-->
<form action="" method="get">
    <label> Divisors of 2 numbers
        <input name="divisor1">
        <input name="divisor2">
    </label>
    <input type="submit">
</form>
<?php if(isset($_GET['divisor1'], $_GET['divisor2'])) {
    $larger = max($_GET['divisor1'], $_GET['divisor2']);
    $smaller = min($_GET['divisor1'], $_GET['divisor2']);
    for ($i = 1; $i <= $smaller; $i++) {
        if (is_integer($smaller/$i) and (is_integer($larger/$i))) {
            echo $i . '<br>';
        }
    }
}?>
<!--5-->
<form action="" method="get">
    <label> quadratic equation
        <input name="a">
        <label> x2
            <input name="b">
        </label>
        <label> x
            <input name="c">
        </label>
    </label>
    <input type="submit">
</form>
<?php
if(isset($_GET['a'], $_GET['b'], $_GET['c'])) {
    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];
    $c = (int) $_GET['c'];
    $first = (-$b + sqrt(pow(-$b, 2) - 4 * $a * $c))/(2 * $a);
    if (is_nan($first)) {
        echo 'No solutions';
    } else {
        echo "First solution: $first";
    }
    $second = (-$b - sqrt(pow(-$b, 2) - 4 * $a * $c))/(2 * $a);
    if (is_nan($second)) {
        echo '<br>No solutions';
    } else {
        echo "<br>Second solution: $second";
    }
} else {
    echo 'Input all numbers first<br>';
}?>
<!--6-->
<?php echo '<br>';?>
<form action="" method="get">
    <label> Pythagorean triplet
        <input name="num1">
        <input name="num2">
        <input name="num3">
        <input type="submit">
    </label>
</form>
<?php  if(isset($_GET['num1'], $_GET['num2'], $_GET['num3'])) {
    sort($_GET);
    if ((int) $_GET[0] ** 2 + (int) $_GET[1] ** 2 == (int) $_GET[2] ** 2) {
        echo 'Yes, it"s Pythagorean triplet';
    } else {
        echo 'No, it"s not Pythagorean triplet';
    }
}?>
<!--7-->
<form action="" method="get">
    <label> Birthday
        <input name="date">
        <input type="submit">
    </label>
</form>
<?php if(isset($_GET['date'])) {
    $inputDate = date('z', strtotime($_GET['date']));
    $currentDate = date('z');
    if ($inputDate > $currentDate) {
        echo $inputDate - $currentDate . ' days before Birthday';
    } else {
        echo 365 - ($currentDate - $inputDate) . ' days before Birthday';
    }
}?>
<!--8-->
<form action="" method="get">
    <label> Input text
        <textarea name="text"></textarea>
        <input type="submit">
    </label>
</form>
<?php if(isset($_GET['text'])) {
    echo 'Words count - ' . str_word_count($_GET['text']) . ' words';
    echo '<br>Symbols count - ' . strlen($_GET['text']) . ' symbols';
}?>
<!--9-->
<form action="" method="get">
    <label> Input text
        <textarea name="text2"></textarea>
        <input type="submit">
    </label>
</form>
<?php if(isset($_GET['text2'])) {
    $total = strlen($_GET['text2']);
    $res = count_chars($_GET['text2'], 1);
    foreach ($res as $key => $value) {
        echo chr($key) . ' (' .$key . ') => ' . ($value * 100 / $total) . ' %<br>';
    }
}?>
<!--10-->
<form action="" method="get">
    <select name="days">
        <?php for ($i = 1; $i <= 31; $i++) {
        echo "<option>$i</option>";
        }?>
    </select>
    <select name="months">
        <?php
         for($i=1; $i<=12; ++$i){
            echo "<option>" . date('F', mktime(0, 0, 0, $i, 1)) ."</option>";
        }?>
    </select>
    <select name="years">
        <?php
        for($i=1990; $i<=2025; ++$i){
            echo "<option>$i</option>";
        }?>
    </select>
    <input type="submit">
</form>
<?php if(isset($_GET['days'], $_GET['months'], $_GET['years'])) {
   echo date('l',strtotime($_GET['days'] . $_GET['months'] . $_GET['years']));
}?>
<!--11-->
<form action="" method="get">
    <select name="days2">
        <?php for ($i = 1; $i <= 31; $i++) {
            echo "<option>$i</option>";
        }?>
    </select>
    <select name="months2">
        <?php
        for($i=1; $i<=12; $i++){
            echo "<option>" . date('F', mktime(0, 0, 0, $i, 1)) ."</option>";
        }?>
    </select>
    <input type="submit">
</form>
<?php if(isset($_GET['days2'], $_GET['months2'])) {
    $date = date('m-d',strtotime($_GET['days2'] . $_GET['months2']));
    if ($date >= '03-21' and $date <= '04-19') {
    echo 'Aries';
    }
    if ($date >= '04-20' and $date <= '05-20') {
    echo 'Taurus';
    }
    if ($date >= '05-21' and $date <= '06-20') {
    echo 'Gemini';
    }
    if ($date >= '06-21' and $date <= '07-22') {
    echo 'Cancer';
    }
    if ($date >= '07-23' and $date <= '08-22') {
    echo 'Leo';
    }
    if ($date >= '08-23' and $date <= '09-22') {
    echo 'Virgo';
    }
    if ($date >= '09-23' and $date <= '10-22') {
    echo 'Libra';
    }
    if ($date >= '10-23' and $date <= '11-21') {
    echo 'Scorpio';
    }
    if ($date >= '11-22' and $date <= '12-21') {
    echo 'Sagittarius';
    }
    if ($date >= '12-22' and $date <= '01-19') {
    echo 'Capricorn';
    }
    if ($date >= '01-20' and $date <= '02-18') {
    echo 'Aquarius';
    }
    if ($date >= '02-19' and $date <= '03-20') {
    echo 'Pisces';
    }
}?>