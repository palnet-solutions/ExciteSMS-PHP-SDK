
# Send SMS Request

## Structure

`SendSMSRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipient` | `string` | Required | - | getRecipient(): string | setRecipient(string recipient): void |
| `senderId` | `string` | Required | - | getSenderId(): string | setSenderId(string senderId): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |

## Example (as JSON)

```json
{
  "recipient": "0972150298",
  "sender_id": "ExciteSMS",
  "message": "Welcome"
}
```

