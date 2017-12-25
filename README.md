# testing
some performance tests


```
> S:\OpenServer\modules\php\PHP-7.1-x64\php.exe S:\VCS\Git\testing\vendor\phpbench\phpbench\bin\phpbench run src/ --report=default
PhpBench 0.15-dev (@git_version@). Running benchmarks.
Using configuration file: S:\VCS\Git\testing/phpbench.json

\Testing\ArrayBench

    benchSetFirstArray            I0 P0 	[μ Mo]/r: 0.073 0.073 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetFirstArrayAssoc       I0 P0 	[μ Mo]/r: 0.095 0.095 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArray             I0 P0 	[μ Mo]/r: 0.084 0.084 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArrayAssoc        I0 P0 	[μ Mo]/r: 0.078 0.078 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 44,953.390 44,953.390 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArrayAssoc        I0 P0 	[μ Mo]/r: 43,950.630 43,950.630 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForPreCountArray         I0 P0 	[μ Mo]/r: 53,757.850 53,757.850 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForCountArray            I0 P0 	[μ Mo]/r: 77,331.710 77,331.710 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArray       I0 P0 	[μ Mo]/r: 25,358.890 25,358.890 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArrayAssoc  I0 P0 	[μ Mo]/r: 22,893.910 22,893.910 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForChangeArray           I0 P0 	[μ Mo]/r: 31,891.070 31,891.070 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\ArrayVsSplFixedArrayBench

    benchCountArray               I0 P0 	[μ Mo]/r: 0.091 0.091 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchCountSplFixedArray       I0 P0 	[μ Mo]/r: 0.087 0.087 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstArray        I0 P0 	[μ Mo]/r: 0.076 0.076 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.132 0.132 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastArray         I0 P0 	[μ Mo]/r: 0.073 0.073 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.145 0.145 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\DsVectorBench

    benchPushVector               I0 P0 	[μ Mo]/r: 0.125 0.125 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchPushArray                I0 P0 	[μ Mo]/r: 0.084 0.084 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachVector            I0 P0 	[μ Mo]/r: 24,896.640 24,896.640 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 10,975.280 10,975.280 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastVector           I0 P0 	[μ Mo]/r: 2,624.368 2,624.368 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastArray            I0 P0 	[μ Mo]/r: 2,112.535 2,112.535 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstVector          I0 P0 	[μ Mo]/r: 2,598.897 2,598.897 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstArray           I0 P0 	[μ Mo]/r: 2,099.298 2,099.298 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

25 subjects, 25 iterations, 12,004,900 revs, 0 rejects, 0 failures, 0 warnings
(best [mean mode] worst) = 0.073 [13,817.824 13,817.824] 0.073 (μs)
⅀T: 345,445.611μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c9d9ed62068b80c8e929665898077453da190, date: 2017-12-25, stime: 16:35:01
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| benchmark                 | subject                             | groups | params | revs    | iter | mem_peak     | time_rev     | comp_z_value | comp_deviation |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| ArrayBench                | benchSetFirstArray                  |        | []     | 1000000 | 0    | 354,168,832b | 0.073μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetFirstArrayAssoc             |        | []     | 1000000 | 0    | 354,168,832b | 0.095μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArray                   |        | []     | 1000000 | 0    | 354,168,832b | 0.084μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArrayAssoc              |        | []     | 1000000 | 0    | 354,168,832b | 0.078μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArray                   |        | []     | 100     | 0    | 354,168,832b | 44,953.390μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArrayAssoc              |        | []     | 100     | 0    | 354,168,832b | 43,950.630μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForPreCountArray               |        | []     | 100     | 0    | 354,168,800b | 53,757.850μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForCountArray                  |        | []     | 100     | 0    | 354,168,800b | 77,331.710μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArray             |        | []     | 100     | 0    | 354,168,856b | 25,358.890μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArrayAssoc        |        | []     | 100     | 0    | 378,168,928b | 22,893.910μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForChangeArray                 |        | []     | 100     | 0    | 354,168,832b | 31,891.070μs | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountArray                     |        | []     | 1000000 | 0    | 53,192,416b  | 0.091μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountSplFixedArray             |        | []     | 1000000 | 0    | 53,192,464b  | 0.087μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstArray              |        | []     | 1000000 | 0    | 53,192,464b  | 0.076μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstCountSplFixedArray |        | []     | 1000000 | 0    | 53,192,560b  | 0.132μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastArray               |        | []     | 1000000 | 0    | 53,192,464b  | 0.073μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastCountSplFixedArray  |        | []     | 1000000 | 0    | 53,192,560b  | 0.145μs      | 0.00σ        | 0.00%          |
| DsVectorBench             | benchPushVector                     |        | []     | 1000000 | 0    | 74,164,936b  | 0.125μs      | 0.00σ        | 0.00%          |
| DsVectorBench             | benchPushArray                      |        | []     | 1000000 | 0    | 86,747,848b  | 0.084μs      | 0.00σ        | 0.00%          |
| DsVectorBench             | benchForeachVector                  |        | []     | 100     | 0    | 53,193,544b  | 24,896.640μs | 0.00σ        | 0.00%          |
| DsVectorBench             | benchForeachArray                   |        | []     | 100     | 0    | 53,193,464b  | 10,975.280μs | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindLastVector                 |        | []     | 1000    | 0    | 53,193,464b  | 2,624.368μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindLastArray                  |        | []     | 1000    | 0    | 53,193,464b  | 2,112.535μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindFirstVector                |        | []     | 1000    | 0    | 53,193,464b  | 2,598.897μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindFirstArray                 |        | []     | 1000    | 0    | 53,193,464b  | 2,099.298μs  | 0.00σ        | 0.00%          |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+


Process finished with exit code 0 at 16:36:09.
Execution time: 80 910 ms.
```
