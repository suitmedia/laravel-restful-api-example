# Admin Management

API Endpoints for managing admins.

## Resource Collection.

<small class="badge badge-darkred">requires authentication</small>

Display a collection of the admin resources in paginated document format.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/admins" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/admins"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Ut quasi molestiae odit voluptas fuga est magnam.",
            "email": "uriah.west@example.org",
            "role": "superadmin",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 2,
            "name": "Et ea qui a cupiditate.",
            "email": "kiley15@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 3,
            "name": "Qui mollitia sit enim molestiae.",
            "email": "judson.wyman@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 4,
            "name": "Sunt enim vitae aut consequatur vel enim.",
            "email": "marks.caesar@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 5,
            "name": "In et quia qui voluptatem id quidem quo.",
            "email": "deanna.borer@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 6,
            "name": "Qui ipsam laudantium voluptatibus iste ullam omnis.",
            "email": "malcolm10@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 7,
            "name": "Pariatur quae architecto quam dolorem.",
            "email": "lueilwitz.dorcas@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 8,
            "name": "Tempora porro qui repudiandae sed.",
            "email": "kuhlman.keara@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 9,
            "name": "Beatae nemo praesentium sunt blanditiis et rerum in.",
            "email": "magnolia.kuhic@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 10,
            "name": "Tempora voluptate eum tenetur nesciunt recusandae.",
            "email": "mollie92@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 11,
            "name": "Quo quia earum voluptatibus delectus sint aut eos nam.",
            "email": "shanelle80@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 12,
            "name": "Dignissimos tempore inventore perspiciatis autem voluptate provident magni.",
            "email": "rdach@example.org",
            "role": "superadmin",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:04.000000Z",
            "updated_at": "2021-03-01T07:01:04.000000Z"
        },
        {
            "id": 13,
            "name": "Voluptatem et aliquid ab necessitatibus dolores perspiciatis voluptas.",
            "email": "mante.emelie@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 14,
            "name": "A minus dolores dolores.",
            "email": "sfarrell@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 15,
            "name": "Qui voluptas et veniam soluta ipsam dolor facere nihil.",
            "email": "lew95@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 16,
            "name": "Quia eum illum maxime.",
            "email": "lmueller@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 17,
            "name": "Delectus voluptatem cupiditate veritatis aut doloribus accusantium nihil.",
            "email": "marielle84@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 18,
            "name": "Est molestiae ut officia omnis reiciendis voluptatibus.",
            "email": "paul62@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 19,
            "name": "Et est ut veritatis qui.",
            "email": "yhermann@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 20,
            "name": "Ipsam sint voluptatem error similique.",
            "email": "cormier.jacquelyn@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 21,
            "name": "Quia magni et vel et quas aut.",
            "email": "rmurazik@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 22,
            "name": "Iusto harum quia autem.",
            "email": "sheldon.bauch@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 25,
            "name": "Faizal",
            "email": "faizal@suitmedia.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T08:00:21.000000Z",
            "updated_at": "2021-03-01T08:00:21.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
        "last": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/admins",
        "per_page": 30,
        "to": 23,
        "total": 23
    }
}
```
<div id="execution-results-GETapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins"></code></pre>
</div>
<div id="execution-error-GETapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins"></code></pre>
</div>
<form id="form-GETapi-admins" data-method="GET" data-path="api/admins" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admins" onclick="tryItOut('GETapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admins" onclick="cancelTryOut('GETapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admins</code></b>
</p>
<p>
<label id="auth-GETapi-admins" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admins" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[admins]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[admins]" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the admin resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*integer* - 
Describe how many records to display in a collection.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*integer* - 
Describe the number of current page to display.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `posts`.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*string* - 
Field/attribute to sort the resources in response document by.
The available fields for sorting operation in current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>filter[`filterName`]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[`filterName`]" data-endpoint="GETapi-admins" data-component="query"  hidden>
<br>
*string* - 
Filter the resources by specifying *attribute name* or *query scope name*.
The available filters for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.</p>
</form>


## Create Resource.

<small class="badge badge-darkred">requires authentication</small>

Create a new admin resource.

> Example request:

```bash
curl -X POST \
    "http://restful-example.web/api/admins" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"odio","email":"franecki.destin@example.org","password":"corporis","role":"editor"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/admins"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "odio",
    "email": "franecki.destin@example.org",
    "password": "corporis",
    "role": "editor"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admins"></code></pre>
