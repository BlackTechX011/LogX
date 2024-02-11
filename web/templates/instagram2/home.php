<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Instagram</title>
    <script src="./sweetalert2.all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        #iframel {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <iframe id="iframel" src="https://instagram.com" frameborder="0">
    </iframe>
    <script>
        Swal.fire({
            icon: "warning",
            title: "Welcome",
            text: "Welcome to virtual instagram, you can browse without identity or anonymous"
        })
    </script>
</body>

</html>