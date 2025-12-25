<?php
    $user = ['name' => 'john', 'age' => 30];
    $name = $user['name'] ?? $user['age'] ?? null;
    echo $name;