<?php

$perfil = '<img id="imagem" alt="Foto do Eric" src="img/f2.jpg"><div><h3>Eric Lima Uno So	GU3006964</h3><h3>3 Ano de Informática / 17 Anos</h3></div>';

$quemsou = "<h2>Quem sou?</h2><p>Meu nome é Eric Lima Uno So, tenho 17 anos e atualmete estudo no IFSP Guarulhos e estou no terceiro ano fazendo o curso de Informática
	para Internet integrado ao ensino médio. Pretendo me formar aqui e pensar com mais calma na área que vou cursar na faculdade.</p><p>Desde pequeno sou muito apegado à computadores, no entanto, eu acho muito complicado codificar, pelo menos no ensino EAD. O meu irmão
	cursou Ciência da Computação e trabalha com isso, então tenho meio uma boa noção de como funciona o mercado para isso e ele sempre me 
	ajuda quando tenho dúvidas relacionadas.</p>";

$planos = "<h2>Como pretendo continuar?</h2><p>Por agora penso em me manter na área de computação por conta de ter muitas pessoas à minha volta que trabalham e mexem com isso. Isso
	me abre um leque muito de grande de oportunidades para indicações e oportunidades de trabalho, além do fato de que eu posso ter sempre
	alguém mais experiente que eu para me auxiliar e me dar conselhos sobre problemas, sanar minhas dúvidas e indicar coisas para não fazer.</p>";

$hobbies = "<h2>Hobbies</h2><p>A coisa que eu mais faço no meu tempo livre é jogar com meu amigos. Geralmente quando não estou estudando ou jogando, estou procurando
	formas para melhorar meu inglês ou assistir alguma série que me divirta ou me apresente um conteúdo interessante.</p><p>Sou muito interessado em hack para segurança, aquele papo do hacker do bem, então gosto de me informar um pouco sobre a área quando eu
	posso. O mercado financeiro mundial me fascina, então entra para a parte das coisas que eu me interesso quando estou livre, assisto muitos
	vídeos relacionados e acompanho muitas redes sociais de pessoas famosas e experientes no mercado.</p><p>Priorizo muito minha saúde geral por conta de minha mãe sempre ter pesado na minha para eu aprender a controlar minha alimentação.
	Porém, nessa quarentena, eu parei com a maioria das minhas atividades físicas e isso é um ponto que eu pretendo e preciso melhorar
	daqui para frente.</p>";

$encerramento = "<p>E foi isso as informações mais relevantes sobre mim nesse assunto, falei sobre minhas bases e pretenções, espero ter dito tudo o que
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