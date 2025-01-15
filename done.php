<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Proses Selesai</title>
</head>
<body>

<div class="panel">
    <h2>SUKSES WEB ANDA BERHASIL DIBUAT</h2>

    <div class="button-group">
        <button onclick="salinLink()">Salin URL</button>
        <button onclick="bukaSetting()">Setting</button>
    </div>
</div>

<script>
    function salinLink() {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = window.location.origin + "/xx/<?php echo $_GET['folder']; ?>";
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Link berhasil disalin!");
    }

    function bukaSetting() {
        window.location.href = "/xx/<?php echo $_GET['folder']; ?>/setting.php";
    }
</script>

</body>
</html>
