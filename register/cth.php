<!DOCTYPE html>
<html>
<head>
<title>Halaman Register</title>
<style type="text/css">
body{
        font-family: arial;
        font-size: 14px;
        background-color:#222;
}
<link href="css/waves-effect.css" rel="stylesheet">
#utama{
    width: 300px;
    height:0 auto;
    margin:0 auto;
    margin-top:12%;
 
}
#judul{
    padding:15px;
    text-align: center;
    color:#fff;
    font-size: 20px;
    background-color: #339966;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom: 3px solid #336666;

}
#inputan{
    background-color: #ccc;  
    padding:20px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}

#input{
    padding:10px;
    border:0px;
}
.pol{
    width:200px;
}
    </style>
</head>
<body>
<div id="utama">
    <div id="judul">
    Silahkan Registrasi

    </div>

    <div id="inputan">
        <form action="" method="post" >
            <div >
                <input type="text" name="nama" placeholder="Nama Lengkap" class="pol">
            </div>
            <div style="margin-top:10px;">
                <input type="text" name="user" placeholder="Username" class="pol">
            </div>
            <div style="margin-top:10px;">
                <input type="Password" name="pass" placeholder="Password" class="pol" >
            </div>
            <div style="margin-top:10px;">
                <input type="text" name="alamat" placeholder="Alamat" class="pol">
            </div>
            <div style="margin-top:10px;">
                <input type="number" name="telp" placeholder="Telpon" class="pol">
            </div>
            <div style="margin-top:10px;">
            <select name="Jenis Kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
            
            </div>
            <div style="margin-top:10px;">
            <input class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>


</div>
</body>
</html>