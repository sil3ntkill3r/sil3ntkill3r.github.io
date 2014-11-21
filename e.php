<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form methode="get">
<?php
$xml=new DomDocument();
$xml->load("contacts.xml");
?>
<table>
   <tr>
<tr><td><label>User</label></td><td><input id="name" name="name" type="text"/></td></td><br>
<tr><td><label>Mot de pass</label></td><td><input id="pass" name="pass" type="password"/></td></td><br>
<tr><td><label>Email </label></td><td><input id="email" type="email" name="email"/></td></tr><br>
<tr><td><label>Telephone </label></td><td><input id="tel" type="tel" name="tel"/></td></tr><br>
<tr><td><label>Adresse</label></td><td><textarea rows="4" cols="350" id="add" name="add"></textarea></td></tr><br>
<tr><td><label>Langues</label></td><td>
<select id="lang" name="lang">
  <option value="Arab">Arab</option>
  <option value="Francais">Francais</option>
  <option value="Anglais">Anglais</option>
  <option value="Espagnole">Espagnole</option>
  <option value="Italienne">Italienne</option>
  <option value="Allemande">Allemande</option>
  <option value="Japonais">Japonais</option>

</select>
</td></tr><br>
</table>

<br><input type="submit" value="S'inscrire" name="butt" id="butt"> 

</form>

<?php
if(isset($_GET['butt'])){


$infos = $xml ->createElement("infos");
$infos = $xml ->appendChild($infos);

$name = $xml ->createElement("name",$_GET['name']);
$name = $infos ->appendChild($name);

$pass = $xml -> createElement("pass",$_GET['pass']);
$pass = $infos ->appendChild($pass);

$email = $xml -> createElement("email",$_GET['email']);
$email = $infos ->appendChild($email);

$tel = $xml -> createElement("tel",$_GET['tel']);
$tel = $infos ->appendChild($tel);

$add = $xml -> createElement("add",$_GET['add']);
$add = $infos ->appendChild($add);

$lang = $xml -> createElement("lang",$_GET['lang']);
$lang = $infos ->appendChild($lang);

$xml->FormatOutput=true;
$string_value=$xml->saveXML();
$xml->save("contacts.xml");	
echo "okkk";
}
?>
