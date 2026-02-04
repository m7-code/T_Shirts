<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background: #111; /* dark background */
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* full screen height */
        }

        .login-container {
            background: #1c1c1c; /* dark card */
            padding: 40px 30px;
            border-radius: 12px;
            width: 400px;
            max-width: 90%; /* responsive */
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 25px;
            font-weight: normal;
        }

        /* Input fields with white border */
        .login-container input {

            box-sizing: border-box;

            width: 100%;
            padding: 12px 15px;
            margin: 15px 0;
            border: 2px solid white; /* white line */
            border-radius: 6px;
            background: #111; /* dark background inside input */
            color: white;
            font-size: 16px;
            outline: none;

            text-align: center;
        }

        .login-container input::placeholder {
            color: #aaa;
        }

        /* Focus effect */
        .login-container input:focus {
            border-color: #25D366; /* green on focus */
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #25D366; /* green button */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-container button:hover {
            background: #1ebe57;
        }

        .login-container .links {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-container .links a {
            color: #25D366;
            text-decoration: none;
            margin: 0 5px;
        }

        /* Mobile responsiveness */
        @media (max-width: 500px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="links">
        <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
    </div>
</div>

</body>
</html>
