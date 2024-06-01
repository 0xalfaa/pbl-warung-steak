<div class="container-fluid">
<h3><i class="fas fa-edit"></i>EDIT DATA MENU</h3>

<?php foreach($menu as $m) : ?>

    <form method="post" action="<?php echo base_url().'admin/data_menu/update' ?>">

        <div class="form-group">
            <input type="hidden" name="ID_MENU" class="form-control" value="<?php echo $m->ID_MENU?>">
            <label>Nama Menu</label>
            <input type="text" name="NAMA_MENU" class="form-control" value="<?php echo $m->NAMA_MENU?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="HARGA" class="form-control" value="<?php echo $m->HARGA?>">
        </div>
        <div class="form-group">
            <label>STOK</label>
            <input type="text" name="STOK" class="form-control" value="<?php echo $m->STOK?>">
        </div>
    
        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form> 
<?php endforeach?>

</div>