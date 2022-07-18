
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PHP: Hypertext Preprocessor</title>
  <script src="https://unpkg.com/hyperscript.org@0.9.6"></script>
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/index.php">
 <link rel="shorturl" href="https://www.php.net/index">
 <link rel="alternate" href="https://www.php.net/index" hreflang="x-default">



<link rel="stylesheet" type="text/css" href="https://www.php.net/cached.php?t=1639034403&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://www.php.net/cached.php?t=1539765004&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://www.php.net/cached.php?t=1657017602&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://www.php.net/cached.php?t=1657017602&amp;f=/styles/theme-medium.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://www.php.net/cached.php?t=1656532202&amp;f=/styles/home.css" media="screen">

 <base href="https://www.php.net/index.php">
 <script src="https://cdn.tailwindcss.com"></script>
<meta name="Description" content="PHP is a popular general-purpose scripting language that powers everything from your blog to the most popular websites in the world." />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Hypertext Preprocessor" />
<meta name="twitter:description" content="PHP is a popular general-purpose scripting language that powers everything from your blog to the most popular websites in the world." />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Hypertext Preprocessor" />
<meta itemprop="description" content="PHP is a popular general-purpose scripting language that powers everything from your blog to the most popular websites in the world." />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PHP is a popular general-purpose scripting language that powers everything from your blog to the most popular websites in the world." />
</head>
<body class="home "
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
        then add .active to #thisiswhatasearchbarlookslike
        then wait 250ms
        then remove .active from #thisiswhatasearchbarlookslike
        then wait 250ms
        then add .active to #thisiswhatasearchbarlookslike
        then wait 250ms
        then remove .active from #thisiswhatasearchbarlookslike
        then wait 250ms
        then add .active to #thisiswhatasearchbarlookslike
        then wait 250ms
        then remove .active from #thisiswhatasearchbarlookslike
        then wait 250ms
        then add .active to #thisiswhatasearchbarlookslike
        then wait 250ms
        then remove .active from #thisiswhatasearchbarlookslike
        then put 'Type what you fucking need in the search bar' into #stepText
        then increment @step
        then put @step into #stepCounter
        then send focus to #thisiswhatasearchbarlookslike
        then wait 500ms
        <?php
            $searchQuery = @$_GET['q'];
            $searchQueryArray = str_split($searchQuery);
            $string = '';
            foreach ($searchQueryArray as $letter) {
                $string .= $letter;
        ?>
        then set #thisiswhatasearchbarlookslike's @value to '<?php echo $string; ?>' then js document.getElementById('thisiswhatasearchbarlookslike').setSelectionRange(<?php echo strlen($string); ?>, <?php echo strlen($string); ?>); end then wait <?php echo rand(100, 200); ?>ms
        <?php
            }    
        ?>
        then wait 500ms
        then increment @step
        then put @step into #stepCounter
        then put 'Hit enter. That\'s how search bars work.' into #stepText
        then remove .disabled from #docsContainer
        then wait 1000ms
        then send submit to #topsearch
        then js document.getElementById('topsearch').submit() end
    "
>
<div class="container bg-white p-4" style="z-index:9999;position:sticky;width:100%;max-width:100%;">
    <h1 class="text-6xl font-bold text-center text-black absolute" style="font-size:24px;">
          <a href="https://lmstdfy.readthedocs.wtf/" class="visited:text-black visited:border-bottom-none" style="border-bottom:0;">LMSTDFY</a>
        </h1>
        <p class="text-center text-black"><strong>Step <span id="stepCounter">1</span>:</strong> <span id="stepText">Open the PHP website.</a></p>
</div>
<style>
    #head-nav {

    }
    #docsContainer {
        padding-top: 56px;
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

    #thisiswhatasearchbarlookslike.active {
        border:10px solid red;
        margin-top:-10px;
    }

    @media (max-width: 767px) {
        #search-overlay {
            padding-top: 75px !important;
        }
    }

    div.disabled { pointer-events: none; }
</style>
<div id="docsContainer">
<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="https://www.php.net/" class="brand"><img src="https://www.php.net/images/logos/php-logo.svg" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="https://www.php.net/downloads">Downloads</a></li>
      <li class=""><a href="https://www.php.net/docs.php">Documentation</a></li>
      <li class=""><a href="https://www.php.net/get-involved" >Get Involved</a></li>
      <li class=""><a href="https://www.php.net/support">Help</a></li>
      <li class="">
        <a href="https://www.php.net/releases/8.1/index.php">
          <img src="https://www.php.net/images/php8/logo_php8_1.svg" alt="php8.1" height="22" width="60">
        </a>
      </li>
    </ul>
    <form class="navbar-search searchformss" id="topsearch" action="https://www.php.net/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s" id="thisiswhatasearchbarlookslike">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>



