<?php

class BootstrapTabsHelper extends AppHelper {

	public $helpers = array(
		'Html',
	);

/**
 * creates link for tab selector
 */
	public function link($title, $url = null, $options = array()) {
		$options = Hash::merge(array(
			'data-toggle' => 'tab',
		), $options);
		$link = $this->Html->link($title, $url, $options);
		return $this->Html->tag('li', $link);
	}

/**
 * tab pane
 *
 * @param string $id dom id for tab pane container
 * @param string|array $content string or array. only 'name', 'data', and
 * 'options' are accepted.
 */
	public function pane($id, $content) {
		if (is_array($content)) {
			$keys = array('name' => '', 'data' => array(), 'options' => array());
			extract(array_intersect_key(array_merge($keys, $content), $keys));
			$content = $this->_View->element($name, $data, $options);
		}
		return $this->Html->div('tab-pane', $content, array(
			'id' => $id,
			)
		);
	}

}
