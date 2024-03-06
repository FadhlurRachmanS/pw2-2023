<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $Fruits = [
    [
          "Id" => 1,
          "Nama" => 'Rambutan',
          "Warna" => 'Merah',
          "Stok"  => 150 ,
          "Harga" => 20000,
          "Deskripsi" => 'Buah Rambutan adalah buah yang berwarna merah meliliki duri yang menyerupai rambut berair dan meliliki manfaat yang banyak ',
    ],
    [
        "Id" => 2,
        "Nama" => 'Mangga',
        "Warna" => 'Uhijau',
        "Stok"  => 80,
        "Harga" => 22000,
        "Deskripsi" => 'Mangga adalah salah satu buah tropis yang populer dan sering dinikmati dalam bentuk segar atau diolah menjadi berbagai hidangan, seperti jus, smoothie, saus, serta makanan penutup seperti es krim mangga atau selai mangga.',
    ],
    [
        "Id" => 3,
        "Nama" => 'Dukuh',
        "Warna" => 'Coklat',
        "Stok"  => 200,
        "Harga" => 15000,
        "Deskripsi" => 'Buah duku merupakan buah tandan. Berbentuk bulat atau bulat memanjang dengan diameter 2-5 cm. Dalam satu tanda jumlahnya bervariasi.',
    ],
    [
      "Id" => 4,
      "Nama" => 'Semangka',
      "Warna" => 'Hijau',
      "Stok"  => 50,
      "Harga" => 30000,
      "Deskripsi" => 'Buah semangka memiliki kulit yang keras dengan warna hijau pekat atau hijau muda dan larik-larik hijau tua. Tergantung pada jenisnya, daging buah semangka dapat berwarna merah atau kuning, dan ada semangka dengan biji serta semangka yang tidak memiliki biji.',
  ],
  [
    "Id" => 5,
    "Nama" => 'Pepaya',
    "Warna" => 'Kuning',
    "Stok"  => 90,
    "Harga" => 23000,
    "Deskripsi" => 'Buah pepaya banyak disukai oleh masyarakat karena memiliki rasa yang manis dan mengandung banyak nutrisi dan vitamin. ',
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

          foreach ($Fruits as $fruit) {
            echo "<tr>";
               echo "<td>" . $fruit['Id'] . "</td>"; 
               echo "<td>" . $fruit['Nama'] . "</td>"; 
               echo "<td>" .  $fruit['Warna'] . "</td>"; 
               echo  "<td>" . $fruit['Stok'] . "</td>"; 
               echo  "<td>" . $fruit['Harga'] . "</td>"; 
               echo "<td>" . $fruit['Deskripsi']. "</td>";
               
            echo "</tr>";
        }   
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>