</div>
<div id="execution-error-POSTapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admins"></code></pre>
</div>
<form id="form-POSTapi-admins" data-method="POST" data-path="api/admins" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admins" onclick="tryItOut('POSTapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admins" onclick="cancelTryOut('POSTapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admins</code></b>
</p>
<p>
<label id="auth-POSTapi-admins" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-admins" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>
The value must be one of <code>superadmin</code> or <code>editor</code>.</p>

</form>


## Show Resource.

<small class="badge badge-darkred">requires authentication</small>

Display a specific admin resource identified by the given id/key.

> Example request:

```bash
curl -X GET \
    -G "http://restful-example.web/api/admins/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/admins/"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Ut quasi molestiae odit voluptas fuga est magnam.",
            "email": "uriah.west@example.org",
            "role": "superadmin",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 2,
            "name": "Et ea qui a cupiditate.",
            "email": "kiley15@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 3,
            "name": "Qui mollitia sit enim molestiae.",
            "email": "judson.wyman@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 4,
            "name": "Sunt enim vitae aut consequatur vel enim.",
            "email": "marks.caesar@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 5,
            "name": "In et quia qui voluptatem id quidem quo.",
            "email": "deanna.borer@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 6,
            "name": "Qui ipsam laudantium voluptatibus iste ullam omnis.",
            "email": "malcolm10@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 7,
            "name": "Pariatur quae architecto quam dolorem.",
            "email": "lueilwitz.dorcas@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 8,
            "name": "Tempora porro qui repudiandae sed.",
            "email": "kuhlman.keara@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 9,
            "name": "Beatae nemo praesentium sunt blanditiis et rerum in.",
            "email": "magnolia.kuhic@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 10,
            "name": "Tempora voluptate eum tenetur nesciunt recusandae.",
            "email": "mollie92@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 11,
            "name": "Quo quia earum voluptatibus delectus sint aut eos nam.",
            "email": "shanelle80@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:00:05.000000Z",
            "updated_at": "2021-03-01T07:00:05.000000Z"
        },
        {
            "id": 12,
            "name": "Dignissimos tempore inventore perspiciatis autem voluptate provident magni.",
            "email": "rdach@example.org",
            "role": "superadmin",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:04.000000Z",
            "updated_at": "2021-03-01T07:01:04.000000Z"
        },
        {
            "id": 13,
            "name": "Voluptatem et aliquid ab necessitatibus dolores perspiciatis voluptas.",
            "email": "mante.emelie@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 14,
            "name": "A minus dolores dolores.",
            "email": "sfarrell@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 15,
            "name": "Qui voluptas et veniam soluta ipsam dolor facere nihil.",
            "email": "lew95@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 16,
            "name": "Quia eum illum maxime.",
            "email": "lmueller@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 17,
            "name": "Delectus voluptatem cupiditate veritatis aut doloribus accusantium nihil.",
            "email": "marielle84@example.org",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 18,
            "name": "Est molestiae ut officia omnis reiciendis voluptatibus.",
            "email": "paul62@example.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 19,
            "name": "Et est ut veritatis qui.",
            "email": "yhermann@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 20,
            "name": "Ipsam sint voluptatem error similique.",
            "email": "cormier.jacquelyn@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 21,
            "name": "Quia magni et vel et quas aut.",
            "email": "rmurazik@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 22,
            "name": "Iusto harum quia autem.",
            "email": "sheldon.bauch@example.net",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T07:01:05.000000Z",
            "updated_at": "2021-03-01T07:01:05.000000Z"
        },
        {
            "id": 25,
            "name": "Faizal",
            "email": "faizal@suitmedia.com",
            "role": "editor",
            "deleted_at": null,
            "created_at": "2021-03-01T08:00:21.000000Z",
            "updated_at": "2021-03-01T08:00:21.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
        "last": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/admins?page%5Bnumber%5D=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/admins",
        "per_page": 30,
        "to": 23,
        "total": 23
    }
}
```
<div id="execution-results-GETapi-admins--admin-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admins--admin-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins--admin-"></code></pre>
</div>
<div id="execution-error-GETapi-admins--admin-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins--admin-"></code></pre>
</div>
<form id="form-GETapi-admins--admin-" data-method="GET" data-path="api/admins/{admin}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admins--admin-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admins--admin-" onclick="tryItOut('GETapi-admins--admin-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admins--admin-" onclick="cancelTryOut('GETapi-admins--admin-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admins--admin-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admins/{admin}</code></b>
</p>
<p>
<label id="auth-GETapi-admins--admin-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admins--admin-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>admin</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="admin" data-endpoint="GETapi-admins--admin-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific admin resource.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[admins]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[admins]" data-endpoint="GETapi-admins--admin-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated field/attribute names of the admin resource to include in the response document.
The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-admins--admin-" data-component="query"  hidden>
<br>
*string* - 
Comma-separated relationship names to include in the response document.
The available relationships for current endpoint are: `posts`.</p>
</form>


## Update Resource.

<small class="badge badge-darkred">requires authentication</small>

Update a specific admin resource identified by the given id/key.

> Example request:

```bash
curl -X PUT \
    "http://restful-example.web/api/admins/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"rerum","email":"willy63@example.com","password":"reprehenderit","role":"editor"}'

```

```javascript
const url = new URL(
    "http://restful-example.web/api/admins/"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rerum",
    "email": "willy63@example.com",
    "password": "reprehenderit",
    "role": "editor"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-admins--admin-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-admins--admin-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admins--admin-"></code></pre>
</div>
<div id="execution-error-PUTapi-admins--admin-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admins--admin-"></code></pre>
</div>
<form id="form-PUTapi-admins--admin-" data-method="PUT" data-path="api/admins/{admin}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-admins--admin-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-admins--admin-" onclick="tryItOut('PUTapi-admins--admin-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-admins--admin-" onclick="cancelTryOut('PUTapi-admins--admin-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-admins--admin-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/admins/{admin}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/admins/{admin}</code></b>
</p>
<p>
<label id="auth-PUTapi-admins--admin-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-admins--admin-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>admin</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="admin" data-endpoint="PUTapi-admins--admin-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific admin resource.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-admins--admin-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-admins--admin-" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="PUTapi-admins--admin-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTapi-admins--admin-" data-component="body" required  hidden>
<br>
The value must be one of <code>superadmin</code> or <code>editor</code>.</p>

</form>


## Delete Resource.

<small class="badge badge-darkred">requires authentication</small>

Delete a specific admin resource identified by the given id/key.

> Example request:

```bash
curl -X DELETE \
    "http://restful-example.web/api/admins/" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://restful-example.web/api/admins/"
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


<div id="execution-results-DELETEapi-admins--admin-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-admins--admin-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admins--admin-"></code></pre>
</div>
<div id="execution-error-DELETEapi-admins--admin-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admins--admin-"></code></pre>
</div>
<form id="form-DELETEapi-admins--admin-" data-method="DELETE" data-path="api/admins/{admin}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admins--admin-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-admins--admin-" onclick="tryItOut('DELETEapi-admins--admin-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-admins--admin-" onclick="cancelTryOut('DELETEapi-admins--admin-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-admins--admin-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/admins/{admin}</code></b>
</p>
<p>
<label id="auth-DELETEapi-admins--admin-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-admins--admin-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>admin</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="admin" data-endpoint="DELETEapi-admins--admin-" data-component="url" required  hidden>
<br>
*integer* - 
The identifier of a specific admin resource.</p>
</form>



