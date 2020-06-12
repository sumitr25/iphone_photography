## iPS Frontend Developer Hiring Test

Create a simple blog article page with a popup form.

The design has to perfectly match the provided design on desktop and iPhone 11 Pro. However, it also has to look great on other screen resolutions such as iPad and other phones. 

It should be fully cross-browser compatible (latest versions of Chrome, Safari, Firefox and Edge) and properly work and look good on all iOS 13 and iPadOS supported Apple devices in both portrait and landscape modes as well as on the Desktop.

You can get to the full design with all relevant details and assets in Figma: https://www.figma.com/file/gMF6RwXWY2Z6vCDg19jHck/fe-developers-test

## Requiremets
- Use Laravel 7, Vue.js 2 and SASS/SCSS 
- Laravel installation also installs Vue.js by default so by following instructions in this link the project should be ready in minutes
- No other 3rd party libraries or frameworks such as Bootstrap or jQuery are allowed; with the exception of normalize.css.
- Image and other relevant assets have to automatically load in higher resolution on 2x and 3x retina screens.
- Use BEM methodology for class naming.
- The popup has to appear when the button on the main screen is clicked.
- Implement basic email validation that is triggered on the form submit.


## Server Requirements

## PHP 

- PHP >= 7.2.5
- BCMath PHP Extension *
- Ctype PHP Extension *
- Fileinfo PHP extension *
- JSON PHP Extension *
- Mbstring PHP Extension *
- OpenSSL PHP Extension *
- PDO PHP Extension *
- Tokenizer PHP Extension *
- XML PHP Extension *

## NPM 

- NPM >= 5
- Node >= 8.5.x 

* : When install PHP >= 7.2.5, generally those modules will auto install and enable on system, but some time those modules will not install or enable on system due to server permission/setting issues so we need to install manually.

Make Sure Composer is intalled in system.

## Installation Process

1.  Make sure that you have Node.js > = v8.15.1 and npm >= v5 .
2.  Open terminal  and go to your server localhost folder.
3.  Clone this repo using `git clone https://github.com/sumitr25/iphone_photography.git`
4.  Set read/write permission of the folder.
5.  Go inside the folder by terminal and Run `composer create-project --prefer-dist laravel/laravel PROJECT_NAME`
6.  Once all setup succesfully then Run `php artisan serve`. It will give you the host link like `http://127.0.0.1:8000`.
7.  Open other Terminal and Run `npm install`.
8.  Once all setup successfully then Run `npm run development` or `npm run watch`. This command will create build file of project and compress it in one file and auto move to set path in code. 

## Keep 

- If `http://127.0.0.1:8000`._ link is still loading on browser and showing blank page then please use follow this steps
- Kill the current process by `Ctrl + c` and Run `php -S localhost:8000 -t public/`. Some time public folder permission is not setup on server. So we need to setup from this command.
