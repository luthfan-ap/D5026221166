<html lang="en">
<head>
    <title>Javascript Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateForm()
        {
            console.log("Ini baris 14");
            return false; // di mana ketemu "return", akan exit function.
            console.log("Ini baris 16");
            return true;
            console.log("Ini baris 18");
        }

        function validate()
        {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");

            if (bil1.value == "" && bil2.value == "") {
                alert("Bilangan 1 dan 2 harus diisi.");
                bil1.focus();
                return false;

            } if (bil1.value == "") {
                bil1.placeholder = "Mohon diisi angka.";
                alert("Bilangan 1 harus diisi.");
                return false;

            } if (bil2.value == "") {
                // alert("Bilangan 2 harus diisi.");
                bil2.placeholder = "Mohon diisi angka.";
                return false;

            } if (nrp.value == "") {
                alert("NRP harus diisi.");
                nrp.placeholder = "NRP mohon diisi.";
                return false;

            } if (nrp.value.length != 10) {
                alert("NRP harus 10 digit");
                return false;

            } if (isNaN(nrp.value)) {
                alert("NRP harus angka");
                return false;
            } else {
                return true;
            }
        }
    </script>

    <script src="js/operasi.js"></script>
</head>
<body>
    <div class="container">
        <form action="http://www.detik.com" method="get" onsubmit="return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1    : </label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2    : </label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">NRP        : </label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
