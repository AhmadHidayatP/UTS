<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokoku</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-section {
            background-image: url('{{ url('images/background.jpg') }}'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-content {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .features-section {
            padding: 50px 0;
            text-align: center;
        }
        .features-section h2 {
            margin-bottom: 40px;
        }
        .feature-box {
            margin-bottom: 30px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Selamat Datang di Tokoku</h1>
            <p>Toko kelontong terlengkap dengan barang-barang kebutuhan sehari-hari untuk Anda dan keluarga.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Masuk</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2>Apa yang Kami Tawarkan</h2>
            <div class="row">
                <div class="col-md-4 feature-box">
                    <h5>Produk Berkualitas</h5>
                    <p>Kami menyediakan produk kebutuhan sehari-hari dengan kualitas terbaik.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <h5>Harga Terjangkau</h5>
                    <p>Harga bersaing dan terjangkau untuk memenuhi kebutuhan Anda setiap hari.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <h5>Pelayanan Ramah</h5>
                    <p>Kami selalu siap melayani dengan ramah untuk kenyamanan berbelanja Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Tokoku. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
