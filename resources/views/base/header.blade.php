<?php
/**
 * Created by PhpStorm.
 * User: Ovidijus
 * Date: 2017-07-02
 * Time: 15:30
 */
?>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">@yield('pageTitle')</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <router-link tag="li" to="/" exact><a>Pradinis</a></router-link>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>