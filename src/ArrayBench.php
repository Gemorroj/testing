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
    public function benchIterateArray()
    {
        foreach ($this->array as $key => $value) {
            //echo $value;
        }
    }

    /**
     * @Revs(100)
     */
    public function benchIterateArrayAssoc()
    {
        foreach ($this->arrayAssoc as $key => $value) {
            //echo $value;
        }
    }
}
