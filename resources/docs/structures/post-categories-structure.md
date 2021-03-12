## Post Categories Resource Structure

| Column | Data Type | Description |
| ------ | --------- | ----------- |
| id | bigint, unsigned | The identifier and primary key of post category record. |
| name | string (128) | The post category name, eg: Sports, Business, etc. |
| deleted_at | datetime, nullable | Indicate whether the record has been deleted. If the value is `null` then it is not deleted. |
| created_at | datetime, nullable |  |
| updated_at | datetime, nullable |  |

