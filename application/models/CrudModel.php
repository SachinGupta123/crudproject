<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudModel extends CI_Model {

   function get_list($postData=null){

     $response = array();

     ## Read value
     $draw = $postData['draw'];
     $start = $postData['start'];
     $rowperpage = $postData['length']; // Rows display per page
     $columnIndex = $postData['order'][0]['column']; // Column index
     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
     $searchValue = $postData['search']['value']; // Search value

     ## Search 
     $searchQuery = "";
     if($searchValue != ''){
        $searchQuery = " (name like '%".$searchValue."%' or address like '%".$searchValue."%' or sp_type like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('service_providers')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('service_providers')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('service_providers')->result();

     $data = array();
   //   print_r($records);die;
     foreach($records as $record ){

        $data[] = array( 
           "name"=>$record->name,
           "address"=>$record->address,
           "contact_no"=>$record->contact_no,
           "sp_type"=>$record->sp_type,
           "society_id"=>$record->society_id,
           "action"=>"<a class='edit' data-id=".$record->society_id.">Edit</a>"
        ); 
     }

     ## Response
     $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
     );

     return $response; 
   }

}
