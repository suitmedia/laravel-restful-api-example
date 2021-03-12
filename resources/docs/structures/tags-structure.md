## Tags Resource Structure

| Column | Data Type | Description |
| ------ | --------- | ----------- |
| id | bigint, unsigned | The identifier and primary key of tag record. |
| name | string (64) | The tag name. |
| deleted_at | datetime, nullable | Indicate whether the record has been deleted. If the value is `null` then it is not deleted. |
| created_at | datetime, nullable |  |
| updated_at | datetime, nullable |  |

