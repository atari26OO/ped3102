<?
include("header.php");
?>

<h3>External Links to Topics of Interest</h3>

<hr />

<table class="links">

<?

$handle = fopen("links.txt", "r");
$lines[0] = "";
$index = 0;

if ($handle) {
    
    
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $line = trim($line);
        if ($line)
        {
            $lines[$index] = explode('|',$line);
            $index++;
        }
    }
} else {
    // error opening the file.
}

$numLinks = $index;
$columns = 7;

for($i = 0; $i < $numLinks; $i++)
{
    if (($i % $columns)==0)
    {
        ?>
        <tr>
        <?
    }
    ?>
    
        <td style="max-width=96px;width=96px;">
            <a target="_blank" href="<?=$lines[$i][0]?>">
                <img class="i9696" src="images/side/<?=$lines[$i][1]?>" alt="<?=$lines[$i][2]?>" /><br />
                <?=$lines[$i][3]?>
            </a>
        </td>

    <?
    
    if ( (($i % $columns)==($columns-1)) || ($i == $numLinks-1))
    {
        ?>
        </tr>
        <?
    }
}

?>

</table>

<?
include("footer.php");
?>
