<?php
namespace Models;

use \Core\Model;

class Checklist extends Model {

	public function getAll()
	{
		$array = array();

		$sql = "SELECT * FROM checklist";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getAllMan()
	{
		$array = array();

		$sql = "SELECT * FROM manutencao";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getCheckId($id)
	{
		$array = array();

		$sql ="SELECT * FROM checklist WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}

	public function getManuId($id)
	{
		$array = array();

		$sql ="SELECT * FROM manutencao WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}

	public function getAllProducts()
	{
		$array = array();

		$sql = "SELECT * FROM produtos ORDER BY category ASC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getAllProductsInativo()
	{
		$array = array();

		$sql = "SELECT * FROM produtos INNER JOIN categoria on(produtos.category = categoria.id_cat) WHERE status = 1";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getCategorias()
	{
		$array = array();

		$sql ="SELECT * FROM categoria";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
		   $array = $sql->fetchAll(\PDO::FETCH_ASSOC);	
		}
		return $array;
	}

	public function getCatId($id_cat)
	{
		$sql ="SELECT id_cat FROM categoria WHERE id_cat = '$id_cat'";
		$sql = $this->db->query($sql);
		return $cat_nome = $sql->fetch(\PDO::FETCH_ASSOC);
	}

	public function saveProduct($codigo, $cod_final, $initials, $name, $category, $price, $description, $nome)
	{
		$sql ="INSERT INTO produtos SET codigo = :cd, cod_final = :cf, initials = :in, name = :n, category = :c, price = :p, description = :d, img = :u";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':cd', $codigo);	
		$sql->bindValue(':cf', $cod_final);	
		$sql->bindValue(':in', $initials);
		$sql->bindValue(':n', $name);	
		$sql->bindValue(':c', $category);	
		$sql->bindValue(':p', $price);	
		$sql->bindValue(':d', $description);	
		$sql->bindValue(':u', $nome);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
			$_SESSION['alert'] = '<div class="alert alert-success mt-4" role="alert">
			            <strong><i class="fas fa-check"></i></strong> Produto Adicionado Com Sucesso.
                        </div>';
		} else {
			$_SESSION['alert'] = '<div class="alert alert-danger mt-4" role="alert">
			            <strong><i class="fas fa-frown"></i></strong> Erro ao cadastrar Produto.
                        </div>';
		}
	}

	public function getProdId($id_prod)
	{
		$array = array();

		$sql ="SELECT * FROM produtos WHERE id_prod = :id_prod";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_prod', $id_prod);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}

	public function editProduct($codigo, $cod_final, $initials, $name, $category, $price, $description, $nome = NULL, $id_prod)
	{
		if ($nome) {
			
			$sql ="UPDATE produtos SET codigo = :cd, cod_final = :cf, initials = :in, name = :n, category = :c, price = :p, description = :d, img = :u WHERE id_prod = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':cd', $codigo);	
			$sql->bindValue(':cf', $cod_final);	
			$sql->bindValue(':in', $initials);
			$sql->bindValue(':n', $name);	
			$sql->bindValue(':c', $category);	
			$sql->bindValue(':p', $price);	
			$sql->bindValue(':d', $description);	
			$sql->bindValue(':u', $nome);
			$sql->bindValue(':id', $id_prod);
			$sql->execute();

		} else {
			
			$sql ="UPDATE produtos SET codigo = :cd, cod_final = :cf, initials = :in, name = :n, category = :c, price = :p, description = :d WHERE id_prod = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':cd', $codigo);	
			$sql->bindValue(':cf', $cod_final);	
			$sql->bindValue(':in', $initials);
			$sql->bindValue(':n', $name);	
			$sql->bindValue(':c', $category);	
			$sql->bindValue(':p', $price);	
			$sql->bindValue(':d', $description);	
			$sql->bindValue(':id', $id_prod);	
			$sql->execute();
		}

		if($sql->rowCount() > 0) {
			$_SESSION['alert'] = '<div class="alert alert-success mt-4" role="alert">
			            <strong><i class="fas fa-check"></i></strong> Produto Atualizado Com Sucesso.
                        </div>';
		} else {
			$_SESSION['alert'] = '<div class="alert alert-danger mt-4" role="alert">
			            <strong><i class="fas fa-frown"></i></strong> Erro ao Atualizar Produto.
                        </div>';
		}
	}

	public function toggleStatus($id_prod)
	{
		$sql ="UPDATE produtos SET status = 1 - status WHERE id_prod = '$id_prod'";
		$sql = $this->db->query($sql);
	}

	public function getAllManutencao()
	{
		$array = array();

		$sql ="SELECT * FROM manutencao";
		$sql = $this->db->query($sql);
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetchAll(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}

	public function getCheckIdUsina($id)
	{
		$array = array();

		$sql ="SELECT * FROM checklist_usina WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}
}