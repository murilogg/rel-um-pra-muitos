<?php

use App\Categoria;
use App\Produto;

Route::get('/', function () {
    return view('index');
});

Route::get('/categorias',function(){
	$cats = Categoria::all();
    if(count($cats) === 0){
    	echo "<h2>Você não possui nenhuma categoria cadastrada</h2>";
    }else{
    	foreach ($cats as $c) {
    		echo "<p>". $c->id ." - ". $c->nome ."</p>";
    	}
    }
});

Route::get('/produtos', function(){
	$prod = Produto::all();
	if(count($prod) === 0){
		echo "<h2>Você não possui nenhum Produto cadastrado</h2>";
	}else{
		echo "<table>";
		echo "<thead><tr><td>ID</td><td>Nome</td><td>Estoque</td><td>Preço</td><td>Categoria</td></tr></thead>";
		foreach ($prod as $p) {
			echo "<tr>";
			echo "<td>" . $p->id . "</td>";
			echo "<td>" . $p->nome . "</td>";
			echo "<td>" . $p->estoque . "</td>";
			echo "<td>" . $p->preco . "</td>";
			if(isset($p->categoria->nome))
			echo "<td>" . $p->categoria->nome . "</td>";
			echo "</tr>";
		}
	}
});

Route::get('/categoriasprodutos',function(){
	$cats = Categoria::all();
    if(count($cats) === 0){
    	echo "<h2>Você não possui nenhuma categoria cadastrada</h2>";
    }else{
    	foreach ($cats as $c) {
    		echo "<p>". $c->id ." - ". $c->nome ."</p>";
    		$produtos = $c->produtos;

    		if(count($produtos) > 0){
    			echo "<ul>";
    			foreach ($produtos as $p) {
    				echo "<li> " . $p->nome . "</li>";
    			}
    			echo "</ul>";
    		}
    		
    	}
    }
});


Route::get('/categoriasprodutos/json',function(){
	$cats = Categoria::with('produtos')->get();
	return $cats->toJson();
    
});

Route::get('/adicionarproduto',function(){
	$cat = Categoria::find(1);
	$p = new Produto();
	$p->nome = 'Blusa de frio';
	$p->estoque = 20;
	$p->preco = 180;
	$p->categoria()->associate($cat);
	$p->save();
	return $p->toJson();
    
});


Route::get('/removerproduto',function(){
	$p = Produto::find(9);
	if(isset($p)) {
		$p->categoria()->dissociate();
		$p->save();
		return $p->toJson();
	}    
	return '';
});

Route::get('/adicionarproduto/{catid}',function($catid){
	$cat = Categoria::with('produtos')->find($catid);

	$p = new Produto();
	$p->nome = 'Notebook';
	$p->estoque = 90;
	$p->preco = 3400;

	if(isset($cat)){
		$cat->produtos()->save($p);
	}
	$cat->load('produtos');
	return $cat->toJson();
    
});

















