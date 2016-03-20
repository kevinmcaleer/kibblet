<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classPage
 *
 * @author kev
 */
class Page {
    //put your code here

    public $title;
    public $id;
    public $author;
    public $creationdate;
    public $content;
    
public function Create()
{
    // save the current class varaibles out to the database as a new record
    
}

public function load($pid)
{
   include 'connect.php';
    // contect to the database and load the record using the pid as the key
    pg_query("select * from pages where id = $pid");
    
}

} // end of class

?>
