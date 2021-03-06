<?php
/**
 * Get a list of Sections
 *
 * @package tickets
 * @subpackage processors
 */
class TicketsSectionGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'TicketsSection';
	public $defaultSortField = 'pagetitle';
	public $defaultSortDirection  = 'ASC';
	private $current_category = 0;

	/**
	 * {@inheritDoc}
	 * @return xPDOQuery
	 */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$context = array_map('trim', explode(',', $this->getProperty('context', $this->modx->context->key)));

		$c->where(array(
			'class_key' => 'TicketsSection'
			,'published' => 1
			,'deleted' => 0
			,'context_key:IN' => $context
		));

		$sortby = $this->getProperty('sortby');
		$sortdir = $this->getProperty('sortdir');
		if ($sortby && $sortdir) {
			$c->sortby($sortby, $sortdir);
		}

		if (!empty($_REQUEST['tid']) && $tmp = $this->modx->getObject('Ticket', (integer) $_REQUEST['tid'])) {
			$this->current_category = $tmp->get('parent');
		}

		if ($parents = $this->getProperty('parents')) {
			$depth = $this->getProperty('depth', 0);
			$parents = array_map('trim', explode(',', $parents));
			foreach ($parents as $pid) {
				$parents = array_merge($parents, $this->modx->getChildIds($pid, $depth));
			}

			if (!empty($parents) && !empty($this->current_category)) {
				$c->where(array('parent:IN' => $parents, 'OR:id:=' => $this->current_category));
			}
			else {
				$c->where(array('parent:IN' => $parents));
			}
		}

		return $c;
	}

	/**
	 * {@inheritDoc}
	 * @return array
	 */
	public function iterate(array $data) {
		$list = array();
		$list = $this->beforeIteration($list);

		$permissions = $this->getProperty('permissions');
		$this->currentIndex = 0;
		/** @var xPDOObject|modAccessibleObject $object */
		foreach ($data['results'] as $object) {
			if (!empty($permissions)) {
				if ($object instanceof modAccessibleObject && !$object->checkPolicy('section_add_children') && $object->id != $this->current_category) {
					continue;
				}
			}

			$objectArray = $this->prepareRow($object);
			if (!empty($objectArray) && is_array($objectArray)) {
				$list[] = $objectArray;
				$this->currentIndex++;
			}
		}
		$list = $this->afterIteration($list);
		return $list;
	}

	/**
	 * {@inheritDoc}
	 * @return array
	 */
	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();
		return $array;
	}

}

return 'TicketsSectionGetListProcessor';