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

**$WireMailMailgun->setBatchMode( *bool* $bool )**

When batch mode is set to **true** (default mode of operation), each recipient passed to the `to()` method will not be able to see who else is receiving the sent email. This will send one email per "To:" recipient.

Set to **false** to disable this behavior. This will send one email with multiple "To:" recipients.

Note that in both cases all CCs and BCCs will be delivered for **each email sent**. This means that if batch mode is on, that you have 10 "To:" recipients and 3 CCs, 40 emails will be sent in total.

**Important**: Mailgun has a maximum hard limit of recipients allowed per batch of 1,000. [Read more about batch sending.](https://documentation.mailgun.com/user_manual.html#batch-sending)

**$WireMailMailgun->setClickTracking( *bool* $bool )**

**$WireMailMailgun->setOpenTracking( *bool* $bool )**