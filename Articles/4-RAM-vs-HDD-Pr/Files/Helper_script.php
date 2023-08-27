<?php

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_write_test.cpp 
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out 
Execution Time (Based on ctime): 2501.88 ms
Execution Time (Based on chrono): 2501.97 ms
Memory Usage: 1046800 KB

real    2.51s
user    2.36s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2440.13 ms
Execution Time (Based on chrono): 2440.23 ms
Memory Usage: 1046864 KB

real    2.45s
user    2.32s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2446.16 ms
Execution Time (Based on chrono): 2446.23 ms
Memory Usage: 1046772 KB

real    2.45s
user    2.32s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2444.35 ms
Execution Time (Based on chrono): 2444.5 ms
Memory Usage: 1046848 KB

real    2.45s
user    2.29s
sys     0.16s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2515.03 ms
Execution Time (Based on chrono): 2515.09 ms
Memory Usage: 1046832 KB

real    2.52s
user    2.39s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2438.22 ms
Execution Time (Based on chrono): 2438.28 ms
Memory Usage: 1046844 KB

real    2.45s
user    2.32s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2493.81 ms
Execution Time (Based on chrono): 2493.94 ms
Memory Usage: 1046784 KB

real    2.50s
user    2.35s
sys     0.15s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2501.99 ms
Execution Time (Based on chrono): 2502.09 ms
Memory Usage: 1046852 KB

real    2.51s
user    2.37s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2459.47 ms
Execution Time (Based on chrono): 2460.05 ms
Memory Usage: 1046872 KB

real    2.47s
user    2.32s
sys     0.15s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2429.63 ms
Execution Time (Based on chrono): 2429.75 ms
Memory Usage: 1046772 KB

real    2.43s
user    2.32s
sys     0.12s
cpu     99%

";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_write_test.cpp
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out 
Execution Time (Based on ctime): 9536.65 ms
Execution Time (Based on chrono): 9538.49 ms
Memory Usage: 0 KB

real    9.54s
user    8.85s
sys     0.68s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9530.77 ms
Execution Time (Based on chrono): 10150.1 ms
Memory Usage: 0 KB

real    10.15s
user    8.82s
sys     0.72s
cpu     93%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9625.24 ms
Execution Time (Based on chrono): 10063.4 ms
Memory Usage: 0 KB

real    10.07s
user    8.99s
sys     0.64s
cpu     95%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9655.58 ms
Execution Time (Based on chrono): 9657.09 ms
Memory Usage: 0 KB

real    9.66s
user    8.96s
sys     0.70s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9479.76 ms
Execution Time (Based on chrono): 9634.6 ms
Memory Usage: 0 KB

real    9.64s
user    8.89s
sys     0.60s
cpu     98%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9477.25 ms
Execution Time (Based on chrono): 9641.66 ms
Memory Usage: 0 KB

real    9.65s
user    8.92s
sys     0.56s
cpu     98%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9468.07 ms
Execution Time (Based on chrono): 9475.96 ms
Memory Usage: 0 KB

real    9.48s
user    8.70s
sys     0.77s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9761.29 ms
Execution Time (Based on chrono): 10151.8 ms
Memory Usage: 0 KB

real    10.16s
user    9.05s
sys     0.72s
cpu     96%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9632.74 ms
Execution Time (Based on chrono): 10079 ms
Memory Usage: 0 KB

real    10.08s
user    8.92s
sys     0.72s
cpu     95%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9536.97 ms
Execution Time (Based on chrono): 9540.68 ms
Memory Usage: 0 KB

real    9.55s
user    8.89s
sys     0.65s
cpu     99%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_overwrite_test.cpp
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out              
Execution Time (Based on ctime): 2315.81 ms
Execution Time (Based on chrono): 2315.86 ms
Memory Usage: 0 KB

real    4.76s
user    4.61s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2321.07 ms
Execution Time (Based on chrono): 2321.15 ms
Memory Usage: 0 KB

real    4.80s
user    4.66s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2305.9 ms
Execution Time (Based on chrono): 2305.95 ms
Memory Usage: 0 KB

real    4.78s
user    4.67s
sys     0.11s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2331.96 ms
Execution Time (Based on chrono): 2332.03 ms
Memory Usage: 0 KB

real    4.79s
user    4.70s
sys     0.09s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2291.69 ms
Execution Time (Based on chrono): 2296.94 ms
Memory Usage: 0 KB

real    4.74s
user    4.57s
sys     0.16s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2336.1 ms
Execution Time (Based on chrono): 2339.92 ms
Memory Usage: 0 KB

real    4.85s
user    4.71s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2330.54 ms
Execution Time (Based on chrono): 2330.6 ms
Memory Usage: 0 KB

real    4.82s
user    4.70s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2283.55 ms
Execution Time (Based on chrono): 2283.58 ms
Memory Usage: 0 KB

real    4.72s
user    4.59s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2328.87 ms
Execution Time (Based on chrono): 2328.91 ms
Memory Usage: 0 KB

real    4.79s
user    4.67s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2295.38 ms
Execution Time (Based on chrono): 2296.14 ms
Memory Usage: 0 KB

