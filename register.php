<?php include("index.html")?>
<body>
<div class="register">
<form action="connect.php" method="post">
<label for="name">Name</label><br />
<input type="text" size="40" placeholder="enter your name" name="n" required /><br /><br />

<label for="age">age</label><br />
<input type="number" size="40" placeholder="enter your age" name="a" required /><br /><br />

<label for="dob">DOB</label><br />
<input type="date" placeholder="enter your DOB" name="d" required /><br /><br />

<label for="gender">GENDER</label><br />
<input type="radio" placeholder="enter your gender" name="g" value="male"  />male
<input type="radio" placeholder="enter your gender" name="g" value="female" />female<br /><br />
<label for="email">email</label><br />
<input type="email" size="40" placeholder="enter your mail id" name="e" required /><br /><br />

<label for="pwd">PWD</label><br />
<input type="password" min="4" maxlength="8" name="p" required /><br /><br />

<label for="Model">Model</label><br />
<select name="s">
<option value="SVJ Roadster">SVJ Roadster</option>
<option value="Aventador">Aventador</option>
<option value="Gallardo">Gallardo</option>
</select>
<br />
<br />
<input type="submit" value="submit"/>
<input type="reset" value="reset"/>
</form>
</div>
</body>
<?php include("footer.html")?>