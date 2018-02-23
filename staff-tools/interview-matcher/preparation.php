<?php
	include("sso.php");
	requireLogin();
?><!DOCTYPE html>
<html>
<head>
	<title>Preparation for Interview Event</title>
</head>
<body>

<form method="POST" action="finish-preparation.php" enctype="multipart/form-data">
	<p>In preparation for the event, we need to get some information.</p>

	<p>First, let's give it a name so we can archive the results for later.</p>

	<label>
		<span>Event name:</span><br />
		<input type="text" name="event_name" />
	</label>

	<hr />

	<p>Then, we need to know who is participating. The volunteers spreadsheet you create should look like this:</p>

	<table>
		<caption>Sample Volunteers Spreadsheet</caption>
		<tr>
			<th>Name</th>
			<th>VIP</th>
			<th>Available</th>
			<th>Virtual</th>
			<th>Number</th>
			<th>Interests</th>
		</tr>
		<tr>
			<td>Bart</td>
			<td>true</td>
			<td>true</td>
			<td>false</td>
			<td>212-555-1234</td>
			<td>psychology; sociology</td>
		</tr>
		<tr>
			<td>Peggy</td>
			<td>false</td>
			<td>true</td>
			<td>false</td>
			<td>Room 123</td>
			<td>psychology; medicine</td>
		</tr>
	</table>

	<p>Note that the interests are separated by semicolons in the cell.</p>

	<p>And make sure it is in <b>.csv</b> format, comma-separated values.</p>

	<label>
		<span>Volunteers spreadsheet:</span><br />
		<input type="file" name="volunteers_csv" />
	</label>

	<hr />

	<p>Fellows get a score column. This is a number you make up that gives them preferred treatment.</p>

	<p>Therefore, the fellows spreadsheet you create should look like this:</p>

	<table>
		<caption>Sample Fellows Spreadsheet</caption>
		<tr>
			<th>Name</th>
			<th>Score</th>
			<th>Available</th>
			<th>Interests</th>
		</tr>
		<tr>
			<td>Anne</td>
			<td>45</td>
			<td>true</td>
			<td>psychology; pride; prejudice</td>
		</tr>
		<tr>
			<td>Bert</td>
			<td>25</td>
			<td>true</td>
			<td>theology; spaceships</td>
		</tr>
	</table>

	<p>Note that the interests are separated by semicolons in the cell.</p>

	<p>And make sure it is in <b>.csv</b> format, comma-separated values.</p>

	<label>
		<span>Fellows spreadsheet:</span><br />
		<input type="file" name="fellows_csv" />
	</label>

	<br /><br /><br />

	<input type="submit" value="Submit" />
</form>
</body>
</html>
