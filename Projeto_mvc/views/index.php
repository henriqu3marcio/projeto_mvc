<H2>Projetos</H2>
<DIV CLASS="PANEL PANEL-DEFAULT">
    <DIV CLASS="PANEL-HEADING TEXT-RIGTH">
        <DIV CLASS="PULL-RIGHT">
        <thead>
<th>
<th>Nome</th>
<th width="280px">Ações</th>
</tr>
</thead>

<tbody>
<?php foreach($projetos as $projeto) { ?>
<tr>
<td><?=$projeto->nome?></td>
<td><?=$projeto->duracao_dmY?></td>
<td>
<a class='btn btnprimary'
href='?classe=Project&acao=read&id=<?prjeto->id?>'>Ver</a>
<a class='btn btn-primary'
href='?classe=Project&acao=update&id=<?prjeto->id?>'>Alterar</a>
<button tupe="button" class="btn"-primary" data-toggle="modal" data-target="#myModal" data-id="<?=$projeto->id?>">Excluir</button>
</td>
</tr>
<?php } ?>
</tbody>

</table>
</div>
</div>