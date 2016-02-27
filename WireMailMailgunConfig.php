<?php

/**
 * Configuration for WireMailMailgun
 */
class WireMailMailgunConfig extends ModuleConfig
{
	function __construct() {
		$this->add(array(
			array(
				'name' => 'apiKey',
				'label' => __('Mailgun API Key'),
				'required' => true,
				'type' => 'Text'
			),
			array(
				'name' => 'testMode',
				'label' => __('Enable Test Mode'),
				'type' => 'Checkbox',
				'value' => 'yes'
			)
		));
	}
}