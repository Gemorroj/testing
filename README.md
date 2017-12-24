# testing
some performance tests


```
> S:\OpenServer\modules\php\PHP-7.1-x64\php.exe S:\VCS\Git\testing\vendor\phpbench\phpbench\bin\phpbench run src/ --report=default
PhpBench 0.15-dev (@git_version@). Running benchmarks.
Using configuration file: S:\VCS\Git\testing/phpbench.json

\Testing\ArrayBench

    benchSetFirstArray            I0 P0 	[μ Mo]/r: 0.070 0.070 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetFirstArrayAssoc       I0 P0 	[μ Mo]/r: 0.080 0.080 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArray             I0 P0 	[μ Mo]/r: 0.068 0.068 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArrayAssoc        I0 P0 	[μ Mo]/r: 0.076 0.076 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchIterateArray             I0 P0 	[μ Mo]/r: 41,806.270 41,806.270 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchIterateArrayAssoc        I0 P0 	[μ Mo]/r: 39,628.460 39,628.460 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\ArrayVsSplFixedArrayBench

    benchCountArray               I0 P0 	[μ Mo]/r: 0.078 0.078 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchCountSplFixedArray       I0 P0 	[μ Mo]/r: 0.084 0.084 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstArray        I0 P0 	[μ Mo]/r: 0.068 0.068 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.122 0.122 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastArray         I0 P0 	[μ Mo]/r: 0.068 0.068 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.122 0.122 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

12 subjects, 12 iterations, 10,000,200 revs, 0 rejects, 0 failures, 0 warnings
(best [mean mode] worst) = 0.068 [6,786.297 6,786.297] 0.068 (μs)
⅀T: 81,435.568μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c9d8d29153b3808b103bcc014f676a5fb0f8b, date: 2017-12-24, stime: 15:06:00
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| benchmark                 | subject                             | groups | params | revs    | iter | mem_peak     | time_rev     | comp_z_value | comp_deviation |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| ArrayBench                | benchSetFirstArray                  |        | []     | 1000000 | 0    | 354,164,752b | 0.070μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetFirstArrayAssoc             |        | []     | 1000000 | 0    | 354,164,752b | 0.080μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArray                   |        | []     | 1000000 | 0    | 354,164,752b | 0.068μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArrayAssoc              |        | []     | 1000000 | 0    | 354,164,752b | 0.076μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchIterateArray                   |        | []     | 100     | 0    | 354,164,752b | 41,806.270μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchIterateArrayAssoc              |        | []     | 100     | 0    | 354,164,752b | 39,628.460μs | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountArray                     |        | []     | 1000000 | 0    | 53,192,352b  | 0.078μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountSplFixedArray             |        | []     | 1000000 | 0    | 53,192,400b  | 0.084μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstArray              |        | []     | 1000000 | 0    | 53,192,400b  | 0.068μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstCountSplFixedArray |        | []     | 1000000 | 0    | 53,192,496b  | 0.122μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastArray               |        | []     | 1000000 | 0    | 53,192,400b  | 0.068μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastCountSplFixedArray  |        | []     | 1000000 | 0    | 53,192,496b  | 0.122μs      | 0.00σ        | 0.00%          |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+


Process finished with exit code 0 at 15:06:21.
Execution time: 28 014 ms.
```
