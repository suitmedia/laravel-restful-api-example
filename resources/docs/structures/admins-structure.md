## Admins Resource Structure

| Column | Data Type | Description |
| ------ | --------- | ----------- |
| id | bigint, unsigned | The identifier and primary key of user record. |
| name | string (128) | The name of specified user, max 128 characters long. |
| email | string (128) | The email of specified user, max 128 characters long. |
| password | string (128) | The password of specified user, max 128 characters long. |
| deleted_at | datetime, nullable | Indicate whether the record has been deleted. If the value is `null` then it is not deleted. |
| created_at | datetime, nullable |  |
| updated_at | datetime, nullable |  |

