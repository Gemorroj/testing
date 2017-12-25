<?php

namespace Testing;


use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use Ds\Deque;

/**
 * @BeforeMethods({"init"})
 */
class DsDequeBench
{
    /**
     * @var Deque
     */
    private $deque;
    /**
     * @var array
     */
    private $array;

    public function init()
    {
        $this->array = \range(0, 1000000);
        $this->deque = new Deque($this->array);
    }


    /**
     * @Revs(1000000)
     */
    public function benchPushDeque()
    {
        $this->deque->push('test test');
    }


    /**
     * @Revs(1000000)
     */
    public function benchPushArray()
    {
        $this->array[] = 'test test';
    }


    /**
     * @Revs(100)
     */
    public function benchForeachDeque()
    {
        foreach ($this->deque as $value) {
            $value;
        }
    }


    /**
     * @Revs(100)
     */
    public function benchForeachArray()
    {
        foreach ($this->array as $value) {
            $value;
        }
    }


    /**
     * @Revs(1000)
     */
    public function benchFindLastDeque()
    {
        $this->deque->find('test test');
    }


    /**
     * @Revs(1000)
     */
    public function benchFindLastArray()
    {
        \array_search('test test', $this->array, true);
    }


    /**
     * @Revs(1000)
     */
    public function benchFindFirstDeque()
    {
        $this->deque->find(null);
    }


    /**
     * @Revs(1000)
     */
    public function benchFindFirstArray()
    {
        \array_search(null, $this->array, true);
    }
}
