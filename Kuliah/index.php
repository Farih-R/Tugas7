<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem KRS</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      color: #333;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #34495e;
      padding: 10px 20px;
      text-align: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      padding: 30px;
      max-width: 800px;
      margin: auto;
      background-color: white;
      margin-top: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    h2 {
      color: #2c3e50;
    }

    ul {
      margin-top: 10px;
      line-height: 1.8;
    }

    footer {
      text-align: center;
      padding: 15px;
      margin-top: 40px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

  <header>
    <h1>📝 Sistem KRS Sederhana</h1>
  </header>

  <nav>
    <a href="mahasiswa/index.php">Data Mahasiswa</a>
    <a href="matakuliah/index.php">Data Mata Kuliah</a>
    <a href="krs/index.php">Data KRS</a>
  </nav>

  <main>
    <h2>Selamat Datang!</h2>
    <p>Gunakan menu di atas untuk mengelola:</p>
    <ul>
      <li>Data Mahasiswa</li>
      <li>Data Mata Kuliah</li>
      <li>Kartu Rencana Studi (KRS)</li>
    </ul>
  </main>

  <footer>
    &copy; <?= date('Y') ?> Sistem KRS • Dibuat dengan ❤️
  </footer>

</body>
</html>
