<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Support\Collection;
use IteratorAggregate;
use ArrayIterator;
use JsonSerializable;

/**
 * Collection Test
 */
class CollectionTest extends TestCase
{
    protected $collection;

    public function setUp()
    {
        $this->collection = new Collection([
          'one', 'two', 'three'
        ]);
    }
    public function testEmptyInstantiatedCollectionReturnNoItems()
    {
        $this->assertNotEmpty($this->collection->get());
    }

    public function testArrayIsSet()
    {
        $this->assertNotEmpty($this->collection->get());
        $this->assertEquals(['one', 'two', 'three'], $this->collection->get());
    }

    public function testCountIsCorrectForItemsPassed()
    {
        $this->collection->set(['one', 'two', 'three']);

        $this->assertCount(3, $this->collection->get());
    }

    public function testCollectionIsInstanceOfIteratorAggregator()
    {
        $this->assertInstanceOf(IteratorAggregate::class, $this->collection);
    }

    public function testCollectionCanBeIterated()
    {
        $items = [];

        foreach ($this->collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
        $this->assertInstanceOf(ArrayIterator::class, $this->collection->getIterator());
    }

    public function testCollectionCanBeMargedWithAnotherCollection()
    {
        $collection2 = new Collection;
        $collection2->set(['four', 'five', 'six']);

        $this->collection->merge($collection2);

        $this->assertCount(6, $this->collection->get(), "Expected Size of 6");
        $this->assertEquals(6, $this->collection->count(), "The Collection is Merged Count 5");
    }

    public function testCanAddExistingCollection()
    {
        //$collection2 = new Collection();
        //$collection->set(['five', 'three']);
        $this->collection->add(['four', 'five']);

        $this->assertEquals(5, $this->collection->count());
        $this->assertCount(5, $this->collection->get());
    }

    public function testReturnsJsonEncodedItems()
    {
        $this->collection->set([
           ['username' => 'alex'],
           ['username' => 'daniel'],
           ['username' => 'james'],
        ]);
        $this->assertInternalType('string', $this->collection->toJson());
        $this->assertEquals('[{"username":"alex"},{"username":"daniel"},{"username":"james"}]', $this->collection->toJson());
    }

    public function testJsonEncodingACollectionObjectReturnsJson()
    {
        $this->collection->set([
           ['username' => 'alex'],
           ['username' => 'daniel'],
           ['username' => 'james'],
        ]);

        $encoded = json_encode($this->collection->get());
        $this->assertInternalType('string', $encoded);
        $this->assertEquals('[{"username":"alex"},{"username":"daniel"},{"username":"james"}]', $encoded);
    }
}
