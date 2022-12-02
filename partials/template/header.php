<?php
echo __DIR__ .'/../vars.php';

// questo non funziona perché cerca il pecorso da dove è stato incluso il file
//include '../vars.php';
//include '../text.php';

// funciona perché con __DIR__ ho il path assoluto
include __DIR__ . '/../vars.php';
include __DIR__ . '/../text.php';