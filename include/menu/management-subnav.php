
				<ul id="subnav">
						<li><a href="mng-users.php"><em>U</em>sers</a></li>
						<li><a href="mng-batch.php"><em>B</em>atch Users</a></li>
						<li><a href="mng-hs.php"><em>H</em>otspots</a></li>
						<li><a href="mng-rad-nas.php"><em>N</em>as</a></li>
                        <li><a href="mng-rad-usergroup.php"><em>U</em>ser-Groups</a></li>
                         <li><a href="mng-rad-profiles.php"><em>P</em>rofiles</a></li>
						<li><a href="mng-rad-hunt.php">HuntG<em>r</em>oups</a></li>
						<li><a href="mng-rad-attributes.php"><em>A</em>ttributes</a></li>
						<li><a href="mng-rad-realms.php"><em>R</em>ealms/Proxys	</a></li>
						<li><a href="mng-rad-ippool.php"><em>I</em>P-Pool	</a></li>

<div id="logindiv" style="text-align: right;">

                                                <li>Location: <b><?php echo htmlspecialchars($_SESSION['location_name'], ENT_QUOTES) ?></b></li><br/>
						<li>Welcome, <?php echo htmlspecialchars($operator, ENT_QUOTES); ?></li>
						<li><a href="logout.php">[logout]</a></li>
				</ul>
		
		</div>
