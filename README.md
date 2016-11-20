# CS174-HW4

For this homework, you will create a web site called PasteChart where people can share their data as graphical charts. Before describing the project in detail, let's discuss the general set up in which you should code your project. Your application should be written using the same MVA architecture with namespaces as used in Hw3. For this homework, your application should be written so as to work with Composer and classes should be loaded using Composer's autoloader. Your composer.json file should list Simpletest (Simpletest on packagist) greater than or equal to version 1.1 as a dependency. When writing your program you should make use of git. If the grader does a git log and then does a git diff between successive commits. The difference should always be less than 150 lines. You should also break the coding of your project into issues and there should be a folder in your Hw4 folder, calles issues, in which you should have a one text file/issue. The issue files's filenames should follow the format: number_short_title_for_issue.txt. For example, 0001_Set_up_folder_structure.txt. In the text file there should be a title of the issue, who in your group its assigned to, and a short description of what needed to be done for the issue. This can be followed by any discussion back-and-forth on the issue.

Now let's move to the specifics of what you need to code and how the PasteChart site should work. When a user comes to the landing page of your site, the user should be greeted with a web page with the title and h1 heading PasteChart. Beneath this should be written, "Share your data in charts!" The rest of this page should consist of a text field with label, "Chart Title", then a large textarea under which is a Share button. The placeholder for the textarea should say the allowed format for the data. Be aware that placeholders and textarea can be tricky to get working together. The data format should be a comma separated list of values, one per line, up to 50 lines of at most 80 characters, representing points to be plotted. The first coordinate should represent a text label (can involve numbers but can't involve a comma), the remaining coordinates should represent values that correspond to that text label from up to 5 sources. For example, the text labels might have months of the year (Jan, Feb, etc) and the values could correspond to the rabbit and wolf populations during those months in thousands. In which case, rows of data entered into the textarea might look like:

Jan,600,5.4
Feb,450,5.0
... 
On every row, the first coordinate must be a nonempty string, however, for the remaining coordinates if a value is missing, we represent that with the empty string. For example:
Aug,,10.1
When the user clicks the Share button, your app should check if the data conforms to the format indicated above. This should be done both in the client before the form is submitted and on the server (because the server shouldn't trust the client). You should write at least a couple Simpletest unit tests to tests that the server side checking of the form data is behaving as expected. On the client, if the data doesn't conform, a message should be displayed and the form should not be submitted. On the server, if it doesn't conform, an error should briefly be displayed, and then the landing page with a cleaned version of the data on it should be drawn. If the data does conform to the format, the data should be md5 hashed using PHP's hash function and the tuple (md5, title, data) should be stored in a database table. Let XXXXX represent the characters in the md5 hash. Then your script should draw a page with title and h1 heading, "XXXXX LineGraph - PasteChart". Beneath this should be a line graph with title as given by the user, and using the user provided data. Define a constant BASE_URL in your config.php script as the url of your website. This page should then have the lines (in p or div or pre or other tags of your choice):

Share your chart and data at the URLs below:

As a LineGraph:
BASE_URL/?c=chart&a=show&arg1=LineGraph&arg2=XXXXX

As a PointGraph:
BASE_URL/?c=chart&a=show&arg1=PointGraph&arg2=XXXXX

As a Histogram:
BASE_URL/?c=chart&a=show&arg1=Histogram&arg2=XXXXX

As XML data:
BASE_URL/?c=chart&a=show&arg1=xml&arg2=XXXXX

As JSON data:
BASE_URL/?c=chart&a=show&arg1=json&arg2=XXXXX

As JSONP data:
BASE_URL/?c=chart&a=show&arg1=jsonp&arg2=XXXXX&arg3=javascript_callback
The url of this page should match that of the LineGraph url above. Each of the other urls above should work and produce a page like this one, except with title and h1 heading changed to the value of arg1, and the actual displayed graph or data being of type arg1. For the XML format, I want you to create your own XML language that you define in a file chart.dtd that you include in your Hw4 folder. The grader will validate your XML output against this DTD using Oxygen. Let YYYYY denote the JSON data output if arg1 was JSON, let arg3=foo in a corresponding jsonp url. Then the JSONP response should look like:

foo(YYYYY);
To draw graphs, I want you to enhance the Javascript code, chart.js, below to handle k-tuples for points rather than just 2-tuples for points, and I want you to enhance it so that it can draw histograms.
