# WireMailMailgun

Mailgun for ProcessWire

## Configuration

Set settings in module configuration page.

## Usage

Usage is similar to the basic WireMail implementation, although a few extra options are available.

Basic usage is as such:

1. Initialize `$mail = WireMail();`
2. Set options `$mail->to('Someone <someone@example.com>); ...`
3. Send `$mail->send();`

## Methods

**$WireMailMailgun->to( *string|array|null* $recipients )**

**$WireMailMailgun->cc( *string|array|null* $recipients )**

**$WireMailMailgun->bcc( *string|array|null* $recipients )**

**$WireMailMailgun->setApiKey( *string* $apiKey )**

**$WireMailMailgun->setDomainName( *string* $domainName )**

**$WireMailMailgun->setTestMode( *bool* $bool )**