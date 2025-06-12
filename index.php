<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hehe</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="theme/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navigasi {
            height: 100vh;
            width: 35vh;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
        }

        .navigasi .logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 10%;
            width: 100%;
            background-color: black;
            color: white;
            font-weight: 600;
            font-size: 20px;
        }

        .logo img {
            height: 60%;
        }

        .logout {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.6s ease-in-out;
            width: 100%;
            text-decoration-line: none;
            font-size: 20px;
            font-weight: 600;
            color: black;
            padding: 10px;
        }

        .logout:hover {
            padding: 20px 0;
            background-color: rgb(221, 21, 21);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navigasi">
            <div class="logo">
                <img src="logo.png" alt="">
                <p>Ezdeck</p>
            </div>
            <div class="">
                <a href="regin.php" class="logout">Log Out</a>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="theme/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="theme/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="theme/plugins/jszip/jszip.min.js"></script>
    <script src="theme/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="theme/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="theme/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="theme/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="theme/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="theme/dist/js/adminlte.min.js"></script>
</body>

</html>