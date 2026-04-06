	</tr>
</table>
</table>

<TABLE align=center cellSpacing=0 cellPadding=0 width="1280" border=0 bgColor=lightgrey>
<TR>
	<TD align=center>
<font face="verdana, helvetica" size=1>
<?php
	if (!empty($counterImg))
	{
		echo "<img width=0 src=\"".$counterImg."\">\n";
	}
	// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
	echo "<br>&nbsp; Last modified: " . date ("F d Y H:i:s", getlastmod());
	echo "&nbsp; &copy; Guohui Lin";
	
	//**********************************************
	// use the left menu items as the names of the counters
	// remove spaces from filename.
	//***********************************************
	if (empty($curPage))
		$curPage = "Home";
	
	$path = getRealPath();	
	
	$pagename  = $path."/hit/".str_replace(" ","",$curPage);
	
	// first get the remote machines' domain names
	if (!isset($HTTP_SERVER_VARS["REMOTE_HOST"]))
        $machineAddr = @gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]);
	else
        $machineAddr  =  $HTTP_SERVER_VARS["REMOTE_HOST"];

	// then compare the domain name with "entwhistler", if  it is entwhistler
	if ($machineAddr != "entwhistle.cs.ualberta.ca"){
        include "hitcounter.php";
	}

	//include "hitcounter.php";
	//echo "<br>You are the No.".$count." visitor";
?>
</TABLE>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-4491432-1";
urchinTracker();
</script>
