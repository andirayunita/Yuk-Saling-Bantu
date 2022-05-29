<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text text-center">
          <h3>Donasi</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- bradcam_area_end  -->

<div data-scroll-index='1' class="make_donation_area section_padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span>Buat Donasi</span></h3>
        </div>
      </div>
    </div>
    <form action="<?= base_url('home/send_donation') ?>" method="POST">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <!-- <form action="#" class="donation_form"> -->
            <div class="row align-items-center">
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <!-- <input type="text" class="form-control" placeholder="40,200" aria-describedby="basic-addon1"> -->
                      <select name="nama_program" class="form-control">
                        <option value="">Pilih Program</option>
                        <option value="Bantu Nenek Dominika bertahan hidup">Bantu Nenek Dominika bertahan hidup</option>
                        <option value="Bantu Warga Kulon Progo Mengungsi dari Banjir Bandang">Bantu Warga Kulon Progo Mengungsi dari Banjir Bandang</option>
                        <option value="RT di Jakarta Terendam Banjir">RT di Jakarta Terendam Banjir</option>
                        <option value="Bantu Korban Longsor">Bantu Korban Longsor</option>
                      </select>
                    </div>
                  </div>
                </div>
                <?= form_error('nama_program', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Donatur" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <?= form_error('nama_donatur', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <?= form_error('email', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <input type="text" name="pesan" class="form-control" placeholder="Pesan" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <?= form_error('pesan', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <input type="text" name="nominal" class="form-control" placeholder="Nominal" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <?= form_error('nominal', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>
              <div class="col-md-12 mb-3">
                <div class="single_amount">
                  <div class="input_field">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">✓</span>
                      </div>
                      <!-- <input type="text" class="form-control" placeholder="40,200" aria-describedby="basic-addon1"> -->
                      <select name="metode_pembayaran" class="form-control">
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="BRI - 1243567335">BRI - 1243567335</option>
                        <option value="MANDIRI - 3256234555">MANDIRI - 3256234555</option>
                        <option value="BCA - 47890044566">BCA - 47890044566</option>
                        <option value="BNI - 55028532399">BNI - 55028532399</option>
                      </select>
                    </div>
                  </div>
                </div>
                <?= form_error('metode_pembayaran', '<div class="text-small text-danger mt-2">','</div>') ?>
              </div>

            </div>
          <!-- </form> -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="donate_now_btn text-center">
            <!-- <a href="#" class="boxed-btn4">Donasi Sekarang</a> -->
            <?php if(empty($this->session->userdata('id_user'))) : ?>
              <a href="#" class="boxed-btn4" onclick="if (confirm('Silahkan login terlebih dahulu!')) window.location.href='<?= base_url('auth/login') ?>';">Donasi Sekarang</a>
              <?php else : ?>
                <button type="submit" class="boxed-btn4">Donasi Sekarang</button>
              <?php endif; ?>
            </div>
          </div>

        </div>

      </form>


    </div>
  </div>