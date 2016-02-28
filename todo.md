## To implement:

###0.1
- to single | csv array Bob <bob@host.com> // DONE
- o:testmode flag https://documentation.mailgun.com/api-sending.html#sending // DONE
- set domain // DONE
- set apikey // DONE
- html and plain text // DONE
- to, cc, bcc support // DONE

### 0.2
- Shorthand wireMail($args) usage // OK
- tracking clicks and opens per email // DONE
- Batch mode // OK

### 0.3
- o:tag
- o:campaign

### 0.4
- Stats dashboard

### 0.5
- List of latest sent emails with click/open tracking

### 0.6
- List management and sending
    - Add user to list
    - Remove user from list
    - List sync
    - Send to list `$mail->toList('name'); $mail->send()`

### 0.7
- Mailgun mail validation https://documentation.mailgun.com/api-email-validation.html