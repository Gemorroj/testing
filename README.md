# testing
some performance tests


```
> S:\OpenServer\modules\php\PHP-7.1-x64\php.exe S:\VCS\Git\testing\vendor\phpbench\phpbench\bin\phpbench run src/ --report=default
PhpBench 0.15-dev (@git_version@). Running benchmarks.
Using configuration file: S:\VCS\Git\testing/phpbench.json

\Testing\ArrayBench

    benchCountArray               I0 P0 	[μ Mo]/r: 0.079 0.079 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchCountSplFixedArray       I0 P0 	[μ Mo]/r: 0.082 0.082 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstArray        I0 P0 	[μ Mo]/r: 0.070 0.070 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceFirstCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.130 0.130 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastArray         I0 P0 	[μ Mo]/r: 0.066 0.066 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%
    benchReplaceLastCountSplFixedArrayI0 P0 	[μ Mo]/r: 0.121 0.121 (μs) 	[μSD μRSD]/r: 0.000μs 0.00%

6 subjects, 6 iterations, 6,000,000 revs, 0 rejects, 0 failures, 0 warnings
(best [mean mode] worst) = 0.066 [0.091 0.091] 0.066 (μs)
⅀T: 0.548μs μSD/r 0.000μs μRSD/r: 0.000%
suite: 133c9d8ed3b76a5115f6ae0e1975ba8e56e140c2, date: 2017-12-24, stime: 13:33:41
+------------+-------------------------------------+--------+--------+---------+------+-------------+----------+--------------+----------------+
| benchmark  | subject                             | groups | params | revs    | iter | mem_peak    | time_rev | comp_z_value | comp_deviation |
+------------+-------------------------------------+--------+--------+---------+------+-------------+----------+--------------+----------------+
| ArrayBench | benchCountArray                     |        | []     | 1000000 | 0    | 53,192,232b | 0.079μs  | 0.00σ        | 0.00%          |
| ArrayBench | benchCountSplFixedArray             |        | []     | 1000000 | 0    | 53,192,280b | 0.082μs  | 0.00σ        | 0.00%          |
| ArrayBench | benchReplaceFirstArray              |        | []     | 1000000 | 0    | 53,192,280b | 0.070μs  | 0.00σ        | 0.00%          |
| ArrayBench | benchReplaceFirstCountSplFixedArray |        | []     | 1000000 | 0    | 53,192,376b | 0.130μs  | 0.00σ        | 0.00%          |
| ArrayBench | benchReplaceLastArray               |        | []     | 1000000 | 0    | 53,192,280b | 0.066μs  | 0.00σ        | 0.00%          |
| ArrayBench | benchReplaceLastCountSplFixedArray  |        | []     | 1000000 | 0    | 53,192,376b | 0.121μs  | 0.00σ        | 0.00%          |
+------------+-------------------------------------+--------+--------+---------+------+-------------+----------+--------------+----------------+


Process finished with exit code 0 at 13:33:44.
Execution time: 7 058 ms.
```
