<!--
Author: Rolando Isaac Climaco
Date: 04/2020
Purpose: Navigation bar when the user is logged in
-->
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navigationbar">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">Welcome Institute of Studies</a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="<?php echo urlDirector::$homeURL?>">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="navbar-link" href="<?php echo urlDirector::$logoutURL?>">Logout</a>
      </li>
    </ul>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
