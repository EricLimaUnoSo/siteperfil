<?php

$perfil = '<img id="imagem" alt="Foto do Eric" src="img/f2.jpg"><div><h3>Eric Lima Uno So	GU3006964</h3><h3>3 Ano de Inform�tica / 17 Anos</h3></div>';

$quemsou = "<h2>Quem sou?</h2><p>Meu nome � Eric Lima Uno So, tenho 17 anos e atualmete estudo no IFSP Guarulhos e estou no terceiro ano fazendo o curso de Inform�tica
	para Internet integrado ao ensino m�dio. Pretendo me formar aqui e pensar com mais calma na �rea que vou cursar na faculdade.</p><p>Desde pequeno sou muito apegado � computadores, no entanto, eu acho muito complicado codificar, pelo menos no ensino EAD. O meu irm�o
	cursou Ci�ncia da Computa��o e trabalha com isso, ent�o tenho meio uma boa no��o de como funciona o mercado para isso e ele sempre me 
	ajuda quando tenho d�vidas relacionadas.</p>";

$planos = "<h2>Como pretendo continuar?</h2><p>Por agora penso em me manter na �rea de computa��o por conta de ter muitas pessoas � minha volta que trabalham e mexem com isso. Isso
	me abre um leque muito de grande de oportunidades para indica��es e oportunidades de trabalho, al�m do fato de que eu posso ter sempre
	algu�m mais experiente que eu para me auxiliar e me dar conselhos sobre problemas, sanar minhas d�vidas e indicar coisas para n�o fazer.</p>";

$hobbies = "<h2>Hobbies</h2><p>A coisa que eu mais fa�o no meu tempo livre � jogar com meu amigos. Geralmente quando n�o estou estudando ou jogando, estou procurando
	formas para melhorar meu ingl�s ou assistir alguma s�rie que me divirta ou me apresente um conte�do interessante.</p><p>Sou muito interessado em hack para seguran�a, aquele papo do hacker do bem, ent�o gosto de me informar um pouco sobre a �rea quando eu
	posso. O mercado financeiro mundial me fascina, ent�o entra para a parte das coisas que eu me interesso quando estou livre, assisto muitos
	v�deos relacionados e acompanho muitas redes sociais de pessoas famosas e experientes no mercado.</p><p>Priorizo muito minha sa�de geral por conta de minha m�e sempre ter pesado na minha para eu aprender a controlar minha alimenta��o.
	Por�m, nessa quarentena, eu parei com a maioria das minhas atividades f�sicas e isso � um ponto que eu pretendo e preciso melhorar
	daqui para frente.</p>";

$encerramento = "<p>E foi isso as informa��es mais relevantes sobre mim nesse assunto, falei sobre minhas bases e preten��es, espero ter dito tudo o que
	precisava. Assim encerro meu site!</p>";

if ($_POST["div"] == 'perfil') {
    echo $perfil;
}
if ($_POST["div"] == 'quemsou') {
    echo $quemsou;
}
if ($_POST["div"] == 'planos') {
    echo $planos;
}
if ($_POST["div"] == 'hobbies') {
    echo $hobbies;
}
if ($_POST["div"] == 'encerramento') {
    echo $encerramento;
}

?>