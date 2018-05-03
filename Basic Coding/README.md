REST endpoint that accepts JSON as input and performs CRUD operation based on the input.

## dbConnect.php
Database access configuration and initialization.

## findUserReview.php

Get user_review data with the specified id.

Method: GET

Example:

key: review

value: {"id":"5"}

response: {"id":"5","order_id":"2","product_id":"2","user_id":"2","rating":"5","review":"Absolutely Delicious","created_at":"2018-05-02 19:10:54","updated_at":null}

## getAllUserReview.php

Get all user_review data in user_review table.

Method : GET

Example:

response: [{"id":"5","order_id":"2","product_id":"2","user_id":"2","rating":"5","review":"Absolutely Delicious","created_at":"2018-05-02 19:10:54","updated_at":null},{"id":"6","order_id":"4","product_id":"3","user_id":"6","rating":"3","review":"Not so bad","created_at":"2018-05-03 11:02:37","updated_at":null}]

## addUserReview.php

Add new user_review data to the user_review table.

Method : POST

Example:

key: review

value: {"order_id":"4","product_id":"3","user_id":"6","rating":"3","review":"Not so bad"}

response: OK

## updateReview.php

Update a record in user_review table.

Method : POST

Example:

key: review

value: {"order_id":"4","product_id":"3","user_id":"6","rating":"4","review":"Pretty Enjoyable"}

response: OK

## deleteReview.php

Delete a record in user_review table.

Method : POST

Example:

key: review

value: {"id":"5"}

response: OK
