<?php
namespace Models;

use \Core\Model;

class Home extends Model {

	public function getAll($data_filter = null, $limit, $offset)
	{
		$array = array();
		if($data_filter) {
			$sql ="SELECT * FROM checklist_usina WHERE date_final LIKE :dt ORDER BY date_final DESC LIMIT ".intval($limit)."";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':dt', '%'.ftrDate($data_filter, '-').'%');
			$sql->execute();
		} else {
			$data_atual = date('Y-m-d');
			$sql ="SELECT * FROM checklist_usina WHERE date_final LIKE :dt ORDER BY date_final DESC LIMIT ".intval($limit)."";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':dt', '%'.$data_atual.'%');
			$sql->execute();
		}

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

    public function getCountChecks()
	{
        $sql ="SELECT COUNT(id) FROM checklist_usina";
        $sql = $this->db->query($sql);
        return $sql->fetch();	
	}

    public function stepini()
	{
        $array = array();

        // $sql ="SELECT * FROM control_init as ci INNER JOIN front_arrival as fa ON(ci.id = fa.id_travel_ar)
        // INNER JOIN front_exit as fe ON(fa.id_travel_ar = fe.id_travel_ex)
        // INNER JOIN balance_arrival as ba ON(fe.id_travel_ex = ba.id_travel_bal)
        // INNER JOIN discharge as di ON(ba.id_travel_bal = di.id_travel_dis)
        // INNER JOIN control_final as cf ON(di.id_travel_dis = cf.id_travel_fi)";
        $sql ="SELECT * FROM control_init";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
    }

    public function stepone()
	{
        $array = array();

        $sql ="SELECT * FROM control_init as ci LEFT JOIN front_arrival as fa ON ci.id = fa.id_travel_ar";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
    }

    public function steptwo()
	{
        $array = array();

        $sql ="SELECT * FROM control_init as ci INNER JOIN front_arrival as fa ON(ci.id = fa.id_travel_ar)
        INNER JOIN front_exit as fe ON (ci.id = fe.id_travel_ex)";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
    }

    public function stepthree()
	{
        $array = array();

        $sql ="SELECT * FROM control_init as ci INNER JOIN front_arrival as fa ON(ci.id = fa.id_travel_ar)
        INNER JOIN front_exit as fe ON (ci.id = fe.id_travel_ex)
        INNER JOIN balance_arrival as ba ON (ci.id = ba.id_travel_bal)";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
    }

    public function stepfour()
	{
        $array = array();

        $sql ="SELECT * FROM control_init as ci INNER JOIN front_arrival as fa ON(ci.id = fa.id_travel_ar)
        INNER JOIN front_exit as fe ON (ci.id = fe.id_travel_ex)
        INNER JOIN balance_arrival as ba ON (ci.id = ba.id_travel_bal)
        INNER JOIN discharge as di ON (ci.id = di.id_travel_dis)";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
        
        
    }

    public function stepfive()
	{
        $array = array();

        $dataActual = date('Y-m-d').' 00:00:00';

        $sql ="SELECT * FROM control_init as ci INNER JOIN front_arrival as fa ON(ci.id = fa.id_travel_ar)
        INNER JOIN front_exit as fe ON (ci.id = fe.id_travel_ex)
        INNER JOIN balance_arrival as ba ON (ci.id = ba.id_travel_bal)
        INNER JOIN discharge as di ON (ci.id = di.id_travel_dis)
        INNER JOIN control_final as cf ON (ci.id = cf.id_travel_fi)";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;   
    }

    public function getWaiting()
    {
        $array = array();

        $dataActual = date('Y-m-d');

        // $sql ="SELECT * FROM waiting WHERE finalized = '$dataActual'";
        $sql ="SELECT * FROM waiting";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array; 
    }
}    


// SELECT * FROM control_init as ci LEFT JOIN front_arrival as fa ON ci.id = fa.id_travel_ar WHERE ci.id = '3d083d8b-674f-4032-abe7-daa413e9bee8'