<div id="intro" class="clearfix">
  <div class="container">
      <div class="hero">
    <img class="hero-logo" src="https://www.php.net/images/logos/php-logo-white.svg" width="240" height="120">
    <p class="hero-text">A <strong>popular general-purpose scripting language</strong> that is especially suited to web development.<br />Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
    <div class="hero-actions">
      <a href="https://www.php.net/releases/8.1/index.php" class="hero-btn hero-btn-primary">What's new in 8.1</a>
      <a href="https://www.php.net/downloads.php" class="hero-btn hero-btn-secondary">Download</a>
    </div><ul class='hero-versions'>

            <li class='hero-version'><a class='hero-version-link' href='/downloads.php#v8.1.8'>8.1.8</a> &middot; <a class='notes' href='/ChangeLog-8.php#8.1.8'>Changelog</a> &middot; <a class='notes' href='/migration81'>Upgrading</a></li>

            <li class='hero-version'><a class='hero-version-link' href='/downloads.php#v8.0.21'>8.0.21</a> &middot; <a class='notes' href='/ChangeLog-8.php#8.0.21'>Changelog</a> &middot; <a class='notes' href='/migration80'>Upgrading</a></li>

            <li class='hero-version'><a class='hero-version-link' href='/downloads.php#v7.4.30'>7.4.30</a> &middot; <a class='notes' href='/ChangeLog-7.php#7.4.30'>Changelog</a> &middot; <a class='notes' href='/migration74'>Upgrading</a></li>
</ul>
  </div>  </div>
</div>


<div id="layout" class="clearfix">
  <section id="layout-content">
