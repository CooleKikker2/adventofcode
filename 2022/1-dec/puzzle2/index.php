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

    echo "Top 3 elves: " . ($elfs[0] + $elfs[1] + $elfs[2]);