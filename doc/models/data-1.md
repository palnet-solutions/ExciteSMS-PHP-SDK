
# Data 1

## Structure

`Data1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentPage` | `int` | Required | - | getCurrentPage(): int | setCurrentPage(int currentPage): void |
| `data` | [`Data[]`](/doc/models/data.md) | Required | - | getData(): array | setData(array data): void |
| `firstPageUrl` | `string` | Required | - | getFirstPageUrl(): string | setFirstPageUrl(string firstPageUrl): void |
| `from` | `int` | Required | - | getFrom(): int | setFrom(int from): void |
| `lastPage` | `int` | Required | - | getLastPage(): int | setLastPage(int lastPage): void |
| `lastPageUrl` | `string` | Required | - | getLastPageUrl(): string | setLastPageUrl(string lastPageUrl): void |
| `links` | [`Link[]`](/doc/models/link.md) | Required | - | getLinks(): array | setLinks(array links): void |
| `nextPageUrl` | `?string` | Required | - | getNextPageUrl(): ?string | setNextPageUrl(?string nextPageUrl): void |
| `path` | `string` | Required | - | getPath(): string | setPath(string path): void |
| `perPage` | `int` | Required | - | getPerPage(): int | setPerPage(int perPage): void |
| `prevPageUrl` | `?string` | Required | - | getPrevPageUrl(): ?string | setPrevPageUrl(?string prevPageUrl): void |
| `to` | `int` | Required | - | getTo(): int | setTo(int to): void |
| `total` | `int` | Required | - | getTotal(): int | setTotal(int total): void |

## Example (as JSON)

```json
{
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
```

