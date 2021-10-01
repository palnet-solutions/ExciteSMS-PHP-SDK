
# View an SMS

## Structure

`ViewAnSMS`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `?string` | Required | - | getMessage(): ?string | setMessage(?string message): void |
| `data` | [`Data1`](/doc/models/data-1.md) | Required | - | getData(): Data1 | setData(Data1 data): void |

## Example (as JSON)

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

