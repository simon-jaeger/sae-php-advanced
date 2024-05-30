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
- R: https://daylerees.com/php-pandas-classes
- R: https://daylerees.com/php-pandas-inheritance/
- R: https://daylerees.com/php-pandas-scope/
- T: model  more real world objects
- ........................................
- statics
- namespaces
- architecture and frameworks
- R: https://daylerees.com/php-pandas-statics/
- R: https://daylerees.com/php-pandas-namespaces/
- ........................................
- laravel: setup
- laravel: overview
- R: https://laravel.com
- T: install laravel
- ........................................
- api: headless backend
- api client (https://usebruno.com)
- router
- controllers
- http exchange (request, response, status)
- T: implement the missing example endpoints
- R: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
- ........................................
- models
- migrations
- sqlite (http://tinyurl.com/mrx23v34)
- crud
- T: add more simple fields to your user (string, number, boolean)
- ........................................
- validation
- password hashing
- lifecycle hooks
- authentication
- middleware
- T: add more validation rules to the password
- ........................................
- file system
- file uploads
- user avatar
- T: ...
- ........................................
- relationships
- tweets? (1:n)
- ??? (n:m)
- seeding
- faker (https://fakerphp.github.io/formatters/numbers-and-strings)
- T: extend the database seeder
- T: add delete hooks for cleanup
- ........................................
- filtering
- sorting
- T: ...
- ........................................
- admin actions
- impersonate
- T: ...
- ........................................
- T: work on your own project
