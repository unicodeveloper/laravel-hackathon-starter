![](https://cloud.githubusercontent.com/assets/2946769/13175239/6950a682-d709-11e5-910e-b065a6cf5617.jpg)

# Laravel Hackathon Starter - SUSUMU 進
![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg) [![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-hackathon-starter.svg)](https://travis-ci.org/unicodeveloper/laravel-hackathon-starter) [![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-hackathon-starter.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-hackathon-starter)

If you have attended any hackathons in the past, then you know how much time it takes to get a project started: decide on what to build, pick a programming language, pick a web framework, pick a CSS framework. A while later, you might have an initial project up on GitHub and only then can other team members start contributing. Or how about doing something as simple as *Sign in with Facebook* authentication? You can spend hours on it if you are not familiar with how OAuth 2.0 works.

Even if you are not using this for a hackathon, Laravel Hackathon Starter is sure to save any developer hours or even days of development time and can serve as a learning guide for web developers.

Laravel is a web application framework with expressive, elegant syntax. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel Hackathon Starter is a boilerplate application developed with Laravel 5.2 to keep you ahead in hackathons.

<h4 align="center">Modern Theme</h4>

![](https://cloud.githubusercontent.com/assets/2946769/13172250/83f1ff5c-d6f7-11e5-9fb6-abc44ef0b550.png)

<h4 align="center">API Examples</h4>

![](https://cloud.githubusercontent.com/assets/2946769/13172331/d0a46b8c-d6f7-11e5-9aff-954f75133155.png)

Table of Contents
-----------------

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Generator](#generator)
- [Obtaining API Keys](#obtaining-api-keys)
- [Project Structure](#project-structure)
- [List of Packages](#list-of-packages)
- [Useful Tools and Resources](#useful-tools-and-resources)
- [Recommended Design Resources](#recommended-design-resources)
- [Recommended Laravel Libraries](#recommended-laravel-libraries)
- [Pro Tips](#pro-tips)
- [FAQ](#faq)
- [How It Works](#how-it-works-mini-guides)
- [Laravel Eloquent Cheatsheet](#laravel-eloquent-cheatsheet)
- [Deployment](#deployment)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [License](#license)

Features
--------

- **Local Authentication** using Email and Password
- **OAuth 1.0a Authentication** via Twitter
- **OAuth 2.0 Authentication** via Facebook, Google, GitHub, LinkedIn, Instagram
- Flash notifications
- MVC Project Structure
- Bootstrap 3
- Contact Form (powered by Mailgun, Sendgrid or Mandrill)
- **Account Management**
 - Gravatar
 - Profile Details
 - Change Password
 - Forgot Password
 - Reset Password
 - Delete Account
 - CSRF protection
 - **API Examples**: Facebook, Foursquare, Last.fm, Tumblr, Twitter, Stripe, LinkedIn and more.

Prerequisites
-------------

- [Mysql or Postgresql](https://www.mysql.com/ or http://www.postgresql.org/)
- [PHP 5.4+](http://php.net/)
- Command Line Tools
 - <img src="http://deluge-torrent.org/images/apple-logo.gif" height="17">&nbsp;**Mac OS X:** [Xcode](https://itunes.apple.com/us/app/xcode/id497799835?mt=12) (or **OS X 10.9+**: `xcode-select --install`)
 - <img src="http://dc942d419843af05523b-ff74ae13537a01be6cfec5927837dcfe.r14.cf1.rackcdn.com/wp-content/uploads/windows-8-50x50.jpg" height="17">&nbsp;**Windows:** [Visual Studio](https://www.visualstudio.com/products/visual-studio-community-vs)
 - <img src="https://lh5.googleusercontent.com/-2YS1ceHWyys/AAAAAAAAAAI/AAAAAAAAAAc/0LCb_tsTvmU/s46-c-k/photo.jpg" height="17">&nbsp;**Ubuntu** / <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Logo_Linux_Mint.png" height="17">&nbsp;**Linux Mint:** `sudo apt-get install build-essential`
 - <img src="http://i1-news.softpedia-static.com/images/extra/LINUX/small/slw218news1.png" height="17">&nbsp;**Fedora**: `sudo dnf groupinstall "Development Tools"`
 - <img src="https://en.opensuse.org/images/b/be/Logo-geeko_head.png" height="17">&nbsp;**OpenSUSE:** `sudo zypper install --type pattern devel_basis`

**Note:** If you are new to Laravel, I recommend to watch
[Laravel From Scratch](https://laracasts.com/series/laravel-5-from-scratch) screencast by Jeffery Way that teaches Laravel 5 from scratch. Alternatively,
here is another great tutorial for building a project management app for beginners/intermediate developers - [How to build a project management app in Laravel 5](http://goodheads.io/2015/09/16/how-to-build-a-project-management-app-in-laravel-5-part-1/).

Getting Started
---------------

#### Via Cloning The Repository:

```bash
# Get the project
git clone https://github.com/unicodeveloper/laravel-hackathon-starter.git hackathon-starter-pack

# Change directory
cd hackathon-starter-pack

# Copy .env.example to .env
cp .env.example .env

# Generate application secure key (in .env file)
php artisan key:generate

# Create a database (with mysql or postgresql)
# And update .env file with database credentials
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_DATABASE=laravelhackathon
# DB_USERNAME=root
# DB_PASSWORD=root

# Install Composer dependencies
composer install

# Run your migrations
php artisan migrate

php artisan serve
```

#### Via The Installer:

First, download the Laravel Hackathon Starter Pack Installer using Composer:

    composer global require "unicodeveloper/hackathon-installer"

Make sure to place the `~/.composer/vendor/bin` directory (or the equivalent directory for your OS) in your PATH so the `larathon` executable can be located by your system.

Once installed, the `larathon new` command will create a fresh Laravel Hackathon Starter Pack installation in the directory you specify. For instance, `larathon new mvp` will create a directory named `mvp` containing a fresh Laravel Hackathon Starter Pack installation with all of it's dependencies already installed. This method of installation is much faster than installing via Composer:

    larathon new mvp

#### Via Composer Create-Project

Alternatively, you may also install Laravel Hackathon Starter Pack by issuing the Composer `create-project` command in your terminal:

    composer create-project --prefer-dist unicodeveloper/laravel-hackathon-starter hotel

This starter pack includes the following APIs. You will need to obtain appropriate credentials like Client ID, zClient secret, API key, or Username & Password by going through each provider and generate new credentials.

* Cloudder
* Twitter
* Twillo
* Github
* Slack
* Socialite Providers
* Socialite LinkedIn

Obtaining API Keys
------------------

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png" width="200">
- Visit [Google Cloud Console](https://cloud.google.com/console/project)
- Click on the **Create Project** button
- Enter *Project Name*, then click on **Create** button
- Then click on *APIs & auth* in the sidebar and select *API* tab
- Click on **Google+ API** under *Social APIs*, then click **Enable API**
- Next, under *APIs & auth* in the sidebar click on *Credentials* tab
- Click on **Create new Client ID** button
- Select *Web Application* and click on **Configure Consent Screen**
- Fill out the required fields then click on **Save**
- In the *Create Client ID* modal dialog:
 - **Application Type**: Web Application
 - **Authorized Javascript origins**: http://localhost:3000
 - **Authorized redirect URI**: http://localhost:3000/auth/google/callback
- Click on **Create Client ID** button
- Copy and paste *Client ID* and *Client secret* keys into `.env`

**Note:** When you ready to deploy to production don't forget to
add your new url to *Authorized Javascript origins* and *Authorized redirect URI*,
e.g. `http://my-awesome-app.herokuapp.com` and
`http://my-awesome-app.herokuapp.com/auth/google/callback` respectively.
The same goes for other providers.

<hr>

<img src="http://www.doit.ba/img/facebook.jpg" width="200">
- Visit [Facebook Developers](https://developers.facebook.com/)
- Click **My Apps**, then select **Add a New App* from the dropdown menu
- Select **Website** platform and enter a new name for your app
- Click on the **Create New Facebook App ID** button
- Choose a **Category** that best describes your app
- Click on **Create App ID** button
- In the upper right corner click on **Skip Quick Star**
- Copy and paste *App ID* and *App Secret* keys into `.env`
 - **Note:** *App ID* is **clientID**, *App Secret* is **clientSecret**
- Click on the *Settings* tab in the left nav, then click on **+ Add Platform**
- Select **Website**
- Enter `http://localhost:3000` under *Site URL*

**Note:** After a successful sign in with Facebook, a user will be redirected back to home page with appended hash `#_=_` in the URL. It is *not* a bug. See this [Stack Overflow](https://stackoverflow.com/questions/7131909/facebook-callback-appends-to-return-url) discussion for ways to handle it.

<hr>

<img src="https://github.global.ssl.fastly.net/images/modules/logos_page/GitHub-Logo.png" width="200">
- Go to [Account Settings](https://github.com/settings/profile)
- Select **Applications** from the sidebar
- Then inside **Developer applications** click on **Register new application**
- Enter *Application Name* and *Homepage URL*
- For *Authorization Callback URL*: http://localhost:3000/auth/github/callback
- Click **Register application**
- Now copy and paste *Client ID* and *Client Secret* keys into `.env` file

<hr>

<img src="https://g.twimg.com/ios_homescreen_icon.png" width="90">
- Sign in at [https://apps.twitter.com/](https://apps.twitter.com/)
- Click **Create a new application**
- Enter your application name, website and description
- For **Callback URL**: http://127.0.0.1:3000/auth/twitter/callback
- Go to **Settings** tab
- Under *Application Type* select **Read and Write** access
- Check the box **Allow this application to be used to Sign in with Twitter**
- Click **Update this Twitter's applications settings**
- Copy and paste *Consumer Key* and *Consumer Secret* keys into `.env` file

<hr>

<img src="http://www.danpontefract.com/wp-content/uploads/2014/02/logo-linkedin.png" width="200">
- Sign in at [LinkedIn Developer Network](https://developer.linkedin.com/)
- From the account name dropdown menu select **API Keys**
 - *It may ask you to sign in once again*
- Click **+ Add New Application** button
- Fill out all the *required* fields
 - **OAuth 2.0 Redirect URLs**: http://localhost:3000/auth/linkedin/callback
 - **JavaScript API Domains**: http://localhost:3000
- For **Default Application Permissions** make sure at least the following is checked:
 - `r_basicprofile`
- Finish by clicking **Add Application** button
- Copy and paste *API Key* and *Secret Key* keys into `.env` file
 - *API Key* is your **clientID**
 - *Secret Key* is your **clientSecret**

<hr>


<img src="https://stripe.com/img/about/logos/logos/black@2x.png" width="200">
- [Sign up](https://stripe.com/) or log into your [dashboard](https://manage.stripe.com)
- Click on your profile and click on Account Settings
- Then click on [API Keys](https://manage.stripe.com/account/apikeys)
- Copy the **Secret Key**. and add this into `.env` file
<hr>

<img src="https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_960_720.png" width="200">
- Visit [PayPal Developer](https://developer.paypal.com/)
- Log in to your PayPal account
- Click **Applications > Create App** in the navigation bar
- Enter *Application Name*, then click **Create app**
- Copy and paste *Client ID* and *Secret* keys into `.env` file
- *App ID* is **client_id**, *App Secret* is **client_secret**
- Change **host** to api.paypal.com if you want to test against production and use the live credentials

<hr>

<img src="http://33.media.tumblr.com/ffaf0075be879b3ab0b87f0b8bcc6814/tumblr_inline_n965bkOymr1qzxhga.png" width="200">
- Go to [foursquare for Developers](https://developer.foursquare.com/)
- Click on **My Apps** in the top menu
- Click the **Create A New App** button
- Enter *App Name*, *Welcome page url*,
- For **Redirect URI**: http://localhost:3000/auth/foursquare/callback
- Click **Save Changes**
- Copy and paste *Client ID* and *Client Secret* keys into `.env` file

<hr>

<img src="http://img4.wikia.nocookie.net/__cb20130520163346/logopedia/images/8/8d/Tumblr_logo_by_x_1337_x-d5ikwpp.png" width="200">
- Go to http://www.tumblr.com/oauth/apps
- Once signed in, click **+Register application**
- Fill in all the details
- For **Default Callback URL**: http://localhost:3000/auth/tumblr/callback
- Click **✔Register**
- Copy and paste *OAuth consumer key* and *OAuth consumer secret* keys into `.env` file

<hr>

<img src="http://www.technologytell.com/gaming/files/2012/01/steam_logo.jpg" width="200">
- Go to http://steamcommunity.com/dev/apikey
- Sign in with your existing Steam account
- Enter your *Domain Name*, then and click **Register**
- Copy and paste *Key* into `.env` file

<hr>

<img src="http://iandouglas.com/presentations/pyconca2012/logos/sendgrid_logo.png" width="200">
- Go to https://sendgrid.com/user/signup
- Sign up and **confirm** your account via the *activation email*
- Then enter your SendGrid *Username* and *Password* into `.env` file

<hr>

<img src="https://raw.github.com/mailgun/media/master/Mailgun_Primary.png" width="200">
- Go to http://www.mailgun.com
- Sign up and add your *Domain Name*
- From the domain overview, copy and paste the default SMTP *Login* and *Password* into `.env` file

<hr>

<img src="http://cdn.appstorm.net/web.appstorm.net/web/files/2013/12/mandrill-logo.png" width="100">
- Go to http://mandrill.com
- Sign up and add your *Domain Name*
- From the dashboard, click on *Get SMTP credentials*
- Copy and paste the default SMTP *Login* and *Password* into `.env` file

<hr>

<img src="https://www.bitgo.com/img/new_bitgo/logo_footer.png" width="200">
- Go to https://test.bitgo.com/
- Sign up for an account.
- Once logged into the dashboard, go to the top right selector and click 'account settings'
- Under the developers tab, create your access token and copy and paste it into `.env` file

<hr>

<img src="https://s3.amazonaws.com/ahoy-assets.twilio.com/global/images/wordmark.svg" width="200">
- Go to https://www.twilio.com/try-twilio
- Sign up for an account.
- Once logged into the dashboard, expand the link 'show api credentials'
- Copy your Account Sid and Auth Token

run ```php artisan vendor:publish```

Project Structure
-----------------

| Name                                     | Description                                                  |
| ----------------------------------       | ------------------------------------------------------------ |
| **config**/app.php                       | Configuration for service providers and facades              |
| **config**/auth.php                      | Configuration for password resets                            |
| **config**/broadcasting.php              | Configuration for broadcasting                               |
| **config**/cache.php                     | Configuration for cache generation and storage               |
| **config**/cloudder.php                  | Configuration for cloudinary                                 |
| **config**/compile.php                   | Configuration for compilation                                |
| **config**/database.php                  | Configuration for database drivers                           |
| **config**/filesystems.php               | Configuration for different file systems                     |
| **config**/github.php                    | Configuration for github API                                 |
| **config**/mail.php                      | Configuration for mails                                      |
| **config**/queue.php                     | Configuration for queue                                      |
| **config**/services.php                  | Configuration for several services like mailgun etc.         |
| **config**/session.php                   | Configuration for sessions                                   |
| **config**/ttwitter.php                  | Twitter API config file                                      |
| **config**/twilio.php                    | Twilio API config file                                       |
| **config**/view.php                      | Configuration for location of views and view cache           |
| **controllers**/AccountController.php    | Controller for Account management                            |
| **controllers**/AviaryController.php     | Controller for Aviary API functionality                      |
| **controllers**/ClockworkController.php  | Controller for Clockwork API functionality                   |
| **controllers**/ContactController.php    | Controller for Contact page                                  |
| **controllers**/Controller.php           | BaseController                                               |
| **controllers**/GithubController.php     | Controller for Github API functionality                      |
| **controllers**/LastFmController.php     | Controller for LastFM API functionality                      |
| **controllers**/LobController.php        | Controller for Lob API functionality.                        |
| **controllers**/NytController.php        | Controller for New York Times API functionality              |
| **controllers**/OauthController.php      | Controller for Oauthentication                               |
| **controllers**/PaypalController.php     | Controller for Paypal API functionality                      |
| **controllers**/SteamController.php      | Controller for Stream API functionality                      |
| **controllers**/StripeController.php     | Controller for Stripe API functionality                      |
| **controllers**/TwilioController.php     | Controller for Twilio API functionality                      |
| **controllers**/TwitterController.php    | Controller for Twitter API functionality                     |
| **controllers**/WebScrapingController.php| Controller for Web Scraping.                                 |
| **controllers**/YahooController.php      | Controller for Yahoo API functionality                       |
| **controllers**/user.js                  | Controller for user account management.                      |
| **models**/User.php                      | Model for User.                                             |
| **public**/                              | Static assets (fonts, css, js, img).                         |
| **public**/**css**/main.css              | Main stylesheet for your app.                                |
| **resources/views/account**/             | Templates for *login, password reset, signup, profile*.      |
| **views/api**/                           | Templates for API Examples.                                  |
| **views/partials**/alerts.blade.php      | Error, info and success flash notifications.                 |
| **views/partials**/navbar.blade.php      | Navbar partial template.                                     |
| **views**/layouts**/master.blade.php     | Base template.                                               |
| **views**/apidashboard.blade.php         | API dashboard template.                                      |
| **views**/contact.blade.php              | Contact page template.                                       |
| **views**/welcome.blade.php              | Home page template.                                          |
| .travis.yml                              | [Travis CI](https://travis-ci.org/) integration.             |
| .env.example                             | Your API keys, tokens, passwords and database URI.           |
| composer.json                            | File for loading all php packages.                           |
| package.json                             | File for loading all necessary node modules.                 |
| artisan                                  | File for enabling commands to run                            |


List of Packages
----------------

| Package                         | Description                                                           |
| ------------------------------- | --------------------------------------------------------------------- |
| socialite                       | Sign-in with Facebook, Twitter and Github                             |
| socialite providers             | Sign-in with LinkedIn, Instagram                                      |
| cloudder                        | Upload images to Cloudinary                                           |
| laravel github                  | Github API library                                                    |
| clockwork                       | Clockwork SMS API library.                                            |
| goutte                          | Scrape web pages using jQuery-style syntax.                           |
| laravel framework               | PHP web framework                                                     |
| twitter                         | Twitter API library                                                   |
| twilio                          | Twilio API library                                                    |
| lob-php                         | Lob API library                                                       |
| lastfm-api-wrapper              | Lastfm API library                                                    |
| phpunit                         | PHP testing library                                                   |
| guzzlehttp                      | Simplified HTTP Request library                                       |


Useful Tools and Resources
--------------------------
- [Laravel Daily](http://laraveldaily.com/) - Awesome laravel tips daily
- [Laravel News](https://laravel-news.com/) - Laravel and PHP tutorials.
- [Goodheads](http://goodheads.io) - Laravel, PHP and JS tutorials
- [Favicon Generator](http://realfavicongenerator.net/) - Generate favicons for PC, Android, iOS, Windows 8.

Recommended Design Resources
----------------------------
- [Code Guide](http://codeguide.co/) - Standards for developing flexible, durable, and sustainable HTML and CSS.
- [Bootsnipp](http://bootsnipp.com/) - Code snippets for Bootstrap.
- [UIBox](http://www.uibox.in) - Curated HTML, CSS, JS, UI components.
- [Bootstrap Zero](https://www.bootstrapzero.com) - Free Bootstrap templates themes.
- [Google Bootstrap](http://todc.github.io/todc-bootstrap/) - Google-styled theme for Bootstrap.
- [Font Awesome Icons](http://fortawesome.github.io/Font-Awesome/icons/) - It's already part of the Hackathon Starter, so use this page as a reference.
- [Colors](http://clrs.cc) - A nicer color palette for the web.
- [Creative Button Styles](http://tympanus.net/Development/CreativeButtons/) - awesome button styles.
- [Creative Link Effects](http://tympanus.net/Development/CreativeLinkEffects/) - Beautiful link effects in CSS.
- [Medium Scroll Effect](http://codepen.io/andreasstorm/pen/pyjEh) - Fade in/out header background image as you scroll.
- [GeoPattern](https://github.com/btmills/geopattern) - SVG background pattern generator.
- [Trianglify](https://github.com/qrohlf/trianglify) - SVG low-poly background pattern generator.


Recommended Laravel Libraries
-----------------------------

- [laravel-medialibrary](https://github.com/spatie/laravel-medialibrary) - Associated media files with your Eloquent models easily.
- [laravel-emoji](https://github.com/unicodeveloper/laravel-emoji) - For using emojis in your app
- [laravel-quotes](https://github.com/unicodeveloper/laravel-quotes) - For using all sorts of quotes especially DJKHALED in your app


FAQ
---

### Why do I get `Token Mismatch Exception` when submitting a form?
You need to add the following hidden input element to your form. This has been
added in the existing codebase as part of the CSRF protection.

```
{!! csrf_field() !!}
```


### I get a whoops error when I deploy my app, why?
Chances are you haven't generated the app key, so run `php artisan key:generate`.
Chances are you haven't put your credentials in your .env file.

How It Works (mini guides)
--------------------------

This section is intended for giving you a detailed explanation about
how a particular functionality works. Maybe you are just curious about
how it works, or maybe you are lost and confused while reading the code,
I hope it provides some guidance to you.

<hr>

### How do flash messages work in this project?
Flash messages allow you to display a message at the end of the request and access
it on next request and only next request. For instance, on a failed login attempt, you would
display an alert with some error message, but as soon as you refresh that page or visit a different
page and come back to the login page, that error message will be gone. It is only displayed once.
All flash messages are available in your views via laravel sessions.

<hr>

### How do I create a new page?
A more correct way to be to say "How do I create a new route". The main file `routes.php` contains all the routes.
Each route has a callback function associated with it. Sometimes you will see 3 or more arguments
to routes. In cases like that, the first argument is still a URL string, while middle arguments
are what's called middleware. Think of middleware as a door. If this door prevents you from
continuing forward, you won't get to your callback function. One such example is a route that requires authentication.

```php
Route::get('/account', 'UserController@getAccount');
```

It always goes from left to right. A user visits `/account` page. Then `auth` middleware
checks if you are authenticated:

```php
 Route::get('/account', [
        'uses' => 'AccountController@getAccountPage',
        'as'   => 'account.dashboard',
        'middleware' => ['auth']
]);
```

If you are authenticated, you let this visitor pass through your "door" by calling `return $next($request);` in the auth middleware and if you are authenticated, you will be redirected to *Account Management* page, otherwise you will be redirected to *Login* page.

Here is a typical workflow for adding new routes to your application. Let's say we are building
a page that lists all books from database.

**Step 1.** Start by defining a route.

```php
Route::get('/books', 'BookController@getBooks');
```
---

**Step 2.** Create a new model `Book.php` inside the *app* directory. You can simply run `php artisan make:model Book`

```php

namespace App;

class Book
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'isbn',
    ];
}

```

**Step 3.** Create a migration file like so: `php artisan make:migration create_books_table`

```php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('isbn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
```

**Step 4.** Create a new controller file called `BookController` inside the *app/Http/Controllers* directory. You can simply run `php artisan make:controller BookController`

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Return all books
     * @return mixed
     */
    public function getBooks()
    {
        $books = Book::all();

        return view('books')->withBooks($books);
    }
}
```

**Step 5.** Create `books.blade.php` template.
```php
@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #f00" class="fa fa-book"></i>All Books</h2>
        </div>

        <ul>
        @foreach ($books as $book)
            <li> {{ $book->name }} </li>
        @endforeach
        </div>
    </div>
@stop
```

That's it!
<hr>

Laravel Eloquent Cheatsheet
-------------------

* [Eloquent Cheatsheet](http://cheats.jesse-obrien.ca/)


Deployment
----------

Once you are ready to deploy your app, you will need to create an account with a cloud platform to host it. These are not the only choices, but they are my top
picks. From my experience, **Heroku** is the easiest to get started with,  deployments and custom domain support on free accounts.

### 1-Step Deployment with Heroku

<img src="http://blog.exadel.com/wp-content/uploads/2013/10/heroku-Logo-1.jpg" width="200">
- Download and install [Heroku Toolbelt](https://toolbelt.heroku.com/)
- In terminal, run `heroku login` and enter your Heroku credentials
- From *your app* directory run `heroku create`
- Create a Procfile in your app root. All this file needs to contain is `web: vendor/bin/heroku-php-nginx public` or `web: vendor/bin/heroku-php-apache2 public` if you prefer to use nginx.
- Run `heroku addons:add heroku-postgresql:dev  ` to add a Postgres database to your heroku app from your terminal
- Lastly, do `git push heroku master`.  Done!
- Run artisan commands on heroku like so `heroku run php artisan migrate`

**Note:** To install Heroku add-ons your account must be verified.

---

- Finally, you can now push your code to OpenShift by running `git push -f openshift master`
 - **Note:** The first time you run this command, you have to pass `-f` (force) flag because OpenShift creates a dummy server with the welcome page when you create a new Node.js app. Passing `-f` flag will override everything with your *Hackathon Starter* project repository. **Do not** run `git pull` as it will create unnecessary merge conflicts.
- And you are done!

<img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Windows_Azure_logo.png" width="200">

- Login to [Windows Azure Management Portal](https://manage.windowsazure.com/)
- Click the **+ NEW** button on the bottom left of the portal
- Click **COMPUTE**, then **WEB APP**, then **QUICK CREATE**
- Enter a name for **URL** and select the datacenter **REGION** for your web site
- Click on **CREATE WEB APP** button
- Once the web site status changes to *Running*, click on the name of the web site to access the Dashboard
- At the bottom right of the Quickstart page, select **Set up a deployment from source control**
- Select **Local Git repository** from the list, and then click the arrow
- To enable Git publishing, Azure will ask you to create a user name and password
- Once the Git repository is ready, you will be presented with a **GIT URL**
- Inside your *Hackathon Starter* directory, run `git remote add azure [Azure Git URL]`
- To push your changes simply run `git push azure master`
 - **Note:** *You will be prompted for the password you created earlier*
- On **Deployments** tab of your Windows Azure Web App, you will see the deployment history


**Note:** Alternative directions, including how to setup the project with a DevOps pipeline are available at [http://ibm.biz/hackstart](http://ibm.biz/hackstart).
A longer version of these instructions with screenshots is available at [http://ibm.biz/hackstart2](http://ibm.biz/hackstart2).
Also, be sure to check out the [Jump-start your hackathon efforts with DevOps Services and Bluemix](https://www.youtube.com/watch?v=twvyqRnutss) video.

## Contributing

Thank you for considering contributing to Laravel Hackathon Starter. The contribution guide can be found in the [Contribution File](CONTRIBUTING.md)

## Security Vulnerabilities

If you discover a security vulnerability within Laravel Hackathon Starter, please send an e-mail to Prosper Otemuyiwa at prosperotemuyiwa@gmail.com. All security vulnerabilities will be promptly addressed.

## Credits
* [Sahat Yalkabov](https://github.com/sahat/hackathon-starter) - Awesome

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
