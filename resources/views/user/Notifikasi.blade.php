<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Pupuk & Bibit Subsidi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
<style>
  /* Reset dan base */
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
      background-color: #f2f7f0;
      color: #333;
      font-size: 14px;
      line-height: 1.5;
  }

  /* Container */
  .container {
      max-width: 1024px;
      margin: 0 auto;
      padding: 0 20px;
  }

  /* Header */
  header {
      background-color: #ffffff;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
      font-size: 14px;
      position: sticky;
      top: 0;
      z-index: 999;
      border-radius: 0 0 12px 12px;
  }

  /* Logo area: logo + text */
  .logo-section {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
  }

  .logo-section img {
      width: 48px;  /* Sesuaikan ukuran logo */
      height: 48px;
      object-fit: contain;
      border-radius: 6px;
  }

  .logo-text {
      line-height: 1.1;
  }

  .logo-text strong {
      font-size: 18px;
      color: #195619;
      font-weight: 700;
      font-family: 'Arial Black', Arial, sans-serif;
      display: block;
      user-select: none;
  }

  .logo-text small {
      color: #474747;
      font-weight: 400;
      font-size: 13px;
      user-select: none;
  }

  /* Navigation buttons */
  nav {
      display: flex;
      gap: 12px;
      align-items: center;
      flex-wrap: nowrap;
  }

  nav button, nav .icon-btn {
      background-color: #efefef;
      border: none;
      border-radius: 9999px;
      padding: 6px 14px;
      font-weight: 600;
      font-size: 13px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      color: #444;
      transition: background-color 0.3s ease;
      user-select: none;
  }

  nav button:hover {
      background-color: #d3e6c6;
      color: #195619;
  }

  nav .icon-btn {
      font-size: 18px;
      padding: 8px 10px;
  }

  /* Main */
  main {
      margin: 20px auto 60px;
      background-color: #f2f7f0;
      border-radius: 12px;
      padding: 20px 24px;
      box-shadow: 0 0 15px rgba(0,0,0,0.07);
  }

  main h2 {
      font-family: "Arial Black", Arial, sans-serif;
      color: #195619;
      font-size: 20px;
      margin-bottom: 18px;
      text-align: center;
  }

  /* Notification items */
  .notification-item {
      background-color: #d7d7d7;
      border-radius: 12px;
      padding: 14px 18px;
      margin-bottom: 14px;
      font-size: 14px;
      box-shadow: inset 0 0 12px #b1b1b1;
  }

  .notif-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 700;
      font-family: "Arial Black", Arial, sans-serif;
      font-size: 14px;
      margin-bottom: 6px;
      color: #222;
  }

  .notif-header i {
      margin-right: 10px;
      font-size: 18px;
  }

  .notif-header .date {
      font-size: 12px;
      color: #555;
      font-weight: 400;
      font-family: Arial, sans-serif;
  }

  .notification-item p {
      font-weight: 400;
      font-family: Arial, sans-serif;
      font-size: 13px;
      color: #111;
      margin-left: 30px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
  }

  /* No notifications */
  .no-notifs {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 16px;
      color: #195619;
      font-weight: 700;
      font-family: "Arial Black", Arial, sans-serif;
      margin-top: 10px;
      font-size: 14px;
  }

  .no-notifs hr {
      border: none;
      border-top: 1px solid #88b168;
      width: 28%;
  }

  /* Footer */
  footer {
      background-color: #195619;
      color: #d7d7d7;
      padding: 40px 20px 24px;
      font-size: 14px;
      border-radius: 12px 12px 0 0;
  }

  footer .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 24px;
  }

  .footer-left, .footer-center, .footer-right {
      flex: 1 1 250px;
  }

  .footer-left strong {
      display: block;
      font-size: 18px;
      font-weight: 900;
      color: #c8e6a5;
      margin-bottom: 6px;
      font-family: 'Arial Black', Arial, sans-serif;
  }

  .footer-left small {
      font-size: 13px;
      color: #d7d7d7;
      display: block;
      margin-bottom: 14px;
      line-height: 1.45;
  }

  .footer-left p.desc {
      font-size: 12px;
      margin-bottom: 12px;
      line-height: 1.3;
      font-weight: 500;
  }

  .social-links {
      display: flex;
      gap: 12px;
      font-size: 13px;
      color: #d7d7d7;
  }

  .social-links a {
      text-decoration: none;
      color: #d7d7d7;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: color 0.3s ease;
  }

  .social-links a:hover {
      color: #a8cf6e;
  }

  .social-links i {
      font-style: normal;
  }

  /* Footer center */
  .footer-center h4,
  .footer-right h4 {
      font-size: 16px;
      font-weight: 700;
      color: #cff7b9;
      margin-bottom: 14px;
      font-family: 'Arial Black', Arial, sans-serif;
  }

  ul.footer-links {
      list-style: none;
  }

  ul.footer-links li {
      margin-bottom: 8px;
  }

  ul.footer-links li a {
      color: #cdeabc;
      text-decoration: none;
  }

  ul.footer-links li a:hover {
      text-decoration: underline;
  }

  /* Footer right */
  .footer-right p {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 500;
      margin-bottom: 12px;
  }

  .footer-right p i {
      font-style: normal;
      font-size: 16px;
  }

  /* Footer bottom */
  .footer-bottom {
      background-color: #124406;
      text-align: center;
      padding: 16px 10px 8px;
      color: #a9e285;
      font-weight: 700;
      font-size: 12px;
      font-family: 'Arial Black', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      box-shadow: inset 0 2px 6px #468c35;
      border-radius: 0 0 12px 12px;
  }

  .footer-bottom img {
      height: 30px;
      width: auto;
  }

  /* Icon fonts - emoji substitutions */

  .notification-item i.fa-check-square::before {
    content: "✔️";
    margin-right: 6px;
  }

  .notification-item i.fa-file-alt::before {
    content: "📃";
    margin-right: 6px;
  }

  .notification-item i.fa-sync-alt::before {
    content: "⏳";
    margin-right: 6px;
  }

  .notification-item i.fa-check-circle::before {
    content: "✅";
    margin-right: 6px;
  }

  /* Navigation icons (optional) */
  nav button i {
    font-style: normal;
  }

  nav button:nth-child(1)::before {
    content: "🏠";
    margin-right: 6px;
  }

  nav button:nth-child(2)::before {
    content: "🌱";
    margin-right: 6px;
  }

  nav button:nth-child(3)::before {
    content: "👤";
    margin-right: 6px;
  }

  nav button:nth-child(4)::before {
    content: "✉️";
    margin-right: 6px;
  }

  nav .icon-btn::before {
    content: "🔔";
  }

  /* Responsive */
  @media (max-width: 768px) {
    nav {
        flex-wrap: wrap;
    }

    .footer-left, .footer-center, .footer-right {
        flex: 1 1 100%;
    }
  }
