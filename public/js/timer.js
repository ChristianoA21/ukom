// Inisialisasi variabel untuk menyimpan waktu
  let startTime;
  let elapsedTime = 0;
  let timerInterval;

  // Fungsi untuk memformat waktu menjadi menit:detik
  function formatTime(time) {
    const minutes = Math.floor(time / 60);
    const seconds = time % 60;
    return `${minutes}m:${seconds}s`;
  }

  // Fungsi untuk memperbarui tampilan stopwatch
  function updateStopwatch() {
    const stopwatchElement = document.getElementById('stopwatch');
    stopwatchElement.textContent = formatTime(elapsedTime);
  }

  // Fungsi untuk memulai stopwatch
  function startStopwatch() {
    startTime = new Date().getTime() - elapsedTime * 1000;
    timerInterval = setInterval(function () {
      elapsedTime = Math.floor((new Date().getTime() - startTime) / 1000);
      updateStopwatch();
    }, 1000);
  }

  // Fungsi untuk menghentikan stopwatch
  function stopStopwatch() {
    clearInterval(timerInterval);
  }

  // Mulai stopwatch saat halaman dimuat
  startStopwatch();

  // Tangkap event saat pengguna meninggalkan halaman
  window.addEventListener('beforeunload', function () {
    // Menghentikan stopwatch sebelum meninggalkan halaman
    stopStopwatch();
    // Menyimpan waktu terakhir ke local storage atau server jika diperlukan
  });

  // Tambahan: Tangkap event saat pengguna kembali ke halaman
  window.addEventListener('focus', function () {
    // Mulai stopwatch kembali saat pengguna kembali ke halaman
    startStopwatch();
  });