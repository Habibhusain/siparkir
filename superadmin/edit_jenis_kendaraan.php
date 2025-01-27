<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
$vehicle = get_kendaraan_by_id();
update_kendaraan();
?>
<link href="../assets/CSS/edit_jenis_kendaraan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Edit <span>Jenis kendaraan</span></h2>
        <a href="../logout.php" class="logout-btn"  onclick="return confirm('yakin ingin keluar??')"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="container">
        <h1>Edit Jenis Kendaraan</h1>
        <form action="edit_jenis_kendaraan.php" method="POST" class="pure-form pure-form-stacked">
            <input type="hidden" name="id" value="<?php echo $vehicle['id']; ?>">
            <div class="input-group">
                <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-car-side"></i>
                    <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="pure-input-1" value="<?php echo $vehicle['jenis_kendaraan']; ?>" required>
                </div>
            </div>
            <div class="input-group">
                <label for="biaya_jam">Biaya/Jam:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    <input type="number" id="biaya_jam" name="biaya_jam" class="pure-input-1" value="<?php echo $vehicle['biaya_jam']; ?>" required>
                </div>
            </div>
            <button type="submit" class="btn-submit">Edit</button>
            <button type="button" class="btn-cancel" onclick="window.location.href='jenis_kendaraan.php'">Batal</button>
        </form>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>