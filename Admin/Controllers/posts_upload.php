<?php
class post{

function upload(){
    if(isset($_FILES['upload']['name']))
    {
        $file = $_FILES['upload']['name'];
        $file = time() . '_' . $file;
        $filetmp = $_FILES['upload']['tmp_name'];
        
        $uploadPath1 = 'Public/img/' . $file;
        $uploadPath2 = '../Public/img/' . $file;

       if (move_uploaded_file($filetmp, $uploadPath1)) {
          copy($uploadPath1,$uploadPath2);
    
            $function_number = $_GET['CKEditorFuncNum'];
            $url = 'Public/img/' . $file;
            $message = '';
            echo "<script>window.parent.CKEDITOR.tools.callFunction('".$function_number."','".$url."','".$message."');</script>";
        } else {
            // Xử lý trường hợp di chuyển đầu tiên thất bại
            echo 'Lỗi khi di chuyển tệp đến ' . $uploadPath1;
           
        }
    }
    
}
function delete(){
if(isset($_POST["src"])){
    $link=$_POST["src"];
    unlink($link);
    unlink('../'.$link);
}
}
}
?>