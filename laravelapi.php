
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow, all" />
    <title>Namespaces | Laravel API</title>

            <link rel="stylesheet" type="text/css" href="https://laravel.com/api/9.x/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://laravel.com/api/9.x/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="https://laravel.com/api/9.x/css/doctum.css">
        <link rel="stylesheet" type="text/css" href="https://laravel.com/api/9.x/fonts/doctum-font.css">
        <script src="https://laravel.com/api/9.x/js/jquery-3.5.1.slim.min.js"></script>
        <script async defer src="https://laravel.com/api/9.x/doctum.js"></script>
        <script async defer src="https://laravel.com/api/9.x/js/bootstrap.min.js"></script>
        <script async defer src="https://laravel.com/api/9.x/js/autocomplete.min.js"></script>
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <script src="https://unpkg.com/hyperscript.org@0.9.6"></script>
        <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/5.5/opensearch.xml"
          title="Laravel API (5.5)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/5.8/opensearch.xml"
          title="Laravel API (5.8)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/6.x/opensearch.xml"
          title="Laravel API (6.x)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/7.x/opensearch.xml"
          title="Laravel API (7.x)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/8.x/opensearch.xml"
          title="Laravel API (8.x)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/9.x/opensearch.xml"
          title="Laravel API (9.x)" />
    <link rel="search"
          type="application/opensearchdescription+xml"
          href="https://laravel.com/api/9.x/https://laravel.com/api/master/opensearch.xml"
          title="Laravel API (master)" />

          <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body 
    step="1"
_="
        on load 
        add .open to #docsContainer
        then add .disabled to #docsContainer
        then wait 3s
        then increment @step
        then put @step into #stepCounter
        then put 'Click this fucking bar' into #stepText
        then wait 500ms
        then add .active to .autoComplete_wrapper
        then wait 250ms
        then remove .active from .autoComplete_wrapper
        then wait 250ms
        then add .active to .autoComplete_wrapper
        then wait 250ms
        then remove .active from .autoComplete_wrapper
        then wait 250ms
        then add .active to .autoComplete_wrapper
        then wait 250ms
        then remove .active from .autoComplete_wrapper
        then wait 250ms
        then add .active to .autoComplete_wrapper
        then wait 250ms
        then remove .active from .autoComplete_wrapper
        then put 'Type what you fucking need in the search bar' into #stepText
        then increment @step
        then put @step into #stepCounter
        then send focus to #doctum-search-auto-complete
        then wait 500ms
        <?php
            $searchQuery = @$_GET['q'];
            $searchQueryArray = str_split($searchQuery);
            $string = '';
            foreach ($searchQueryArray as $letter) {
                $string .= $letter;
        ?>
        then set #doctum-search-auto-complete's @value to '<?php echo $string; ?>' then js document.getElementById('doctum-search-auto-complete').setSelectionRange(<?php echo strlen($string); ?>, <?php echo strlen($string); ?>); end then wait <?php echo rand(100, 200); ?>ms
        <?php
            }    
        ?>
        then wait 500ms
        then increment @step
        then put @step into #stepCounter
        then put 'Hit enter. That\'s how search bars work.' into #stepText
        then remove .disabled from #docsContainer
        then wait 1000ms
        then js document.getElementById('search-form').submit() end
    "
        id="index" data-name="" data-root-path="" data-search-index-url="doctum-search.json">
        <div class="container bg-black p-4" style="z-index:9999;position:sticky;width:100%;max-width:100%;">
    <h1 class="text-6xl font-bold text-center text-white absolute" style="font-size:24px;">
          <a href="https://lmstdfy.readthedocs.wtf/" class="visited:text-white visited:border-bottom-none" style="border-bottom:0;">LMSTDFY</a>
        </h1>
        <p class="text-center text-white"><strong>Step <span id="stepCounter">1</span>:</strong> <span id="stepText">Open the Laravel API docs.</a></p>
</div>
<style>
    #head-nav {

    }
    #docsContainer {
        /* padding-top: 56px; */
        position:absolute;
        width:100%;
        left:100%;
        transition: 3s left;
        transform: rotate(0deg);
    }

    #docsContainer.open {
        left: 0;
        /* transform: rotate(360deg); */
    }

    .autoComplete_wrapper.active input {
        background-color: red;
    }

    @media (max-width: 767px) {
        #search-overlay {
            padding-top: 75px !important;
        }
    }

    div.disabled { pointer-events: none; }
