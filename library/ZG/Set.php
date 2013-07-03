<?php
namespace ZG;

class Set implements \ArrayAccess, \Iterator, \Countable {
	
	/**
	 * @var array
	 */
	protected $items;
	/**
	 * @var string
	 */
	protected $hydrateClass;
	
	/**
	 * @param array $items
	 */
	public function __construct(array $items, $hydrateClass = 'ArrayObject') {
		$this->items = $items;
		$this->hydrateClass = $hydrateClass;
		$this->rewind($this->items); // to make current() implementation work
	}
	
	/* (non-PHPdoc)
	 * @see Countable::count()
	 */
	public function count() {
		return count($this->items);
	}
	
	/* (non-PHPdoc)
	 * @see Iterator::current()
	 */
	public function current() {
		$current = current($this->items);
		return $this->hydrate($current ? $current : array(), $this->key());
	}

	/* (non-PHPdoc)
	 * @see Iterator::key()
	 */
	public function key() {
		return key($this->items);
	}

	/* (non-PHPdoc)
	 * @see Iterator::next()
	 */
	public function next() {
		$item = next($this->items);
		if ($item === false) {
			return false;
		}
		return $this->hydrate($item, $this->key());
	}

	/* (non-PHPdoc)
	 * @see Iterator::rewind()
	 */
	public function rewind() {
		return reset($this->items);
	}

	/* (non-PHPdoc)
	 * @see Iterator::rewind()
	*/
	public function end() {
		return end($this->items);
	}
	
	/* (non-PHPdoc)
	 * @see Iterator::valid()
	 */
	public function valid() {
		return current($this->items) !== false;
	}

	/* (non-PHPdoc)
	 * @see ArrayAccess::offsetExists()
	 */
	public function offsetExists($offset) {
		return isset($this->items[$offset]);
	}

	/* (non-PHPdoc)
	 * @see ArrayAccess::offsetGet()
	 */
	public function offsetGet($offset) {
		$info = isset($this->items[$offset]) ? $this->items[$offset] : array();
		return $this->hydrate($info, $offset);
	}

	/* (non-PHPdoc)
	 * @see ArrayAccess::offsetSet()
	 */
	public function offsetSet($offset, $value) {
		$this->items[$offset] = $value;
	}

	/* (non-PHPdoc)
	 * @see ArrayAccess::offsetUnset()
	 */
	public function offsetUnset($offset) {
		unset($this->items[$offset]);
	}

	/**
	 * @return array
	 */
	public function toArray() {
		return $this->items;
	}
	
	/**
	 * @param string $hydrateClass
	 */
	public function setHydrateClass($hydrateClass) {
		$this->hydrateClass = $hydrateClass;
		return $this;
	}
	
	/**
	 * @param $item
	 * @param $key
	 */
	private function hydrate($item, $key = null) {
            if (is_null($this->hydrateClass)) {
                return $item;
            }
            
            return new $this->hydrateClass($item, $key);
	}

	
}