<div class='home-content'><article class="newsentry">
  <header class="title">
    <time datetime="2022-07-07T17:25:36+00:00">07 Jul 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-07-07-3" id="2022-07-07-3">PHP 8.1.8 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.8. This is a security release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.8 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.8">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-07-07T12:43:58+00:00">07 Jul 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-07-07-2" id="2022-07-07-2">PHP 8.2.0 Alpha 3 available for testing</a>
    </h2>
  </header>
  <div class="newscontent">
    <div>
     <p>
       The PHP team is pleased to announce the third testing release of PHP 8.2.0, Alpha 3.
       This continues the PHP 8.2 release cycle, the rough outline of which is specified in the
       <a href="https://wiki.php.net/todo/php82">PHP Wiki</a>.
     </p>
     <p>For source downloads of PHP 8.2.0 Alpha 3 please visit the <a href="https://downloads.php.net/~sergey">download page</a>.</p>
     <p>Please carefully test this version and report any issues found in the <a href="https://github.com/php/php-src/issues">bug reporting system</a>.</p>
     <p><b>Please DO NOT use this version in production, it is an early test version.</b></p>
     
     <p>
       For more information on the new features and other changes, you can read the
       <a href="https://github.com/php/php-src/blob/php-8.2.0alpha3/NEWS">NEWS</a> file,
       or the <a href="https://github.com/php/php-src/blob/php-8.2.0alpha3/UPGRADING">UPGRADING</a>
       file for a complete list of upgrading notes. These files can also be found in the release archive.
     </p>
     <p>The next release will be Beta 1, planned for Jul 21 2022.</p>
     <p>The signatures for the release can be found in <a href="https://gist.github.com/saundefined/1a77d968a000ace97d2cbda156ce50dc">the manifest</a> or on <a href="https://qa.php.net/">the QA site</a>.</p>
     
     <p>Thank you for helping us make PHP better.</p>
    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-07-07T09:31:10+00:00">07 Jul 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-07-07-1" id="2022-07-07-1">PHP 8.0.21 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.21. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.21 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.21">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-06-23T15:03:32+00:00">23 Jun 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-06-23-1" id="2022-06-23-1">PHP 8.2.0 Alpha 2 available for testing</a>
    </h2>
  </header>
  <div class="newscontent">
    <div>
     <p>The PHP team is pleased to announce the second testing release of PHP 8.2.0, Alpha 2. This continues the PHP 8.2 release cycle, the rough outline of which is specified in the <a href="https://wiki.php.net/todo/php82">PHP Wiki</a>.</p>
     <p>For source downloads of PHP 8.2.0 Alpha 2 please visit the <a href="https://downloads.php.net/~pierrick/">download page</a>.</p>
     <p>Please carefully test this version and report any issues found in the <a href="https://github.com/php/php-src/issues">bug reporting system</a>.</p>
     <p><strong>Please DO NOT use this version in production, it is an early test version.</strong></p>
     <p>For more information on the new features and other changes, you can read the <a href="https://github.com/php/php-src/blob/php-8.2.0alpha2/NEWS">NEWS</a> file, or the <a href="https://github.com/php/php-src/blob/php-8.2.0alpha2/UPGRADING">UPGRADING</a> file for a complete list of upgrading notes. These files can also be found in the release archive.</p>
     <p>The next release will be PHP 8.2.0 Alpha 3, planned for 7 Jul 2022.</p>
     <p>The signatures for the release can be found in the <a href="https://gist.github.com/adoy/33f3c8fff8ccaa80d57079cb849cc9c3">manifest</a> or on the <a href="https://qa.php.net/">QA site</a>.</p>
     <p>Thank you for helping us make PHP better.</p>
    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-06-09T20:50:23+00:00">09 Jun 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-06-09-4" id="2022-06-09-4">PHP 8.0.20 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.20. This is a security release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.20 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.20">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-06-09T15:13:37+00:00">09 Jun 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-06-09-3" id="2022-06-09-3">PHP 8.2.0 Alpha 1 available for testing</a>
    </h2>
  </header>
  <div class="newscontent">
    <div>
     <p>The PHP team is pleased to announce the first testing release of PHP 8.2.0, Alpha 1. This starts the PHP 8.2 release cycle, the rough outline of which is specified in the <a href="https://wiki.php.net/todo/php82">PHP Wiki</a>.</p>
     <p>For source downloads of PHP 8.2.0 Alpha 1 please visit the <a href="https://downloads.php.net/~sergey/">download page</a>.</p>
     <p>Please carefully test this version and report any issues found in the <a href="https://github.com/php/php-src/issues">bug reporting system</a>.</p>
     <p><strong>Please DO NOT use this version in production, it is an early test version.</strong></p>
     <p>For more information on the new features and other changes, you can read the <a href="https://github.com/php/php-src/blob/php-8.2.0alpha1/NEWS">NEWS</a> file, or the <a href="https://github.com/php/php-src/blob/php-8.2.0alpha1/UPGRADING">UPGRADING</a> file for a complete list of upgrading notes. These files can also be found in the release archive.</p>
     <p>The next release will be PHP 8.2.0 Alpha 2, planned for 23 Jun 2022.</p>
     <p>The signatures for the release can be found in the <a href="https://gist.github.com/saundefined/b83188c0bf39ed69af2186b8f9cb1fdd">manifest</a> or on the <a href="https://qa.php.net/">QA site</a>.</p>
     <p>Thank you for helping us make PHP better.</p>
    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-06-09T13:24:09+00:00">09 Jun 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-06-09-2" id="2022-06-09-2">PHP 8.1.7 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.7. This is a security release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.7 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.7">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-06-09T08:27:58+00:00">09 Jun 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-06-09-1" id="2022-06-09-1">PHP 7.4.30 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 7.4.30. This is a security release.</p>

<p>All PHP 7.4 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 7.4.30 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-7.php#7.4.30">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-05-12T21:48:12+00:00">12 May 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-05-12-2" id="2022-05-12-2">PHP 8.1.6 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.6. This is a bug fix release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.6 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.6">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-05-12T07:44:14+00:00">12 May 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-05-12-1" id="2022-05-12-1">PHP 8.0.19 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.19. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.19 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.19">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-04-15T01:50:44+00:00">15 Apr 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-04-15-1" id="2022-04-15-1">PHP 8.0.18 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.18. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.18 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.18">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-04-14T17:49:29+02:00">14 Apr 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-04-14-2" id="2022-04-14-2">PHP 8.1.5 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.5. This is a bug fix release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.5 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.5">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-04-14T08:22:12+00:00">14 Apr 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-04-14-1" id="2022-04-14-1">PHP 7.4.29 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 7.4.29. This is a security release for Windows users.</p>

<p>This is primarily a release for Windows users due to necessarily
upgrades to the OpenSSL and zlib dependencies in which security issues
have been found. All PHP 7.4 on Windows users are encouraged to upgrade
to this version.</p>

