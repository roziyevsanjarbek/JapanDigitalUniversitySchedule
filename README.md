| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |
|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|
|info| | | |item| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |
|_postman_id|name|schema|_exporter_id|name|item| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |
| | | | | |name|request| | | | | | | | | | | | | | | | |response| | | | | | | | | | | | | | | | | | | | | | |protocolProfileBehavior|
| | | | | | |auth| | | |method|header| | |body| | | |url| | | | |name|originalRequest| | | | | | | | | | | | | | |status|code|_postman_previewlanguage|header| |cookie|body|disableBodyPruning|
| | | | | | |type|bearer| | | |key|value|type|mode|formdata| | |raw|host|query| |path| |method|header| | |body| | | |url| | | | | | | | | |key|value| | | |
| | | | | | | |key|value|type| | | | | |key|value|type| | |key|value| | | |key|value|type|mode|formdata| | |raw|protocol|host|port|path|query| | | | | | | | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | |key|value|type| | | | | |key|value| | | | | | | | |
|d74da71b-7ee8-4eb4-9183-ce308544a5b2|JDU|https://schema.getpostman.com/json/collection/v2.1.0/collection.json|41484632|auth|register|bearer|token|637e37209012310b07f85805a5df78a7d1813e10c9bd4b4428847ec200366c8bb285194fe6426a86|string|POST|Accept|application/json|text|formdata|name|Sanjarbek|text|{{base_user}}register|{{base_user}}register| | | |success|POST|Accept|application/json|text|formdata|name|Sanjarbek|text|http://localhost:8090/api/register|http|localhost|8090|api| | |Created|201|json|Server|nginx/1.27.4| |"User successfully registered"| |
| | | | | | | | | | | | | | | |email|sanjarbek@gmail.com|text| | | | | | | | | | | |email|sanjarbek@gmail.com|text| | | | |register| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | |password|12345|text| | | | | | | | | | | |password|12345|text| | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | |coniformation_password|12345|text| | | | | | | | | | | |coniformation_password|12345|text| | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Fri, 21 Feb 2025 15:16:09 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |login| | | | |POST| | | | | | | |{{base_user}}login?email=sanjarbek@gmail.com&password=12345|{{base_user}}login|email|sanjarbek@gmail.com| |succes|POST| | | | | | | |http://localhost:8090/api/login?email=sanjarbek@gmail.com&password=12345|http|localhost|8090|api|email|sanjarbek@gmail.com|OK|200|json|Server|nginx/1.27.4| |{     "message": "User successfully logged in",     "user": {         "id": 11,         "name": "Sanjarbek",         "email": "sanjarbek@gmail.com",         "email_verified_at": null,         "created_at": "2025-02-21T15:16:09.000000Z",         "updated_at": "2025-02-21T15:16:09.000000Z"     },     "token": "1"|Um4aSCKqNcF21LnES4MTgCUmFDm5irit2xG5eTZo40b31072" }| |
| | | | | | | | | | | | | | | | | | | | |password|12345| | | | | | | | | | | | | | |login|password|12345| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Fri, 21 Feb 2025 15:18:10 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |user|bearer|token|{{token}}|string|GET|Accept|application/json|text| | | | |{{base_user}}user|{{base_user}}user| | | |success|GET|Accept|application/json|text| | | | |http://localhost:8090/api/user|http|localhost|8090|api| | |OK|200|json|Server|nginx/1.27.4| |{     "id": 11,     "name": "Sanjarbek",     "email": "sanjarbek@gmail.com",     "email_verified_at": null,     "created_at": "2025-02-21T15:16:09.000000Z",     "updated_at": "2025-02-21T15:16:09.000000Z" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |user| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 10:41:57 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |subjects|get subject|bearer|token|{{token}}|string|GET|Accept|application/json|text|formdata| | | |{{base_user}}subjects?perPage=5|{{base_user}}subjects|perPage|5| |success|GET|Accept|application/json|text|formdata| | | |http://localhost:8090/api/subjects?perPage=5|http|localhost|8090|api|perPage|5|OK|200|json|Server|nginx/1.27.4| |{     "current_page": 1,     "data": [         {             "id": 1,             "name": "est",             "created_at": "2025-02-21T13:11:20.000000Z",             "updated_at": "2025-02-21T13:11:20.000000Z"         },         {             "id": 2,             "name": "reprehenderit",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 3,             "name": "voluptatibus",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 4,             "name": "ad",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 5,             "name": "quo",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         }     ],     "first_page_url": "http://127.0.0.1:8090/api/subjects?page=1",     "from": 1,     "last_page": 2,     "last_page_url": "http://127.0.0.1:8090/api/subjects?page=2",     "links": [         {             "url": null,             "label": "&laquo; Previous",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/subjects?page=1",             "label": "1",             "active": true         },         {             "url": "http://127.0.0.1:8090/api/subjects?page=2",             "label": "2",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/subjects?page=2",             "label": "Next &raquo;",             "active": false         }     ],     "next_page_url": "http://127.0.0.1:8090/api/subjects?page=2",     "path": "http://127.0.0.1:8090/api/subjects",     "per_page": 5,     "prev_page_url": null,     "to": 5,     "total": 10 }|TRUE|
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |subjects| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:06:41 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |get subject|bearer|token|{{token}}|string|GET|Accept|application/json|text| | | | |{{base_user}}subjects/1|{{base_user}}subjects| | |1|success|GET|Accept|application/json|text| | | | |http://localhost:8090/api/subjects/1|http|localhost|8090|api| | |OK|200|json|Server|nginx/1.27.4| |{     "id": 1,     "name": "est",     "created_at": "2025-02-21T13:11:20.000000Z",     "updated_at": "2025-02-21T13:11:20.000000Z" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |subjects| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |1| | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:11:15 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |create|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|name|dsfgh|text|{{base_user}}subjects|{{base_user}}subjects| | | |success|POST|Accept|application/json|text|formdata|name|dsfgh|text|http://localhost:8090/api/subjects|http|localhost|8090|api| | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Subject created successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |subjects| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:32:13 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update|bearer|token|{{token}}|string|PUT|Accept|application/json|text|formdata| | | |{{base_user}}subjects/1?name=sdfgh|{{base_user}}subjects|name|sdfgh|1|success|PUT|Accept|application/json|text|formdata| | | |http://localhost:8090/api/subjects/1?name=sdfgh|http|localhost|8090|api|name|sdfgh|OK|200|json|Server|nginx/1.27.4| |{     "message": "Subject updated successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |subjects| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |1| | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:27:46 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete|bearer|token|{{token}}|string|DELETE|Accept|application/json|text|formdata|name|715-2454|text|{{base_user}}subjects/1|{{base_user}}subjects| | |1|success|DELETE|Accept|application/json|text|formdata|name|715-2454|text|http://localhost:8090/api/subjects/1|http|localhost|8090|api| | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Subject deleted successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |subjects| | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |1| | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:25:41 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |groups|get groups|bearer|token|{{token}}|string|GET|Accept|application/json|text|formdata| | | |{{base_user}}groups?perPage=5|{{base_user}}groups|perPage|5| |success|GET|Accept|application/json|text|formdata| | | |{{base_user}}groups?perPage=5| |{{base_user}}groups| | |perPage|5|OK|200|json|Server|nginx/1.27.4| |{     "current_page": 1,     "data": [         {             "id": 1,             "name": "eum",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 2,             "name": "odit",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 3,             "name": "totam",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 4,             "name": "delectus",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 5,             "name": "vel",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         }     ],     "first_page_url": "http://127.0.0.1:8090/api/groups?page=1",     "from": 1,     "last_page": 2,     "last_page_url": "http://127.0.0.1:8090/api/groups?page=2",     "links": [         {             "url": null,             "label": "&laquo; Previous",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/groups?page=1",             "label": "1",             "active": true         },         {             "url": "http://127.0.0.1:8090/api/groups?page=2",             "label": "2",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/groups?page=2",             "label": "Next &raquo;",             "active": false         }     ],     "next_page_url": "http://127.0.0.1:8090/api/groups?page=2",     "path": "http://127.0.0.1:8090/api/groups",     "per_page": 5,     "prev_page_url": null,     "to": 5,     "total": 10 }|TRUE|
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:50:39 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |get groups|bearer|token|{{token}}|string|GET|Accept|application/json|text| | | | |{{base_user}}groups/1|{{base_user}}groups| | |1|success|GET|Accept|application/json|text| | | | |{{base_user}}groups/1| |{{base_user}}groups| |1| | |OK|200|json|Server|nginx/1.27.4| |{     "id": 1,     "name": "eum",     "created_at": "2025-02-21T13:11:21.000000Z",     "updated_at": "2025-02-21T13:11:21.000000Z" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:54:09 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |create|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|name|dsfgh|text|{{base_user}}subjects|{{base_user}}subjects| | | |success|POST|Accept|application/json|text|formdata|name|dfregtrhyu|text|{{base_user}}groups| |{{base_user}}groups| | | | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Group created successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 12:18:34 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update|bearer|token|{{token}}|string|PUT|Accept|application/json|text|formdata| | | |{{base_user}}groups/1?name=sdfgh|{{base_user}}groups|name|sdfgh|1|success|PUT|Accept|application/json|text|formdata| | | |{{base_user}}groups/1?name=sdfgh| |{{base_user}}groups| |1|name|sdfgh|OK|200|json|Server|nginx/1.27.4| |{     "message": "Group updated successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:54:55 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete|bearer|token|{{token}}|string|DELETE|Accept|application/json|text|formdata|name|715-2454|text|{{base_user}}groups/1|{{base_user}}groups| | |1|success|DELETE|Accept|application/json|text|formdata|name|715-2454|text|{{base_user}}groups/1| |{{base_user}}groups| |1| | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Group deleted successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:55:41 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |rooms|get rooms|bearer|token|{{token}}|string|GET|Accept|application/json|text|formdata| | | |{{base_user}}rooms?perPage=5|{{base_user}}rooms|perPage|5| |success|GET|Accept|application/json|text|formdata| | | |{{base_user}}rooms?perPage=5| |{{base_user}}rooms| | |perPage|5|OK|200|json|Server|nginx/1.27.4| |{     "current_page": 1,     "data": [         {             "id": 1,             "name": "sit",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 2,             "name": "nesciunt",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 3,             "name": "omnis",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 4,             "name": "dolorem",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         },         {             "id": 5,             "name": "quidem",             "created_at": "2025-02-21T13:11:21.000000Z",             "updated_at": "2025-02-21T13:11:21.000000Z"         }     ],     "first_page_url": "http://127.0.0.1:8090/api/rooms?page=1",     "from": 1,     "last_page": 2,     "last_page_url": "http://127.0.0.1:8090/api/rooms?page=2",     "links": [         {             "url": null,             "label": "&laquo; Previous",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/rooms?page=1",             "label": "1",             "active": true         },         {             "url": "http://127.0.0.1:8090/api/rooms?page=2",             "label": "2",             "active": false         },         {             "url": "http://127.0.0.1:8090/api/rooms?page=2",             "label": "Next &raquo;",             "active": false         }     ],     "next_page_url": "http://127.0.0.1:8090/api/rooms?page=2",     "path": "http://127.0.0.1:8090/api/rooms",     "per_page": 5,     "prev_page_url": null,     "to": 5,     "total": 10 }|TRUE|
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 12:06:02 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |get room|bearer|token|{{token}}|string|GET|Accept|application/json|text| | | | |{{base_user}}rooms/1|{{base_user}}rooms| | |1|success|GET|Accept|application/json|text| | | | |{{base_user}}rooms/1| |{{base_user}}rooms| |1| | |OK|200|json|Server|nginx/1.27.4| |{     "id": 1,     "name": "sit",     "created_at": "2025-02-21T13:11:21.000000Z",     "updated_at": "2025-02-21T13:11:21.000000Z" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 12:06:39 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |create|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|name|dsfgh|text|{{base_user}}rooms|{{base_user}}rooms| | | |success|POST|Accept|application/json|text|formdata|name|dsfgh|text|{{base_user}}rooms| |{{base_user}}rooms| | | | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Room successfully created" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 12:17:17 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update|bearer|token|{{token}}|string|PUT|Accept|application/json|text|formdata| | | |{{base_user}}groups/1?name=sdfgh|{{base_user}}groups|name|sdfgh|1|success|PUT|Accept|application/json|text|formdata| | | |{{base_user}}groups/1?name=sdfgh| |{{base_user}}groups| |1|name|sdfgh|OK|200|json|Server|nginx/1.27.4| |{     "message": "Group updated successfully!" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 11:54:55 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete|bearer|token|{{token}}|string|DELETE|Accept|application/json|text|formdata|name|715-2454|text|{{base_user}}rooms/1|{{base_user}}rooms| | |1|success|DELETE|Accept|application/json|text|formdata|name|715-2454|text|{{base_user}}rooms/1| |{{base_user}}rooms| |1| | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Room successfully deleted" }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 12:07:29 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |GroupSubject|create|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|group_id|5|text|{{base_user}}group-subjects|{{base_user}}group-subjects| | | |success|POST|Accept|application/json|text|formdata|group_id|5|text|{{base_user}}group-subjects| |{{base_user}}group-subjects| | | | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Group attached" }| |
| | | | | | | | | | | | | | | |subject_id|5|text| | | | | | | | | | | |subject_id|5|text| | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Sat, 22 Feb 2025 16:32:16 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update subject|bearer|token|{{token}}|string|PUT|Accept|application/json|text| | | | |{{base_user}}group-subjects/1?group_id=1&subject_id=1|{{base_user}}group-subjects|group_id|1|1|success|PUT|Accept|application/json|text| | | | |{{base_user}}group-subjects/1?group_id=1&subject_id=1| |{{base_user}}group-subjects| |1|group_id|1|OK|200|json|Server|nginx/1.27.4| |{     "message": "Group updated" }| |
| | | | | | | | | | | | | | | | | | | | |subject_id|1| | | | | | | | | | | | | | | |subject_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:32:11 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete subject|bearer|token|{{token}}|string|DELETE|Accept|application/json|text| | | | |{{base_user}}group-subjects/1?group_id=1&subject_id=1|{{base_user}}group-subjects|group_id|1|1|success|DELETE|Accept|application/json|text| | | | |{{base_user}}group-subjects/1?group_id=1&subject_id=1| |{{base_user}}group-subjects| |1|group_id|1|OK|200|json|Server|nginx/1.27.4| |{     "message": "Group detached" }| |
| | | | | | | | | | | | | | | | | | | | |subject_id|1| | | | | | | | | | | | | | | |subject_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:33:43 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |GroupStudent|store|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|group_id|3|text|{{base_user}}group-students|{{base_user}}group-students| | | |success|POST|Accept|application/json|text|formdata|group_id|3|text|{{base_user}}group-students| |{{base_user}}group-students| | | | |OK|200|json|Server|nginx/1.27.4| |{     "message": "Student added to group" }| |
| | | | | | | | | | | | | | | |student_id|4|text| | | | | | | | | | | |student_id|4|text| | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 08:20:29 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update student|bearer|token|{{token}}|string|PUT|Accept|application/json|text| | | | |{{base_user}}group-students/1?group_id=1&student_id=1|{{base_user}}group-students|group_id|1|1|success|PUT|Accept|application/json|text| | | | |{{base_user}}group-students/1?group_id=1&student_id=1| |{{base_user}}group-students| |1|group_id|1|OK|200|json|Server|nginx/1.27.4| |{     "message": "Student updated to group" }| |
| | | | | | | | | | | | | | | | | | | | |student_id|1| | | | | | | | | | | | | | | |student_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:36:00 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete studendt|bearer|token|{{token}}|string|DELETE|Accept|application/json|text| | | | |{{base_user}}group-students/1?group_id=1&student_id=1|{{base_user}}group-students|group_id|1|1|success|DELETE|Accept|application/json|text| | | | |{{base_user}}group-students/1?group_id=1&student_id=1| |{{base_user}}group-students| |1|group_id|1|OK|200|json|Server|nginx/1.27.4| |{     "message": "Student deleted to group" }| |
| | | | | | | | | | | | | | | | | | | | |student_id|1| | | | | | | | | | | | | | | |student_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:37:06 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |SubjectTeachers|store|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|subject_id|3|text|{{base_user}}subject-teachers|{{base_user}}subject-teachers| | | |success|POST|Accept|application/json|text|formdata|subject_id|3|text|{{base_user}}subject-teachers| |{{base_user}}subject-teachers| | | | |Created|201|json|Server|nginx/1.27.4| |{     "message": "Subject Teacher Added" }| |
| | | | | | | | | | | | | | | |teacher_id|4|text| | | | | | | | | | | |teacher_id|4|text| | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 08:22:09 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |New Request|bearer|token|{{token}}|string|PUT|Accept|application/json|text| | | | |{{base_user}}subject-teachers/1?subject_id=1&teacher_id=1|{{base_user}}subject-teachers|subject_id|1|1|success|PUT|Accept|application/json|text| | | | |{{base_user}}subject-teachers/1?subject_id=1&teacher_id=1| |{{base_user}}subject-teachers| |1|subject_id|1|Created|201|json|Server|nginx/1.27.4| |{     "message": "Subject Teacher Updated" }| |
| | | | | | | | | | | | | | | | | | | | |teacher_id|1| | | | | | | | | | | | | | | |teacher_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:43:38 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete subject|bearer|token|{{token}}|string|DELETE|Accept|application/json|text| | | | |{{base_user}}subject-teachers/1?subject_id=1&teacher_id=1|{{base_user}}subject-teachers|subject_id|1|1|success|DELETE|Accept|application/json|text| | | | |{{base_user}}subject-teachers/1?subject_id=1&teacher_id=1| |{{base_user}}subject-teachers| |1|subject_id|1|Created|201|json|Server|nginx/1.27.4| |{     "message": "Subject Teacher Deleted" }| |
| | | | | | | | | | | | | | | | | | | | |teacher_id|1| | | | | | | | | | | | | | | |teacher_id|1| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 15:44:49 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | |role-users|store|bearer|token|{{token}}|string|POST|Accept|application/json|text|formdata|role_id|2|text|{{base_user}}role-users|{{base_user}}role-users| | | |success|POST|Accept|application/json|text|formdata|role_id|2|text|{{base_user}}role-users| |{{base_user}}role-users| | | | |OK|200|json|Server|nginx/1.27.4| |{     "message": "User role added successfully." }| |
| | | | | | | | | | | | | | | |user_id|2|text| | | | | | | | | | | |user_id|2|text| | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 14:37:32 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |update|bearer|token|{{token}}|string|PUT|Accept|application/json|text|formdata| | | |{{base_user}}role-users/2?role_id=2&user_id=2|{{base_user}}role-users|role_id|2|2|success|PUT|Accept|application/json|text|formdata| | | |{{base_user}}role-users/2?role_id=2&user_id=2| |{{base_user}}role-users| |2|role_id|2|OK|200|json|Server|nginx/1.27.4| |{     "message": "User role updated successfully." }| |
| | | | | | | | | | | | | | | | | | | | |user_id|2| | | | | | | | | | | | | | | |user_id|2| | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 14:44:39 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
| | | | | |delete|bearer|token|{{token}}|string|DELETE|Accept|application/json|text|formdata| | | |{{base_user}}role-users/2?role_id=2|{{base_user}}role-users|role_id|2|2|success|DELETE|Accept|application/json|text|formdata| | | |{{base_user}}role-users/2?role_id=2| |{{base_user}}role-users| |2|role_id|2|OK|200|json|Server|nginx/1.27.4| |{     "message": "User role deleted successfully." }| |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Content-Type|application/json| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Transfer-Encoding|chunked| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Connection|keep-alive| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |X-Powered-By|PHP/8.3.17| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Cache-Control|no-cache, private| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Date|Mon, 24 Feb 2025 14:40:20 GMT| | | |
| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |Access-Control-Allow-Origin|*| | | |
