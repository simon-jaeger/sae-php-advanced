# sae-php-advanced

duration: 15 * 3h

day 1
--------------------------------------------------------------------------------
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
- T: Rectangle class
- --------------------------------------------------------------------------------
- statics
- Util::pickRandom($array);
- T: add more util methods
--------------------------------------------------------------------------------
- inheritance
- extends
- virtual methods
- named constructors
--------------------------------------------------------------------------------
- real world modeling
- example Dice class
--------------------------------------------------------------------------------
- R: https://daylerees.com/php-pandas-classes
- R: https://daylerees.com/php-pandas-statics/
- R: https://daylerees.com/php-pandas-inheritance/
- T: create another inheritance example
- T: model another real world object

day 2
--------------------------------------------------------------------------------
- headless architecture / spa
- backend server api
- frontend client gui
- hello world and sum examples
- R: https://www.nylas.com/api-guide/types-of-apis/http-apis/
- R: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data
- R: https://javascript.info/fetch
- T: create a bmi app
- T: create (and present) another small app

day 3
--------------------------------------------------------------------------------
- laravel: intro
- laravel: installation
- laravel: directory structure
- laravel: namespaces and helpers
- laravel: hello laravel endpoint
- R: https://laravel.com
--------------------------------------------------------------------------------
- router
- controllers
- http exchange (request, response, status, body, headers)
- https://usebruno.com
- T: implement the missing example endpoints
- T: create a frontend for the rps endpoint (JSON.stringify instead of URLSearchParams)

day 4
--------------------------------------------------------------------------------
- MVC
- views
- router
- controllers
- models
- migrations
- R: https://developer.mozilla.org/en-US/docs/Glossary/MVC
- mvc.mermaid
--------------------------------------------------------------------------------
- demo project: blogging platform (medium, hashnode, ...)
- models (Article.php)
- migrations
- GET /articles -> Article::all()
- T: create a model, migration and index endpoint for your own project
--------------------------------------------------------------------------------
- assignments
- R: https://canvas.sae.edu/courses/21221/assignments
- T: start planning your project


day 5
--------------------------------------------------------------------------------
- ORM
- object relational mapping
- orm.md
- R: https://www.freecodecamp.org/news/what-is-an-orm-the-meaning-of-object-relational-mapping-database-tools/
--------------------------------------------------------------------------------
- crud
- index
- create
- update
- destroy
- table plus: https://tableplus.com
- R: https://laravel.com/docs/11.x/eloquent#retrieving-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#inserting-and-updating-models
- R: https://laravel.com/docs/11.x/eloquent#deleting-models
- T: make your own model crudable
--------------------------------------------------------------------------------
- validation
- R: https://laravel.com/docs/11.x/validation#available-validation-rules
- T: task add validation to your own model
