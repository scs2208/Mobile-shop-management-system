
<?php
class hello_model_update extends CI_Model 
{
 function saverecords($name,$id,$The_brand,$Price_of_the_brand,$stock)
 {
 $query="insert into telephone values('$name','$id','$The_brand','$Price_of_the_brand','$stock')";
 $this->db->query($query);
 }
 
 function displayrecords()
 {
 $query=$this->db->query("select * from telephone");
 return $query->result();
 }
 
 function deleterecords($id)
 {
 $this->db->query("delete  from telephone where id='".$id."'");
 }
 
 function displayrecordsById($id)
 {
 $query=$this->db->query("select * from telephone where id='".$id."'");
 return $query->result();
 }
 
 function updaterecords($name,$id,$The_brand,$Price_of_the_brand,$stock)
 {
 $query=$this->db->query("update telephone SET name='$name',id='$id',The_brand='$The_brand',Price_of_the_brand='$Price_of_the_brand',stock='$stock' where id='".$id."'");
 } 
}
?>