# testing
some performance tests


```
> S:\OpenServer\modules\php\PHP-7.1-x64\php.exe S:\VCS\Git\testing\vendor\phpbench\phpbench\bin\phpbench run src/ --report=default
PhpBench 0.15-dev (@git_version@). Running benchmarks.
Using configuration file: S:\VCS\Git\testing/phpbench.json

\Testing\ArrayBench

    benchSetFirstArray            I0 P0 	[μ Mo]/r: 0.087 0.087 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetFirstArrayAssoc       I0 P0 	[μ Mo]/r: 0.091 0.091 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArray             I0 P0 	[μ Mo]/r: 0.082 0.082 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArrayAssoc        I0 P0 	[μ Mo]/r: 0.079 0.079 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 47,491.880 47,491.880 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArrayAssoc        I0 P0 	[μ Mo]/r: 46,932.320 46,932.320 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForPreCountArray         I0 P0 	[μ Mo]/r: 56,771.090 56,771.090 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForCountArray            I0 P0 	[μ Mo]/r: 78,247.800 78,247.800 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArray       I0 P0 	[μ Mo]/r: 28,033.210 28,033.210 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArrayAssoc  I0 P0 	[μ Mo]/r: 24,597.760 24,597.760 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForChangeArray           I0 P0 	[μ Mo]/r: 33,438.330 33,438.330 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\ArrayVsSplFixedArrayBench

    benchCountArray               I0 P0 	[μ Mo]/r: 0.089 0.089 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchCountSplFixedArray       I0 P0 	[μ Mo]/r: 0.096 0.096 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstArray        I0 P0 	[μ Mo]/r: 0.079 0.079 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.143 0.143 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastArray         I0 P0 	[μ Mo]/r: 0.077 0.077 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.145 0.145 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

17 subjects, 17 iterations, 10,000,700 revs, 0 rejects, 0 failures, 0 warnings
(best [mean mode] worst) = 0.077 [18,559.609 18,559.609] 0.077 (μs)
⅀T: 315,513.358μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c9d8d729a91947ab25e875d15134364db3a37, date: 2017-12-24, stime: 15:25:58
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| benchmark                 | subject                             | groups | params | revs    | iter | mem_peak     | time_rev     | comp_z_value | comp_deviation |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| ArrayBench                | benchSetFirstArray                  |        | []     | 1000000 | 0    | 354,168,768b | 0.087μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetFirstArrayAssoc             |        | []     | 1000000 | 0    | 354,168,768b | 0.091μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArray                   |        | []     | 1000000 | 0    | 354,168,768b | 0.082μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArrayAssoc              |        | []     | 1000000 | 0    | 354,168,768b | 0.079μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArray                   |        | []     | 100     | 0    | 354,168,768b | 47,491.880μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArrayAssoc              |        | []     | 100     | 0    | 354,168,768b | 46,932.320μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForPreCountArray               |        | []     | 100     | 0    | 354,168,736b | 56,771.090μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForCountArray                  |        | []     | 100     | 0    | 354,168,736b | 78,247.800μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArray             |        | []     | 100     | 0    | 354,168,792b | 28,033.210μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArrayAssoc        |        | []     | 100     | 0    | 378,168,864b | 24,597.760μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForChangeArray                 |        | []     | 100     | 0    | 354,168,768b | 33,438.330μs | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountArray                     |        | []     | 1000000 | 0    | 53,192,352b  | 0.089μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountSplFixedArray             |        | []     | 1000000 | 0    | 53,192,400b  | 0.096μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstArray              |        | []     | 1000000 | 0    | 53,192,400b  | 0.079μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstCountSplFixedArray |        | []     | 1000000 | 0    | 53,192,496b  | 0.143μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastArray               |        | []     | 1000000 | 0    | 53,192,400b  | 0.077μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastCountSplFixedArray  |        | []     | 1000000 | 0    | 53,192,496b  | 0.145μs      | 0.00σ        | 0.00%          |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+


Process finished with exit code 0 at 15:26:53.
Execution time: 64 447 ms.
```

TODO: https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd
