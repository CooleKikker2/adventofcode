<?php
    $filename = "./input.txt";
    $file = fopen($filename, "r");
    $elf = 1;
    $elfs = [];
    while (!feof($file)) {
        $line = fgets($file);
        if(trim($line) == "")
        {
            $elf++;
            continue;
        }

        if(empty($elfs[$elf]))
        {
            $elfs[$elf] = 0;
        }


        $elfs[$elf] += (int) $line;
    }

    fclose($file);


    rsort($elfs);

    echo "Highest carrying elf: {$elfs[0]}<br>";