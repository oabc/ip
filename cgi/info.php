<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

require_once '../web/.main.php';
$view['title']='GetTable IPS';
$html=new Main(1);

$e=post('exptime');
$id=post('id');

$server = $db->sel('select * from getip');

?>
<h1>Users Table</h1>
<table class="table table-condensed">
<tbody>
    <tr>
        <th>ID</th>
        <th>ip</th>
        <th>次数</th>
        <th>首次时间</th>
        <th>最后时间</th>
    </tr>
<?php
for($i=0;$i<count($server);$i++)
{
?>
<tr>
<td><?php echo$server[$i]['id']?></td>
<td><?php echo$server[$i]['ip']?></td>
<td><?php echo$server[$i]['count']?></td>
<td><?php echo$server[$i]['time']?></td>
<td><?php echo$server[$i]['lasttime']?></td>
</tr>
<?php
}
?>
</tbody>
</table>