<?php 

if (!$conn ) {
   echo "Not connect databases";
}

$post = $_POST['name'];

if ($post == 'view') {
    $sql = mysqli_query($conn, "SELECT * FROM STUDENT LIMIT 10");
    $student = array();
    while($row=mysqli_fetch_assoc($sql)){
        $student[] = $row;
    }
    echo json_encode( $student);

}elseif($post == 'edit'){
    
    $id = $_POST['id'];
    $sql = mysqli_query($conn, "SELECT * FROM STUDENT WHERE STUDENT_ID=$id");
   $row=mysqli_fetch_assoc($sql);
    echo json_encode($row);
    

}elseif($post == 'update'){

    $id = $_POST['student'];
    $countId = count($id);

    $update = "update student set ";
    foreach ($id as $key => $value) {

        $countId --;

        $update .= " $key = '$value'";

        if($countId > 0){
            if($countId == 1 ){
                $update .= " where ";
            }else{
                $update .= ",";
            }
            
           }
       
       
    }

    $sql = mysqli_query($conn, $update);
    if ($sql) {
        $arr = array("msg"=>"data updated");
    } else {
        $arr = array("msg"=>"data not updated");
    }
    echo json_encode($arr);

}else{

}





?>