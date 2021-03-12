## Comments Resource Structure

| Column | Data Type | Description |
| ------ | --------- | ----------- |
| id | bigint, unsigned | The identifier and primary key of comment record. |
| post_id | bigint, unsigned | The identifier and foreign key of the related post record. |
| user_id | bigint, unsigned | The identifier and foreign key of the related user record. |
| content | text | The content of specified comment. |
| published | boolean, unsigned | Indicate whether the post has been published. If the value is `0` then the comment is not published yet. |
| deleted_at | datetime, nullable | Indicate whether the record has been deleted. If the value is `null` then it is not deleted. |
| created_at | datetime, nullable |  |
| updated_at | datetime, nullable |  |

