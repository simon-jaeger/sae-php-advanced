# sae-backend-frameworks

duration: 15 * 3h

learn about oop, mvc, apis and the laravel framework.

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
- php (v8.3+)
- composer (v2.7+)
- T: use bash to create a folder, create a php file, run it
- ........................................
- object oriented programming
- example Circle class
- R: https://daylerees.com/php-pandas-classes
- T: Rectrangle class etc.
- ........................................
- modeling the real world
- example Coin class
- T: Dice class etc.
- ........................................
- statics
- R: https://daylerees.com/php-pandas-statics/
- T: Color static class
- ........................................
- architecture and frameworks
- laravel: overview and installation
- hello world
- R: https://laravel.com
- ........................................
- api: headless backend
- https://usebruno.com
- router
- controllers
- http exchange (request, response, status)
- T: implement the missing example endpoints
- R: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
- ........................................
- demo project: blogging platform (medium, hashnode, ...)
- models (Article.php)
- migrations
- crud
- https://tableplus.com
- T: add `content` to articles
- ........................................
- users
- validation
- password hashing
- lifecycle hooks
- authentication
- middleware
- T: add more password rules
- T: validate email not already taken
- ........................................
- relationships
- articles n:1 user
- T: add comments (n:1 article, n:1 user)
- ........................................
- seeding
- https://fakerphp.github.io
- T: seed comments
- ........................................
- filter
- search
- sort
- paginate
- T: add filter etc. to comments
- ........................................
- file system
- file uploads
- user avatar
- T: add `image` to articles
- ........................................
- n:m relationships (tags)
- ........................................
- frontend example (js fetch)
- ........................................
- advanded
- admin actions
- impersonate
- delete hooks for cleanup
- T: ...
- T: work on your own project
