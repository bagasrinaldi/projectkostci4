<?= $this->extend('layout/page_layout');?>
<?= $this->section('title');?>

<?= $this->endSection();?>

<?= $this->section('content'); ?>

<section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="heading">
                     About Us
                    </h4>    
                    <div class="underline mb-2"></div>
                    <p>       
                        Kami menawarkan pengalaman hunian yang eksklusif dan nyaman melalui layanan penyewaan kamar kost kami. Setiap kamar dirancang dengan teliti untuk memenuhi kebutuhan hidup modern dan memberikan suasana yang nyaman serta santai bagi para penyewa. Dengan fasilitas lengkap seperti kamar mandi pribadi, akses Wi-Fi cepat, dan ruang bersama yang bersih dan terawat, kami menjamin tingkat kenyamanan dan keamanan yang tinggi bagi para penghuni. Selain itu, lokasi kost kami strategis, dekat dengan fasilitas umum dan transportasi, sehingga memudahkan akses ke berbagai tempat. Jadi, jangan ragu untuk bergabung dengan kami dan rasakan kenyamanannya sendiri!
                    </p>
                    <p>
                        Kami menawarkan pengalaman hunian yang eksklusif dan nyaman melalui layanan penyewaan kamar kost kami. Setiap kamar dirancang dengan teliti untuk memenuhi kebutuhan hidup modern dan memberikan suasana yang nyaman serta santai bagi para penyewa. Dengan fasilitas lengkap seperti kamar mandi pribadi, akses Wi-Fi cepat, dan ruang bersama yang bersih dan terawat, kami menjamin tingkat kenyamanan dan keamanan yang tinggi bagi para penghuni. Selain itu, lokasi kost kami strategis, dekat dengan fasilitas umum dan transportasi, sehingga memudahkan akses ke berbagai tempat. Jadi, jangan ragu untuk bergabung dengan kami dan rasakan kenyamanannya sendiri!
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('/assets/room_1.jpg');?>" alt="" width="200" height="200">
                 </div>
            </div>
        </div>
</section>

<?= $this->endSection(); ?>