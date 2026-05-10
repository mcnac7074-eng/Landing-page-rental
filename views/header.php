<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr.Dra Gaming Space</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow+Condensed:wght@300;400;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>

<!-- MATRIX RAIN CANVAS -->
<canvas id="matrixCanvas"></canvas>

<style>
#matrixCanvas {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  pointer-events: none;
  opacity: 0.15;
}

.hero, .about, .hours, .rental, .fasilitas, .booking, .footer {
  position: relative;
  z-index: 1;
}
</style>

<script>
(function () {
  const canvas = document.getElementById('matrixCanvas');
  const ctx    = canvas.getContext('2d');

  // Tactical/military chars: numbers, NATO alphabet, coordinates
  const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*[]{}><|/\\:;';

  let columns, drops;
  const fontSize = 13;

  function resize() {
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
    columns = Math.floor(canvas.width / fontSize);
    drops   = Array(columns).fill(1);
  }

  function draw() {
    // Dark trail fade
    ctx.fillStyle = 'rgba(8, 8, 8, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = fontSize + 'px "Share Tech Mono", monospace';

    for (let i = 0; i < drops.length; i++) {
      const char = chars[Math.floor(Math.random() * chars.length)];
      const x = i * fontSize;
      const y = drops[i] * fontSize;

      const ratio = (drops[i] * fontSize) / canvas.height;

      // Head = bright white/gold
      if (Math.random() > 0.97) {
        ctx.fillStyle = '#fffbe0';
      } else if (ratio < 0.25) {
        // Top: gold
        ctx.fillStyle = '#ffaa33';
      } else if (ratio < 0.6) {
        // Mid: orange
        ctx.fillStyle = '#ff6a00';
      } else {
        // Bottom: dim orange-red
        ctx.fillStyle = '#882200';
      }

      ctx.fillText(char, x, y);

      if (y > canvas.height && Math.random() > 0.975) {
        drops[i] = 0;
      }
      drops[i]++;
    }
  }

  resize();
  window.addEventListener('resize', resize);
  setInterval(draw, 50);
})();
</script>
