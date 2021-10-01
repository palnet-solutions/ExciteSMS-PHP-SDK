
# Data

## Structure

`Data`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `to` | `string` | Required | - | getTo(): string | setTo(string to): void |
| `from` | `string` | Required | - | getFrom(): string | setFrom(string from): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `cost` | `string` | Required | - | getCost(): string | setCost(string cost): void |

## Example (as JSON)

```json
{
  "uid": "61536aa9cab81",
  "to": "0972150298",
  "from": "ExciteSMS",
  "message": "Welcome",
  "status": "Delivered",
  "cost": "1"
}
```

