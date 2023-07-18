<?php
    require "session.php";
    require "../koneksi.php";

    $id =$_GET['p'];
    
    $query = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container mt-5">
        <h2>Detail Kategori</h2>

        <div class="col-12 col-md-6">
            <form action="" method="post">
                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control" value="<?php echo
                    $data['nama'];?>">
                </div>
            
                <div class="mt-5 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary " name="editBtn" class="btn btn-info"><i class="fas fa-pen-to-square"></i>  Edit</button>
                    <button type="submit" class="btn btn-danger" name="deleteBtn" class="btn btn-info"><i class="fas fa-trash"></i>  Delete</button>
                </div>
            </form>

                <?php
                if(isset($_POST['editBtn'])){
                    $kategori = htmlspecialchars($_POST['kategori']);

                    if($data['nama']==$kategori){
                        
                        ?>
                            <meta http-equiv="refresh" content="0; url=kategori.php" />
                        <?php
                    }
                    else{
                        $query = mysqli_query($con, "SELECT * FROM kategori WHERE nama='$kategori'");
                        $jumlahData = mysqli_num_rows($query);

                        if($jumlahData > 0){
                            ?>
                             <div class="alert alert-danger mt-3" role="alert">
                                Data Sudah Ada
                            </div>
                            <?php
                        }
                        else{
                            $querySimpan = mysqli_query($con, "UPDATE kategori SET nama='$kategori' WHERE id='$id'");
                            if($querySimpan){
                                ?>
                                <div class="alert alert-success mt-3" role="alert">
                                Data Berhasil Terupdate
                                </div>

                            <meta http-equiv="refresh" content="0; url=kategori.php" />
                            <?php
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }
                }
            }

            if(isset($_POST['deleteBtn'])){
                $queryCek = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$id'");
                $dataHitung = mysqli_num_rows($queryCek);
                
                if($dataHitung>0){
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                        Kategori tidak dapat dihapus karena sudah digunakan diproduk
                        </div>
                    <?php
                    
                }


                $queryHapus = mysqli_query($con, "DELETE FROM kategori WHERE id='$id'");
                
                if($queryHapus){
                    ?>
                        <div class="alert alert-success mt-3" role="alert">
                        Data Berhasil Dihapus
                        </div>

                        <meta http-equiv="refresh" content="0; url=kategori.php" />
                    <?php
                }
                else{
                    
                }
               
            }
            ?>
      </div>
</div>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script> 
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>