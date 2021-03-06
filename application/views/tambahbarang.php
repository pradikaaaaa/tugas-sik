<?php $this->load->view('header');
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open_multipart('Barang/tambahBarang');?>
				<?php echo validation_errors(); ?>

                <div class="form-group">
					<label for="" >ID Barang :  </label>
					<input type="text" name="id_barang" class="form-control" id="id_barang" value="<?=$id;?>" readonly>
				</div>
                <div class="form-group">
                    <label for="">Nama Barang :</label>
                    <input class="form-control" type="text" name="nama_barang" id="">
                </div>
                <div class="form-group">
                    <label>Bahan Baku Barang</label>
                        <select multiple class="form-control" name="bahan[]">
                            <?php foreach ($bahan as $bb) { ?>
                            <option value="<?=$bb->id_bahan;?>">
                                <?=$bb->nama_bahan;?>
                            </option>
                            <?php } ?>
                        </select>
                </div>


                <div class="form-group">
                    <label for="">Satuan :</label>
                    <input class="form-control" type="text" name="satuan" id="">
                </div>
                <div class="form-group">
                    <label for="">Harga :</label>
                    <input class="form-control" type="text" name="harga" id="">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer');
?>