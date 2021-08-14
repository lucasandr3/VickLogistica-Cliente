<?php
namespace Models;

use \Core\Model;

class Access extends Model {

    public function getAll()
    {
        $array = array();
        $sql ="SELECT * FROM acessos as a INNER JOIN usuarios as u on a.id_user = u.id_user";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
           $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $array;
    }

    public function getUserAccess($user)
    {
        $array = array();
        $sql ="SELECT * FROM acessos as a INNER JOIN usuarios as u on a.id_user = u.id_user WHERE nome_user = '$user'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
           $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $array;
    }

    public function saveActionDriver($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function editActionDriver($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionDriverInactive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionDriverActive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }



    public function saveActionFleet($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function editActionFleet($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionFleetInactive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionFleetActive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }




    public function saveActionFront($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function editActionFront($user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionFrontInactive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }

    public function saveActionFrontActive($id_user, $action)
    {
        $sql ="INSERT INTO acessos SET id_user = :u, action = :a, hora_entrada = NOW();";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':u', $id_user);
        $sql->bindValue(':a', $action);
        $sql->execute();
    }
}