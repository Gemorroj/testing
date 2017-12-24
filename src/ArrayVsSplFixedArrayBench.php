<?php

namespace Testing;


use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @BeforeMethods({"init"})
 */
class ArrayVsSplFixedArrayBench
{
    /**
     * @var array
     */
    private $array;
    /**
     * @var \SplFixedArray
     */
    private $splFixedArray;

    public function init()
    {
        $this->array = \range(0, 1000000);
        $this->splFixedArray = \SplFixedArray::fromArray($this->array);
    }

    /**
     * @Revs(1000000)
     */
    public function benchCountArray()
    {
        \count($this->array);
    }

    /**
     * @Revs(1000000)
     */
    public function benchCountSplFixedArray()
    {
       $this->splFixedArray->count();
    }

    /**
     * @Revs(1000000)
     */
    public function benchReplaceFirstArray()
    {
        $this->array[0] = 'test';
    }

    /**
     * @Revs(1000000)
     */
    public function benchReplaceFirstCountSplFixedArray()
    {
        $this->splFixedArray->offsetSet(0, 'test');
    }

    /**
     * @Revs(1000000)
     */
    public function benchReplaceLastArray()
    {
        $this->array[1000000] = 'test';
    }

    /**
     * @Revs(1000000)
     */
    public function benchReplaceLastCountSplFixedArray()
    {
        $this->splFixedArray->offsetSet(1000000, 'test');
    }
}
