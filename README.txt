A Simple Portfolio app written in Cake PHP as used at http://numenore.co.uk/stuff

To install:
 - setup your Cake PHP app as normal 
 - replace the app directory with the one in /app
 - load the schema file into the DB
 - move /app/Config/bootstrap.php.default to /app/Config/bootstrap.php and set the config vars
 - Add at least one banner image (960 x 200px) to /app/webroot/img/banner/
 - Done!

To setup:
 - Visit http://yoursite/users/add to add the first user (after the first user is added you need to log in to add more, if you forget your password simply delete the contents of the Users table and repeat this step)
 - Visit http://yoursite/login to login
 - From http://yoursite/users add other users, links, items and portfolio


Uses:
 - Portfolio.js
 - 960.css
 - CakePHP