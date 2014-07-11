$().ready(function() {
	$("#criar").validate({
		rules: {
			nome: {
				required: true,
				minlength: 10,
				maxlength: 80
			},
			nota: {
				required: true,
				maxlength: 4
			},
			arquivo: {
				required: true,
			},
		},
		messages: {
			nome: {
				required: "Digite seu nome completo.",
				minlength: "Este nome é muito pequeno para ser completo!",
				maxlength: "Abrevie seu nome ele é muito grande."
			},
			nota: {
				required: "Insira sua nota do ENEM",
				maxlength: "A nota do ENEM vai de 0 a 1000 pontos."
			},
			arquivo: {
				required: "Selecione uma foto do comprovante de sua nota do ENEM."
			}
		}
	});

	$("#logar").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			senha: {
				required: true,
				minlength: 7,
				maxlength: 13
			},
		},
		messages: {
			email: {
				required: "Digite seu email cadastrado.",
				email: "Esse email não é válido!"
			},
			senha: {
				required: "Digite sua senha.",
				minlength: "A senha deve ter no mínimo 7 caracteres.",
				maxlength: "A senha não deve ultrapassar 13 caracteres."
			},
		}
	});
	
});