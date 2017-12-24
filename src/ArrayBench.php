<?php

namespace Testing;


use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @BeforeMethods({"init"})
 */
class ArrayBench
{
    /**
     * @var array
     */
    private $array;
    /**
     * @var array
     */
    private $arrayAssoc;

    public function init()
    {
        $this->array = \range(0, 1000000);
        \array_walk($this->array, function (&$item, $key) {
            $item = \uniqid('test_', true);
        });
        $this->array[0] = 'test0';
        $this->array[1000000] = 'test1000000';

        $this->arrayAssoc = \array_flip($this->array);
    }


    /**
     * @Revs(1000000)
     */
    public function benchSetFirstArray()
    {
        $this->array[0] = 'test test';
    }

    /**
     * @Revs(1000000)
     */
    public function benchSetFirstArrayAssoc()
    {
        $this->arrayAssoc['test0'] = 'test test';
    }


    /**
     * @Revs(1000000)
     */
    public function benchSetLastArray()
    {
        $this->array[1000000] = 'test test';
    }

    /**
     * @Revs(1000000)
     */
    public function benchSetLastArrayAssoc()
    {
        $this->arrayAssoc['test1000000'] = 'test test';
    }

    /**
     * @Revs(100)
     */
    public function benchForeachArray()
    {
        foreach ($this->array as $key => $value) {
            $value;
        }
    }

    /**
     * @Revs(100)
     */
    public function benchForeachArrayAssoc()
    {
        foreach ($this->arrayAssoc as $key => $value) {
            $value;
        }
    }

    /**
     * @Revs(100)
     */
    public function benchForPreCountArray()
    {
        for ($i = 0, $l = \count($this->array); $i < $l; ++$i) {
            $this->array[$i];
        }
    }

    /**
     * @Revs(100)
     */
    public function benchForCountArray()
    {
        for ($i = 0; $i < \count($this->array); ++$i) {
            $this->array[$i];
        }
    }


    /**
     * @Revs(100)
     */
    public function benchForeachChangeArray()
    {
        foreach ($this->array as &$value) {
            $value = 'test';
        }
    }

    /**
     * @Revs(100)
     */
    public function benchForeachChangeArrayAssoc()
    {
        foreach ($this->arrayAssoc as &$value) {
            $value = 0;
        }
    }

    /**
     * @Revs(100)
     */
    public function benchForChangeArray()
    {
        for ($i = 0, $l = \count($this->array); $i < $l; ++$i) {
            $this->array[$i] = 'tes1';
        }
    }
}
