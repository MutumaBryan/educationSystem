<?php

$connect = mysqli_connect("localhost", "root", "", "results");
$column = array("results.id", "results.name", "grade.grade", "results.mark");
$query = "
 SELECT * FROM results 
 INNER JOIN grade 
 ON grade_table.grade_id = results.grade 	
";
$query .= " WHERE ";
if(isset($_POST["is_category"]))
{
 $query .= "results.category = '".$_POST["is_category"]."' AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(results.id LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR results.Name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR grade_table.grade LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR results.mark LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY results.id DESC ';
}

$query1 = '';



$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["id"];
 $sub_array[] = $row["Name"];
 $sub_array[] = $row["school"];
 $sub_array[] = $row["grade"];
 $sub_array[] = $row["mark"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM results";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>