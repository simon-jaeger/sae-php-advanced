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
- headless architecture
- backend server api
- frontend client spa
- R: https://www.nylas.com/api-guide/types-of-apis/http-apis/
- R: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data
- R: https://javascript.info/fetch
- ........................................
- router
- controllers
- http exchange (request, response, status)
- https://usebruno.com
- T: implement the missing example endpoints
- ........................................
- demo project: blogging platform (medium, hashnode, ...)
- entity relationship diagram (erd.mermaid)
- models (Article.php)
- migrations
- https://tableplus.com
- ........................................
- crud
- index
- create
- update
- delete
- T: add `content` to articles and make it crudable
- ........................................
- validation
- T: validate article `content` 
- ........................................
- users
- password hashing
- lifecycle hooks
- T: add more password rules
- ........................................
- authentication
- api tokens
- middleware
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
- frontend example (js fetch etc.)
- ........................................
- advanded features
- admin actions
- impersonate
- delete hooks for cleanup
- T: ...
- T: work on your own project
- T: progress presentations

