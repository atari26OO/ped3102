<?
include("header.php");
?>

<h3>External Publications to Topics of Interest</h3>

<hr />

<?
$dir = "publications";
$files1 = scandir($dir);

// $files[0] and $files[1] are . and ..

foreach($files1 as $value) {
    if ( ($value!=".") && ($value!="..")  && ($value!="index.html") )
    {
        ?>
        
        <a target="_blank" href="publications/<?=$value?>"><?=$value?></a>
        <br/>
        
        <?
    }
}

?>

<br /><br /><br /><br /><br />

<?
include("footer.php");
?>

