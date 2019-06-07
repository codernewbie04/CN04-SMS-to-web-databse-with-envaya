SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbl_sms` (
  `id` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `joindate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `tbl_sms` (`id`, `asal`, `isi`, `joindate`) VALUES
(1, 'TELKOMSEL', 'Kode verifikasi Anda 9580. Kode verifikasi bersifat RAHASIA dan aktif dalam 3 menit. Abaikan jika Anda tidak meminta kode ini. Info detail hub CS: 188', '2019-06-08 01:58:52');


ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
