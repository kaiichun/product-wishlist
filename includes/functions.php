<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=productwishlist', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'JlM9YL7mge6ghuLi' // instruction: change this to your database password
    );
}