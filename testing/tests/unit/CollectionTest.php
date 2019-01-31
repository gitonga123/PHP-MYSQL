<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Support\Collection;

/**
 * Collection Test
 */
class CollectionTest extends TestCase
{
    protected $collection;

    public function setUp()
    {
        $this->collection = new Collection;
    }
    public function testEmptyInstantiatedCollectionReturnNoItems()
    {
        $this->assertEmpty($this->collection->get());
    }

    public function testArrayIsSet()
    {
        $this->collection->set([
          'one', 'two', 'three'
        ]);
        
        $this->assertNotEmpty($this->collection->get());
    }

    public function testCountIsCorrectForItemsPassed()
    {
        $this->collection->set(['one', 'two', 'three']);

        $this->assertCount(3, $this->collection->get());
    }
}
