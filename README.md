# PHP REST API

This site may be ugly but it's mighty! \
I'll fix the CSS later.

Simple REST API project built in using php and curl. \
The ultimate goal is to re-create a Laravel/MVC-like platform at least at a basic level.

## API endpoints

---

### Show all results and filter with query strings

- api/post/index.php
- api/post/index.php?author='author'
- api/post/index.php?category='category'

### Show single result with details

- api/post/show.php?id=id

### Show all results

- api/post/index.php

### Delete record by id

- api/post/destroy.php?id=id

### Edit post by id

###### id is retreived from \_GET and passed on form submit by a hidden form field

- api/post/edit.php
