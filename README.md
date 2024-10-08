# sae-php-advanced

duration: 15 * 3h

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
--------------------------------------------------------------------------------
- object oriented programming
- example Circle class
- R: https://daylerees.com/php-pandas-classes
- T: Rectangle class
--------------------------------------------------------------------------------
- real world modeling
- example Dice class
- T: model another real world object
--------------------------------------------------------------------------------
- statics
- Rectangle::makeSquare(4);
- R: https://daylerees.com/php-pandas-statics/
--------------------------------------------------------------------------------
- laravel: what is a framework?
- laravel: installation
- laravel: directory structure
- laravel: namespaces
- R: https://laravel.com
--------------------------------------------------------------------------------
- headless architecture / separation of concerns
- backend server api
- frontend client gui
- R: https://www.nylas.com/api-guide/types-of-apis/http-apis/
- R: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data
- R: https://javascript.info/fetch
--------------------------------------------------------------------------------
- router
- controllers
- http exchange (request, response, status, body, headers)
- https://usebruno.com
- R: https://laravel.com/docs/11.x/requests#retrieving-input
- T: implement the missing example endpoints
- T: create a frontend for the bmi endpoint
--------------------------------------------------------------------------------
- demo project: blogging platform (medium, hashnode, ...)
- entity relationship diagram (erd.mermaid)
- models (Article.php)
- migrations
- R: https://laravel.com/docs/11.x/migrations
- https://tableplus.com
--------------------------------------------------------------------------------
- MVC
- Laravel, Ruby on Rails, ASP.NET, Django, AdonisJs, ...
- view
- router
- controller
- model
- migration
- mvc.mermaid
- R: https://developer.mozilla.org/en-US/docs/Glossary/MVC
--------------------------------------------------------------------------------
- ORM
- object relational mapping
- R: https://medium.com/@kavya1234/what-is-orm-b5d4ab4d0015
- R: https://laravel.com/docs/11.x/eloquent#introduction
--------------------------------------------------------------------------------
- crud
- index
- create
- update
- destroy
- R: https://laravel.com/docs/11.x/eloquent#retrieving-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#deleting-models
- T: add `subtitle` to articles and make it crudable
--------------------------------------------------------------------------------
- validation
- R: https://laravel.com/docs/11.x/validation#available-validation-rules
- T: validate article `subtitle`
--------------------------------------------------------------------------------
- users
- password hashing
- lifecycle hooks
- R: https://laravel.com/docs/11.x/eloquent#events-using-closures
- T: add more password rules
--------------------------------------------------------------------------------
- authentication
- api tokens
- authorization header
- middleware
- R: https://laravel.com/docs/11.x/sanctum#api-token-authentication
--------------------------------------------------------------------------------
- relationships (1:n)
- articles n:1 user
- R: https://phoenixnap.com/kb/database-relationships
- R: https://laravel.com/docs/11.x/eloquent-relationships
- T: add comments (n:1 article, n:1 user)
--------------------------------------------------------------------------------
- seeding
- https://fakerphp.github.io
- R: https://laravel.com/docs/11.x/seeding
- T: seed comments
--------------------------------------------------------------------------------
- filter
- order
- limit,offset
- T: add filter etc. to comments
--------------------------------------------------------------------------------
- relationships (n:m)
- tags n:m article
- crud tags
- assign tags
- filter by tags
--------------------------------------------------------------------------------
- extra topics:
- file uploads
- emails
- admins
- ...
