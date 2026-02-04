<!DOCTYPE html>
<html>
<head>
    <title>T-Shirts</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        h1 {
            text-align: center;
            padding: 20px 0;
        }
        .nav {
            text-align: right; /* top-right corner */
            padding: 10px 30px;
            margin-bottom: 10px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Desktop 4 per row */
            gap: 20px;
            padding: 20px 30px;
        }
        .card {
            background: #1c1c1c;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        img {
            width: 100%;
            border-radius: 8px;
        }
        .price {
            margin: 10px 0;
            font-weight: bold;
        }
        .btn {
            display: block;
            padding: 10px;
            margin-top: 8px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .whatsapp { background: #25D366; }

        /* Responsive CSS */
        @media (max-width: 1200px) {
            .grid {
                grid-template-columns: repeat(3, 1fr); /* Tablet */
            }
        }
        @media (max-width: 900px) {
            .grid {
                grid-template-columns: repeat(2, 1fr); /* Small tablet / Mobile: 2 per row */
            }
        }
        @media (max-width: 600px) {
            .grid {
                grid-template-columns: repeat(2, 1fr); /* Mobile still 2 per row */
                padding: 10px 15px;
            }
            .nav {
                text-align: center; /* nav center on very small screens */
            }
        }
        @media (max-width: 400px) {
            .grid {
                grid-template-columns: 1fr; /* Extra small mobile: 1 per row */
            }
        }
    </style>
</head>
<body>

<h1>T-Shirts</h1>

<div class="nav">
    @auth
        Welcome, {{ auth()->user()->name }} |
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <a href="/login">Login</a> |
        <a href="/register">Register</a>
    @endauth
</div>

<div class="grid">
    @forelse($products as $product)
        <div class="card">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

            <h3>{{ $product->name }}</h3>

            <div class="price">Rs {{ $product->price }}</div>

            <a 
              href="https://wa.me/923001234567?text=I%20want%20to%20buy%20{{ urlencode($product->name) }}"
              class="btn whatsapp">
              Buy on WhatsApp
            </a>
        </div>
    @empty
        <p>No T-Shirts available</p>
    @endforelse
</div>

</body>
</html>
