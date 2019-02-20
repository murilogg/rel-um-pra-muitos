<!DOCTYPE html>
<html>
<head>
	<title>UM PRA MUITOS</title>
</head>
<body>
<h1>SELECIONE A OPÇÃO</h1>

<a href="/categorias">
	<button>CATEGORIAS (all)</button>
</a>
<hr>
<a href="/produtos">
	<button>TABELA PRODUTOS (belongsTo)</button>
</a>
<hr>
<a href="/categoriasprodutos">
	<button>PRODUTOS QUE ESTÃO EM CATEGORIAS (hasMany)</button>
</a>
<hr>
<a href="/categoriasprodutos/json">
	<button>ARQUIVOS JSON (eager loading)</button>
</a>
<hr>
<a href="/adicionarproduto">
	<button>ADICIONAR PRODUTO (associate)</button>
</a>
<hr>
<a href="/removerproduto">
	<button>REMOVE O PRODUTO DAQUELA CATEGORIA (dissociate)</button>
</a>

<hr>
<a href="/adicionarproduto/{catid}">
	<button>ADICIONA PRODUDO A UM DETERMINADO ID CATEGORIA</button>
</a>

</body>
</html>