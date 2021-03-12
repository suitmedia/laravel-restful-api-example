# Tag Management

API Endpoints for managing tags.

## Resource Collection.

<small class="badge badge-darkred">requires authentication</small>

Display a collection of the tag resources in paginated document format.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/tags" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/tags"
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
<div id="execution-results-GETapi-tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags"></code></pre>
</div>
<div id="execution-error-GETapi-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags"></code></pre>
</div>
<form id="form-GETapi-tags" data-method="GET" data-path="api/tags" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tags" onclick="tryItOut('GETapi-tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tags" onclick="cancelTryOut('GETapi-tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tags</code></b>
</p>
<p>
<label id="auth-GETapi-tags" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-tags" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[tags]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[tags]" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the tag resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*integer* - 
Describe how many records to display in a collection.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*integer* - 
Describe the number of current page to display.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `postTags`, `posts`.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*string* - 
Field/attribute to sort the resources in response document by.
The available fields for sorting operation in current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>filter[`filterName`]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[`filterName`]" data-endpoint="GETapi-tags" data-component="query"  hidden>
<br>
*string* - 
Filter the resources by specifying *attribute name* or *query scope name*.
The available filters for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
</form>


## Create Resource.

<small class="badge badge-darkred">requires authentication</small>

Create a new tag resource.

> Example request:

```bash
curl -X POST \
    "http://restful-example.web/api/tags" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/tags"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-tags" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tags"></code></pre>
</div>
<div id="execution-error-POSTapi-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tags"></code></pre>
</div>
<form id="form-POSTapi-tags" data-method="POST" data-path="api/tags" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-tags" onclick="tryItOut('POSTapi-tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-tags" onclick="cancelTryOut('POSTapi-tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/tags</code></b>
</p>
<p>
<label id="auth-POSTapi-tags" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-tags" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-tags" data-component="body" required  hidden>
<br>
</p>

</form>


## Show Resource.

<small class="badge badge-darkred">requires authentication</small>

Display a specific tag resource identified by the given id/key.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/tags/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/tags/"
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
<div id="execution-results-GETapi-tags--tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tags--tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags--tag-"></code></pre>
</div>
<div id="execution-error-GETapi-tags--tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags--tag-"></code></pre>
</div>
<form id="form-GETapi-tags--tag-" data-method="GET" data-path="api/tags/{tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tags--tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tags--tag-" onclick="tryItOut('GETapi-tags--tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tags--tag-" onclick="cancelTryOut('GETapi-tags--tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tags--tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tags/{tag}</code></b>
</p>
<p>
<label id="auth-GETapi-tags--tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-tags--tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag" data-endpoint="GETapi-tags--tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific tag resource.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[tags]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[tags]" data-endpoint="GETapi-tags--tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the tag resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-tags--tag-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `postTags`, `posts`.</p>
</form>


## Update Resource.

<small class="badge badge-darkred">requires authentication</small>

Update a specific tag resource identified by the given id/key.

> Example request:

```bash
curl -X PUT \
    "http://restful-example.web/api/tags/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ipsum"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/tags/"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ipsum"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-tags--tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-tags--tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tags--tag-"></code></pre>
</div>
<div id="execution-error-PUTapi-tags--tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tags--tag-"></code></pre>
</div>
<form id="form-PUTapi-tags--tag-" data-method="PUT" data-path="api/tags/{tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-tags--tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-tags--tag-" onclick="tryItOut('PUTapi-tags--tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-tags--tag-" onclick="cancelTryOut('PUTapi-tags--tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-tags--tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/tags/{tag}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/tags/{tag}</code></b>
</p>
<p>
<label id="auth-PUTapi-tags--tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-tags--tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag" data-endpoint="PUTapi-tags--tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific tag resource.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-tags--tag-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Resource.

<small class="badge badge-darkred">requires authentication</small>

Delete a specific tag resource identified by the given id/key.

> Example request:

```bash
curl -X DELETE \
    "http://restful-example.web/api/tags/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/tags/"
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


<div id="execution-results-DELETEapi-tags--tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-tags--tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tags--tag-"></code></pre>
</div>
<div id="execution-error-DELETEapi-tags--tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tags--tag-"></code></pre>
</div>
<form id="form-DELETEapi-tags--tag-" data-method="DELETE" data-path="api/tags/{tag}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tags--tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-tags--tag-" onclick="tryItOut('DELETEapi-tags--tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-tags--tag-" onclick="cancelTryOut('DELETEapi-tags--tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-tags--tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/tags/{tag}</code></b>
</p>
<p>
<label id="auth-DELETEapi-tags--tag-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-tags--tag-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag" data-endpoint="DELETEapi-tags--tag-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific tag resource.</p>
</form>



