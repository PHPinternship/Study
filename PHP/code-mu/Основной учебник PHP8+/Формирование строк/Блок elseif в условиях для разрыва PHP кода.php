<?php
$rand = rand(1,10);
if ($rand>5): ?>
    <div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
<?php elseif ($rand<5): ?>
    <div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
<?php else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif ?>