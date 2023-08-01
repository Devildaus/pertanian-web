<head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Mp2on5LI9Op24Uv9N+/Hu54zad2jjf2RzQdw8zbu8C0emZ9LUTvE1fJbGp1r58JrPPLk4JuAT84Io8bCM+fzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="slider" id="slider1">
    <!-- Slides images -->
    <img src="https://source.unsplash.com/1200x500?farm" alt="" />
    <img src="https://source.unsplash.com/1200x500?tree" alt="" />
    <img src="https://source.unsplash.com/1200x500?rice" alt="" />
    <img src="https://source.unsplash.com/1200x500?natural" alt="" />
    <img src="https://source.unsplash.com/1200x500?onion" alt="" />

    <!-- Tombol slider kiri dengan icon -->
    <button class="slider-button" onclick="prevSlide()"><i class="fas fa-chevron-left fa-2x"></i></button>
    <!-- Tombol slider kanan dengan icon -->
    <button class="slider-button" onclick="nextSlide()"><i class="fas fa-chevron-right fa-2x"></i></button>
</div>




<style>
    .slider {
        border-radius: 10px;
        margin-top: 5px;
        position: relative;
        max-width: 100%; /* Ubah dari 100% menjadi 1200px untuk membatasi lebar slider */
        height: 500px;
        overflow: hidden; /* Tambahkan properti ini untuk memastikan gambar tidak keluar dari area slider */
    }

    .slider img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: contain; /* Ubah dari 'cover' menjadi 'contain' untuk membuat gambar sesuai dengan container */
        transition: opacity 1s; /* Tambahkan efek transisi untuk menghaluskan perubahan gambar */
        opacity: 0; /* Sembunyikan semua gambar secara default */
    }

    /* Gaya tombol slider */
    .slider-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px 15px;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        z-index: 1;
    }

    /* Tombol slider kiri di sebelah kiri slider */
    .slider-button:first-child {
        left: 10px;
    }

    /* Tombol slider kanan di sebelah kanan slider */
    .slider-button:last-child {
        right: 10px;
    }
</style>




<script>
    var slider = document.getElementById("slider1");
    var images = slider.getElementsByTagName("img");
    var currentImage = 0;

    // Fungsi untuk menampilkan slide berikutnya
    function nextSlide() {
        images[currentImage].style.opacity = 0;
        currentImage = (currentImage + 1) % images.length;
        images[currentImage].style.opacity = 1;
    }

    // Fungsi untuk menampilkan slide sebelumnya
    function prevSlide() {
        images[currentImage].style.opacity = 0;
        currentImage = (currentImage - 1 + images.length) % images.length;
        images[currentImage].style.opacity = 1;
    }

    // Ganti setInterval menjadi function dengan nama yang bisa dihentikan nantinya
    var slideshowInterval = setInterval(nextSlide, 2000);

    // Jika Anda ingin menghentikan slideshow saat pengguna berinteraksi dengan gambar, Anda dapat menambahkan event listener pada elemen gambar
    for (var i = 0; i < images.length; i++) {
        images[i].addEventListener("click", function() {
            clearInterval(slideshowInterval);
        });
    }
</script>

