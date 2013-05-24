<div class="main">
<img src="<?php echo base_url();?>static/images/postajobbannerm.png" class="postajobbanner">
<br>
<br>

<form action="jobs_model.php" method="post">
<table>

<tr>
<td>
<h2>Job Information</h2>
<label>Title </label>
<br>
<input type="text" class="jobTitle" size="35"><br>
</td>
</tr>

<tr>
<td>
<br>
<label>Is this position*:</label><br>
Full Time <input type="checkbox" class="fullTime"> <br>
Part Time <input type="checkbox" class="partTime"> <br>
<label>*Check both if the position can be either</label>
</td>
</tr>

<tr>
<td>

</td>
</tr>

<tr>
<td>

</td>
</tr>

<tr>
<td>
<label>Technologies: Select all that apply</label><br>
<select multiple size="10" class="multipleoptions">
	<option value=”ajax“>Ajax</option>
	<option value=”flash“>Flash</option>
	<option value=”javaScript“>JavaScript</option>
	<option value=”jQuery“>jQuery</option>
	<option value=”silverlight“>Microsoft Silverlight</option>
	<option value=”html5css3“>HTML5/CSS3 </option>
	<option value=”asp“>ASP</option>
	<option value=”activevfp“>ActiveVFP (open source)</option>
	<option value=”csp“>CSP</option>
	<option value=”coldFusion“>ColdFusion</option>
	<option value=”cgi“>CGI</option>
	<option value=”erlangLyme“>Erlang/LYME</option>
	<option value=”groovy“>Groovy</option>
	<option value=”java“>Java</option>
	<option value=”lotusDomino“>Lotus Domino</option>
	<option value=”nodejs“>Node.js</option>
	<option value=”perl“>Perl</option>
	<option value=”php“>PHP</option>
	<option value=”python“>Python</option>
	<option value=”realStudio“>Real Studio</option>
	<option value=”rubyOnRails“>Ruby/Ruby on Rails</option>
	<option value=”smalltalk“>Smalltalk</option>
	<option value=”ssjs“>SSJS</option>
	<option value=”webdna“>WebDNA</option>
	<option value=”websphere“>Websphere</option>
	<option value=”.netmvc“>.NET/.NET MVC </option>
	<option value=”mvc“>MVC</option>
	<option value=”xhtml“>XHTML</option>
	<option value=”xmlxsl“>XML/XSL</option>
</select>
</td>
</tr>

<tr>
<td>
	<label>Description </label>
<br>
	<textarea id="descriptionTextarea" class="description"></textarea> 
</td>
</tr>

<tr>
<td>
	<label>Requirements </label>
<br>
	<textarea id="requirementsTextArea" class="requirements"></textarea> 
</td>
</tr>
</table>
<table>
<tr>
<h2>Company Information</h2>
<td><label>Company Name:</label><br>
<input type="text" class="companyName" size="55">
</td>
</tr>

<tr>
<td>
<label>Address1: </label><br>
<input type="text" class="address1" size="55">
</td>
</tr>

<tr>
<td>
<label>Address2:</label><br>
<input type="text" class="address2" size="55">
</td>
</tr>

<tr>
<td>
<label>City: </label><br>
<input type="text" class="city" size="55">
</td>
</tr>


<tr>
<td>
<label>State: </label>
<input type="text" class="state" size="2">
<label>Zip: </label>
<input type="text" class="zip" size="10">
</td>
</tr>

<tr>
<td>
<label>Contact Name: </label><br>
<input type="text" class="contactName" size="55">
</td>
</tr>

<tr>
<td>
<label>Phone: </label><br>
<input type="text" class="phone" size="55">
</td>
</tr>

<tr>
<td>
<label>Fax: </label><br>
<input type="text" class="fax" size="55">
</td>
</tr>

<tr>
<td>
<label>Email: </label><br>
<input type="text" class="email" size="55">
</td>
</tr>


<tr>
<td>
<input type="submit" value="Submit Your Job!">
</tr>
</td>

</table>
</form>

</div>