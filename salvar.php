<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO usuarios (nome, cpf, telefone, dt_nascimento, genero) VALUES ('".$_REQUEST["nome"]."', '".$_REQUEST["cpf"]."', '".$_REQUEST["telefone"]."', '".$_REQUEST["dt_nascimento"]."', '".$_REQUEST["genero"]."')";
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		break;
		case "editar":
			$sql = "UPDATE usuarios SET nome='".$_REQUEST["nome"]."', cpf='".$_REQUEST["cpf"]."', telefone='".$_REQUEST["telefone"]."', dt_nascimento='".$_REQUEST["dt_nascimento"]."', genero='".$_REQUEST["genero"]."' WHERE id=".$_REQUEST["id"];
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		break;
	}
