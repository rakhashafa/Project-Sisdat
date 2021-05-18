
-- Database: rental_mobil
--
-- --------------------------------------------------------

--
-- Table structure for table tblpemilik
--

CREATE TABLE tblpemilik (
  no_ktp_pemilik int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nama_pemilik varchar(120) DEFAULT NULL,
  alamat_pemilik varchar(100) DEFAULT NULL,
  no_telp_pemilik varchar(20) DEFAULT NULL
);

-- --------------------------------------------------------
/*CREATE TABLE tbllogin (
  username varchar(100) NOT NULL PRIMARY KEY,
  password char(100) DEFAULT NULL,
  no_ktp_pelanggan int(11)
);*/
--
-- Table structure for table tbltransaksi
--

CREATE TABLE tbltransaksi (
  no_transaksi int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tgl_pinjam date DEFAULT NULL,
  tgl_kembali date DEFAULT NULL,
  harga_sewa varchar(100) DEFAULT NULL,
  no_ktp_pelanggan int(11),
  kode_mobil int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table tblusers
--

CREATE TABLE tblpelanggan (
  no_ktp_pelanggan int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nama_pelanggan varchar(120) DEFAULT NULL,
  no_telp_pelanggan varchar(20) DEFAULT NULL,
  alamat_pelanggan varchar(255) DEFAULT NULL,
  username varchar(100),
  password varchar(100)
); 

-- --------------------------------------------------------

--
-- Table structure for table tbmobil
--

CREATE TABLE tblmobil (
  kode_mobil int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tipe_mobil varchar(100) DEFAULT NULL,
  bahan_bakar varchar(100) DEFAULT NULL,
  transmisi varchar(100) DEFAULT NULL,
  kursi_penumpang int(11) DEFAULT NULL,
  no_ktp_pemilik int(11)
); 

--
-- Indexes for dumped tables
--

-- login
/*ALTER TABLE tbllogin
ADD foreign KEY (no_ktp_pelanggan)
references tblpelanggan(no_ktp_pelanggan);
*/

-- mobil
ALTER TABLE tblmobil
ADD foreign KEY (no_ktp_pemilik)
references tblpemilik(no_ktp_pemilik);

-- transaksi
ALTER TABLE tbltransaksi
ADD foreign KEY (no_ktp_pelanggan)
references tblpelanggan(no_ktp_pelanggan);

ALTER TABLE tbltransaksi
ADD foreign KEY (kode_mobil)
references tblmobil(kode_mobil);

