 <?php

 
function checkUserLogin()
{
	if(isset($_COOKIE['user']) && ! empty($_COOKIE['user']))
		return $_COOKIE['user'];
	else
		return false;

}

function UploadFile($FolderFileName,$File)
{
	
	if(	$File['tmp_name']!="none")
	{
		move_uploaded_file($File['tmp_name'],$_SERVER['DOCUMENT_ROOT']."\\seifbeauty\\$FolderFileName");
		return " File Uploaded Successfully";
	}
	
	else
	{
		return " File  too large or No File";
	}	
}


function DeleteImage($FolderFileName)
{
	if( file_exists("../$FolderFileName")==1)
		if(unlink("../$FolderFileName"))
		 return "<br /> File Deleted Successfully";

else
		return "<br /> Error Deleting";		
}


function inAdmin()
{
	if(stristr($_SERVER['PHP_SELF'],"Admin")==false)
		return false;
	else
		return true;
}


function check_file($file,$type)
{

	switch ($type) {
	case 'image':
			if( pathinfo($file['name'], PATHINFO_EXTENSION)=="jpg" ||  pathinfo($file['name'], PATHINFO_EXTENSION)=="png" ||   pathinfo($file['name'], PATHINFO_EXTENSION)=="gif" ||   pathinfo($file['name'], PATHINFO_EXTENSION)=="jpeg")
				return 1;
			else
				return 0;
	case 'video':
		if(pathinfo($file['name'], PATHINFO_EXTENSION) == "mp4"||  pathinfo($file['name'], PATHINFO_EXTENSION)=="avi" || pathinfo($file['name'], PATHINFO_EXTENSION)=="wmv" || pathinfo($file['name'], PATHINFO_EXTENSION)=="3gp"||  pathinfo($file['name'], PATHINFO_EXTENSION)=="3gp")
				return 1;
			else
				return 0;
	case 'audio':
		if( pathinfo($file['name'], PATHINFO_EXTENSION)=="mp3" ||  pathinfo($file['name'], PATHINFO_EXTENSION)=="wav" ||  pathinfo($file['name'], PATHINFO_EXTENSION)=="acc" ||  pathinfo($file['name'], PATHINFO_EXTENSION)=="wma")
				return 1;
			else
				return 0;
	case 'pdf':
		if( pathinfo($file['name'], PATHINFO_EXTENSION)=="pdf") 
				return 1;
			else
				return 0;
	}

	}


function increment($table,$col,$id,$id_value)
{
	$query="Update $table set $col=$col+1 where $id=$id_value";
	mysql_query($query);
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
$data =str_replace("'","",$data);
  	return $data;
}

function getmax($col , $tbl)
{
	$res=mysql_query("select max(".$col.") from ".$tbl);
		$row=mysql_fetch_row($res);
		return $row[0];
}
?>