real    4.75s
user    4.60s
sys     0.15s
cpu     99%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_write_test.cpp    
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out 
Execution Time (Based on ctime): 10162.1 ms
Execution Time (Based on chrono): 16532.7 ms
Memory Usage: 0 KB

real    16.54s
user    9.30s
sys     0.87s
cpu     61%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9961.45 ms
Execution Time (Based on chrono): 19035.1 ms
Memory Usage: 0 KB

real    19.04s
user    9.10s
sys     0.86s
cpu     52%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9925.02 ms
Execution Time (Based on chrono): 19885.7 ms
Memory Usage: 0 KB

real    19.89s
user    9.14s
sys     0.79s
cpu     49%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9927.78 ms
Execution Time (Based on chrono): 20518.4 ms
Memory Usage: 0 KB

real    20.52s
user    9.04s
sys     0.89s
cpu     48%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9996.59 ms
Execution Time (Based on chrono): 17915.4 ms
Memory Usage: 0 KB

real    17.92s
user    9.16s
sys     0.84s
cpu     55%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9659.78 ms
Execution Time (Based on chrono): 19085.9 ms
Memory Usage: 0 KB

real    19.09s
user    8.91s
sys     0.76s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 10051.7 ms
Execution Time (Based on chrono): 19261.9 ms
Memory Usage: 0 KB

real    19.27s
user    9.25s
sys     0.81s
cpu     52%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 10124.3 ms
Execution Time (Based on chrono): 19965.3 ms
Memory Usage: 0 KB

real    19.97s
user    9.31s
sys     0.82s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9867.27 ms
Execution Time (Based on chrono): 19433.7 ms
Memory Usage: 0 KB

real    19.44s
user    9.05s
sys     0.82s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9850.91 ms
Execution Time (Based on chrono): 18046 ms
Memory Usage: 0 KB

real    18.05s
user    8.96s
sys     0.89s
cpu     54%
";

$ctimes     = [];
$chronos    = [];
$mems       = [];
$reals      = [];
$users      = [];
$syses      = [];
$cpus       = [];

foreach (explode( PHP_EOL, trim( $string ) ) as $line) {
    if ( strpos( $line, "Execution Time (Based on ctime)" ) !== false )
        $ctimes[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "Execution Time (Based on chrono)" ) !== false )
        $chronos[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "Memory Usage" ) !== false )
        $mems[] = explode( ' ', trim($line) )[2];
    if ( strpos( $line, "real" ) !== false )
        $reals[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "user" ) !== false && strpos( $line, "dhcp" ) === false )
        $users[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "sys" ) !== false )
        $syses[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "cpu" ) !== false )
        $cpus[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
}


$sum_ctime = 0;
$sum_chrono = 0;
$sum_mem = 0;
$sum_real = 0;
$sum_user = 0;
$sum_sys = 0;
$sum_cpu = 0;

error_reporting(E_ALL ^ E_WARNING); 
for ($i=0; $i < 10 ; $i++) { 
    $sum_ctime += $ctimes[$i];
    $sum_chrono += $chronos[$i];
    $sum_mem += $mems[$i];
    $sum_real += $reals[$i];
    $sum_user += $users[$i];
    $sum_sys += $syses[$i];
    $sum_cpu += $cpus[$i];
} 
error_reporting(E_ALL); 



echo "(" . implode( "+", $ctimes ) . ") / 10 = " . $sum_ctime . " / 10 = " . $sum_ctime/10 . PHP_EOL;
echo "(" . implode( "+", $chronos ) . ") / 10 = " . $sum_chrono . " / 10 = " . $sum_chrono/10 . PHP_EOL;
echo "(" . implode( "+", $mems ) . ") / 10 = " . $sum_mem . " / 10 = " . $sum_mem/10 . PHP_EOL;
echo "(" . implode( "+", $reals ) . ") / 10 = " . $sum_real . " / 10 = " . $sum_real/10 . PHP_EOL;
echo "(" . implode( "+", $users ) . ") / 10 = " . $sum_user . " / 10 = " . $sum_user/10 . PHP_EOL;
echo "(" . implode( "+", $syses ) . ") / 10 = " . $sum_sys . " / 10 = " . $sum_sys/10 . PHP_EOL;
echo "(" . implode( "+", $cpus ) . ") / 10 = " . $sum_cpu . " / 10 = " . $sum_cpu/10 . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
echo "Therefore:";
echo PHP_EOL;
echo PHP_EOL;

echo "* Average Execution Time(Based on ctime): " . $sum_ctime/10 . " ms" . PHP_EOL;
echo "* Average Execution Time(Based on chrono): " . $sum_chrono/10 . " ms" . PHP_EOL;
echo "* Average Memory Usage: " . $sum_mem/10 . " KB" . PHP_EOL;
echo "* Average Real Time: " . $sum_real/10 . " s" . PHP_EOL;
echo "* Average User Time: " . $sum_user/10 . " s" . PHP_EOL;
echo "* Average Sys Time: " . $sum_sys/10 . " s" . PHP_EOL;
echo "* Average CPU Usage: " . $sum_cpu/10 . " %" . PHP_EOL;


?>