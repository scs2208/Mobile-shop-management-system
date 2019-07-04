
<?php
class hello_model extends CI_Model 
{
 function saverecords($name,$id,$The_brand,$Price_of_the_brand,$stock)
 {
 $query="insert into telephone values('$name','$id','$The_brand','$Price_of_the_brand','$stock')";
 $this->db->query($query);
 }
}