<?php $rental = $rental ?? []; ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">Gaming Space Jember</div>
    <h1>
      <span class="orange">Dr.Dra</span><br>
      <span class="white">Gaming Space</span>
    </h1>
    <p class="hero-subtitle">Play Station Rental</p>
    <p class="hero-tagline">PS3 &nbsp;&bull;&nbsp; PS4 &nbsp;&bull;&nbsp; PS5</p>
    <span class="hero-jam">Jam Buka: 07.00 - 22.00 WIB</span>
    <div class="hero-btn">
      <a href="#rental" class="btn-primary">Lihat Paket</a>
      <a href="#booking" class="btn-secondary">Book Sekarang</a>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about">
  <p class="section-label">Intel &mdash; About Us</p>
  <h2 class="section-title"><span class="orange">Dr.Dra</span> Gaming Space</h2>
  <div class="section-divider"></div>
  <p>Markas gaming terbaik di Jember. Kami menyediakan konsol PS3, PS4, dan PS5 terbaru dengan layar lebar, ruangan ber-AC, koleksi game lengkap, dan harga yang ramah di kantong. Siap tempur kapan saja.</p>
</section>

<!-- JAM BUKA -->
<section class="hours">
  <p class="section-label">Operational Hours</p>
  <h2 class="section-title">Jam <span class="orange">Operasional</span></h2>
  <div class="section-divider"></div>
  <div class="hours-grid">
    <div class="hours-card">
      <div class="hours-day">Senin &mdash; Jumat</div>
      <div class="hours-time">07:00 &mdash; 22:00</div>
    </div>
    <div class="hours-card">
      <div class="hours-day">Sabtu &mdash; Minggu</div>
      <div class="hours-time">07:00 &mdash; 22:00</div>
    </div>
  </div>
</section>

<!-- RENTAL -->
<section class="rental" id="rental">
  <p class="section-label">Equipment Loadout</p>
  <h2 class="section-title">Paket <span class="orange">Rental</span> <span class="gold">PS</span></h2>
  <div class="section-divider"></div>
  <p class="section-desc">Pilih konsol & durasi sesuai misi kamu</p>

  <div class="grid">
    <?php foreach($rental as $r): ?>
    <div class="card">
      <div class="card-top"></div>
      <div class="card-body">
        <div class="card-ps-label"><?= $r['konsol']; ?></div>
        <h3><?= $r['paket']; ?></h3>
        <p class="duration"><?= $r['durasi']; ?></p>
        <div class="card-price">
          <?= $r['harga']; ?> <span>/ sesi</span>
        </div>
        <?php if (!empty($r['keterangan'])): ?>
          <p style="margin-top:10px; font-family:'Share Tech Mono',monospace; font-size:11px; color:rgba(232,224,208,0.3); letter-spacing:1px;"><?= $r['keterangan']; ?></p>
        <?php endif; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FASILITAS -->
<section class="fasilitas" id="fasilitas">
  <p class="section-label">Base Facilities</p>
  <h2 class="section-title">Fasilitas <span class="orange">Kami</span></h2>
  <div class="section-divider"></div>
  <div class="fasilitas-grid">
    <div class="fasilitas-item">
      <h4>PS3 / PS4 / PS5</h4>
      <p>Konsol lengkap tersedia setiap hari</p>
    </div>
    <div class="fasilitas-item">
      <h4>TV 32 Inch</h4>
      <p>Layar lebar untuk pengalaman terbaik</p>
    </div>
    <div class="fasilitas-item">
      <h4>Bawa Pulang</h4>
      <p>Opsi rental bawa pulang tersedia</p>
    </div>
    <div class="fasilitas-item">
      <h4>Ruangan Ber-AC</h4>
      <p>Dingin, bersih, dan kondusif</p>
    </div>
    <div class="fasilitas-item">
      <h4>Game Lengkap</h4>
      <p>Koleksi game terbaru dan terlengkap</p>
    </div>
    <div class="fasilitas-item">
      <h4>Harga Terjangkau</h4>
      <p>Mulai dari harga ramah kantong</p>
    </div>
  </div>
</section>

<!-- BOOKING -->
<section class="booking" id="booking">
  <div class="booking-container">
    <p class="section-label">Mission Request</p>
    <h2 class="section-title">Book <span class="orange">Sekarang</span></h2>
    <div class="section-divider"></div>
    <p class="section-desc" style="margin-bottom:0;">Reservasi tempat sebelum penuh</p>

    <form class="booking-form">
      <div class="form-row">
        <input type="text" placeholder="Nama Lengkap" required>
        <input type="tel" placeholder="089967649821" required>
      </div>
      <select required>
        <option value="" disabled selected>Pilih Konsol</option>
        <option>PS3</option>
        <option>PS4</option>
        <option>PS5</option>
      </select>
      <select required>
        <option value="" disabled selected>Pilih Paket</option>
        <option>PS Saja - 12 Jam</option>
        <option>PS Saja - 24 Jam</option>
        <option>PS + TV 32" - 12 Jam</option>
        <option>PS + TV 32" - 24 Jam</option>
        <option>Bawa Pulang</option>
      </select>
      <div class="form-row">
        <input type="date" required>
        <input type="time" required>
      </div>
      <input type="number" placeholder="Jumlah Orang" min="1" required>
      <button type="submit">DEPLOY NOW</button>
    </form>
  </div>
</section>
