<?
	switch($_GET['isi']){
		case 'kiri':
			$que0 	= "CALL set_dsml(@sts)";
			$que1 	= "SELECT @sts AS _sts";
			mysql_query($que0);
			$res1 = mysql_query($que1);
			$row1 = mysql_fetch_object($res1);
			if($row1->_sts==0){
			}
			break;
		case 'kanan':
?>
	<tr>
		<th width="30%">Nama Kasir</th>
		<th>Jumlah Rekening</th>
		<th>Jumlah Uang</th>
	</tr>
<?
		<td class="left" valign="top"><?=$row1->kar_nama?></td>
		<td class="right" valign="top"><?=number_format($row1->rek_jml,0,'.',',')?></td>
		<td class="right" valign="top"><?=number_format($row1->rek_total,0,'.',',')?></td>
	</tr>
<?
			}
?>
</table>
<?