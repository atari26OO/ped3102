<a href="links.php"><h3 class="color1">Links...</h3></a>

<hr class="color1" />

<table class="sidelinks">

<?

$handle = fopen("links.txt", "r");

if ($handle) {
    $index = 0;
    $lines[0] = "";
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $line = trim($line); 
        if ($line)
        {
            $lines[$index] = explode('|',$line) ;
            $index++;
        }
    }
} else {
    // error opening the file.
}

$numLinks = $index;
$numbers = range(0, $numLinks-1);
shuffle($numbers);
$randomLinks = array_slice($numbers, 0, $numLinksToShow);
$columns = 1;

for($i = 0; $i < $numLinksToShow; $i++)
{
    if (($i % $columns)==0)
    {
        ?>
        <tr>
        <?
    }
    ?>

        <td>
            <a target="_blank" href="<?=$lines[$randomLinks[$i]][0]?>">
                <img class="i9696" src="images/side/<?=$lines[$randomLinks[$i]][1]?>" alt="<?=$lines[$randomLinks[$i]][2]?>" /><br />
                <?=$lines[$randomLinks[$i]][3]?>
            </a>
        </td>

    <?
    
    if ( (($i % $columns)==($columns-1)) || ($i == $numLinksToShow-1))
    {
        ?>
        </tr>
        <?
    }
}

?>

</table>
