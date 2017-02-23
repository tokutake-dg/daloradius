<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Authors:	Liran Tal <liran@enginx.com>
 *
 *********************************************************************************************************
 */

    include ("library/checklogin.php");
    $operator = $_SESSION['operator_user'];

	include('library/check_operator_perm.php');

        isset($_GET['bootLineCount']) ? $bootLineCount = $_GET['bootLineCount'] : $bootLineCount = 50;
        isset($_GET['bootFilter']) ? $bootFilter = $_GET['bootFilter'] : $bootFilter = ".";


	include_once('library/config_read.php');
    $log = "visited page: ";
    $logQuery = "performed query on page: ";
    include('include/config/logging.php');

?>

<?php

    include ("menu-reports-logs.php");
  	
?>	
		<div id="contentnorightbar">
		
		<h2 id="Intro"><a href="#" onclick="javascript:toggleShowDiv('helpPage')"><?php echo $l['Intro']['replogsboot.php']; ?>
                :: <?php if (isset($bootLineCount)) { echo htmlspecialchars($bootLineCount, ENT_QUOTES) . " Lines Count "; } ?>
                   <?php if (isset($bootFilter)) { echo " with filter set to " . htmlspecialchars($bootFilter, ENT_QUOTES); } ?>
		<h144>+</h144></a></h2>

		<div id="helpPage" style="display:none;visibility:visible" >
			<?php echo $l['helpPage']['replogsboot'] ?>
			<br/>
		</div>
		<br/>

<?php
	include 'library/exten-boot_log.php';
?>

                <?php
                        include_once('include/management/actionMessages.php');
                ?>


		</div>
		
		<div id="footer">
		
								<?php
        include 'page-footer.php';
?>
		
		</div>
		
</div>
</div>


</body>
</html>
