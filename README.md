# sae-backend-frameworks

duration: 13+ * 3h

learn about oop, mvc, rest apis and the laravel framework.

## setup

```bash
# install dependencies
composer install

# (re-)create database
npm run seed

# start server
npm run serve
```

## outline

- bash
- os package manager (brew.sh / scoop.sh)
- php cli
- composer
- T: using bash, create a folder with a main.php file and run it
- ........................................
- object oriented programming
- modeling the real world
- T: model  more real world objects
- ........................................
- architecture and frameworks
- laravel: setup
- laravel: overview
- namespaces and use
- T: install and explore laravel (https://laravel.com)
- ........................................
- api: headless backend
- api client (https://usebruno.com)
- router
- controllers
- http exchange (request, response)
- T: implement the missing example endpoints
- ........................................
- models
- migrations
- sqlite (http://tinyurl.com/mrx23v34)
- crud
- T: add another crud entity
- ........................................
- users
- validation
- hashing
- lifecycle hooks
- authentication
- middleware
- T: add endpoints to update and delete the user
- T: add more validation rules to the password
- ........................................
- relationships
- tweets (1:n)
- likes (n:m)
- seeding
- delete cascades
- faker (https://fakerphp.github.io/formatters/numbers-and-strings)
- T: seed a rich example scenario of users, tweets and likes.
- T: add dislikes
- ........................................
- timestamps (tweet->created_at)
- filtering
- sorting
- T: ...
- ........................................
- admin actions
- impersonate
- T: ...
- ........................................
- file system
- file uploads
- T: ...
- ........................................
- T: work on your own project
