<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script type="text/javascript">
        alert("selamat datang, silahkan isi username dan password anda.");
    </script>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .floating-form-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            height: 300px;
            position: relative;
            animation: floatForm 0.5s ease-out;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 16px;
        }

        button[type="submit"] {
            background-color: #660000;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #660000;
        }
    </style>
</head>

<body>
    <div class="floating-form-container">
        <h2>LOGIN</h2> &nbsp;
        <form action="proseslogin.php" method="POST" id="login">
            <input type="username" name="username" id="username" placeholder="Masukan username" required><br>
            <input type="password" name="password" id="password" placeholder="Masukan Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
    
    <script>
        // Check if there is a 'msg' parameter in the URL
        const urlParams = new URLSearchParams(window.location.search);
        const errorMessage = urlParams.get('msg');

        // Display error message in a pop-up if 'msg' parameter is present
        if (errorMessage === 'gagal') {
            alert('Username atau password salah!');
        }
    </script>
</body>
</html>