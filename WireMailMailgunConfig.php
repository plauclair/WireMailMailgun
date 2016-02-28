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
				'description' => __('You can find your API Key [on Mailgun](https://mailgun.com/app/domains)'),
				'required' => true,
				'type' => 'Text',
				'columnWidth' => 50
			),
			array(
				'name' => 'domain',
				'label' => __('Domain Name'),
				'description' => __('The domain name for this API key.'),
				'required' => true,
				'type' => 'Text',
				'columnWidth' => 50
			),
			array(
				'name' => 'fromEmail',
				'label' => __('Default Sender Email Address'),
				'description' => __('The "from" email address. When left empty, defaults to *processwire@[domainName]*.'),
				'type' => 'Email',
				'columnWidth' => 50
			),
			array(
				'name' => 'fromName',
				'label' => __('Default Sender Name'),
				'description' => __('The "from" email name. When left empty, defaults to *ProcessWire*.'),
				'type' => 'Text',
				'columnWidth' => 50
			),
			array(
				'name' => 'trackOpens',
				'label' => __('Track Message Opens'),
				'type' => 'Checkbox',
				'value' => 'trackOpens',
				'columnWidth' => 50
			),
			array(
				'name' => 'trackClicks',
				'label' => __('Track Message Clicks'),
				'type' => 'Checkbox',
				'value' => 'trackClicks',
				'columnWidth' => 50
			),
			array(
				'name' => 'testMode',
				'label' => __('Enable Test Mode'),
				'description' => __('When this option is enabled, Mailgun will accept messages but won\'t send them. [Click here for more information](https://documentation.mailgun.com/user_manual.html#sending-in-test-mode).'),
				'type' => 'Checkbox',
				'value' => 'testMode'
			),
			array(
				'name' => 'disableSslCheck',
				'label' => __('Disable cURL SSL Check'),
				'description' => __("If you see the following error in ProcessWire Mailgun logs: *cURL Error: SSL certificate problem: unable to get local issuer certificate*.\nThis option will work around this issue. It might help on some development configurations, but it is recommended that you leave this option unchecked on production servers."),
				'type' => 'Checkbox',
				'value' => 'disableSslCheck'
			)
		));
	}
}