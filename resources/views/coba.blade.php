<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" id="nama">

    <button onClick="tombol()" ></button> Cek Data</body></button>
    <script>
        let button = document.getElementById('cek')

        $('cek').click(function (e){


            e.preventDefault();
            let berat = $('#berat').val()
            let tinggi = $('#tinggi').val()/100

            console.log(berat)
            console.log(tinggi)
            console.log(berat/(tinggi*tinggi))
        });

        function tombol(){
            let berat = $('#berat').val()
            let tinggi = $('#tinggi').val()/100

            console.log(berat)
            console.log(tinggi)
            console.log(berat/(tinggi*tinggi))


        }



    </script>
</body>
</html>
