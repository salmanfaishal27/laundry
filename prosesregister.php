<?php include "koneksi.php"; 
      $nama = addslashes(strip_tags ($_POST['nama']));
      $alamat = addslashes(strip_tags ($_POST['alamat']));
      $telpon = addslashes(strip_tags ($_POST['telpon']));
      $username = addslashes(strip_tags ($_POST['username'])); 
      $password = addslashes(strip_tags ($_POST['password'])); 
      $gender = addslashes(strip_tags ($_POST['gender']));
      $confirm = addslashes(strip_tags ($_POST['confirm'])); //script ini untuk mengecek apakah form sudah terisi semua 
      if ($username&&$password&&$confirm) { //berfunsgi untuk mengecek form tidak boleh lebih dari 10 
      if (strlen($username) > 10){
        echo "username tidak boleh lebih dari 10 karakter";
      }else{
    //password harus 6-25 karakter
    if (strlen($password) > 25 || strlen($confirm) < 6){
        echo "Password harus antara 6-25 karakter";
    }else{
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $confirm){
            $sql_get = mysqli_query ("SELECT * FROM pengguna WHERE username = '$username'");
            $num_row = mysqli_num_rows($sql_get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = md5($password);
                $confirm = md5($confirm);
                $sql_insert = mysqli_query("INSERT INTO pengguna VALUES ('','$nama','$username','$password','Konsumen','','$alamat','$telpon','$gender')");
                $sql_insert = mysqli_query("INSERT INTO konsumen VALUES ('','$nama','$alamat','$telpon','$username','$password')");
                header('location:login.php');
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}
?>

<?php

// session_start();
// require_once ('koneksi.php');
// function antiinjection($data){
//   $filter_sql = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
//   return $filter_sql;
// }

// if(isset($_POST['register'])){

    // filter data yang diinputkan
    // $name = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // // enkripsi password
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    // $telp = filter_input(INPUT_POST, 'telp', FILTER_SANITIZE_NUMBER_INT);
  


    // menyiapkan query
    // $sql = "INSERT INTO konsumen (nama, alamat, telp, username, password) 
    //         VALUES (:nama, :alamat, :telp, :username, :password)";
    // $stmt = $db->prepare($sql);

    // bind parameter ke query
    // $params = array(
    //     ":nama" => $name,
    //     ":alamat" => $alamat,
    //     ":telp" => $telp,
    //     ":username" => $username,
    //     ":password" => $password       
    // );

    // eksekusi query untuk menyimpan ke database
    // $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
//     if($saved){
//       header("Location: login.php");
//     }else{
//       header('location:index.php');
//     }
// }

?>