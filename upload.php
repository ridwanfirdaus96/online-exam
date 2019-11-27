<?php
if(isset($_POST) == true){
    //menghasilkan nama file yang unik, akan ada angka acak didepannya
    $namaFile = time().'_'.basename($_FILES["file"]["name"]);

    //folder upload
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . $namaFile;

    //membolehkan ekstensiOk file tertentu
    $ekstensiFile = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $ekstensiOk = array('jpg','png','jpeg','gif','mp3');

    if(in_array($ekstensiFile, $ekstensiOk)){
        //upload file ke server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            //memasukkan file data ke dalam database jika diperlukan
            saveAudio($audio_path);
            $respon['status'] = 'ok';
        }else{
            $respon['status'] = 'err';
            echo "error";
        }
    }else{
        $respon['status'] = 'type_err';
    }

    //menampilkan data respon dalam format JSON
    echo json_encode($respon);

    function saveAudio($fileName)
        {
          $conn=mysqli_connect('127.0.0.1','root','','project1');
          if(!$conn)
          {
            die('server not found!');
          }

          $query="insert into audios(filename)values('{$fileName}')";

          mysqli_query($conn,$query);

          if(mysqli_affected_rows($conn)>0)
          {
            echo 'Upload berhasil';
          }

          mysqli_close($conn);
        }
}
