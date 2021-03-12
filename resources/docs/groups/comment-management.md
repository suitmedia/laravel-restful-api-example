# Comment Management

API Endpoints for managing comments.

## Resource Collection.

<small class="badge badge-darkred">requires authentication</small>

Display a collection of the comment resources in paginated document format.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/comments"
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
<div id="execution-results-GETapi-comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments"></code></pre>
</div>
<div id="execution-error-GETapi-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments"></code></pre>
</div>
<form id="form-GETapi-comments" data-method="GET" data-path="api/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments" onclick="tryItOut('GETapi-comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments" onclick="cancelTryOut('GETapi-comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments</code></b>
</p>
<p>
<label id="auth-GETapi-comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[comments]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[comments]" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the comment resource to include in the response document.
The available fields for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>fields[post]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post]" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post resource to include in the response document.
The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*integer* - 
Describe how many records to display in a collection.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*integer* - 
Describe the number of current page to display.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `post`.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*string* - 
Field/attribute to sort the resources in response document by.
The available fields for sorting operation in current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>filter[`filterName`]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[`filterName`]" data-endpoint="GETapi-comments" data-component="query"  hidden>
<br>
*string* - 
Filter the resources by specifying *attribute name* or *query scope name*.
The available filters for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`, `post.id`, `post.post_category_id`, `post.admin_id`, `post.title`, `post.description`, `post.content`, `post.published`, `post.deleted_at`, `post.created_at`, `post.updated_at`.</p>
</form>


## Create Resource.

<small class="badge badge-darkred">requires authentication</small>

Create a new comment resource.

> Example request:

```bash
curl -X POST \
    "http://restful-example.web/api/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":12,"user_id":2,"content":"deleniti","published":false}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/comments"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 12,
    "user_id": 2,
    "content": "deleniti",
    "published": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments"></code></pre>
</div>
<div id="execution-error-POSTapi-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments"></code></pre>
</div>
<form id="form-POSTapi-comments" data-method="POST" data-path="api/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments" onclick="tryItOut('POSTapi-comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments" onclick="cancelTryOut('POSTapi-comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-comments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-comments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-comments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>published</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-comments" hidden><input type="radio" name="published" value="true" data-endpoint="POSTapi-comments" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-comments" hidden><input type="radio" name="published" value="false" data-endpoint="POSTapi-comments" data-component="body" required ><code>false</code></label>
<br>
</p>

</form>


## Show Resource.

<small class="badge badge-darkred">requires authentication</small>

Display a specific comment resource identified by the given id/key.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/comments/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/comments/"
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
<div id="execution-results-GETapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment-"></code></pre>
</div>
<form id="form-GETapi-comments--comment-" data-method="GET" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment-" onclick="tryItOut('GETapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment-" onclick="cancelTryOut('GETapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-GETapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="GETapi-comments--comment-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific comment resource.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[comments]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[comments]" data-endpoint="GETapi-comments--comment-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the comment resource to include in the response document.
The available fields for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>fields[post]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post]" data-endpoint="GETapi-comments--comment-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post resource to include in the response document.
The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-comments--comment-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `post`.</p>
</form>


## Update Resource.

<small class="badge badge-darkred">requires authentication</small>

Update a specific comment resource identified by the given id/key.

> Example request:

```bash
curl -X PUT \
    "http://restful-example.web/api/comments/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":10,"user_id":15,"content":"in","published":false}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/comments/"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 10,
    "user_id": 15,
    "content": "in",
    "published": false
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-PUTapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-comments--comment-"></code></pre>
</div>
<form id="form-PUTapi-comments--comment-" data-method="PUT" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-comments--comment-" onclick="tryItOut('PUTapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-comments--comment-" onclick="cancelTryOut('PUTapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-PUTapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="PUTapi-comments--comment-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific comment resource.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="PUTapi-comments--comment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-comments--comment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="PUTapi-comments--comment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>published</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-comments--comment-" hidden><input type="radio" name="published" value="true" data-endpoint="PUTapi-comments--comment-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-comments--comment-" hidden><input type="radio" name="published" value="false" data-endpoint="PUTapi-comments--comment-" data-component="body" required ><code>false</code></label>
<br>
</p>

</form>


## Delete Resource.

<small class="badge badge-darkred">requires authentication</small>

Delete a specific comment resource identified by the given id/key.

> Example request:

```bash
curl -X DELETE \
    "http://restful-example.web/api/comments/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/comments/"
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


<div id="execution-results-DELETEapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment-"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment-" data-method="DELETE" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment-" onclick="tryItOut('DELETEapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment-" onclick="cancelTryOut('DELETEapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="DELETEapi-comments--comment-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific comment resource.</p>
</form>



