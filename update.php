﻿<?
error_reporting (E_ALL & ~E_NOTICE);

require "function.php";

$msg = $_REQUEST['message'];
if($msg != "")
{
	$uid = $_SESSION['loginid'];
	$strSql = "INSERT INTO messages (shout_at,content,user_id) VALUES(now(),'$msg',$uid)";
	mysql_query($strSql);
}
$newID = mysql_insert_id();
$result=mysql_query("SELECT * FROM messages,users where users.id=messages.user_id and messages.id=$newID");
?>

<?
while( $row=mysql_fetch_array($result) ){
?>
<li class="unlight" style="">
	<a class="avatar" title="caozhzh" href="http://bentutu.com/me/index.php?s=/caozhzh">
		<img alt="caozhzh" src="uploads/avatar/noavatar.jpg">
	</a>
	<div class="">
		<div class="content">
			<a class="author " href="http://bentutu.com/me/index.php?s=/caozhzh"><?= $row['username']?></a>
			<h6>:</h6>
			<span id="cont<?= $row['id'] ?>"><?= $row['content'] ?></span>
		</div>
		<span class="stamp fleft">
			<a title="<?= $row['shout_at'] ?>" class="ctime" href="http://bentutu.com/me/index.php?s=/v/<?= $row['id'] ?>">
				<?= $row['shout_at'] ?>
			</a>
			&nbsp;通过网页&nbsp;&nbsp;
		</span>
		<span style="float: right; white-space: nowrap;" class="stamp op">
			<a onclick="delmsg('delmsg.php?s=<?= $row['id'] ?>','确实要删除此条广播吗?',this.parentNode.parentNode.parentNode,'')" href="javascript:void(0)">删除</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a onclick="retwit('<?= $row['id'] ?>')" href="javascript:void(0)">转播</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a onclick="replyajax('<?= $row['id'] ?>')" href="javascript:void(0)">评论
<? 
$sqlstring = "SELECT count(*) FROM messages where parent_id=".$row['id'];
$count=mysql_query($sqlstring);
$count1=mysql_fetch_array($count);
?>
(<?=$count1[0]?>)
</a>&nbsp;&nbsp;|&nbsp;
			<a title="添加到我的收藏" onclick="dofavor('<?= $row['id'] ?>')" href="javascript:void(0)" class="fav">收藏</a>
		</span>
		<div class="clearline"></div>
		<span class="replyspan" id="reply_<?= $row['id'] ?>"></span>
	</div>
</li>
<?
}
?>

