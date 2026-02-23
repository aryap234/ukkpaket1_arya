<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-TOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #1a1c1e; height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Inter', sans-serif; }
        .login-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); width: 100%; max-width: 400px; }
        .btn-dark { background-color: #1a1c1e; border: none; padding: 12px; border-radius: 10px; }
        .btn-dark:hover { background-color: #343a40; }
        .form-control { border-radius: 10px; padding: 12px; }
    </style>
</head>
<body>
    <div class="login-card text-center">
        <h2 class="fw-bold mb-2">PEMINJAMAN ALAT</h2>
        <p class="text-muted mb-4">Silahkan login untuk masuk</p>

        <?php if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"): ?>
            <div class="alert alert-danger py-2 small" role="alert">
                Username atau Password Salah!
            </div>
        <?php endif; ?>
        
        <form action="proses_login.php" method="POST">
            <div class="mb-3 text-start">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="mb-4 text-start">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-dark w-100 fw-bold">LOGIN SEKARANG</button>
        </form>
    </div>
</body>
</html>
