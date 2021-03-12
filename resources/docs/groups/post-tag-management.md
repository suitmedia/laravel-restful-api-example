# Post Tag Management

API Endpoints for managing post tags.

## Resource Collection.

<small class="badge badge-darkred">requires authentication</small>

Display a collection of the post tag resources in paginated document format.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/post_tags" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_tags"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "message": "This action is unauthorized."
}
```
<div id="execution-results-GETapi-post_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-post_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_tags"></code></pre>
</div>
<div id="execution-error-GETapi-post_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_tags"></code></pre>
</div>
<form id="form-GETapi-post_tags" data-method="GET" data-path="api/post_tags" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-post_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-post_tags" onclick="tryItOut('GETapi-post_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-post_tags" onclick="cancelTryOut('GETapi-post_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-post_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/post_tags</code></b>
</p>
<p>
<label id="auth-GETapi-post_tags" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-post_tags" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[post_tags]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post_tags]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post_tag resource to include in the response document.
The available fields for current endpoint are: `id`, `post_id`, `tag_id`.</p>
<p>
<b><code>fields[post]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post resource to include in the response document.
The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>fields[tag]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[tag]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the tag resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*integer* - 
Describe how many records to display in a collection.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*integer* - 
Describe the number of current page to display.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `post`, `tag`.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Field/attribute to sort the resources in response document by.
The available fields for sorting operation in current endpoint are: `id`, `post_id`, `tag_id`.</p>
<p>
<b><code>filter[`filterName`]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[`filterName`]" data-endpoint="GETapi-post_tags" data-component="query"  hidden>
<br>
*string* - 
Filter the resources by specifying *attribute name* or *query scope name*.
The available filters for current endpoint are: `id`, `post_id`, `tag_id`, `post.id`, `post.post_category_id`, `post.admin_id`, `post.title`, `post.description`, `post.content`, `post.published`, `post.deleted_at`, `post.created_at`, `post.updated_at`, `tag.id`, `tag.name`, `tag.deleted_at`, `tag.created_at`, `tag.updated_at`.</p>
</form>


## Create Resource.

<small class="badge badge-darkred">requires authentication</small>

Create a new post tag resource.

> Example request:

```bash
curl -X POST \
    "http://restful-example.web/api/post_tags" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":11,"tag_id":7}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_tags"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 11,
    "tag_id": 7
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-post_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-post_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-post_tags"></code></pre>
</div>
<div id="execution-error-POSTapi-post_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-post_tags"></code></pre>
</div>
<form id="form-POSTapi-post_tags" data-method="POST" data-path="api/post_tags" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-post_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-post_tags" onclick="tryItOut('POSTapi-post_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-post_tags" onclick="cancelTryOut('POSTapi-post_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-post_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/post_tags</code></b>
</p>
<p>
<label id="auth-POSTapi-post_tags" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-post_tags" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-post_tags" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-post_tags" data-component="body" required  hidden>
<br>
</p>

</form>


## Show Resource.

<small class="badge badge-darkred">requires authentication</small>

Display a specific post tag resource identified by the given id/key.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/post_tags/non" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_tags/non"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\PostTag] non"
}
```
<div id="execution-results-GETapi-post_tags--post_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-post_tags--post_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_tags--post_tag-"></code></pre>
</div>
<div id="execution-error-GETapi-post_tags--post_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_tags--post_tag-"></code></pre>
</div>
<form id="form-GETapi-post_tags--post_tag-" data-method="GET" data-path="api/post_tags/{post_tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-post_tags--post_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-post_tags--post_tag-" onclick="tryItOut('GETapi-post_tags--post_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-post_tags--post_tag-" onclick="cancelTryOut('GETapi-post_tags--post_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-post_tags--post_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/post_tags/{post_tag}</code></b>
</p>
<p>
<label id="auth-GETapi-post_tags--post_tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-post_tags--post_tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_tag" data-endpoint="GETapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postTag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postTag" data-endpoint="GETapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post tag resource.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[post_tags]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post_tags]" data-endpoint="GETapi-post_tags--post_tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post_tag resource to include in the response document.
The available fields for current endpoint are: `id`, `post_id`, `tag_id`.</p>
<p>
<b><code>fields[post]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post]" data-endpoint="GETapi-post_tags--post_tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post resource to include in the response document.
The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>fields[tag]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[tag]" data-endpoint="GETapi-post_tags--post_tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the tag resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-post_tags--post_tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `post`, `tag`.</p>
</form>


## Update Resource.

<small class="badge badge-darkred">requires authentication</small>

Update a specific post tag resource identified by the given id/key.

> Example request:

```bash
curl -X PUT \
    "http://restful-example.web/api/post_tags/saepe" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":4,"tag_id":18}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_tags/saepe"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 4,
    "tag_id": 18
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-post_tags--post_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-post_tags--post_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-post_tags--post_tag-"></code></pre>
</div>
<div id="execution-error-PUTapi-post_tags--post_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-post_tags--post_tag-"></code></pre>
</div>
<form id="form-PUTapi-post_tags--post_tag-" data-method="PUT" data-path="api/post_tags/{post_tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-post_tags--post_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-post_tags--post_tag-" onclick="tryItOut('PUTapi-post_tags--post_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-post_tags--post_tag-" onclick="cancelTryOut('PUTapi-post_tags--post_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-post_tags--post_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/post_tags/{post_tag}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/post_tags/{post_tag}</code></b>
</p>
<p>
<label id="auth-PUTapi-post_tags--post_tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-post_tags--post_tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_tag" data-endpoint="PUTapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postTag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postTag" data-endpoint="PUTapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post tag resource.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="PUTapi-post_tags--post_tag-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="PUTapi-post_tags--post_tag-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Resource.

<small class="badge badge-darkred">requires authentication</small>

Delete a specific post tag resource identified by the given id/key.

> Example request:

```bash
curl -X DELETE \
    "http://restful-example.web/api/post_tags/et" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_tags/et"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-post_tags--post_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-post_tags--post_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-post_tags--post_tag-"></code></pre>
</div>
<div id="execution-error-DELETEapi-post_tags--post_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-post_tags--post_tag-"></code></pre>
</div>
<form id="form-DELETEapi-post_tags--post_tag-" data-method="DELETE" data-path="api/post_tags/{post_tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-post_tags--post_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-post_tags--post_tag-" onclick="tryItOut('DELETEapi-post_tags--post_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-post_tags--post_tag-" onclick="cancelTryOut('DELETEapi-post_tags--post_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-post_tags--post_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/post_tags/{post_tag}</code></b>
</p>
<p>
<label id="auth-DELETEapi-post_tags--post_tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-post_tags--post_tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_tag" data-endpoint="DELETEapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postTag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postTag" data-endpoint="DELETEapi-post_tags--post_tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post tag resource.</p>
</form>