<p>For source downloads of PHP 7.4.29 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-7.php#7.4.29">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-03-17T23:34:53+00:00">17 Mar 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-03-17-2" id="2022-03-17-2">PHP 8.1.4 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.4. This is a bug fix release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.4 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.4">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-03-17T08:02:02+00:00">17 Mar 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-03-17-1" id="2022-03-17-1">PHP 8.0.17 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.17. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.17 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.17">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-02-17T23:59:59+01:00">17 Feb 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-02-17-3" id="2022-02-17-3">PHP 8.1.3 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.3. This is a security release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.3 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.3">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-02-17T23:14:20+00:00">17 Feb 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-02-17-2" id="2022-02-17-2">PHP 8.0.16 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.16. This is a security release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.16 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.16">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-02-17T14:37:30+00:00">17 Feb 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-02-17-1" id="2022-02-17-1">PHP 7.4.28 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 7.4.28. This is a security release.</p>

<p>All PHP 7.4 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 7.4.28 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-7.php#7.4.28">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-01-21T03:08:44+00:00">21 Jan 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-01-21-1" id="2022-01-21-1">PHP 8.1.2 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.2. This is a bug fix release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.2 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.2">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2022-01-20T11:38:32+00:00">20 Jan 2022</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2022.php#2022-01-20-1" id="2022-01-20-1">PHP 8.0.15 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.15. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.15 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download#php-8.0">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.15">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2021-12-17T17:31:25+01:00">17 Dec 2021</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2021.php#2021-12-17-1" id="2021-12-17-1">PHP 8.1.1 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.1.1. This is a bug fix release.</p>

<p>All PHP 8.1 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.1.1 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.1">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2021-12-16T23:33:54+00:00">16 Dec 2021</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2021.php#2021-12-17-1" id="2021-12-17-1">PHP 8.0.14 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 8.0.14. This is a bug fix release.</p>

<p>All PHP 8.0 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 8.0.14 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.0.14">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2021-12-16T15:16:26+00:00">16 Dec 2021</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2021.php#2021-12-16-1" id="2021-12-16-1">PHP 7.4.27 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div><p>The PHP development team announces the immediate availability of PHP 7.4.27. This is a bug fix release.</p>

<p>All PHP 7.4 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 7.4.27 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-7.php#7.4.27">ChangeLog</a>.
</p>    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2021-11-25T21:02:32+00:00">25 Nov 2021</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2021.php#2021-11-25-1" id="2021-11-25-1">PHP 8.1.0 Released!</a>
    </h2>
  </header>
  <div class="newscontent">
    <div>
<p>The PHP development team announces the immediate availability of PHP 8.1.0. This release marks the latest minor release of the PHP language.</p>

<p>PHP 8.1 comes with numerous improvements and new features such as:</p>

<ul>
  <li><a href="https://www.php.net/manual/en/language.enumerations.php">Enumerations</a></li>
  <li><a href="https://wiki.php.net/rfc/readonly_properties_v2">Readonly properties</a></li>
  <li><a href="https://wiki.php.net/rfc/fibers">Fibers</a></li>
  <li><a href="https://wiki.php.net/rfc/pure-intersection-types">Pure Intersection Types</a></li>
  <li><a href="https://www.php.net/manual/en/migration81.new-features.php#migration81.new-features.core.never-type">never</a> return type</li>
  <li><a href="https://www.php.net/manual/en/migration81.new-features.php#migration81.new-features.core.callable-syntax">First-class Callable Syntax</a></li>
  <li>"final" modifier for class constants</li>
  <li>New <a href="https://www.php.net/manual/en/function.fsync.php">fsync</a> and <a href="https://www.php.net/manual/en/function.fdatasync.php">fdatasync</a> functions</li>
  <li>New <a href="https://www.php.net/manual/en/function.array-is-list.php">array_is_list</a> function</li>
  <li>Explicit <a href="https://www.php.net/manual/en/migration81.new-features.php#migration81.new-features.core.octal-literal-prefix">Octal numeral notation</a></li>
  <li>And much much more...</li>
</ul>
<p>Take a look at the <a href="https://www.php.net/releases/8.1/">PHP 8.1 Announcement Addendum</a> for more information.</p>

<p>For source downloads of PHP 8.1.0 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-8.php#8.1.0">ChangeLog</a>.
</p>

<p>The <a href="http://php.net/manual/en/migration81.php">migration guide</a> is available in the PHP Manual.
Please consult it for the detailed list of new features and backward incompatible changes.</p>

