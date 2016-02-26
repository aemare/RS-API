# RS-API
An API written for RSPS servers.

# How to run RS-API
You can run this API by posting the required POST data to the Receiver.

Example of the POST data: 

"USER=Aemare&EMAIL=j.doe@github.com&VALIDATION_PASSWORD=256&REQUEST=CHA4%238ddAadNGE&REQUEST_ID=1"

Explaination of how this is working;
USER = The username of the player,
EMAIL = The e-mail of the player,
VALIDATION_PASSWORD = A password to execute on the API,
REQUEST = The data used to handle the request (Activation keys, password change keys),
REQUEST_ID = 0 = Account activation, 1 = Password change

# How to edit the settings
Go to Constants.php, here you can change the domain of your RSPS, the name of your RSPS and the password to execute on the API.

# How to edit the e-mails
Go to the directory called "formats", this has an format for every "REQUEST_ID", if you want to edit a certain message get the correct REQUEST_ID and look for a file called exactly the same way as it's REQUEST_ID. (../formats/0.html)

In the Mail.php class you will find 2 arrays that contain a few strings, the array called "replace" will be replaced by "replacements", if you don't want to have a hard time making those e-mail just use those.
