// 1. Menampilkan alert saat halaman home dibuka
window.onload = function () {
    if (window.location.pathname.includes("index.html")) {
        alert("Selamat datang di website Ronaldino Kaunang!");
    }

    // Jika ada elemen jam, jalankan jam digital
    if (document.getElementById("clock")) {
        updateClock();
    }
};

// 2. Konfirmasi pengiriman form contact
function confirmSubmit() {
    return confirm("Apakah Anda yakin ingin mengirim pesan ini?");
}

// 3. Efek hover pada gambar gallery
function addGalleryHoverEffect() {
    const images = document.querySelectorAll("img");
    images.forEach(img => {
        img.addEventListener("mouseover", () => {
            img.style.transform = "scale(1.05)";
            img.style.transition = "0.3s";
        });
        img.addEventListener("mouseout", () => {
            img.style.transform = "scale(1)";
        });
    });
}
addGalleryHoverEffect();

// 4. Jam digital (bisa dipasang di halaman home atau lain)
function updateClock() {
    const clockElement = document.getElementById("clock");
    setInterval(() => {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();
        const ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12 || 12;
        clockElement.textContent = `${pad(hours)}:${pad(minutes)}:${pad(seconds)} ${ampm}`;
    }, 1000);
}

function pad(num) {
    return num < 10 ? '0' + num : num;
}
