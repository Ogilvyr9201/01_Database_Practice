<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");

    // Connect to database

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_error())

    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }

?>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, 
    non-fiction, genre, review">
    <meta name="author" content="Ryan Ogilvy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/main.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
        
        <div class="box banner">
            <h1>Orchid reading</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">
        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
            <i>Type Part of the title / author if desired</i>

            <hr />

            Title Search<br />
            Author Search<br />
            Genre Search<br />
            Rating Search

        </div>    <!-- / side -->      