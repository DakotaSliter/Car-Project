<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	
	<link rel="stylesheet" type="text/css" href="phpcss.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
  		<div class="container">
    		<img src="php_img.jpg" alt="">
  		</div>
	</nav>

	<div id="container">
		<h2>Time to Learn Some PHP!</h2>
		<p>PHP is a back-end, or server-side, scripting language. It integrates with Javascript and handles user data and can retrieve and dynamically create webpages from a database or server.</p>
		<br>
		<h2>Writing A PHP Doc</h2>
		<p>PHP documents can be written inside any HTML file, and saved as a .php extension. All HTML inside a .php will still be rendered as HTML, but will allow the additional use of dynamic PHP applications. Begin writing PHP snippets of code like this:</p>
		<p>< ?php  <br>*write some code* <br>?></p>
		<p>Inside the PHP tags, HTML will still be rendered as HTML, so some choose to open the PHP tag at the beginning of a document if they will be using PHP frequently, so as to avoid messy code from opening and closing php tags all over.</p>
		<p>Don't do this if your php use can be confined to one area though. This will make it much easier to debug later.</p>
		<hr>
		<h2>Variables</h2>
		<p>Variables in php are declared with a '$' sign in front of them. Also, PHP does not use camelCase for variable naming: instead, we use underscores to seperate words in longer variable name. <br><br>
			<b>$var_one;</b><br>
			<b>$var_two:</b><br>
		</p>
		<p>the 'echo' command returns the value of a variable or string and displays it as plain text HTML.</p>
		<p><b>$user_name = 'jerry';</b><br>
			<b>echo $user_name;</b><br><br>
		Returns 'jerry' to the HTML document wherever the code is placed.</p>
		<br>
		<hr>
		<h2>Arrays</h2>
		<p>Arrays are created in php using <b>'array()'</b>. These can hold variables and other arrays, like in JS.</p>
		<p><b>array</b>('$var_one', <b>array</b>('$more_vars', '$data'));</p>
		<p>Accessing the data and variables within an array is similar to JS. Simply use bracket notation and the index number: <br><b>$array_one[0][2];</b></p>
		<br><hr>
		<h2>Operators</h2>
		<p>Most operators are the same as JS, except the 'not equal to' operator can be written as '< >' in PHP, in addition the '!='.</p>
		<h3>Logical Operators</h3>
		<p>PHP uses similar logical operators to JavaScript, just expressed differently.</p>
		<ul>
			<li><b>if()</b> - this is expressed like so:  if($var === true) doSomething();</li>
			<li><b>&&</b> - returns false if both statements are not true.</li>
			<li><b>||</b> - returns true if one side is true.</li>
			<li><b>!</b> - the 'not' operator comes <i>before</i> the statement, like this: !($j === $k).</li>
			<li><b>and</b> + <b>or</b> - lower precedence and should not be used unless needed. For example, || prevents a second statement from ever running, while 'or' does not.</li>
			<li><b>xor</b> - exclusive or. Will run if one side is true or the other is true, but not when both are true.</li>
		</ul>
		<h3>Adjusting Variables</h3>
		<p>Incrementing and decrementing variables is slightly different as well. Rather than i++, the operator comes <i>before</i> the variable. So: <b>++$x</b>.</p>
		<p>Certain statements are the same though. For example, the shortened version of incrementing is the same: <b>$x += 10;</b>.</p>
		<p>When testing variables in if() statements, order matters. If we want to increment $x and then check the truthiness of a statement, we put the operator first. But if we want to first check if $x === some value, we write it like so: <b>if($x-- === $y)</b>.</p>
		<p><b>Concatenation</b> uses a '.' in place of '+' in JS. So: <br>
			<b>$x = 5;<br>
				$y = 6;<br>
				echo $x.$y;<br></b>
				<br>Returns '56'.</p>
		<p>Concatenation does not add spacing. Spacing must be added as needed.</p>
		<p>The <b>'.='</b> operator can be used to append the value of one variable to another. <br><br>
			<b>$bulletin .= $news_flash;</b></p>
				<br>
		<hr>
		<h2>Strings</h2>
		<p>There are 2 types of strings in PHP:</p>
		<ul>
			<li><b>Literal strings</b> - single quoted strings that tell each letter inside will be placed as a character in the variable. This means that '$var_one' will not be interpeted as a variable, and will parse out as simple text.</li>
			<li><b>Double quotes</b> - these strings allow the use of $variables within the text content. This can replace concatenation or the '.=' operator simply by adding in the variable at the end of the string.</li>
		</ul>
		<p>When creating strings, use a backslash ('\') before any potentially offending characters to avoid conflicts and errors, such as when using apostrophes and quotes within a string. These can also be used to make special characters, such as <b>\t</b> (tab), or <b>\n</b> (newline), although there are usually better ways to do this.</p>
		<p>We can avoid the need for escape characters by creating a here-document, or heredoc, by using the <b><<<_END</b> tag. This tag must be used on it's own line, in conjunction with it's closing <b>_END;</b> tag. All text between these tags will be interpreted as if they were all inside double quotes. "Quotes" and 'apostrophes' need not be backslashed. All tabbing, indenting, and whitespace will also be shown. Also, the '_' before the tags is not necessary, but is used to help differentiate them from variables and the like.</p>
		<p>NOTE: the closing _END tag MUST have no spacing or other characters to it's left, or it will cause an error. Below is an example of text output with 'echo' through this method:</p>
		<img src="end_tag.png" alt=""><br>


<?php
echo <<<_END
	Words and more words. This is how we communicate. No need for silly "He said" or 'She said'. It simply is, inside the tag.
		
_END
?>
<p>This allows us to write entire sections of HTML inside the _END tags, and simply replace any dynamic parts with PHP variables.</p>
<br><hr>
<h2>Constants</h2>
<p>Constants are basically immutable variables for the length of the program. They cannot be changed through function or have values amended to them. An example of when you would want to use this is to hold the location of your server root directory: <b>define("ROOT_LOCATION", "usr/local/www/");</b>. Constants are NOT referenced with a '$', and they are defined using the <b>define( )</b> function. You can, however, store constants as values of variables: <br><br>
<b>$directory = ROOT_LOCATION;</b></p>
<p>It is considered good practice to use all uppercase for constant names.</p>
<h3>Magic and Predefined Constants</h3>
<p>PHP comes with built-in constants that we won't use until later. However, there are several ones that we use often and are really useful, dubbed 'magic constants'. These constants have a double '__' before and after their names, so we don't accidentally create a new constant with the same name.</p>
<h4>Magic Constants</h4>
<ul>
	<li><b>__LINE__</b> - current line number on the file.</li>
	<li><b>__FILE__</b> - the full path and filename. If used inside an <i>include</i>, the name of the included file is returned. Some operating systems  allow aliases for directories, called <i>symbolic links</i>; in __FILE__, these are always changed to the actual directories.</li>
	<li><b>__DIR__</b> - the directory of the file. If used inside an <i>include</i>, the directory of the included file is returned. This is equivalent to <i>dirname(__FILE__)</i>. The directory name does not have a trailing slash unless it is the root.</li>
	<li><b>__FUNCTION__</b> - the function name. In PHP 5, returns the functions name as it was declared. In PHP 4, it's value is always lowercase.</li>
	<li><b>__CLASS__</b> - the class name. In PHP 5, returns the class name as it was declared. In PHP 4, it's value is always lowercase.</li>
	<li><b>__METHOD__</b> - the class method name. Returned as it was declared.</li>
	<li><b>__NAMESPACE__</b> - name of the current namespace. Defined at compile time.</li>

</ul>
<br><hr>
<h2>Functions</h2>
<p>Functions in PHP are declared like so: <br><br>
function name($variable) {<br>
return $variable.$variable2;<br>
}</p>
<h4>Local variables</h4>
<p>The default <b>scope</b> of PHP variables says that variables declared inside functions will only be defined within the function, unless otherwise sepcified as global scope variables. Variables only used inside a function are called <b>local variables</b>. Once a function is done running, the value of this variable is erased, and it is defined again the next time the function runs.</p>
<p>For example, if you define a variable outside of a function, and then attempt to call that variable <i>within</i> that function, you will get an error or nothing will happen. To fix this, you have to either pass the variable in as a parameter into the function, or you must move the code around to avoid calling the variable outside of it's scope.</p>
<h4>Global Variables</h4>
<p>In order to tell PHP that you want a particular variable to be usable at all levels of the program, we add the keyword <b>'global'</b> before it: <b>global $variable = 'some text';</b></p>
<p>Avoid using global variables unless you can think of no other way to do what you are trying to do. A 1000 line program that had a bug due to a missassigned global variable will be a nightmare to track down and fix.</p>
<h4>Static Variables</h4>
<p>CONTINUE NOTES IN NOTEBOOK</p>

<div id="signup">

<h2>Sign Up!</h2>

<form action="test.php" method="POST">

<input type="text" name="first_name" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<input type="password" name="verify_password" placeholder="Verify Password"><br><br>

<input type="submit" name="submit"><br><br>

<h3>
<?php 
	require_once 'signup.php';
?>
</h3>



</form>
</div>

<div>
<?php
	require_once 'upload.php';
?>
</div>

<p>Let's Make A Dynamic Site....For My Favorite Cars!</p>
<hr>
<h2>MySQL</h2>
<p>Before learning how MySQL can be interacted with PHP, we will run it in the command line of Windows to learn more about it.</p>
<p>To start up a MySQL server, first open Ampps to get it running. Open up the command prompt and run as administrator.</p>
<p>We must specify the path where MySQl will be stored.Then we acces it as a root user.</p>
<br><p>cd C:\"Program Files (x86)\Ampps\mysql\bin"<br>
mysql -u root -pmysql</p>
<p>This code tells the computer you want to start up mysql as user 'root' with the password 'mysql'.</p>

<h2>Project: Create A Search Bar For An Infiniti Cars Database</h2>
<p>First, I must create the database and populate it with some data from cool Infiniti cars. Then, I must add full-text indexes to them (maybe?) for searchability. Hmm.</p>
<p>I'm gonna need a search bar. Maybe find a way for the search bar to have suggestions as you type? Or instead, create a dropdown menu that has the cars listed, and you can choose one. Then after you select the car and hit 'Go', it adds a picture of the car and info stored in the database to this page.</p>

<?php
	require_once 'CarSelector.php';
?>

</div>
</body>
</html>