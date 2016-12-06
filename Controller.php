<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {

    public function __construct() {
       
    }

    public function getMedicineList() {
        $table = 'medicine';
        $primaryKey = 'id';
        $columns = array(
            array('db' => 'manufacturer_name', 'dt' => 0),
            array('db' => 'brand_name', 'dt' => 1),
            array('db' => 'generic_name', 'dt' => 2),
            array('db' => 'strength', 'dt' => 3),
            array('db' => 'dosages', 'dt' => 4),
            array('db' => 'id', 'dt' => 5,
                'formatter' => function ($rowvalue, $row) {
            return '<a  href="#"  onclick="showDeleteModal(' . $rowvalue . ')">
      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o">&nbsp;Delete</i></button></a>&nbsp;<a href="#"  onclick="showEditModal(\'' . $row[5] . "," . $row[0] . "," . $row[1] . "," . $row[2] . "," . $row[3] . "," . $row[4] . '\')">
         <button class="btn btn-primary btn-xs"><i class="fa fa-edit">&nbsp;Edit</i></button></a>';
        })
        );
        $this->load->database();
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
        $this->load->library('SSP');

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

}