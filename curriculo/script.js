$(document).ready(
	$.post(
		"index.php","div=perfil", function (perfil){
			document.getElementById("perfil").innerHTML = perfil;
		}
	),
	$.post(
		"index.php","div=quemsou", function (quemsou){
			document.getElementById("quemsou").innerHTML = quemsou;
		}
	),
		$.post(
		"index.php","div=planos", function (planos){
			document.getElementById("planos").innerHTML = planos;
		}
	),
		$.post(
		"index.php","div=hobbies", function (hobbies){
			document.getElementById("hobbies").innerHTML = hobbies;
		}
	),
		$.post(
		"index.php","div=encerramento", function (encerramento){
			document.getElementById("encerramento").innerHTML = encerramento;
		}
	),
);