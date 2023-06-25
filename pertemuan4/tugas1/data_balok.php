        <div class="container">
            <h1 style="text-align: center">menghitung Volume Balok</h1>
            <form method="post">
            <div style="margin-left: 25%">
                <p><b>Panjang: </b></p>
                    <input type="text" name="panjang"> <br/>
                <p><b>Lebar: </b></p>
                    <input type="text" name="lebar"> <br/>
                <p><b>Tinggi: </b></p>
                    <input type="text" name="tinggi"> <br/><br/>
                   
                <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
            </div>
            </form>
           
            <div style="margin-left: 25%"> <br/>
                <?php
                require_once 'class_balok.php';
                if(isset($_POST['hitung'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $tinggi = $_POST['tinggi'];
                    $phi = 22/7;
                    $volume = $panjang * $lebar * $tinggi;
                           
                        printf("Hasil Perhitungan Volume Balok Adalah %.2f",$volume);
                    }
                ?>
            </div>
        </div>