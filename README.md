There is no intention to provide wrong details to establish the database connection, but you should still make sure, your DB server is on
and details like db name, username and password are correct for you.


@TODO no.1
Inspect insert.php responsible for inserting the data. If you visit the page leading to insert.php from your browser, 
new record should be inserted into the table regions.
- try it by visiting insert.php from your browser
- have a look in phpmyadmin and see that unless you are really lucky, the number in name and the slug is not the same.
- fix the code, but for each record the number should be still random.
- try the fixed code and check the result in php my admin.


@TODO No.2
In select.php you should implement the method getAreas.
- implemented method should return array of all regions/areas with name starting with "Area_" + the number passed to the method.

Since the method is currently called with parameter 5, it should return for example Area_51, Area_593 etc. depending on your data
- check the results by visiting select.php
- if you need more records to get more data you can use fixed insert.php

Adjust your query so the result has no more than 5 records (no offset needed) are ordered the results by name with values descending.


@TODO No.3
There is fixup.php to deal with records with inconsistent number in name and slug (it will be deleted).
The file will work once you implement delete function to Region class. 
- implement delete meted in Region.php
- visit fixup.php from your browser
- check data in phpMyAdmin or any other way
