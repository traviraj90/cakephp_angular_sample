#CakePHP AngularJS Sample

This is a sample app when working with AngularJS on CakePHP.
It's based on [Hantsy's Angular Sample
Code](http://hantsy.blogspot.com/2013/11/angularjs-cakephp-sample-codes.html)\.

##Database Setup
Copy the following script to MySQL console:

    CREATE DATABASE cakephp_angular_sample;
    USE cakephp_angular_sample
    CREATE TABLE posts (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50),
        body TEXT,
        created DATETIME DEFAULT NULL,
        modified DATETIME DEFAULT NULL
    );

    INSERT INTO posts (title,body,created)
    VALUES ('The title', 'This is the post body.', NOW());
    INSERT INTO posts (title,body,created)
    VALUES ('A title once again', 'And the post body follows.', NOW());
    INSERT INTO posts (title,body,created)
    VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());

This sample app assume that the database user is 'root' without password, if
your setup is different, change the configuration in 'app/Config/database.php'

##How to run the code sample
1. Clone this repository to cakephp\_angular\_sample directory in your server root  
2. Copy the script on Database Setup to MySQL console
3. Open your browser and go to http://localhost/cakephp\_angular\_sample

##Running on different directory
If you installed it on a different directory other than
cakephp\_angular\_sample, you need to edit 'webroot/js/controllers.js' and
change the following line:

    $rootScope.appUrl = "http://localhost/cakephp_angular_sample/";

##Approach
Hantsy's approach is more like separating the both client and server side scripts from CakePHP by
modifying htaccess file. However, I wanted to try another approach by using CakePHP's
PagesController to serve the initial page, and AngularJS will take it from there, so it's more like a
standalone CakePHP app =)

So, this is what I did to Hantsy's original sample:  
1. Configured "Config/routes.php" to serve a default to "/Pages/index"  
2. Moved content of "webroot/index.html" to both "View/Layouts/default.ctp" and "View/Pages/index.ctp".  
3. Moved "webroot/app/\*" to "webroot/"  
4. Moved "lib" folder to "webroot/js/lib" because it's all javascripts  
5. Included all those scripts in the head section of "View/Layouts/default.ctp"  

Also, I changed some codes to make it compatible with the current bootstrap and removed some unnecessary
codes/libraries, e.g. i18n library\.
