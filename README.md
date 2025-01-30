# sae-php-advanced

duration: 15 * 3h

## dependencies

- php 8.4+
- composer 2.8+
- extension=pdo_sqlite (php --ini)

## setup

```bash
composer install # install dependencies
php artisan migrate:fresh # (re-)create database
```

## common issues

- php installed via xampp might cause issues. if that happens, install it with homebrew/scoop instead.
- your anti virus might block/delete files inside laravel. make sure to whitelist it in that case.

## outline

- terminal and bash
- os package manager (brew.sh / scoop.sh)
- install php and composer
- R: https://www.earthdatascience.org/courses/intro-to-earth-data-science/open-reproducible-science/bash/bash-commands-to-manage-directories-files/
- T: use bash to create a folder and a php file
- T: write php code that outputs the text "Hello, world!"
- T: run the php file in your terminal (php hello_world.php)
--------------------------------------------------------------------------------
- basics review
- R: https://daylerees.com/php-pandas-variables-and-assignment/
- R: https://daylerees.com/php-pandas-strings/
- R: https://daylerees.com/php-pandas-arrays/
- R: https://daylerees.com/php-pandas-forks/
- R: https://daylerees.com/php-pandas-loops/
- R: https://daylerees.com/php-pandas-functions/
- T: use php to count from 0 to 100
- T: use php to count down from 100 to 0 and skip uneven numbers
- T: FizzBuzz
--------------------------------------------------------------------------------
- object oriented programming
- example Circle class
- R: https://daylerees.com/php-pandas-classes
- T: Rectangle class
--------------------------------------------------------------------------------
- real world modeling
- example Dice class
- T: model another real world object
- --------------------------------------------------------------------------------
- inheritance
- Circle extends Shape
- R: https://daylerees.com/php-pandas-inheritance/
- T: create another inheritance example
- --------------------------------------------------------------------------------
- statics
- Rectangle::makeSquare(4);
- Util::pickRandom($array);
- R: https://daylerees.com/php-pandas-statics/
--------------------------------------------------------------------------------
- headless architecture
- backend server api
- frontend client gui
- hello world and sum examples
- R: https://www.nylas.com/api-guide/types-of-apis/http-apis/
- R: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data
- R: https://javascript.info/fetch
- T: create a bmi app
--------------------------------------------------------------------------------
- assignments
- R: https://canvas.sae.edu/courses/20093/assignments
- T: start planning your project
--------------------------------------------------------------------------------
- laravel: what is a framework?
- laravel: installation
- laravel: directory structure
- laravel: namespaces and helpers
- laravel: hello world
- R: https://laravel.com
- R: https://laravel.com/docs/11.x/helpers
- T: try the helper classes Arr and Number
--------------------------------------------------------------------------------
- router
- controllers
- http exchange (request, response, status, body, headers)
- https://usebruno.com
- T: implement the missing example endpoints
- T: create a frontend for the rps endpoint
--------------------------------------------------------------------------------
- demo project: blogging platform (medium, hashnode, ...)
- models (Article.php)
- migrations
- T: create a model and migration for your own project
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
- orm.md
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
- T: make your own model crudable
