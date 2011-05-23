<?
error_reporting (E_ALL & ~E_NOTICE);

mysql_connect("localhost","xtwitter","xtwitter");
mysql_select_db("xtwitter");
$id = $_REQUEST['p'];
$reply = $_REQUEST['scont'];
if($id != "") {
	mysql_query("INSERT INTO messages (shout_at,content,user_id,parent_id) VALUES(now(),'$reply',1,$id);");
	$result=mysql_query("SELECT * FROM messages where parent_id=$id order by shout_at desc limit 0,1");
	$row=mysql_fetch_array($result);
?>
            	<li class="lire" style="">
                <div class="images"><a href="http://bentutu.com/me/index.php?s=/newhuya053"><img width="30px" src="uploads/avatar/noavatar.jpg"></a></div>
                <div class="info">
                    <p><a href="http://bentutu.com/me/index.php?s=/newhuya053" class="username ">newhuya053</a>
                    <span class="setgray">刚才&nbsp;&nbsp;通过网页&nbsp;<a onclick="delmsg('delmsg.php?s=<?= $row['id'] ?>','确实要删除此条广播吗?',this.parentNode.parentNode.parentNode.parentNode)" class="fright" href="javascript:void(0)">删除</a></span></p>
                    <p><?= 	$reply ?></p>
                </div>
            	</li>

<?
}
else{
?>
删除失败，请指定id
<?
}
?>
