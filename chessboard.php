<?php
    //lets create a variable that will be used to determine color of a cell
    // 0 is to make the cell blank, 1 will mean the cell is filled with color black 
    
    $cell_color = 0;
    echo '<table border="1" style="width:100%">';
    //generate  rows for chessboard
    for($rows = 0; $rows < 8; $rows++)
    {
        echo "<tr>";
        //for each row we generate lets generate cells for that row
        for($cells = 0; $cells < 8; $cells ++)
        {
            if($cell_color == 0)
            {
                echo '<td height="80" bgcolor="#ffffff"></td>';
                
                if($cells != 7)
                    $cell_color = 1;
            }
            else
            {
                echo '<td height="80" bgcolor="000000"></td>';
               
                if($cells != 7)
                    $cell_color = 0;
            }
               
                
        }
        echo " </tr>";
    }
    echo '</table>';
?>
