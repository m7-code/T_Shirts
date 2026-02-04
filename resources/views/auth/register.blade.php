<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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

        .register-container {
            background: #1c1c1c; /* dark card */
            padding: 40px 30px;
            border-radius: 12px;
            width: 400px;
            max-width: 90%; /* responsive */
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 25px;
            font-weight: normal;
        }

        /* Input fields with white border */
        .register-container input {

            box-sizing: border-box;
            width: 100%;
            padding: 12px 15px;
            margin: 15px 0;
            border: 2px solid white; /* white line */
            border-radius: 6px;
            background: #111; /* dark input background */
            color: white;
            font-size: 16px;
            outline: none;
            text-align: center;
        }

        .register-container input::placeholder {
            color: #aaa;
        }

        /* Focus effect */
        .register-container input:focus {
            border-color: #25D366; /* green on focus */
        }

        .register-container button {
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

        .register-container button:hover {
            background: #1ebe57;
        }

        .register-container .links {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-container .links a {
            color: #25D366;
            text-decoration: none;
            margin: 0 5px;
        }

        /* Mobile responsiveness */
        @media (max-width: 500px) {
            .register-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>

    <form action="{{ route('register.post') }}" method="POST">
        @csrf

        <input 
            type="text" 
            name="name" 
            placeholder="Name"
            autocomplete="name"
            required
        >

        <input 
            type="email" 
            name="email" 
            placeholder="Email"
            autocomplete="email"
            required
        >

        <input 
            type="password" 
            name="password" 
            placeholder="Password"
            autocomplete="new-password"
            required
        >

        <input 
            type="password" 
            name="password_confirmation"
            placeholder="Confirm Password"
            autocomplete="new-password"
            required
        >

        <button type="submit">Register</button>
    </form>

    <div class="links">
        <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
    </div>
</div>

</body>
</html>
