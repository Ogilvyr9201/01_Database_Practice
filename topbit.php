<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php");  // include data sanitising...

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
            <h1> <a href="index.php" class="title">Orchid reading</a></h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">
        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
            <i>Type Part of the title / author if desired</i>

            <hr class="line"/>
            
            <!-- Start of Title Search -->

            <form method="post" action="title_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="title" size="40" value="" 
                required placeholder="Title..." />

                <input class="submit" type="submit" name="find_title"
                value="search" />

            </form>

            <!-- End of Title Search -->
            <hr />

            <!-- Start of Author Search -->

            <form method="post" action="author_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="author" size="40" value="" 
                required placeholder="author..." />

                <input class="submit" type="submit" name="find_author"
                value="search" />

            </form>

            <!-- End of Author Search -->
            <hr class="line"/>

            <!-- Start of Genre Search -->

            <form method="post" action="genre_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="genre" size="40" value="" 
                required placeholder="genre..." />

                <input class="submit" type="submit" name="find_genre"
                value="search" />

            </form>

            <!-- End of genre Search -->
            <hr class="line"/>

            <i>Please use the drop down box to select Ratings</i>

            <hr class="line"/>
            <!-- Start of Rating Search -->

            <form method="post" action="rating_search.php"
            enctype="multipart/form-data">

                <select class="half_width" name="amount">
                    <option value="exactly">Exactly...</option>
                    <option value="more" selected>At least...</option>
                    <option value="less">At most...</option>
                </select>

                <select class="half_width" name="stars">
                    <option value=1>&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=3 selected>&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                
                </select>

                    <input type="submit" class="submit" name="find_rating"
                    value="Search" />

            <!-- End of Rating Search -->
            <hr class="line"/>


        </div>    <!-- / side -->      