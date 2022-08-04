<?php 
    $sumber="data.json";
    $konten=file_get_contents($sumber);
    $data=json_decode($konten,true);
    
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Data Kelompok</title>
     <style type="text/css">
         
     </style>
     <script src="jquery-3.6.0.min.js"></script>
 </head>
 <body>
    <table border="1">
        <tr id="judul">
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Hobi</th>
            <th>Cita cita</th>
        </tr>

    </table>

    <script type="text/javascript">
        $(document).ready(function(){

            var json, tr;

            json = [

                {
                    "no":"1",
                    "nama":"Amalia Handayani",
                    "NISN":"00113",
                    "hobi":"Nonton film",
                    "citacita":"psikologi"
                },

                {
                    "no":"3",
                    "nama":"Andika Bayangkara",
                    "NISN":"00114",
                    "hobi":"Menyanyi",
                    "citacita":"Musisi"
                },

                {
                    "no":"2",
                    "nama":"Bimo Raka",
                    "NISN":"00118",
                    "hobi":"Futsal",
                    "citacita":"TNI"
                },

                {
                    "no":"3",
                    "nama":"Darmawan",
                    "NISN":"00120",
                    "hobi":"Berenang",
                    "citacita":"Web developer"

                },

                {
                    "no":"4",
                    "nama":"Fanny Ramadhania",
                    "NISN":"00122",
                    "hobi":"-",
                    "citacita":"Software Developer"
                },

                {
                    "no":"5",
                    "nama":"Talitha Budi P",
                    "NISN":"00139",
                    "hobi":"Berenang",
                    "citacita":"Design Interior"
                },
                {
                    "no":"6",
                    "nama":"Vyrdi Firmansyah",
                    "NISN":"00141",
                    "hobi":"YTTA",
                    "citaita":"YTTA YGY"
                }
                

            ];

            for(var i=6; i>=0; i--){
                tr = ("<tr><td>" + json[i].no + "</td><td>" + json[i].nama + "</td><td>" + json[i].NISN + "</td><td>" + json[i].hobi + "</td><td>" + json[i].citacita + "</td></tr>");
                $('#judul').after(tr);
            }

        });
    </script>
 
 </body>
 </html>
