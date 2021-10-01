
# Send SMS

## Structure

`SendSMS`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data`](/doc/models/data.md) | Required | - | getData(): Data | setData(Data data): void |

## Example (as JSON)

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

