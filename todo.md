## To implement:

###0.1
- [x] to single | csv array Bob <bob@host.com>
- [x] o:testmode flag https://documentation.mailgun.com/api-sending.html#sending
- [x] set domain
- [x] set apikey
- [x] html and plain text
- [x] to, cc, bcc support

### 0.2
- [x] Shorthand wireMail($args) usage
- [x] tracking clicks and opens per email
- [x] Batch mode

### 0.3
- [x] attachments
- [x] o:tag
- [ ] o:campaign

### 0.4
- [ ] Stats dashboard

### 0.5
- [ ] List of latest sent emails with click/open tracking

### 0.6
- [ ] List management and sending
    - [ ] Add user to list
    - [ ] Remove user from list
    - [ ] List sync
    - [ ] Send to list `$mail->toList('name'); $mail->send()`

### 0.7
- [ ] Mailgun mail validation https://documentation.mailgun.com/api-email-validation.html