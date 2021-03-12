# Post Category Management

API Endpoints for managing post categories.

## Resource Collection.

<small class="badge badge-darkred">requires authentication</small>

Display a collection of the post category resources in paginated document format.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/post_categories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_categories"
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
<div id="execution-results-GETapi-post_categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-post_categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_categories"></code></pre>
</div>
<div id="execution-error-GETapi-post_categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_categories"></code></pre>
</div>
<form id="form-GETapi-post_categories" data-method="GET" data-path="api/post_categories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-post_categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-post_categories" onclick="tryItOut('GETapi-post_categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-post_categories" onclick="cancelTryOut('GETapi-post_categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-post_categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/post_categories</code></b>
</p>
<p>
<label id="auth-GETapi-post_categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-post_categories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[post_categories]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post_categories]" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post_category resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*integer* - 
Describe how many records to display in a collection.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*integer* - 
Describe the number of current page to display.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `posts`.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*string* - 
Field/attribute to sort the resources in response document by.
The available fields for sorting operation in current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>filter[`filterName`]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[`filterName`]" data-endpoint="GETapi-post_categories" data-component="query"  hidden>
<br>
*string* - 
Filter the resources by specifying *attribute name* or *query scope name*.
The available filters for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
</form>


## Create Resource.

<small class="badge badge-darkred">requires authentication</small>

Create a new post category resource.

> Example request:

```bash
curl -X POST \
    "http://restful-example.web/api/post_categories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sequi"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_categories"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sequi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-post_categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-post_categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-post_categories"></code></pre>
</div>
<div id="execution-error-POSTapi-post_categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-post_categories"></code></pre>
</div>
<form id="form-POSTapi-post_categories" data-method="POST" data-path="api/post_categories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-post_categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-post_categories" onclick="tryItOut('POSTapi-post_categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-post_categories" onclick="cancelTryOut('POSTapi-post_categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-post_categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/post_categories</code></b>
</p>
<p>
<label id="auth-POSTapi-post_categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-post_categories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-post_categories" data-component="body" required  hidden>
<br>
</p>

</form>


## Show Resource.

<small class="badge badge-darkred">requires authentication</small>

Display a specific post category resource identified by the given id/key.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/post_categories/eum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_categories/eum"
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
    "message": "No query results for model [App\\Models\\PostCategory] eum"
}
```
<div id="execution-results-GETapi-post_categories--post_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-post_categories--post_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_categories--post_category-"></code></pre>
</div>
<div id="execution-error-GETapi-post_categories--post_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_categories--post_category-"></code></pre>
</div>
<form id="form-GETapi-post_categories--post_category-" data-method="GET" data-path="api/post_categories/{post_category}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-post_categories--post_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-post_categories--post_category-" onclick="tryItOut('GETapi-post_categories--post_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-post_categories--post_category-" onclick="cancelTryOut('GETapi-post_categories--post_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-post_categories--post_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/post_categories/{post_category}</code></b>
</p>
<p>
<label id="auth-GETapi-post_categories--post_category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-post_categories--post_category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_category" data-endpoint="GETapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postCategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postCategory" data-endpoint="GETapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post category resource.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[post_categories]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[post_categories]" data-endpoint="GETapi-post_categories--post_category-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the post_category resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-post_categories--post_category-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `posts`.</p>
</form>


## Update Resource.

<small class="badge badge-darkred">requires authentication</small>

Update a specific post category resource identified by the given id/key.

> Example request:

```bash
curl -X PUT \
    "http://restful-example.web/api/post_categories/nihil" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_categories/nihil"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-post_categories--post_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-post_categories--post_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-post_categories--post_category-"></code></pre>
</div>
<div id="execution-error-PUTapi-post_categories--post_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-post_categories--post_category-"></code></pre>
</div>
<form id="form-PUTapi-post_categories--post_category-" data-method="PUT" data-path="api/post_categories/{post_category}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-post_categories--post_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-post_categories--post_category-" onclick="tryItOut('PUTapi-post_categories--post_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-post_categories--post_category-" onclick="cancelTryOut('PUTapi-post_categories--post_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-post_categories--post_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/post_categories/{post_category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/post_categories/{post_category}</code></b>
</p>
<p>
<label id="auth-PUTapi-post_categories--post_category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-post_categories--post_category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_category" data-endpoint="PUTapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postCategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postCategory" data-endpoint="PUTapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post category resource.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-post_categories--post_category-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Resource.

<small class="badge badge-darkred">requires authentication</small>

Delete a specific post category resource identified by the given id/key.

> Example request:

```bash
curl -X DELETE \
    "http://restful-example.web/api/post_categories/vel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/post_categories/vel"
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


<div id="execution-results-DELETEapi-post_categories--post_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-post_categories--post_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-post_categories--post_category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-post_categories--post_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-post_categories--post_category-"></code></pre>
</div>
<form id="form-DELETEapi-post_categories--post_category-" data-method="DELETE" data-path="api/post_categories/{post_category}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-post_categories--post_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-post_categories--post_category-" onclick="tryItOut('DELETEapi-post_categories--post_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-post_categories--post_category-" onclick="cancelTryOut('DELETEapi-post_categories--post_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-post_categories--post_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/post_categories/{post_category}</code></b>
</p>
<p>
<label id="auth-DELETEapi-post_categories--post_category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-post_categories--post_category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post_category" data-endpoint="DELETEapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>postCategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postCategory" data-endpoint="DELETEapi-post_categories--post_category-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific post category resource.</p>
</form>



