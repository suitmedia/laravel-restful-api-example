## Posts Resource Structure

| Column | Data Type | Description |
| ------ | --------- | ----------- |
| id | bigint, unsigned | The identifier and primary key of post record. |
| post_category_id | bigint, unsigned | The identifier and foreign key of the related post category record. |
| admin_id | bigint, unsigned |  |
| title | string (128) | The title of specified post, max 128 characters long. |
| description | string (255) | The description of specified post, max 255 characters long. |
| content | text | The content of specified post. |
| published | boolean, unsigned | Indicate whether the post has been published. If the value is `0` then the post is not published yet. |
| deleted_at | datetime, nullable | Indicate whether the record has been deleted. If the value is `null` then it is not deleted. |
| created_at | datetime, nullable |  |
| updated_at | datetime, nullable |  |

