Here's how we set up everything:
//I imagine that not all of this is necessary but this more or less exactly what I did

Materials:
Mysql WorkBench 8.0
Notepad++
Bootstrap 4 // to make html less ugly
WAMP/MAMP //I imagine they work similarly I used WAMP
Web Browser //I used Google Chrome
All the files we provide in our zip file + the dataset

Set Up
1. Boot up WAMP
2. Type localhost as the url in your web browser
3. Under Tools select Add a VirtualHost
4. Name the virtual host "nytreeproject"
5. Navigate to the www folder of your wamp64 directory and create a folder called "nytreeproject"
6. Type c:/wamp64/www/nytreeproject as the absolute path of the virtualhost folder
7. Dump the .php files into the c:/wamp64/www/nytreeproject folder

8. Open Mysql Workbench
9. establish a new connection called project 2
10. create a folder called project2 to keep the files together
11. dump the files into project2
12. Open the dataset in Excel and convert it to a tab separated txt file// this is to
12.5. Take the tab separated input file and place it in the tmp folder of your wamp64 folder
13. Run all of the .sql files and the nytrees database will be in place

14. Go back to localhost and click phpmyAdmin 
15. change the password of user:root to "tree" or edit the nytreeproject.php file to get around this //I tried and the site stopped working the way I wanted so I kept the password

16. At this point you should be able to go to localhost and click on the "nytreeproject" virtual host or the project folder of the same name
17. Click on home-page and the website should show up correctly!

Email me at christopher.a.glenn@vanderbilt.edu if you have any issues
