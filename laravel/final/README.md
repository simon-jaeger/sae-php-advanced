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
- php (v8.2+)
- composer (v2.6+)
- phpstorm or...
- ...vscode with [intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
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
- laravel: what is a framework?
- laravel: installation
- laravel: directory structure and namespaces
- R: https://laravel.com
- ........................................
- headless architecture / separation of concerns
- backend server api
- frontend client gui
- R: https://www.nylas.com/api-guide/types-of-apis/http-apis/
- R: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data
- R: https://javascript.info/fetch
- T: add an api endpoint DELETE /todos that deletes all todos, use it in the gui
- T: make the gui prettier
- ........................................
- router
- controllers
- http exchange (request, response, status, body, headers)
- https://usebruno.com
- R: https://laravel.com/docs/11.x/requests#retrieving-input
- T: implement the missing example endpoints
- ........................................
- demo project: blogging platform (medium, hashnode, ...)
- entity relationship diagram (erd.mermaid)
- models (Article.php)
- migrations
- R: https://laravel.com/docs/11.x/migrations
- https://tableplus.com
- ........................................
- MVC
- view
- router
- controller
- model
- migration
- mvc.mermaid
- R: https://developer.mozilla.org/en-US/docs/Glossary/MVC
- ........................................
- ORM
- object relational mapping
- R: https://medium.com/@kavya1234/what-is-orm-b5d4ab4d0015
- R: https://laravel.com/docs/11.x/eloquent#introduction
- ........................................
- CRUD and REST
- index
- create
- update
- delete
- W: https://www.youtube.com/watch?v=-MTSQjw5DrM
- R: https://laravel.com/docs/11.x/eloquent#retrieving-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#deleting-models
- T: add `content` to articles and make it crudable
- ........................................
- validation
- R: https://laravel.com/docs/11.x/validation#available-validation-rules
- T: validate article `content` 
- ........................................
- users
- password hashing
- lifecycle hooks
- R: https://laravel.com/docs/11.x/eloquent#events-using-closures
- T: add more password rules
- ........................................
- authentication
- api tokens
- middleware
- R: https://laravel.com/docs/11.x/sanctum#api-token-authentication
- ........................................
- relationships
- articles n:1 user
- R: https://laravel.com/docs/11.x/eloquent-relationships
- T: add comments (n:1 article, n:1 user)
- ........................................
- seeding
- https://fakerphp.github.io
- R: https://laravel.com/docs/11.x/seeding
- T: seed comments
- ........................................
- filter
- order
- limit,offset
- T: add filter etc. to comments
- ........................................
- file system
- file uploads
- user avatar
- T: add `image` to articles
- ........................................
- advanded features: admin actions, impersonate, ...
- ...
- T: workshop
- T: presentations

