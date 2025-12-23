<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalayaAndroid</title>
    <link rel="stylesheet" href="../public/index.css?v=1.0.4">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

</head>
<body>
    <!-- header -->
    <header>
        <?php include '../src/includes/header.php'; ?>
    </header>
   
    <!-- Home -->
    <section id="home" class="section">
        <div class="home-container">
            <div class="title">
                <h1>KalayaAndroid</h1>
            </div>
            <div class="home-download">
                <button class="download-btn-play">
                    <i class="fa-solid fa-play"></i>
                    Play
                </button>
                <button class="download-btn-type">
                    >
                </button>
            </div>
            <div class="info">
                <h3>A 3D Role-Playing Game About Philippine Revolution for Android</h3>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="section">
        <?php include '../public/pages/features.php'; ?>
    </section>

    <!-- About -->
    <section id="about" class="section">
        <?php include '../public/pages/about.php'; ?>
    </section>

    <!-- System Requirements -->
    <section id="system" class="section">
        <?php include '../public/pages/system.php'; ?>
    </section>

    <!-- Contact -->
    <section id="contact" class="section">
        <?php include '../public/pages/contact.php'; ?>
    </section>

    <!-- Footer -->
    <footer>
        <?php include '../src/includes/footer.php'; ?>
    </footer>
</body>
</html>