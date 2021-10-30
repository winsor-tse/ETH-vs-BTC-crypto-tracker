## Detailed instructions on how to build and run

Step 1: download XAMPP for a live web server
[XAMPP download 1](https://www.apachefriends.org/index.html)
[XAMP download 2](https://sourceforge.net/projects/xampp/files/)

Step 2: Download all files from repository and place them into a folder called cryptotracker

Step 3: Put all files here inside the folder for xampp\htdocs:
> C:\xampp\htdocs\cryptotracker

Note:

Does not matter what the folder name is. Just create a folder inside the xampp htdocs

Step 4: Make sure to open and run xampp, click on/start apache service

Step 5: path to a local host so the website can run:

http://localhost/cryptotracker/home.php?name=home

Note that there needs to be a tag like ?name=home because that is the home page
if it is just /home.php nothing will show up because it is not the home page.

This is how the page would look like:

![website](https://user-images.githubusercontent.com/89112285/139470708-3b12d2fd-7d86-484a-bbfd-8640b59914da.PNG)

### Features and technology used:

- Uses php, html, css, javascript to create a live website that tracks data from two apis
- Specifcally parses through JSON data from apis and display the information on a website
 
