<?php

namespace Testing;


use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use Ds\Vector;

/**
 * @BeforeMethods({"init"})
 */
class DsVectorBench
{
    /**
     * @var Vector
     */
    private $vector;
    /**
     * @var array
     */
    private $array;

    public function init()
    {
        $this->array = \range(0, 1000000);
        $this->vector = new Vector($this->array);
    }


    /**
     * @Revs(1000000)
     */
    public function benchPushVector()
    {
        $this->vector->push('test test');
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
    public function benchForeachVector()
    {
        foreach ($this->vector as $value) {
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
    public function benchFindLastVector()
    {
        $this->vector->find('test test');
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
    public function benchFindFirstVector()
    {
        $this->vector->find(null);
    }


    /**
     * @Revs(1000)
     */
    public function benchFindFirstArray()
    {
        \array_search(null, $this->array, true);
    }
}
