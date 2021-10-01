# Misc

```php
$miscController = $client->getMiscController();
```

## Class Name

`MiscController`

## Methods

* [Send SMS](/doc/controllers/misc.md#send-sms)
* [View an SMS](/doc/controllers/misc.md#view-an-sms)


# Send SMS

Excite SMS SMS API allows you to send and receive SMS messages to and from any country in the world through a REST API. Each message is identified by a unique random ID so that users can always check the status of a message using the given endpoint.

```php
function sendSMS(string $accept, SendSMSRequest $body): SendSMS
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `body` | [`SendSMSRequest`](/doc/models/send-sms-request.md) | Body, Required | - |

## Response Type

[`SendSMS`](/doc/models/send-sms.md)

## Example Usage

```php
$accept = 'application/json';
$body_recipient = '0972150298';
$body_senderId = 'ExciteSMS';
$body_message = 'Welcome';
$body = new Models\SendSMSRequest(
    $body_recipient,
    $body_senderId,
    $body_message
);

$result = $miscController->sendSMS($accept, $body);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Your message was successfully delivered",
  "data": {
    "uid": "61536aa9cab81",
    "to": "0972150298",
    "from": "ExciteSMS",
    "message": "Welcome",
    "status": "Delivered",
    "cost": "1"
  }
}
```


# View an SMS

```php
function viewAnSMS(string $uid): ViewAnSMS
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `uid` | `string` | Query, Required | You can use Excite SMS's SMS API to retrieve information of an existing inbound or outbound SMS message.<br><br>You only need to supply the unique message id that was returned upon creation or receiving. |

## Response Type

[`ViewAnSMS`](/doc/models/view-an-sms.md)

## Example Usage

```php
$uid = '614e19186613d';

$result = $miscController->viewAnSMS($uid);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": null,
  "data": {
    "current_page": 1,
    "data": [
      {
        "uid": "6147812b6c15a",
        "to": "0760079611",
        "from": "Samafrica",
        "message": "Api test",
        "status": "Delivered",
        "cost": "1"
      },
      {
        "uid": "61478ab0a9cff",
        "to": "0760079611",
        "from": "Samafrica",
        "message": "Api test",
        "status": "Delivered",
        "cost": "1"
      },
      {
        "uid": "614f849f28a20",
        "to": "0760079611",
        "from": "ExciteSMS",
        "message": "Api test",
        "status": "Delivered",
        "cost": "1"
      },
      {
        "uid": "614f84fa08af9",
        "to": "0972150298",
        "from": "ExciteSMS",
        "message": "Api test",
        "status": "Delivered",
        "cost": "1"
      }
    ],
    "first_page_url": "https://gateway.excitesms.tech/api/v3/sms?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "https://gateway.excitesms.tech/api/v3/sms?page=1",
    "links": [
      {
        "url": null,
        "label": "pagination.previous",
        "active": false
      },
      {
        "url": "https://gateway.excitesms.tech/api/v3/sms?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "pagination.next",
        "active": false
      }
    ],
    "next_page_url": null,
    "path": "https://gateway.excitesms.tech/api/v3/sms",
    "per_page": 25,
    "prev_page_url": null,
    "to": 4,
    "total": 4
  }
}
```

