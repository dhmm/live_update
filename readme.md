### How is it ?
This is a very simple tutorial with php+jquery+ajax which updating the html table data from mysql database without refreshing the page.

### How to install
1) Create a db in your mysql server
2) Change the DB settings from settings/db.php
3) Run the install.php
4) Go to home ( index.php )


### How does it work ?
Its working with html table.
Its updating the table's lines (TR) when the user id exist in the Javascript userIds array.
If user id isnt exist then it adds a new line to table.
It keeping a second array with processed user ids and when it cannot find any ids from the userIDs in the processedIds array then its removing the tr row