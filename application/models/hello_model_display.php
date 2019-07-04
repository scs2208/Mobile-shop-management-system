
<?php
class hello_model_display extends CI_Model 
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
}