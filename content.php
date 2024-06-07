<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/admin.css">
    <title>Traveler</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="admin.php" class="logo">
            <div class="logo-name"><span>Tra</span>veler</div>
        </a>
        <ul class="side-menu">
            <li><a href="admin.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="content.php"><i class='bx bx-message-square-dots'></i>Content</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="login.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <button class="search-btn" type="submit"></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="profile">
                <img src="images/FotoDaffa_BackgroundBiru.jpg">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Content</h1>
                    </ul>
                </div>
            </div>

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Add Destination</h3>
                    </div>
                    <table>
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Photo
                                </td>
                                <td class="custom-file-upload"><input type="file" name="gambar" id="gambar" />
                                    <label for="gambar">Choose File</label></td>
                            </tr>
                            <tr>
                                <td>
                                    Article
                                </td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="custom-submit-button">Submit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Add Article</h3>
                    </div>
                    <table>
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Photo
                                </td>
                                <td class="custom-file-upload"><input type="file" name="gambar" id="gambar" />
                                    <label for="gambar">Choose File</label></td>
                            </tr>
                            <tr>
                                <td>
                                    Article
                                </td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>
                                    Link
                                </td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="custom-submit-button">Submit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

    </div>

    <script src="js/scriptadmin.js"></script>
</body>

</html>