<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if($vp): ?>
<br/>
<h2>LISTA DE SITES PARA VOTAR</h2>
<table class="horizontal-table" width="100%">  
	<tr>
		<th align="center">Nome</th>
		<th align="center">Banner</th>
		<th align="center">Pontos</th>
		<th align="center">Tempo de Bloqueio</th>
		<th align="center">Opções</th>
	</tr>
<?php foreach($vp as $site): ?>
	<tr>
		<td><?php echo $site->site_name;?></td>
		<td align="center" width="150" height="50"><img src="<?php if($site->banner_url!="") { echo $site->banner_url; } else { echo "index.php?module=voteforpoints&action=image&sid=".$site->site_id; }?>" width="150" height="50"/></td>
		<td align="right"><?php echo $site->points;?> pt('s)</td>
		<td align="center"><?php echo strBlockTime($site->blocking_time); ?></td>
		<td align="center">
			<a href="?module=voteforpoints&action=edit&sid=<?php echo $site->site_id; ?>">Editar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="?module=voteforpoints&action=delete&sid=<?php echo $site->site_id; ?>">Deletar</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
<?php if(!$vp): ?>
<br/>
<i>Não há sites de votos</i>
<?php endif; ?>