</style>
<div id="docsContainer">
            <div id="content">
        <div id="left-column">
                <div id="control-panel">
                    <form action="#">
                <select class="form-control" id="version-switcher" name="version">
                                            <option
                            value="../5.5/index.html"
                            data-version="5.5" >Laravel 5.5</option>
                                            <option
                            value="../5.8/index.html"
                            data-version="5.8" >Laravel 5.8</option>
                                            <option
                            value="../6.x/index.html"
                            data-version="6.x" >Laravel 6.x</option>
                                            <option
                            value="../7.x/index.html"
                            data-version="7.x" >Laravel 7.x</option>
                                            <option
                            value="../8.x/index.html"
                            data-version="8.x" >Laravel 8.x</option>
                                            <option
                            value="../9.x/index.html"
                            data-version="9.x" selected>Laravel 9.x</option>
                                            <option
                            value="../master/index.html"
                            data-version="master" >Laravel Dev</option>
                                    </select>
            </form>
                <div class="search-bar hidden" id="search-progress-bar-container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" id="search-progress-bar"
                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
        </div>
        <form id="search-form" action="https://laravel.com/api/9.x/search.html">
            <span class="icon icon-search"></span>
            <input name="search"
                   id="doctum-search-auto-complete"
                   class="typeahead form-control"
                   type="search"
                   placeholder="Search"
                   spellcheck="false"
                   autocorrect="off"
                   autocomplete="off"
                   autocapitalize="off">
            <div class="auto-complete-results" id="auto-complete-results"></div>
        </form>
    </div>

                <div id="api-tree"></div>

        </div>
        <div id="right-column">
                <nav id="site-nav" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-elements">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://laravel.com/api/9.x/index.html">Laravel API</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-elements">
                <ul class="nav navbar-nav">
                                        <li role="presentation" class="dropdown visible-xs-block visible-sm-block">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="https://laravel.com/api/9.x/#"
                            role="button" aria-haspopup="true" aria-expanded="false">Versions&nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                        <li ><a href="https://laravel.com/api/9.x/../5.5/index.html" data-version="5.5">Laravel 5.5</a></li>
                        <li ><a href="https://laravel.com/api/9.x/../5.8/index.html" data-version="5.8">Laravel 5.8</a></li>
                        <li ><a href="https://laravel.com/api/9.x/../6.x/index.html" data-version="6.x">Laravel 6.x</a></li>
                        <li ><a href="https://laravel.com/api/9.x/../7.x/index.html" data-version="7.x">Laravel 7.x</a></li>
                        <li ><a href="https://laravel.com/api/9.x/../8.x/index.html" data-version="8.x">Laravel 8.x</a></li>
                        <li class="active"><a href="https://laravel.com/api/9.x/../9.x/index.html" data-version="9.x">Laravel 9.x</a></li>
                        <li ><a href="https://laravel.com/api/9.x/../master/index.html" data-version="master">Laravel Dev</a></li>
                        </ul>
                    </li>
                    <li><a href="https://laravel.com/api/9.x/classes.html">Classes</a></li>
                    <li><a href="https://laravel.com/api/9.x/namespaces.html">Namespaces</a></li>
                    <li><a href="https://laravel.com/api/9.x/interfaces.html">Interfaces</a></li>
                    <li><a href="https://laravel.com/api/9.x/traits.html">Traits</a></li>
                    <li><a href="https://laravel.com/api/9.x/doc-index.html">Index</a></li>
                    <li><a href="https://laravel.com/api/9.x/search.html">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>

                        <div id="page-content">    <div class="page-header">
        <h1>Namespaces</h1>
    </div>

            <div class="namespaces clearfix">
                                                                        <li><a href="https://laravel.com/api/9.x/[Global_Namespace].html">[Global Namespace]</a></li>
                                                                                    <div class="namespace-container">
                        <h2>Illuminate</h2>
                        <ul>
                                                    <li><a href="https://laravel.com/api/9.x/Illuminate.html">Illuminate</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth.html">Illuminate\Auth</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Access.html">Illuminate\Auth\Access</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Access/Events.html">Illuminate\Auth\Access\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Console.html">Illuminate\Auth\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Events.html">Illuminate\Auth\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Listeners.html">Illuminate\Auth\Listeners</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Middleware.html">Illuminate\Auth\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Notifications.html">Illuminate\Auth\Notifications</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Auth/Passwords.html">Illuminate\Auth\Passwords</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Broadcasting.html">Illuminate\Broadcasting</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Broadcasting/Broadcasters.html">Illuminate\Broadcasting\Broadcasters</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Bus.html">Illuminate\Bus</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Bus/Events.html">Illuminate\Bus\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cache.html">Illuminate\Cache</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cache/Console.html">Illuminate\Cache\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cache/Events.html">Illuminate\Cache\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cache/RateLimiting.html">Illuminate\Cache\RateLimiting</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Config.html">Illuminate\Config</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Console.html">Illuminate\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Console/Concerns.html">Illuminate\Console\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Console/Events.html">Illuminate\Console\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Console/Scheduling.html">Illuminate\Console\Scheduling</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Container.html">Illuminate\Container</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts.html">Illuminate\Contracts</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Auth.html">Illuminate\Contracts\Auth</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Auth/Access.html">Illuminate\Contracts\Auth\Access</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Auth/Middleware.html">Illuminate\Contracts\Auth\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Broadcasting.html">Illuminate\Contracts\Broadcasting</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Bus.html">Illuminate\Contracts\Bus</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Cache.html">Illuminate\Contracts\Cache</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Config.html">Illuminate\Contracts\Config</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Console.html">Illuminate\Contracts\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Container.html">Illuminate\Contracts\Container</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Cookie.html">Illuminate\Contracts\Cookie</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Database.html">Illuminate\Contracts\Database</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Database/Eloquent.html">Illuminate\Contracts\Database\Eloquent</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Database/Events.html">Illuminate\Contracts\Database\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Database/Query.html">Illuminate\Contracts\Database\Query</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Debug.html">Illuminate\Contracts\Debug</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Encryption.html">Illuminate\Contracts\Encryption</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Events.html">Illuminate\Contracts\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Filesystem.html">Illuminate\Contracts\Filesystem</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Foundation.html">Illuminate\Contracts\Foundation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Hashing.html">Illuminate\Contracts\Hashing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Http.html">Illuminate\Contracts\Http</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Mail.html">Illuminate\Contracts\Mail</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Notifications.html">Illuminate\Contracts\Notifications</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Pagination.html">Illuminate\Contracts\Pagination</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Pipeline.html">Illuminate\Contracts\Pipeline</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Queue.html">Illuminate\Contracts\Queue</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Redis.html">Illuminate\Contracts\Redis</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Routing.html">Illuminate\Contracts\Routing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Session.html">Illuminate\Contracts\Session</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Session/Middleware.html">Illuminate\Contracts\Session\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Support.html">Illuminate\Contracts\Support</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Translation.html">Illuminate\Contracts\Translation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/Validation.html">Illuminate\Contracts\Validation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Contracts/View.html">Illuminate\Contracts\View</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cookie.html">Illuminate\Cookie</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Cookie/Middleware.html">Illuminate\Cookie\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database.html">Illuminate\Database</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Capsule.html">Illuminate\Database\Capsule</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Concerns.html">Illuminate\Database\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Connectors.html">Illuminate\Database\Connectors</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Console.html">Illuminate\Database\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Console/Factories.html">Illuminate\Database\Console\Factories</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Console/Migrations.html">Illuminate\Database\Console\Migrations</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Console/Seeds.html">Illuminate\Database\Console\Seeds</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/DBAL.html">Illuminate\Database\DBAL</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent.html">Illuminate\Database\Eloquent</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent/Casts.html">Illuminate\Database\Eloquent\Casts</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent/Concerns.html">Illuminate\Database\Eloquent\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent/Factories.html">Illuminate\Database\Eloquent\Factories</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent/Relations.html">Illuminate\Database\Eloquent\Relations</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Eloquent/Relations/Concerns.html">Illuminate\Database\Eloquent\Relations\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Events.html">Illuminate\Database\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Migrations.html">Illuminate\Database\Migrations</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/PDO.html">Illuminate\Database\PDO</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/PDO/Concerns.html">Illuminate\Database\PDO\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Query.html">Illuminate\Database\Query</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Query/Grammars.html">Illuminate\Database\Query\Grammars</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Query/Processors.html">Illuminate\Database\Query\Processors</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Schema.html">Illuminate\Database\Schema</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Database/Schema/Grammars.html">Illuminate\Database\Schema\Grammars</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Encryption.html">Illuminate\Encryption</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Events.html">Illuminate\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Filesystem.html">Illuminate\Filesystem</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation.html">Illuminate\Foundation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Auth.html">Illuminate\Foundation\Auth</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Auth/Access.html">Illuminate\Foundation\Auth\Access</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Bootstrap.html">Illuminate\Foundation\Bootstrap</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Bus.html">Illuminate\Foundation\Bus</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Console.html">Illuminate\Foundation\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Events.html">Illuminate\Foundation\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Exceptions.html">Illuminate\Foundation\Exceptions</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Exceptions/Whoops.html">Illuminate\Foundation\Exceptions\Whoops</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Http.html">Illuminate\Foundation\Http</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Http/Events.html">Illuminate\Foundation\Http\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Http/Exceptions.html">Illuminate\Foundation\Http\Exceptions</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Http/Middleware.html">Illuminate\Foundation\Http\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Providers.html">Illuminate\Foundation\Providers</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Support.html">Illuminate\Foundation\Support</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Support/Providers.html">Illuminate\Foundation\Support\Providers</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Testing.html">Illuminate\Foundation\Testing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Testing/Concerns.html">Illuminate\Foundation\Testing\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Testing/Traits.html">Illuminate\Foundation\Testing\Traits</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Foundation/Validation.html">Illuminate\Foundation\Validation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Hashing.html">Illuminate\Hashing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http.html">Illuminate\Http</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Client.html">Illuminate\Http\Client</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Client/Events.html">Illuminate\Http\Client\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Concerns.html">Illuminate\Http\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Exceptions.html">Illuminate\Http\Exceptions</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Middleware.html">Illuminate\Http\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Resources.html">Illuminate\Http\Resources</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Resources/Json.html">Illuminate\Http\Resources\Json</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Http/Testing.html">Illuminate\Http\Testing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Log.html">Illuminate\Log</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Log/Events.html">Illuminate\Log\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Mail.html">Illuminate\Mail</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Mail/Events.html">Illuminate\Mail\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Mail/Transport.html">Illuminate\Mail\Transport</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Notifications.html">Illuminate\Notifications</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Notifications/Channels.html">Illuminate\Notifications\Channels</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Notifications/Console.html">Illuminate\Notifications\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Notifications/Events.html">Illuminate\Notifications\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Notifications/Messages.html">Illuminate\Notifications\Messages</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Pagination.html">Illuminate\Pagination</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Pipeline.html">Illuminate\Pipeline</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue.html">Illuminate\Queue</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Capsule.html">Illuminate\Queue\Capsule</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Connectors.html">Illuminate\Queue\Connectors</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Console.html">Illuminate\Queue\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Events.html">Illuminate\Queue\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Failed.html">Illuminate\Queue\Failed</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Jobs.html">Illuminate\Queue\Jobs</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Queue/Middleware.html">Illuminate\Queue\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Redis.html">Illuminate\Redis</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Redis/Connections.html">Illuminate\Redis\Connections</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Redis/Connectors.html">Illuminate\Redis\Connectors</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Redis/Events.html">Illuminate\Redis\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Redis/Limiters.html">Illuminate\Redis\Limiters</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing.html">Illuminate\Routing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Console.html">Illuminate\Routing\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Contracts.html">Illuminate\Routing\Contracts</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Events.html">Illuminate\Routing\Events</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Exceptions.html">Illuminate\Routing\Exceptions</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Matching.html">Illuminate\Routing\Matching</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Routing/Middleware.html">Illuminate\Routing\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Session.html">Illuminate\Session</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Session/Console.html">Illuminate\Session\Console</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Session/Middleware.html">Illuminate\Session\Middleware</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Support.html">Illuminate\Support</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Support/Facades.html">Illuminate\Support\Facades</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Support/Testing.html">Illuminate\Support\Testing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Support/Testing/Fakes.html">Illuminate\Support\Testing\Fakes</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Support/Traits.html">Illuminate\Support\Traits</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Testing.html">Illuminate\Testing</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Testing/Concerns.html">Illuminate\Testing\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Testing/Constraints.html">Illuminate\Testing\Constraints</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Testing/Fluent.html">Illuminate\Testing\Fluent</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Testing/Fluent/Concerns.html">Illuminate\Testing\Fluent\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Translation.html">Illuminate\Translation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Validation.html">Illuminate\Validation</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Validation/Concerns.html">Illuminate\Validation\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/Validation/Rules.html">Illuminate\Validation\Rules</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View.html">Illuminate\View</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View/Compilers.html">Illuminate\View\Compilers</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View/Compilers/Concerns.html">Illuminate\View\Compilers\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View/Concerns.html">Illuminate\View\Concerns</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View/Engines.html">Illuminate\View\Engines</a></li>
                                                            <li><a href="https://laravel.com/api/9.x/Illuminate/View/Middleware.html">Illuminate\View\Middleware</a></li>
                            </ul>
            </div>
        </div>
    
</div><div id="footer">
        Generated by <a href="https://laravel.com/api/9.x/https://github.com/code-lts/doctum">Doctum, a API Documentation generator and fork of Sami</a>.</div></div>
    </div>
</div>
    </body>

</html>