</style>
</head>
<body>
    @include('partials.header')

  <main class="container" role="main" aria-label="Daftar notifikasi">
    <h2>Notifikasi</h2>

    <section aria-live="polite">
      <article class="notification-item" role="alert" aria-label="Pesanan Telah Selesai 10 September 2025">
        <div class="notif-header">
          <span><i class="fa-check-square"></i> Pesanan Telah Selesai</span>
          <span class="date">10/09/2025</span>
        </div>
        <p>"Halo Oloan, selamat atas kemajuan pesanan Anda di Pupuk & Bibit Subsidi! 🎉 Kami dengan senang menginformasikan bahwa.....</p>
      </article>

      <article class="notification-item" role="alert" aria-label="Pesanan Sedang Diproses 6 September 2025">
        <div class="notif-header">
          <span><i class="fa-file-alt"></i> Pesanan Sedang Diproses</span>
          <span class="date">06/09/2025</span>
        </div>
        <p>"Halo Oloan, terima kasih sudah memilih Pupuk dan Bibit Subsidi untuk belanja seru Anda! 🎉 Kami senang melihat pesanan de.....</p>
      </article>

      <article class="notification-item" role="alert" aria-label="Segera Lakukan Konfirmasi Pesanan 5 September 2025">
        <div class="notif-header">
          <span><i class="fa-sync-alt"></i> Segera Lakukan Konfirmasi Pesanan</span>
          <span class="date">05/09/2025</span>
        </div>
        <p>"Halo Oloan, terima kasih sudah memilih Pupuk dan Bibit Subsidi untuk belanja seru Anda! 🎉 Kami senang melihat pesanan de.....</p>
      </article>

      <article class="notification-item" role="alert" aria-label="Verifikasi Akun Pengguna Berhasil 2 September 2025">
        <div class="notif-header">
          <span><i class="fa-check-circle"></i> Verifikasi Akun Pengguna Berhasil</span>
          <span class="date">02/09/2025</span>
        </div>
        <p>"Selamat datang secara resmi di [Nama Platform/Web Kamu]! 🎉 Kami senang sekali mengumumkan bahwa proses verifikasi akun.....</p>
      </article>

      <div class="no-notifs" aria-live="polite" aria-atomic="true">
        <hr /><span>Tidak Ada Notifikasi Lain</span><hr />
      </div>
    </section>
  </main>

@include('partials.footer')
</body>
</html>
