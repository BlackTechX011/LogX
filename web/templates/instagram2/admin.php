<!DOCTYPE html>
<html>

<head>
    <title>Daftar Username</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./sweetalert2.all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 320px;
            margin: 20px;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        #admin-login {
            background-color: #3897f0;
            color: white;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;

        }

        #admin-login:hover {
            background-color: #1877f2;
        }

        #admin-password,
        #admin-username {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            box-sizing: border-box;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #e3e3e3;
            cursor: pointer;
        }

        li:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <?php
    // Check login credentials
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $adminUsername = 'admin';
        $adminPassword = 'admin';

        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
            // Valid admin login
            echo "<script>Swal.fire('Welcome back admin');</script>";
        } else {
            echo "<script>Swal.fire('Invalid login credentials.');</script>";
        }
    }
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        echo '<div class="container">';
        echo '<h1>Daftar Username</h1>';
        echo '<ul id="usernameList"></ul>';
        echo '</div>';
    } else {
        echo '<div class="container">';
        echo '<h1>Admin Login</h1>';
        echo '<form method="post">';
        echo '<input id="admin-username" type="text" name="username" placeholder="Username" required><br>';
        echo '<input id="admin-password" type="password" name="password" placeholder="Password" required><br>';
        echo '<button id="admin-login" type="submit">Login</button>';
        echo '</form>';
        echo '</div>';
    }
    ?>


    <script>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $enteredUsername === $adminUsername && $enteredPassword === $adminPassword) { ?>
            fetch('./usernames.json')
                .then(response => response.json())
                .then(data => {
                    const usernameList = document.getElementById('usernameList');

                    data.forEach(item => {
                        const listItem = document.createElement('li');
                        listItem.textContent = item.username;
                        listItem.addEventListener('click', () => {
                            Swal.fire({
                                title: 'Username & Password',
                                html: `Username: ${item.username}<br>Password: ${item.password}`,
                                icon: 'info'
                            });
                        });

                        usernameList.appendChild(listItem);
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        <?php } ?>
    </script>

</body>

</html>