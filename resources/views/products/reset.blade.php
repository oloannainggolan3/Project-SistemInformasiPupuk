<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reset Password | Pupuk & Bibit Subsidi</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <style>
    :root {
      --primary-green: #16a34a; /* hijau cerah sesuai desain */
      --dark-green: #165c2d; /* hijau navbar */
      --medium-green: #1a4d1a; /* footer */
      --light-green-bg: #ecf9ec; /* background section */
      --white: #ffffff;
      --text-color: #2c2c2c;
      --border-color: #cbd5d1;
      --footer-text: #f0f0f0;
      --footer-dark-bg: #145018;
      --error-red: #f44336;
      --font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Reset dasar */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-family);
      background-color: var(--white);
      color: var(--text-color);
      line-height: 1.5;
    }

    .container {
      max-width: 1200px;
      width: 90%;
      margin: 0 auto;
    }

    a {
      color: inherit;
      text-decoration: none;
    }
    ul {
      list-style: none;
    }

    /* Navbar */
    .navbar {
      background-color: var(--dark-green);
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }
    .nav-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      color: var(--white);
      font-weight: 700;
      font-size: 1.2rem;
    }
    .logo img {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      object-fit: contain;
      background: white;
      padding: 5px;
    }
    .logo .subtitle {
      font-weight: 400;
      font-size: 0.85rem;
      opacity: 0.8;
      line-height: 1.2;
      margin-left: 5px;
    }

    nav a {
      background: var(--white);
      padding: 10px 18px;
      margin-left: 12px;
      border-radius: 10px;
      font-weight: 600;
      color: var(--dark-green);
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: background-color 0.25s ease;
    }
    nav a i {
      font-size: 1rem;
    }

    nav a:hover {
      background-color: #a7d5a9;
      color: var(--primary-green);
    }
    nav a.active {
      background-color: var(--primary-green);
      color: var(--white);
      box-shadow: 0 2px 6px rgb(22 163 74 / 0.5);
      transform: translateY(-1px);
    }

    .nav-icons i {
      font-size: 1.3rem;
      color: var(--white);
      cursor: pointer;
      transition: color 0.25s;
    }
    .nav-icons i:hover {
      color: var(--primary-green);
    }

    /* Reset Password Section */
    .reset-password-section {
      background-color: var(--light-green-bg);
      min-height: calc(100vh - 140px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 50px 0;
    }

    .reset-password-container {
      background-color: var(--white);
      padding: 40px 35px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
      max-width: 480px;
      width: 100%;
      text-align: left;
      color: var(--text-color);
    }

    .reset-password-container h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: var(--primary-green);
    }
    .reset-password-container p {
      font-size: 1rem;
      color: #4b5563;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 25px;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 9px;
      font-size: 1rem;
      color: #134e07;
    }
    .form-group input {
      width: 100%;
      padding: 14px 15px;
      font-size: 1rem;
      border: 1.8px solid var(--border-color);
      border-radius: 12px;
      transition: border-color 0.3s ease;
      font-weight: 500;
      color: #134e07;
    }
    .form-group input::placeholder {
      color: #8a8a8a;
      font-style: italic;
    }
    .form-group input:focus {
      outline: none;
      border-color: var(--primary-green);
      box-shadow: 0 0 7px #a6dba6bf;
    }

    .error-message {
      color: var(--error-red);
      font-size: 0.9rem;
      margin-top: 6px;
      display: none;
      font-weight: 600;
    }

    .cta-button {
      background-color: var(--primary-green);
      color: var(--white);
      font-size: 1.15rem;
      font-weight: 700;
      padding: 14px;
      border: none;
      border-radius: 12px;
      width: 100%;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 10px #37a14d88;
      letter-spacing: 0.03em;
    }
    .cta-button:hover {
      background-color: #0c3f07;
    }

    .back-to-login {
      text-align: center;
      margin-top: 25px;
    }
    .back-to-login a {
      font-weight: 600;
      font-size: 0.95rem;
      color: var(--primary-green);
      transition: color 0.3s ease;
    }
    .back-to-login a:hover {
      text-decoration: underline;
      color: #0c3f07;
    }

    /* Footer */
    .footer {
      background-color: var(--medium-green);
      color: var(--footer-text);
      padding: 40px 0 0;
      font-size: 0.9rem;
      line-height: 1.5;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      gap: 30px;
      padding-bottom: 30px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .footer-brand .logo {
      display: flex;
      gap: 12px;
      align-items: center;
      margin-bottom: 15px;
    }
    .footer-brand .logo img {
      width: 50px;
      height: 50px;
      border-radius: 8px;
      background: white;
      padding: 5px;
      object-fit: contain;
    }
    .footer-brand h4 {
      margin: 0;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--light-green-bg);
    }
    .footer-brand p {
      opacity: 0.8;
      font-size: 0.88rem;
      margin: 10px 0 12px 0;
      max-width: 320px;
    }

    .follow-us {
      font-weight: 700;
      margin-bottom: 8px !important;
    }
    .social-links a {
      font-size: 0.9rem;
      margin-right: 15px;
      color: var(--footer-text);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: color 0.3s ease;
    }
    .social-links a i {
      font-size: 1.3rem;
    }
    .social-links a:hover {
      color: var(--primary-green);
    }

    .footer-links h4,
    .footer-contact h4 {
      margin-bottom: 15px;
      font-size: 1.15rem;
      color: var(--light-green-bg);
      font-weight: 700;
    }
    .footer-links ul li,
    .footer-contact ul li {
      margin-bottom: 10px;
      font-size: 0.9rem;
    }
    .footer-links ul li a {
      color: var(--footer-text);
      transition: color 0.3s ease;
    }
    .footer-links ul li a:hover {
      color: var(--primary-green);
    }

    .footer-contact i {
      margin-right: 8px;
      color: var(--primary-green);
    }

    .footer-bottom {
      text-align: center;
      padding: 15px 0;
      background-color: var(--footer-dark-bg);
      font-size: 0.75rem;
      color: #ddd;
      letter-spacing: 0.04em;
      font-weight: 600;
      user-select: none;
    }
    .footer-bottom img {
      height: 30px;
      margin-bottom: 5px;
      filter: brightness(90%);
    }

    /* Responsif */
    @media (max-width: 900px) {
      .nav-content nav {
        display: none;
      }
      .reset-password-container {
        padding: 30px 20px;
        max-width: 95%;
      }
      .footer-grid {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 40px;
      }
      .footer-brand .logo {
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      .reset-password-container h2 {
        font-size: 1.6rem;
      }
      .cta-button {
        font-size: 1rem;
      }
      nav a {
        font-size: 0.85rem;
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="container nav-content">
      <div class="logo">
        <img src="{{ asset('logo.png') }}" alt="Logo Pupuk & Bibit Subsidi" />
        <div>
          Pupuk & Bibit Subsidi<br />
          <span class="subtitle">Sistem Informasi Pemerintah</span>
        </div>
      </div>
      <nav>
        <a href="#"><i class="fas fa-home"></i> Beranda</a>
        <a href="#" class="active">
          <i class="fas fa-seedling"></i> Pupuk & Bibit
        </a>
        <a href="#"><i class="fas fa-user"></i> Profil</a>
        <a href="#"><i class="fas fa-envelope"></i> Kontak</a>
      </nav>
      <div class="nav-icons"><i class="fas fa-bell"></i></div>
    </div>
  </header>

  <!-- Reset Password -->
  <section class="reset-password-section">
    <div class="container">
      <div class="reset-password-container" role="main" aria-label="Reset Password Form">
        <h2>Reset Password</h2>
        <p>
          Masukkan alamat email Anda, password baru, dan konfirmasi password untuk
          mereset password akun.
        </p>
        <form id="reset-form" action="#" method="post" novalidate>
          <div class="form-group">
            <label for="email">Alamat Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Masukkan email Anda"
              required
              autocomplete="email"
            />
          </div>
          <div class="form-group">
            <label for="new-password">Password Baru</label>
            <input
              type="password"z
              id="new-password"
              name="new_password"
              placeholder="Masukkan password baru"
              minlength="8"
              required
              autocomplete="new-password"
            />
          </div>
          <div class="form-group">
            <label for="confirm-password">Konfirmasi Password</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm_password"
              placeholder="Konfirmasi password baru"
              minlength="8"
              required
              autocomplete="new-password"
            />
            <div class="error-message" id="password-error" aria-live="polite">
              Password tidak cocok. Silakan coba lagi.
            </div>
          </div>
          <button type="submit" class="cta-button">Reset Password</button>
        </form>
        <div class="back-to-login">
          <a href="#">Kembali ke Login</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer" role="contentinfo">
    <div class="container footer-grid">
      <div class="footer-brand">
        <div class="logo">
          <img src="logo.png" alt="Logo Pupuk & Bibit Subsidi" />
          <div>
            <h4>Pupuk Subsidi Indonesia</h4>
            <p>Program Pemerintah untuk Petani</p>
          </div>
        </div>
        <p>
          Platform resmi pemerintah untuk distribusi pupuk dan bibit bersubsidi kepada petani
          Indonesia. Mendukung ketahanan pangan nasional melalui program subsidi berkualitas.
        </p>
        <p class="follow-us">Follow us!</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
          <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
          <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
        </div>
      </div>

      <div class="footer-links">
        <h4>Menu Utama</h4>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Pupuk & Bibit</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-contact">
        <h4>Contact Us</h4>
        <ul>
          <li>
            <i class="fas fa-map-marker-alt"></i> Jl. Sitoaluama, Laguboti, Toba
          </li>
          <li><i class="fas fa-phone"></i> +91 91813 23 2309</li>
          <li><i class="fas fa-envelope"></i> hello@squareup.com</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <img src="lambang himsi.png" alt="Information Systems Logo" />
      <p>Dwi Institute of Technology</p>
    </div>
  </footer>

  <script>
    // Script validasi password konfirmasi
    const form = document.getElementById("reset-form");
    const newPasswordInput = document.getElementById("new-password");
    const confirmPasswordInput = document.getElementById("confirm-password");
    const errorMessage = document.getElementById("password-error");

    form.addEventListener("submit", (e) => {
      const newPassword = newPasswordInput.value.trim();
      const confirmPassword = confirmPasswordInput.value.trim();
      errorMessage.style.display = "none";

      // minimal 8 karakter validasi di HTML juga sudah ada (minlength)

      if (newPassword !== confirmPassword) {
        e.preventDefault();
        errorMessage.style.display = "block";
        confirmPasswordInput.focus();
      }
    });
  </script>
</body>
</html>