<p>Many thanks to all the contributors and supporters!</p>
    </div>
  
  </div>
</article><article class="newsentry">
  <header class="title">
    <time datetime="2021-11-22T22:13:41+00:00">22 Nov 2021</time>
    <h2 class="newstitle">
      <a href="https://www.php.net/archive/2021.php#2021-11-22-1" id="2021-11-22-1">PHP Foundation Announced</a>
    </h2>
  </header>
  <div class="newscontent">
    <div>
      <p>
        <a href="https://opencollective.com/phpfoundation">The PHP Foundation</a> has been
        <a href="https://blog.jetbrains.com/phpstorm/2021/11/the-php-foundation/">announced</a>
        as an entity for funding the work of developing the PHP language.
      </p>
      <p>
        For more information regarding the structure and purpose of the foundation,
        please check out the blog post at:
        <a href="https://blog.jetbrains.com/phpstorm/2021/11/the-php-foundation/">jetbrains.com</a>.
      </p>
    </div>
  
  </div>
</article><p class="archive"><a href="https://www.php.net/archive/">Older News Entries</a></p></div>    </section><!-- layout-content -->
    
<aside class="tips">
    <div class="inner">
<div class="panel">  <a href="https://www.php.net/conferences" class="headline" title="Conferences calling for papers">Conferences calling for papers</a><div class="body"><ul><li><a href='https://www.php.net/conferences/index.php#2022-07-14-1' title='Longhorn PHP 2022 - CFP Open'>Longhorn PHP 2022 - CFP Open</a></li></ul></div></div><div class="panel">  <a href="https://www.php.net/conferences" class="headline" title="Upcoming conferences">Upcoming conferences</a><div class="body"><ul><li><a href='http://php.net/conferences/index.php#id2022-07-06-1' title='International PHP Conference Munich 2022'>International PHP Conference Munich 2022</a></li><li><a href='https://www.php.net/conferences/index.php#id2022-07-01-1' title='SymfonyWorld Online 2022 Winter Edition'>SymfonyWorld Online 2022 Winter Edition</a></li><li><a href='https://www.php.net/conferences/index.php#id2022-06-30-1' title='SymfonyCon Disneyland Paris 2022'>SymfonyCon Disneyland Paris 2022</a></li><li><a href='https://www.php.net/conferences/index.php#id2022-05-05-1' title='CakeFest 2022: The Official CakePHP Conference'>CakeFest 2022: The Official CakePHP Conference</a></li></ul></div></div>
    <p class='panel'><a href='/cal.php'>User Group Events</a></p>
    <p class='panel'><a href='/thanks.php'>Special Thanks</a></p>
    <div class='panel social-media'>
      <span class='headline'>Social media</span>
      <div class='body'>
        <ul>
          <li>
            <a href="https://twitter.com/official_php">
              <i class="icon-twitter"></i>
              @official_php
            </a>
          </li>
        </ul>
      </div>
    </div>
</div>
</aside>

  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="https://www.php.net/copyright.php">Copyright &copy; 2001-2022 The PHP Group</a></li>
        <li><a href="https://www.php.net/my.php">My PHP.net</a></li>
        <li><a href="https://www.php.net/contact.php">Contact</a></li>
        <li><a href="https://www.php.net/sites.php">Other PHP.net sites</a></li>
        <li><a href="https://www.php.net/privacy.php">Privacy policy</a></li>
        <li><a href="https://github.com/php/web-php/blob/master/index.php">View Source</a></li>
      </ul>
      </div>
    </div>
  </footer>

    <div class='elephpants'><div class=images></div></div>
 <!-- External and third party libraries. -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://www.php.net/cached.php?t=1657730402&amp;f=/js/ext/hogan-3.0.2.min.js"></script>
<script src="https://www.php.net/cached.php?t=1421837618&amp;f=/js/ext/typeahead.min.js"></script>
<script src="https://www.php.net/cached.php?t=1657876202&amp;f=/js/ext/mousetrap.min.js"></script>
<script src="https://www.php.net/cached.php?t=1657730402&amp;f=/js/ext/jquery.scrollTo.min.js"></script>
<script src="https://www.php.net/cached.php?t=1653918602&amp;f=/js/search.js"></script>
<script src="https://www.php.net/cached.php?t=1657891202&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="https://www.php.net/images/to-top@2x.png"></a>
</div>
</body>
</html>
