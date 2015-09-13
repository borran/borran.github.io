<html>
    <head>
        <title>Colors V2</title> 
    </head>
    <body>
        <?php 
            $inc = 10;
            if(!isset($_POST['r']) || isset($_POST['action']))
            {
                $r = $g = $b = 127;
            }
            else
            {
                $r = $_POST['r'];
                $r = $r>255?255:$r;
                $r = $r<0?0:$r;
                
                $g = $_POST['g'];
                $g = $g<0?0:$g;
                $g = $g>255?255:$g;
                
                $b = $_POST['b']; 
                $b = $b<0?0:$b;
                $b = $b>255?255:$b;
            }
            $red = "#".str_pad(dechex($r), 2, '0', STR_PAD_LEFT)."0000";
            $green = "#00".str_pad(dechex($g), 2, '0', STR_PAD_LEFT)."00";
            $blue  = "#0000".str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
            $color = "#".str_pad(dechex($r), 2, '0', STR_PAD_LEFT).
            str_pad(dechex($g), 2, '0', STR_PAD_LEFT).
            str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
        ?>
        <table>
            <tr>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r-$inc; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b; ?>"/>
                        <input type="submit" value="-"/> 
                    </form>
                </td>
                <td>
                    <table>
                        <tr>
                            <td width="100" height="20" bgcolor="<?php echo"{$red}"; ?>">
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r+$inc; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b; ?>"/>
                        <input type="submit" value="+"/> 
                    </form>
                </td>
                <td>
                     <?php echo"{$red}"; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g-$inc; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b; ?>"/>
                        <input type="submit" value="-"/> 
                    </form>
                </td>
                <td>
                    <table>
                        <tr>
                            <td width="100" height="20" bgcolor="<?php echo"{$green}"; ?>">
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g+$inc; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b; ?>"/>
                        <input type="submit" value="+"/> 
                    </form>
                </td>
                <td>
                     <?php echo"{$green}"; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b-$inc; ?>"/>
                        <input type="submit" value="-"/> 
                    </form>
                </td>
                <td>
                    <table>
                        <tr>
                            <td width="100" height="20" bgcolor="<?php echo"{$blue}"; ?>">
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <form method="post" action="colorsv2.php">
                        <input type="hidden" name="r" value="<?php echo $r; ?>"/>
                        <input type="hidden" name="g" value="<?php echo $g; ?>"/>
                        <input type="hidden" name="b" value="<?php echo $b+$inc; ?>"/>
                        <input type="submit" value="+"/> 
                    </form>
                </td>
                <td>
                     <?php echo"{$blue}"; ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <?php echo"{$color}"; ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" width="100" height="20" bgcolor="<?php echo"{$color}"; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <form method="post" action="colorsv2.php">
                            <input type="hidden" name="action" value="init"/>
                            <input type="submit" value="Initialize"/> 
                    </form>
                </td>
            </tr>
        </table>
   </body>
 </html>