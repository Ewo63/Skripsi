<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <?php echo $level; ?></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-th"></i> <span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="index.php?view=identitas"><i class="fa fa-circle-o"></i> Data Identitas Sekolah</a></li>
                <li><a href="index.php?view=kurikulum"><i class="fa fa-circle-o"></i> Data Kurikulum</a></li>
                <li><a href="index.php?view=tahunakademik"><i class="fa fa-circle-o"></i> Data Tahun Akademik</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Data Pengguna</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                <li><a href="index.php?view=guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                <li><a href="index.php?view=wakilkepala"><i class="fa fa-circle-o"></i> Data Kepala Sekolah</a></li>
                <li><a href="index.php?view=admin"><i class="fa fa-circle-o"></i> Data Administrator</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-th-large"></i> <span>Data Absensi</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=absenguru"><i class="fa fa-circle-o"></i> Absensi Guru</a></li>
                <li><a href="index.php?view=absensiswa"><i class="fa fa-circle-o"></i> Absensi Siswa</a></li>
                <li><a href="index.php?view=rekapabsensiswa"><i class="fa fa-circle-o"></i> Rekap Absensi Siswa</a></li>
              </ul>
            </li>

            <li><a href="index.php?view=journalkbm"><i class="fa fa-tags"></i><span>Journal KBM</span></a></li>
            <li><a href="index.php?view=forum"><i class="fa fa-th-list"></i> <span>Forum Diskusi</span></a></li>
            <li><a href="index.php?view=soal"><i class="fa fa-users"></i><span>Quiz/Ujian Online</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-calendar"></i> <span>Laporan Nilai Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=raportuts"><i class="fa fa-circle-o"></i> Data Nilai UTS</a></li>
                <li><a href="index.php?view=raportcetakuts"><i class="fa fa-circle-o"></i> Cetak Raport UTS</a></li>

                <li><a href="index.php?view=capaianhasilbelajar"><i class="fa fa-circle-o"></i> Data Capaian Belajar</a></li>
                <li><a href="index.php?view=extrakulikuler"><i class="fa fa-circle-o"></i> Data Extrakulikuler</a></li>
                <li><a href="index.php?view=prestasi"><i class="fa fa-circle-o"></i> Data Prestasi</a></li>
                <li><a href="index.php?view=raport"><i class="fa fa-circle-o"></i> Data Nilai Raport</a></li>
                <li><a href="index.php?view=raportcetak"><i class="fa fa-circle-o"></i> Cetak Raport</a></li>
                <!--<li><a href="index.php?view=bukuinduk"><i class="fa fa-circle-o"></i> Cetak Buku Induk</a></li>-->
              </ul>
            </li>
        
        </section>