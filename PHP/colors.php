<?php session_start(); ?>  
<html>
    <head>
        <title>Colors</title> 
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['R']))
            {
                $_SESSION['R'] = 127;
                $_SESSION['G'] = 127;
                $_SESSION['B'] = 127;
            }
            else
            {
                $inc = 10;
                $action = $_POST['action'];
                switch($action)
                {
                case 1:
                    $_SESSION['R'] =  $_SESSION['R'] - $inc;
                    if($_SESSION['R'] < 0)
                    {
                        $_SESSION['R'] = 0;
                    }
                    break; 
                case 2:
                    $_SESSION['R'] =  $_SESSION['R'] + $inc;
                    if($_SESSION['R'] > 255)
                    {
                        $_SESSION['R'] = 255;
                    }
                    break; 
                 case 3:
                    $_SESSION['G'] =  $_SESSION['G'] - $inc;
                    if($_SESSION['G'] < 0)
                    {
                        $_SESSION['G'] = 0;
                    }
                    break; 
                case 4:
                    $_SESSION['G'] =  $_SESSION['G'] + $inc;
                    if($_SESSION['G'] > 255)
                    {
                        $_SESSION['G'] = 255;
                    }
                    break; 
                case 5:
                    $_SESSION['B'] =  $_SESSION['B'] - $inc;
                    if($_SESSION['B'] < 0)
                    {
                       $_SESSION['B'] = 0;
                    }
                    break; 
                case 6:
                    $_SESSION['B'] =  $_SESSION['B'] + $inc;
                    if($_SESSION['B'] > 255)
                    {
                        $_SESSION['B'] = 255;
                    }
                    break; 
                case 7:
                    $_SESSION['R'] = 127;
                    $_SESSION['G'] = 127;
                    $_SESSION['B'] = 127;
                    break; 
                }
            }
            $red = "#".str_pad(dechex($_SESSION['R']), 2, '0', STR_PAD_LEFT)."0000";
            $green = "#00".str_pad(dechex($_SESSION['G']), 2, '0', STR_PAD_LEFT)."00";
            $blue  = "#0000".str_pad(dechex($_SESSION['B']), 2, '0', STR_PAD_LEFT);
            $color = "#".str_pad(dechex($_SESSION['R']), 2, '0', STR_PAD_LEFT).
            str_pad(dechex($_SESSION['G']), 2, '0', STR_PAD_LEFT).
            str_pad(dechex($_SESSION['B']), 2, '0', STR_PAD_LEFT);
        ?>
        <table>
            <tr>
                <td>
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="1"/>
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
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="2"/>
                        <input type="submit" value="+"/> 
                    </form>
                </td>
                <td>
                     <?php echo"{$red}"; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="3"/>
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
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="4"/>
                        <input type="submit" value="+"/> 
                    </form>
                </td>
                <td>
                     <?php echo"{$green}"; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="5"/>
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
                    <form method="post" action="colors.php">
                        <input type="hidden" name="action" value="6"/>
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
                    <form method="post" action="colors.php">
                            <input type="hidden" name="action" value="7"/>
                            <input type="submit" value="Initialize"/> 
                    </form>
                </td>
            </tr>
        </table>
   </body>
 </html>