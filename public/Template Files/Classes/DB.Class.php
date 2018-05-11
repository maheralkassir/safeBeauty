<?php
include_once("utility.php");
mysql_connect("localhost","safebeauty","safe_123_beauty");
//mysql_connect("localhost","root","");
		mysql_select_db("seifbeauty");


	function ReturnMsg($msg)
	{
		if(mysql_errno()==0)
		return $msg. " Successfully";
	else
		return "error can'excute Command because: ".mysql_error(); 
	}
	
	function searchGrid($query,$Updateok=false,$EditPage="" ,$Deleteok=false,$ReturnPage="")
	{
	
	$tbl =" <script>
			var prev=1;
			function HighLightRow(rowno){
					if(rowno%2==0)
						tblsearch.rows[prev].bgColor='#666666';
					else
						tblsearch.rows[prev].bgColor='Black';
			tblsearch.rows[rowno].bgColor='#009999';
			prev=rowno;		
			}
			</script>";
	
	$result	=mysql_query($query);
	$tbl .= "<table id=tblsearch align=center width=700 border=1><tr bgcolor=#FFE229 align=center>";
	$RowNum=mysql_num_fields($result);
	for($col=0;$col<$RowNum;$col++)
		$tbl .="\n <th><font color=#000000>".mysql_field_name($result,$col)."</form></th></font>";
	if($Updateok)
	{
		$tbl.="\n <th ><font color=#000000>Edit</font></th>";
	}
	if($Deleteok)
	{
		$tbl.="\n <th><font color=#000000>Remove</font></th>";
	}
	$tbl.="\n </tr>";
	$rownow=1;
	while($row=mysql_fetch_row($result))
	{
		$tbl.="<tr onmousemove=\"HighLightRow($rownow)\" align=center bgcolor=";
		if($rownow%2==0)
			$tbl .= "#666666>";
		else
			$tbl .= "black>";
		for($col=0;$col<$RowNum;$col++)
		{
			$tbl .="\n<td>$row[$col]</td>";
			$flags=mysql_field_flags($result,$col);
			if(strpos($flags,"primary_key"))
				$PKCol=$col;
		}
			if($Updateok)
			{
				$tbl .="\n <td><a href=$EditPage?pkval=$row[$PKCol]> <img src=../images/edit.png />  </a>  </td>";
			}
			if($Deleteok)
			{
				$table=	mysql_field_table($result,0);
				$PKName = mysql_field_name($result,$PKCol);
				$tbl .="\n <td><a href=Del.php?table=$table&PK=$PKName&pkval=$row[$PKCol]&page=$ReturnPage> <img src=../images/remove.png />  </a>  </td>";
				
			}
			
		
		
		$tbl.="</tr>";
		$rownow++;
	}
	if(mysql_errno()==0)
		return $tbl."</table>";
	else
		return "error: ".mysql_error();
	}
?>
