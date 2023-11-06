<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Javascript Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeText(){
            var span = document.getElementById("output"); //dapatkan objek tulisan
            var textbox = document.getElementById("textbox"); //dapatkan object textbox

            textbox.style.color = "red"; //ubah DOM CSS, text color diubah ke red
            span.innerHTML = textbox.value; //baca isi textbox dan ubah tulisan noninput
        }
    </script>
</head>
<body>
    <div class="container">
        <script>
            function showAlert(){
                alert("Selamat anda mendapatkan 100 juta");
            }
        </script>
        <button class="btn btn-primary" onclick="showAlert();">Klik Disini!</button>
        <br>
        <button onclick="changeText();" class="btn btn-warning">Click me!</button>
        <span id = "output">Replace Me</span>
        <input id="textbox" type="text" class="form-control">
    </div>
</body>
</html>
