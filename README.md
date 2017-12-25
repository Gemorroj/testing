# testing
some performance tests


```
> S:\OpenServer\modules\php\PHP-7.1-x64\php.exe S:\VCS\Git\testing\vendor\phpbench\phpbench\bin\phpbench run src/ --report=default
PhpBench 0.15-dev (@git_version@). Running benchmarks.
Using configuration file: S:\VCS\Git\testing/phpbench.json

\Testing\ArrayBench

    benchSetFirstArray            I0 P0 	[μ Mo]/r: 0.101 0.101 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetFirstArrayAssoc       I0 P0 	[μ Mo]/r: 0.078 0.078 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArray             I0 P0 	[μ Mo]/r: 0.072 0.072 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchSetLastArrayAssoc        I0 P0 	[μ Mo]/r: 0.080 0.080 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 47,867.540 47,867.540 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArrayAssoc        I0 P0 	[μ Mo]/r: 43,770.010 43,770.010 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForPreCountArray         I0 P0 	[μ Mo]/r: 52,864.730 52,864.730 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForCountArray            I0 P0 	[μ Mo]/r: 74,820.690 74,820.690 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArray       I0 P0 	[μ Mo]/r: 32,134.460 32,134.460 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachChangeArrayAssoc  I0 P0 	[μ Mo]/r: 22,306.970 22,306.970 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForChangeArray           I0 P0 	[μ Mo]/r: 29,979.980 29,979.980 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\ArrayVsSplFixedArrayBench

    benchCountArray               I0 P0 	[μ Mo]/r: 0.081 0.081 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchCountSplFixedArray       I0 P0 	[μ Mo]/r: 0.087 0.087 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstArray        I0 P0 	[μ Mo]/r: 0.067 0.067 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.131 0.131 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastArray         I0 P0 	[μ Mo]/r: 0.074 0.074 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.132 0.132 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\DsDequeBench

    benchPushDeque                I0 P0 	[μ Mo]/r: 0.116 0.116 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchPushArray                I0 P0 	[μ Mo]/r: 0.084 0.084 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachDeque             I0 P0 	[μ Mo]/r: 22,447.980 22,447.980 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 10,463.800 10,463.800 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastDeque            I0 P0 	[μ Mo]/r: 2,449.280 2,449.280 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastArray            I0 P0 	[μ Mo]/r: 1,944.869 1,944.869 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstDeque           I0 P0 	[μ Mo]/r: 2,439.924 2,439.924 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstArray           I0 P0 	[μ Mo]/r: 1,945.610 1,945.610 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

\Testing\DsVectorBench

    benchPushVector               I0 P0 	[μ Mo]/r: 0.126 0.126 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchPushArray                I0 P0 	[μ Mo]/r: 0.080 0.080 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachVector            I0 P0 	[μ Mo]/r: 21,517.910 21,517.910 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchForeachArray             I0 P0 	[μ Mo]/r: 11,975.990 11,975.990 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastVector           I0 P0 	[μ Mo]/r: 2,438.425 2,438.425 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindLastArray            I0 P0 	[μ Mo]/r: 1,936.014 1,936.014 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstVector          I0 P0 	[μ Mo]/r: 2,444.536 2,444.536 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchFindFirstArray           I0 P0 	[μ Mo]/r: 1,933.845 1,933.845 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

33 subjects, 33 iterations, 14,009,100 revs, 0 rejects, 0 failures, 0 warnings
(best [mean mode] worst) = 0.067 [11,747.996 11,747.996] 0.067 (μs)
⅀T: 387,683.872μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c9d9fd6e010a91617ea679b4cbbec7bf0b321, date: 2017-12-25, stime: 19:12:45
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| benchmark                 | subject                             | groups | params | revs    | iter | mem_peak     | time_rev     | comp_z_value | comp_deviation |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+
| ArrayBench                | benchSetFirstArray                  |        | []     | 1000000 | 0    | 354,168,832b | 0.101μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetFirstArrayAssoc             |        | []     | 1000000 | 0    | 354,168,832b | 0.078μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArray                   |        | []     | 1000000 | 0    | 354,168,832b | 0.072μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchSetLastArrayAssoc              |        | []     | 1000000 | 0    | 354,168,832b | 0.080μs      | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArray                   |        | []     | 100     | 0    | 354,168,832b | 47,867.540μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachArrayAssoc              |        | []     | 100     | 0    | 354,168,832b | 43,770.010μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForPreCountArray               |        | []     | 100     | 0    | 354,168,800b | 52,864.730μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForCountArray                  |        | []     | 100     | 0    | 354,168,800b | 74,820.690μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArray             |        | []     | 100     | 0    | 354,168,856b | 32,134.460μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForeachChangeArrayAssoc        |        | []     | 100     | 0    | 378,168,928b | 22,306.970μs | 0.00σ        | 0.00%          |
| ArrayBench                | benchForChangeArray                 |        | []     | 100     | 0    | 354,168,832b | 29,979.980μs | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountArray                     |        | []     | 1000000 | 0    | 53,192,416b  | 0.081μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchCountSplFixedArray             |        | []     | 1000000 | 0    | 53,192,464b  | 0.087μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstArray              |        | []     | 1000000 | 0    | 53,192,464b  | 0.067μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceFirstCountSplFixedArray |        | []     | 1000000 | 0    | 53,192,560b  | 0.131μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastArray               |        | []     | 1000000 | 0    | 53,192,464b  | 0.074μs      | 0.00σ        | 0.00%          |
| ArrayVsSplFixedArrayBench | benchReplaceLastCountSplFixedArray  |        | []     | 1000000 | 0    | 53,192,560b  | 0.132μs      | 0.00σ        | 0.00%          |
| DsDequeBench              | benchPushDeque                      |        | []     | 1000000 | 0    | 69,970,632b  | 0.116μs      | 0.00σ        | 0.00%          |
| DsDequeBench              | benchPushArray                      |        | []     | 1000000 | 0    | 86,747,848b  | 0.084μs      | 0.00σ        | 0.00%          |
| DsDequeBench              | benchForeachDeque                   |        | []     | 100     | 0    | 53,193,544b  | 22,447.980μs | 0.00σ        | 0.00%          |
| DsDequeBench              | benchForeachArray                   |        | []     | 100     | 0    | 53,193,464b  | 10,463.800μs | 0.00σ        | 0.00%          |
| DsDequeBench              | benchFindLastDeque                  |        | []     | 1000    | 0    | 53,193,464b  | 2,449.280μs  | 0.00σ        | 0.00%          |
| DsDequeBench              | benchFindLastArray                  |        | []     | 1000    | 0    | 53,193,464b  | 1,944.869μs  | 0.00σ        | 0.00%          |
| DsDequeBench              | benchFindFirstDeque                 |        | []     | 1000    | 0    | 53,193,464b  | 2,439.924μs  | 0.00σ        | 0.00%          |
| DsDequeBench              | benchFindFirstArray                 |        | []     | 1000    | 0    | 53,193,464b  | 1,945.610μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchPushVector                     |        | []     | 1000000 | 0    | 74,164,936b  | 0.126μs      | 0.00σ        | 0.00%          |
| DsVectorBench             | benchPushArray                      |        | []     | 1000000 | 0    | 86,747,848b  | 0.080μs      | 0.00σ        | 0.00%          |
| DsVectorBench             | benchForeachVector                  |        | []     | 100     | 0    | 53,193,544b  | 21,517.910μs | 0.00σ        | 0.00%          |
| DsVectorBench             | benchForeachArray                   |        | []     | 100     | 0    | 53,193,464b  | 11,975.990μs | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindLastVector                 |        | []     | 1000    | 0    | 53,193,464b  | 2,438.425μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindLastArray                  |        | []     | 1000    | 0    | 53,193,464b  | 1,936.014μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindFirstVector                |        | []     | 1000    | 0    | 53,193,464b  | 2,444.536μs  | 0.00σ        | 0.00%          |
| DsVectorBench             | benchFindFirstArray                 |        | []     | 1000    | 0    | 53,193,464b  | 1,933.845μs  | 0.00σ        | 0.00%          |
+---------------------------+-------------------------------------+--------+--------+---------+------+--------------+--------------+--------------+----------------+


Process finished with exit code 0 at 19:14:09.
Execution time: 99 754 ms.
```

TODO: https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd
