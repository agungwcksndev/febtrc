-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2019 pada 05.24
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracertalumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `nama`, `nomor_hp`, `jenis_kelamin`, `foto`, `active`) VALUES
('admin', 'e807f1fcf82d132f9bb018ca6738a19f', 'pmputri@gmail.com', 'Prajnadya Mahatva Putri', '08975771158', 'Perempuan', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `tahun_lulus` varchar(100) DEFAULT NULL,
  `tanggal_yudisium` date DEFAULT NULL,
  `judul_skripsi` varchar(100) DEFAULT NULL,
  `ipk` double(10,0) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `alamat_asal` varchar(100) DEFAULT NULL,
  `kode_pos_asal` varchar(100) DEFAULT NULL,
  `alamat_sekarang` varchar(100) DEFAULT NULL,
  `kode_pos_sekarang` varchar(100) DEFAULT NULL,
  `negara` int(11) DEFAULT NULL,
  `provinsi` int(11) DEFAULT NULL,
  `kota` int(11) DEFAULT NULL,
  `nomor_telepon` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `golongan_darah` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status_mhs` varchar(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`username`, `password`, `email`, `nim`, `nama`, `jenjang`, `id_jurusan`, `id_prodi`, `angkatan`, `tahun_lulus`, `tanggal_yudisium`, `judul_skripsi`, `ipk`, `kewarganegaraan`, `alamat_asal`, `kode_pos_asal`, `alamat_sekarang`, `kode_pos_sekarang`, `negara`, `provinsi`, `kota`, `nomor_telepon`, `nomor_hp`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `website`, `facebook`, `twitter`, `instagram`, `foto`, `status_mhs`, `active`) VALUES
('agungwcksn', 'e807f1fcf82d132f9bb018ca6738a19f', 'agungwcksn@student.ub.ac.id', '', 'Agung Wicaksono', 'S1', 6, 5, '1967', NULL, '1970-01-01', '', 0, NULL, '', '', '', '', NULL, NULL, NULL, '', '081232150974', 'Laki-laki', NULL, '', '1970-01-01', '', '', '', '', NULL, '', 1),
('awkarinid', 'e807f1fcf82d132f9bb018ca6738a19f', 'awkarin.id@gmail.com', '155150200111019', 'Kariin Novilda', 'S1', 6, 5, '2011', '2015', '2015-07-15', 'Membangun Instagram dengan fitur pencarian jodoh menggunakan metode AHP SAW', 4, 'Warga Indonesia', 'Jalan Ikan Gurame No. 20, Jatimulyo, Lowokwaru, Malang', '65141', 'Jalan Ikan Gurame No. 19, Jatimulyo, Lowokwaru, Malang', '65142', 101, 13, 427, '08975771158', '081232150974', 'Perempuan', 'O', 'Jakarta', '1996-08-15', 'www.anyageraldine.com', 'anyageraldinefb', 'anyageraldinetw', 'anyageraldineig', NULL, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(4, 'Ilmu Ekonomi'),
(5, 'Manajemen'),
(6, 'Akuntansi'),
(7, 'Non-Jurusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(210, 1, 'KABUPATEN SIMEULUE'),
(211, 1, 'KABUPATEN ACEH SINGKIL'),
(212, 1, 'KABUPATEN ACEH SELATAN'),
(213, 1, 'KABUPATEN ACEH TENGGARA'),
(214, 1, 'KABUPATEN ACEH TIMUR'),
(215, 1, 'KABUPATEN ACEH TENGAH'),
(216, 1, 'KABUPATEN ACEH BARAT'),
(217, 1, 'KABUPATEN ACEH BESAR'),
(218, 1, 'KABUPATEN PIDIE'),
(219, 1, 'KABUPATEN BIREUEN'),
(220, 1, 'KABUPATEN ACEH UTARA'),
(221, 1, 'KABUPATEN ACEH BARAT DAYA'),
(222, 1, 'KABUPATEN GAYO LUES'),
(223, 1, 'KABUPATEN ACEH TAMIANG'),
(224, 1, 'KABUPATEN NAGAN RAYA'),
(225, 1, 'KABUPATEN ACEH JAYA'),
(226, 1, 'KABUPATEN BENER MERIAH'),
(227, 1, 'KABUPATEN PIDIE JAYA'),
(228, 1, 'KOTA BANDA ACEH'),
(229, 1, 'KOTA SABANG'),
(230, 1, 'KOTA LANGSA'),
(231, 1, 'KOTA LHOKSEUMAWE'),
(232, 1, 'KOTA SUBULUSSALAM'),
(233, 2, 'KABUPATEN NIAS'),
(234, 2, 'KABUPATEN MANDAILING NATAL'),
(235, 2, 'KABUPATEN TAPANULI SELATAN'),
(236, 2, 'KABUPATEN TAPANULI TENGAH'),
(237, 2, 'KABUPATEN TAPANULI UTARA'),
(238, 2, 'KABUPATEN TOBA SAMOSIR'),
(239, 2, 'KABUPATEN LABUHAN BATU'),
(240, 2, 'KABUPATEN ASAHAN'),
(241, 2, 'KABUPATEN SIMALUNGUN'),
(242, 2, 'KABUPATEN DAIRI'),
(243, 2, 'KABUPATEN KARO'),
(244, 2, 'KABUPATEN DELI SERDANG'),
(245, 2, 'KABUPATEN LANGKAT'),
(246, 2, 'KABUPATEN NIAS SELATAN'),
(247, 2, 'KABUPATEN HUMBANG HASUNDUTAN'),
(248, 2, 'KABUPATEN PAKPAK BHARAT'),
(249, 2, 'KABUPATEN SAMOSIR'),
(250, 2, 'KABUPATEN SERDANG BEDAGAI'),
(251, 2, 'KABUPATEN BATU BARA'),
(252, 2, 'KABUPATEN PADANG LAWAS UTARA'),
(253, 2, 'KABUPATEN PADANG LAWAS'),
(254, 2, 'KABUPATEN LABUHAN BATU SELATAN'),
(255, 2, 'KABUPATEN LABUHAN BATU UTARA'),
(256, 2, 'KABUPATEN NIAS UTARA'),
(257, 2, 'KABUPATEN NIAS BARAT'),
(258, 2, 'KOTA SIBOLGA'),
(259, 2, 'KOTA TANJUNG BALAI'),
(260, 2, 'KOTA PEMATANG SIANTAR'),
(261, 2, 'KOTA TEBING TINGGI'),
(262, 2, 'KOTA MEDAN'),
(263, 2, 'KOTA BINJAI'),
(264, 2, 'KOTA PADANGSIDIMPUAN'),
(265, 2, 'KOTA GUNUNGSITOLI'),
(266, 3, 'KABUPATEN KEPULAUAN MENTAWAI'),
(267, 3, 'KABUPATEN PESISIR SELATAN'),
(268, 3, 'KABUPATEN SOLOK'),
(269, 3, 'KABUPATEN SIJUNJUNG'),
(270, 3, 'KABUPATEN TANAH DATAR'),
(271, 3, 'KABUPATEN PADANG PARIAMAN'),
(272, 3, 'KABUPATEN AGAM'),
(273, 3, 'KABUPATEN LIMA PULUH KOTA'),
(274, 3, 'KABUPATEN PASAMAN'),
(275, 3, 'KABUPATEN SOLOK SELATAN'),
(276, 3, 'KABUPATEN DHARMASRAYA'),
(277, 3, 'KABUPATEN PASAMAN BARAT'),
(278, 3, 'KOTA PADANG'),
(279, 3, 'KOTA SOLOK'),
(280, 3, 'KOTA SAWAH LUNTO'),
(281, 3, 'KOTA PADANG PANJANG'),
(282, 3, 'KOTA BUKITTINGGI'),
(283, 3, 'KOTA PAYAKUMBUH'),
(284, 3, 'KOTA PARIAMAN'),
(285, 4, 'KABUPATEN KUANTAN SINGINGI'),
(286, 4, 'KABUPATEN INDRAGIRI HULU'),
(287, 4, 'KABUPATEN INDRAGIRI HILIR'),
(288, 4, 'KABUPATEN PELALAWAN'),
(289, 4, 'KABUPATEN S I A K'),
(290, 4, 'KABUPATEN KAMPAR'),
(291, 4, 'KABUPATEN ROKAN HULU'),
(292, 4, 'KABUPATEN BENGKALIS'),
(293, 4, 'KABUPATEN ROKAN HILIR'),
(294, 4, 'KABUPATEN KEPULAUAN MERANTI'),
(295, 4, 'KOTA PEKANBARU'),
(296, 4, 'KOTA D U M A I'),
(297, 5, 'KABUPATEN KERINCI'),
(298, 5, 'KABUPATEN MERANGIN'),
(299, 5, 'KABUPATEN SAROLANGUN'),
(300, 5, 'KABUPATEN BATANG HARI'),
(301, 5, 'KABUPATEN MUARO JAMBI'),
(302, 5, 'KABUPATEN TANJUNG JABUNG TIMUR'),
(303, 5, 'KABUPATEN TANJUNG JABUNG BARAT'),
(304, 5, 'KABUPATEN TEBO'),
(305, 5, 'KABUPATEN BUNGO'),
(306, 5, 'KOTA JAMBI'),
(307, 5, 'KOTA SUNGAI PENUH'),
(308, 6, 'KABUPATEN OGAN KOMERING ULU'),
(309, 6, 'KABUPATEN OGAN KOMERING ILIR'),
(310, 6, 'KABUPATEN MUARA ENIM'),
(311, 6, 'KABUPATEN LAHAT'),
(312, 6, 'KABUPATEN MUSI RAWAS'),
(313, 6, 'KABUPATEN MUSI BANYUASIN'),
(314, 6, 'KABUPATEN BANYU ASIN'),
(315, 6, 'KABUPATEN OGAN KOMERING ULU SELATAN'),
(316, 6, 'KABUPATEN OGAN KOMERING ULU TIMUR'),
(317, 6, 'KABUPATEN OGAN ILIR'),
(318, 6, 'KABUPATEN EMPAT LAWANG'),
(319, 6, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
(320, 6, 'KABUPATEN MUSI RAWAS UTARA'),
(321, 6, 'KOTA PALEMBANG'),
(322, 6, 'KOTA PRABUMULIH'),
(323, 6, 'KOTA PAGAR ALAM'),
(324, 6, 'KOTA LUBUKLINGGAU'),
(325, 7, 'KABUPATEN BENGKULU SELATAN'),
(326, 7, 'KABUPATEN REJANG LEBONG'),
(327, 7, 'KABUPATEN BENGKULU UTARA'),
(328, 7, 'KABUPATEN KAUR'),
(329, 7, 'KABUPATEN SELUMA'),
(330, 7, 'KABUPATEN MUKOMUKO'),
(331, 7, 'KABUPATEN LEBONG'),
(332, 7, 'KABUPATEN KEPAHIANG'),
(333, 7, 'KABUPATEN BENGKULU TENGAH'),
(334, 7, 'KOTA BENGKULU'),
(335, 8, 'KABUPATEN LAMPUNG BARAT'),
(336, 8, 'KABUPATEN TANGGAMUS'),
(337, 8, 'KABUPATEN LAMPUNG SELATAN'),
(338, 8, 'KABUPATEN LAMPUNG TIMUR'),
(339, 8, 'KABUPATEN LAMPUNG TENGAH'),
(340, 8, 'KABUPATEN LAMPUNG UTARA'),
(341, 8, 'KABUPATEN WAY KANAN'),
(342, 8, 'KABUPATEN TULANGBAWANG'),
(343, 8, 'KABUPATEN PESAWARAN'),
(344, 8, 'KABUPATEN PRINGSEWU'),
(345, 8, 'KABUPATEN MESUJI'),
(346, 8, 'KABUPATEN TULANG BAWANG BARAT'),
(347, 8, 'KABUPATEN PESISIR BARAT'),
(348, 8, 'KOTA BANDAR LAMPUNG'),
(349, 8, 'KOTA METRO'),
(350, 9, 'KABUPATEN BANGKA'),
(351, 9, 'KABUPATEN BELITUNG'),
(352, 9, 'KABUPATEN BANGKA BARAT'),
(353, 9, 'KABUPATEN BANGKA TENGAH'),
(354, 9, 'KABUPATEN BANGKA SELATAN'),
(355, 9, 'KABUPATEN BELITUNG TIMUR'),
(356, 9, 'KOTA PANGKAL PINANG'),
(357, 10, 'KABUPATEN KARIMUN'),
(358, 10, 'KABUPATEN BINTAN'),
(359, 10, 'KABUPATEN NATUNA'),
(360, 10, 'KABUPATEN LINGGA'),
(361, 10, 'KABUPATEN KEPULAUAN ANAMBAS'),
(362, 10, 'KOTA B A T A M'),
(363, 10, 'KOTA TANJUNG PINANG'),
(364, 11, 'KABUPATEN KEPULAUAN SERIBU'),
(365, 11, 'KOTA JAKARTA SELATAN'),
(366, 11, 'KOTA JAKARTA TIMUR'),
(367, 11, 'KOTA JAKARTA PUSAT'),
(368, 11, 'KOTA JAKARTA BARAT'),
(369, 11, 'KOTA JAKARTA UTARA'),
(370, 12, 'KABUPATEN BOGOR'),
(371, 12, 'KABUPATEN SUKABUMI'),
(372, 12, 'KABUPATEN CIANJUR'),
(373, 12, 'KABUPATEN BANDUNG'),
(374, 12, 'KABUPATEN GARUT'),
(375, 12, 'KABUPATEN TASIKMALAYA'),
(376, 12, 'KABUPATEN CIAMIS'),
(377, 12, 'KABUPATEN KUNINGAN'),
(378, 12, 'KABUPATEN CIREBON'),
(379, 12, 'KABUPATEN MAJALENGKA'),
(380, 12, 'KABUPATEN SUMEDANG'),
(381, 12, 'KABUPATEN INDRAMAYU'),
(382, 12, 'KABUPATEN SUBANG'),
(383, 12, 'KABUPATEN PURWAKARTA'),
(384, 12, 'KABUPATEN KARAWANG'),
(385, 12, 'KABUPATEN BEKASI'),
(386, 12, 'KABUPATEN BANDUNG BARAT'),
(387, 12, 'KABUPATEN PANGANDARAN'),
(388, 12, 'KOTA BOGOR'),
(389, 12, 'KOTA SUKABUMI'),
(390, 12, 'KOTA BANDUNG'),
(391, 12, 'KOTA CIREBON'),
(392, 12, 'KOTA BEKASI'),
(393, 12, 'KOTA DEPOK'),
(394, 12, 'KOTA CIMAHI'),
(395, 12, 'KOTA TASIKMALAYA'),
(396, 12, 'KOTA BANJAR'),
(397, 13, 'KABUPATEN CILACAP'),
(398, 13, 'KABUPATEN BANYUMAS'),
(399, 13, 'KABUPATEN PURBALINGGA'),
(400, 13, 'KABUPATEN BANJARNEGARA'),
(401, 13, 'KABUPATEN KEBUMEN'),
(402, 13, 'KABUPATEN PURWOREJO'),
(403, 13, 'KABUPATEN WONOSOBO'),
(404, 13, 'KABUPATEN MAGELANG'),
(405, 13, 'KABUPATEN BOYOLALI'),
(406, 13, 'KABUPATEN KLATEN'),
(407, 13, 'KABUPATEN SUKOHARJO'),
(408, 13, 'KABUPATEN WONOGIRI'),
(409, 13, 'KABUPATEN KARANGANYAR'),
(410, 13, 'KABUPATEN SRAGEN'),
(411, 13, 'KABUPATEN GROBOGAN'),
(412, 13, 'KABUPATEN BLORA'),
(413, 13, 'KABUPATEN REMBANG'),
(414, 13, 'KABUPATEN PATI'),
(415, 13, 'KABUPATEN KUDUS'),
(416, 13, 'KABUPATEN JEPARA'),
(417, 13, 'KABUPATEN DEMAK'),
(418, 13, 'KABUPATEN SEMARANG'),
(419, 13, 'KABUPATEN TEMANGGUNG'),
(420, 13, 'KABUPATEN KENDAL'),
(421, 13, 'KABUPATEN BATANG'),
(422, 13, 'KABUPATEN PEKALONGAN'),
(423, 13, 'KABUPATEN PEMALANG'),
(424, 13, 'KABUPATEN TEGAL'),
(425, 13, 'KABUPATEN BREBES'),
(426, 13, 'KOTA MAGELANG'),
(427, 13, 'KOTA SURAKARTA'),
(428, 13, 'KOTA SALATIGA'),
(429, 13, 'KOTA SEMARANG'),
(430, 13, 'KOTA PEKALONGAN'),
(431, 13, 'KOTA TEGAL'),
(432, 14, 'KABUPATEN KULON PROGO'),
(433, 14, 'KABUPATEN BANTUL'),
(434, 14, 'KABUPATEN GUNUNG KIDUL'),
(435, 14, 'KABUPATEN SLEMAN'),
(436, 14, 'KOTA YOGYAKARTA'),
(437, 15, 'KABUPATEN PACITAN'),
(438, 15, 'KABUPATEN PONOROGO'),
(439, 15, 'KABUPATEN TRENGGALEK'),
(440, 15, 'KABUPATEN TULUNGAGUNG'),
(441, 15, 'KABUPATEN BLITAR'),
(442, 15, 'KABUPATEN KEDIRI'),
(443, 15, 'KABUPATEN MALANG'),
(444, 15, 'KABUPATEN LUMAJANG'),
(445, 15, 'KABUPATEN JEMBER'),
(446, 15, 'KABUPATEN BANYUWANGI'),
(447, 15, 'KABUPATEN BONDOWOSO'),
(448, 15, 'KABUPATEN SITUBONDO'),
(449, 15, 'KABUPATEN PROBOLINGGO'),
(450, 15, 'KABUPATEN PASURUAN'),
(451, 15, 'KABUPATEN SIDOARJO'),
(452, 15, 'KABUPATEN MOJOKERTO'),
(453, 15, 'KABUPATEN JOMBANG'),
(454, 15, 'KABUPATEN NGANJUK'),
(455, 15, 'KABUPATEN MADIUN'),
(456, 15, 'KABUPATEN MAGETAN'),
(457, 15, 'KABUPATEN NGAWI'),
(458, 15, 'KABUPATEN BOJONEGORO'),
(459, 15, 'KABUPATEN TUBAN'),
(460, 15, 'KABUPATEN LAMONGAN'),
(461, 15, 'KABUPATEN GRESIK'),
(462, 15, 'KABUPATEN BANGKALAN'),
(463, 15, 'KABUPATEN SAMPANG'),
(464, 15, 'KABUPATEN PAMEKASAN'),
(465, 15, 'KABUPATEN SUMENEP'),
(466, 15, 'KOTA KEDIRI'),
(467, 15, 'KOTA BLITAR'),
(468, 15, 'KOTA MALANG'),
(469, 15, 'KOTA PROBOLINGGO'),
(470, 15, 'KOTA PASURUAN'),
(471, 15, 'KOTA MOJOKERTO'),
(472, 15, 'KOTA MADIUN'),
(473, 15, 'KOTA SURABAYA'),
(474, 15, 'KOTA BATU'),
(475, 16, 'KABUPATEN PANDEGLANG'),
(476, 16, 'KABUPATEN LEBAK'),
(477, 16, 'KABUPATEN TANGERANG'),
(478, 16, 'KABUPATEN SERANG'),
(479, 16, 'KOTA TANGERANG'),
(480, 16, 'KOTA CILEGON'),
(481, 16, 'KOTA SERANG'),
(482, 16, 'KOTA TANGERANG SELATAN'),
(483, 17, 'KABUPATEN JEMBRANA'),
(484, 17, 'KABUPATEN TABANAN'),
(485, 17, 'KABUPATEN BADUNG'),
(486, 17, 'KABUPATEN GIANYAR'),
(487, 17, 'KABUPATEN KLUNGKUNG'),
(488, 17, 'KABUPATEN BANGLI'),
(489, 17, 'KABUPATEN KARANG ASEM'),
(490, 17, 'KABUPATEN BULELENG'),
(491, 17, 'KOTA DENPASAR'),
(492, 18, 'KABUPATEN LOMBOK BARAT'),
(493, 18, 'KABUPATEN LOMBOK TENGAH'),
(494, 18, 'KABUPATEN LOMBOK TIMUR'),
(495, 18, 'KABUPATEN SUMBAWA'),
(496, 18, 'KABUPATEN DOMPU'),
(497, 18, 'KABUPATEN BIMA'),
(498, 18, 'KABUPATEN SUMBAWA BARAT'),
(499, 18, 'KABUPATEN LOMBOK UTARA'),
(500, 18, 'KOTA MATARAM'),
(501, 18, 'KOTA BIMA'),
(502, 19, 'KABUPATEN SUMBA BARAT'),
(503, 19, 'KABUPATEN SUMBA TIMUR'),
(504, 19, 'KABUPATEN KUPANG'),
(505, 19, 'KABUPATEN TIMOR TENGAH SELATAN'),
(506, 19, 'KABUPATEN TIMOR TENGAH UTARA'),
(507, 19, 'KABUPATEN BELU'),
(508, 19, 'KABUPATEN ALOR'),
(509, 19, 'KABUPATEN LEMBATA'),
(510, 19, 'KABUPATEN FLORES TIMUR'),
(511, 19, 'KABUPATEN SIKKA'),
(512, 19, 'KABUPATEN ENDE'),
(513, 19, 'KABUPATEN NGADA'),
(514, 19, 'KABUPATEN MANGGARAI'),
(515, 19, 'KABUPATEN ROTE NDAO'),
(516, 19, 'KABUPATEN MANGGARAI BARAT'),
(517, 19, 'KABUPATEN SUMBA TENGAH'),
(518, 19, 'KABUPATEN SUMBA BARAT DAYA'),
(519, 19, 'KABUPATEN NAGEKEO'),
(520, 19, 'KABUPATEN MANGGARAI TIMUR'),
(521, 19, 'KABUPATEN SABU RAIJUA'),
(522, 19, 'KABUPATEN MALAKA'),
(523, 19, 'KOTA KUPANG'),
(524, 20, 'KABUPATEN SAMBAS'),
(525, 20, 'KABUPATEN BENGKAYANG'),
(526, 20, 'KABUPATEN LANDAK'),
(527, 20, 'KABUPATEN MEMPAWAH'),
(528, 20, 'KABUPATEN SANGGAU'),
(529, 20, 'KABUPATEN KETAPANG'),
(530, 20, 'KABUPATEN SINTANG'),
(531, 20, 'KABUPATEN KAPUAS HULU'),
(532, 20, 'KABUPATEN SEKADAU'),
(533, 20, 'KABUPATEN MELAWI'),
(534, 20, 'KABUPATEN KAYONG UTARA'),
(535, 20, 'KABUPATEN KUBU RAYA'),
(536, 20, 'KOTA PONTIANAK'),
(537, 20, 'KOTA SINGKAWANG'),
(538, 21, 'KABUPATEN KOTAWARINGIN BARAT'),
(539, 21, 'KABUPATEN KOTAWARINGIN TIMUR'),
(540, 21, 'KABUPATEN KAPUAS'),
(541, 21, 'KABUPATEN BARITO SELATAN'),
(542, 21, 'KABUPATEN BARITO UTARA'),
(543, 21, 'KABUPATEN SUKAMARA'),
(544, 21, 'KABUPATEN LAMANDAU'),
(545, 21, 'KABUPATEN SERUYAN'),
(546, 21, 'KABUPATEN KATINGAN'),
(547, 21, 'KABUPATEN PULANG PISAU'),
(548, 21, 'KABUPATEN GUNUNG MAS'),
(549, 21, 'KABUPATEN BARITO TIMUR'),
(550, 21, 'KABUPATEN MURUNG RAYA'),
(551, 21, 'KOTA PALANGKA RAYA'),
(552, 22, 'KABUPATEN TANAH LAUT'),
(553, 22, 'KABUPATEN KOTA BARU'),
(554, 22, 'KABUPATEN BANJAR'),
(555, 22, 'KABUPATEN BARITO KUALA'),
(556, 22, 'KABUPATEN TAPIN'),
(557, 22, 'KABUPATEN HULU SUNGAI SELATAN'),
(558, 22, 'KABUPATEN HULU SUNGAI TENGAH'),
(559, 22, 'KABUPATEN HULU SUNGAI UTARA'),
(560, 22, 'KABUPATEN TABALONG'),
(561, 22, 'KABUPATEN TANAH BUMBU'),
(562, 22, 'KABUPATEN BALANGAN'),
(563, 22, 'KOTA BANJARMASIN'),
(564, 22, 'KOTA BANJAR BARU'),
(565, 23, 'KABUPATEN PASER'),
(566, 23, 'KABUPATEN KUTAI BARAT'),
(567, 23, 'KABUPATEN KUTAI KARTANEGARA'),
(568, 23, 'KABUPATEN KUTAI TIMUR'),
(569, 23, 'KABUPATEN BERAU'),
(570, 23, 'KABUPATEN PENAJAM PASER UTARA'),
(571, 23, 'KABUPATEN MAHAKAM HULU'),
(572, 23, 'KOTA BALIKPAPAN'),
(573, 23, 'KOTA SAMARINDA'),
(574, 23, 'KOTA BONTANG'),
(575, 24, 'KABUPATEN MALINAU'),
(576, 24, 'KABUPATEN BULUNGAN'),
(577, 24, 'KABUPATEN TANA TIDUNG'),
(578, 24, 'KABUPATEN NUNUKAN'),
(579, 24, 'KOTA TARAKAN'),
(580, 25, 'KABUPATEN BOLAANG MONGONDOW'),
(581, 25, 'KABUPATEN MINAHASA'),
(582, 25, 'KABUPATEN KEPULAUAN SANGIHE'),
(583, 25, 'KABUPATEN KEPULAUAN TALAUD'),
(584, 25, 'KABUPATEN MINAHASA SELATAN'),
(585, 25, 'KABUPATEN MINAHASA UTARA'),
(586, 25, 'KABUPATEN BOLAANG MONGONDOW UTARA'),
(587, 25, 'KABUPATEN SIAU TAGULANDANG BIARO'),
(588, 25, 'KABUPATEN MINAHASA TENGGARA'),
(589, 25, 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
(590, 25, 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
(591, 25, 'KOTA MANADO'),
(592, 25, 'KOTA BITUNG'),
(593, 25, 'KOTA TOMOHON'),
(594, 25, 'KOTA KOTAMOBAGU'),
(595, 26, 'KABUPATEN BANGGAI KEPULAUAN'),
(596, 26, 'KABUPATEN BANGGAI'),
(597, 26, 'KABUPATEN MOROWALI'),
(598, 26, 'KABUPATEN POSO'),
(599, 26, 'KABUPATEN DONGGALA'),
(600, 26, 'KABUPATEN TOLI-TOLI'),
(601, 26, 'KABUPATEN BUOL'),
(602, 26, 'KABUPATEN PARIGI MOUTONG'),
(603, 26, 'KABUPATEN TOJO UNA-UNA'),
(604, 26, 'KABUPATEN SIGI'),
(605, 26, 'KABUPATEN BANGGAI LAUT'),
(606, 26, 'KABUPATEN MOROWALI UTARA'),
(607, 26, 'KOTA PALU'),
(608, 27, 'KABUPATEN KEPULAUAN SELAYAR'),
(609, 27, 'KABUPATEN BULUKUMBA'),
(610, 27, 'KABUPATEN BANTAENG'),
(611, 27, 'KABUPATEN JENEPONTO'),
(612, 27, 'KABUPATEN TAKALAR'),
(613, 27, 'KABUPATEN GOWA'),
(614, 27, 'KABUPATEN SINJAI'),
(615, 27, 'KABUPATEN MAROS'),
(616, 27, 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
(617, 27, 'KABUPATEN BARRU'),
(618, 27, 'KABUPATEN BONE'),
(619, 27, 'KABUPATEN SOPPENG'),
(620, 27, 'KABUPATEN WAJO'),
(621, 27, 'KABUPATEN SIDENRENG RAPPANG'),
(622, 27, 'KABUPATEN PINRANG'),
(623, 27, 'KABUPATEN ENREKANG'),
(624, 27, 'KABUPATEN LUWU'),
(625, 27, 'KABUPATEN TANA TORAJA'),
(626, 27, 'KABUPATEN LUWU UTARA'),
(627, 27, 'KABUPATEN LUWU TIMUR'),
(628, 27, 'KABUPATEN TORAJA UTARA'),
(629, 27, 'KOTA MAKASSAR'),
(630, 27, 'KOTA PAREPARE'),
(631, 27, 'KOTA PALOPO'),
(632, 28, 'KABUPATEN BUTON'),
(633, 28, 'KABUPATEN MUNA'),
(634, 28, 'KABUPATEN KONAWE'),
(635, 28, 'KABUPATEN KOLAKA'),
(636, 28, 'KABUPATEN KONAWE SELATAN'),
(637, 28, 'KABUPATEN BOMBANA'),
(638, 28, 'KABUPATEN WAKATOBI'),
(639, 28, 'KABUPATEN KOLAKA UTARA'),
(640, 28, 'KABUPATEN BUTON UTARA'),
(641, 28, 'KABUPATEN KONAWE UTARA'),
(642, 28, 'KABUPATEN KOLAKA TIMUR'),
(643, 28, 'KABUPATEN KONAWE KEPULAUAN'),
(644, 28, 'KABUPATEN MUNA BARAT'),
(645, 28, 'KABUPATEN BUTON TENGAH'),
(646, 28, 'KABUPATEN BUTON SELATAN'),
(647, 28, 'KOTA KENDARI'),
(648, 28, 'KOTA BAUBAU'),
(649, 29, 'KABUPATEN BOALEMO'),
(650, 29, 'KABUPATEN GORONTALO'),
(651, 29, 'KABUPATEN POHUWATO'),
(652, 29, 'KABUPATEN BONE BOLANGO'),
(653, 29, 'KABUPATEN GORONTALO UTARA'),
(654, 29, 'KOTA GORONTALO'),
(655, 30, 'KABUPATEN MAJENE'),
(656, 30, 'KABUPATEN POLEWALI MANDAR'),
(657, 30, 'KABUPATEN MAMASA'),
(658, 30, 'KABUPATEN MAMUJU'),
(659, 30, 'KABUPATEN MAMUJU UTARA'),
(660, 30, 'KABUPATEN MAMUJU TENGAH'),
(661, 31, 'KABUPATEN MALUKU TENGGARA BARAT'),
(662, 31, 'KABUPATEN MALUKU TENGGARA'),
(663, 31, 'KABUPATEN MALUKU TENGAH'),
(664, 31, 'KABUPATEN BURU'),
(665, 31, 'KABUPATEN KEPULAUAN ARU'),
(666, 31, 'KABUPATEN SERAM BAGIAN BARAT'),
(667, 31, 'KABUPATEN SERAM BAGIAN TIMUR'),
(668, 31, 'KABUPATEN MALUKU BARAT DAYA'),
(669, 31, 'KABUPATEN BURU SELATAN'),
(670, 31, 'KOTA AMBON'),
(671, 31, 'KOTA TUAL'),
(672, 32, 'KABUPATEN HALMAHERA BARAT'),
(673, 32, 'KABUPATEN HALMAHERA TENGAH'),
(674, 32, 'KABUPATEN KEPULAUAN SULA'),
(675, 32, 'KABUPATEN HALMAHERA SELATAN'),
(676, 32, 'KABUPATEN HALMAHERA UTARA'),
(677, 32, 'KABUPATEN HALMAHERA TIMUR'),
(678, 32, 'KABUPATEN PULAU MOROTAI'),
(679, 32, 'KABUPATEN PULAU TALIABU'),
(680, 32, 'KOTA TERNATE'),
(681, 32, 'KOTA TIDORE KEPULAUAN'),
(682, 33, 'KABUPATEN FAKFAK'),
(683, 33, 'KABUPATEN KAIMANA'),
(684, 33, 'KABUPATEN TELUK WONDAMA'),
(685, 33, 'KABUPATEN TELUK BINTUNI'),
(686, 33, 'KABUPATEN MANOKWARI'),
(687, 33, 'KABUPATEN SORONG SELATAN'),
(688, 33, 'KABUPATEN SORONG'),
(689, 33, 'KABUPATEN RAJA AMPAT'),
(690, 33, 'KABUPATEN TAMBRAUW'),
(691, 33, 'KABUPATEN MAYBRAT'),
(692, 33, 'KABUPATEN MANOKWARI SELATAN'),
(693, 33, 'KABUPATEN PEGUNUNGAN ARFAK'),
(694, 33, 'KOTA SORONG'),
(695, 34, 'KABUPATEN MERAUKE'),
(696, 34, 'KABUPATEN JAYAWIJAYA'),
(697, 34, 'KABUPATEN JAYAPURA'),
(698, 34, 'KABUPATEN NABIRE'),
(699, 34, 'KABUPATEN KEPULAUAN YAPEN'),
(700, 34, 'KABUPATEN BIAK NUMFOR'),
(701, 34, 'KABUPATEN PANIAI'),
(702, 34, 'KABUPATEN PUNCAK JAYA'),
(703, 34, 'KABUPATEN MIMIKA'),
(704, 34, 'KABUPATEN BOVEN DIGOEL'),
(705, 34, 'KABUPATEN MAPPI'),
(706, 34, 'KABUPATEN ASMAT'),
(707, 34, 'KABUPATEN YAHUKIMO'),
(708, 34, 'KABUPATEN PEGUNUNGAN BINTANG'),
(709, 34, 'KABUPATEN TOLIKARA'),
(710, 34, 'KABUPATEN SARMI'),
(711, 34, 'KABUPATEN KEEROM'),
(712, 34, 'KABUPATEN WAROPEN'),
(713, 34, 'KABUPATEN SUPIORI'),
(714, 34, 'KABUPATEN MAMBERAMO RAYA'),
(715, 34, 'KABUPATEN NDUGA'),
(716, 34, 'KABUPATEN LANNY JAYA'),
(717, 34, 'KABUPATEN MAMBERAMO TENGAH'),
(718, 34, 'KABUPATEN YALIMO'),
(719, 34, 'KABUPATEN PUNCAK'),
(720, 34, 'KABUPATEN DOGIYAI'),
(721, 34, 'KABUPATEN INTAN JAYA'),
(722, 34, 'KABUPATEN DEIYAI'),
(723, 34, 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongankerja`
--

CREATE TABLE `lowongankerja` (
  `id_lowongan` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `no_telp_perusahaan` varchar(12) NOT NULL,
  `email_perusahaan` varchar(30) DEFAULT NULL,
  `website_perusahaan` varchar(30) DEFAULT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact_person` varchar(12) NOT NULL,
  `lowongan_jabatan` varchar(20) NOT NULL,
  `syarat_pekerjaan` text NOT NULL,
  `pelamar_yang_dibutuhkan` varchar(20) DEFAULT NULL,
  `kisaran_gaji` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(11) NOT NULL,
  `nama_negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `negara`
--

INSERT INTO `negara` (`id_negara`, `nama_negara`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Aruba'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahamas'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belarus'),
(21, 'Belgium'),
(22, 'Belize'),
(23, 'Benin'),
(24, 'Bermuda'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia and Herzegovina'),
(28, 'Botswana'),
(29, 'Bouvet Island'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Cook Islands'),
(51, 'Costa Rica'),
(52, 'Croatia (Hrvatska)'),
(53, 'Cuba'),
(54, 'Cyprus'),
(55, 'Czech Republic'),
(56, 'Denmark'),
(57, 'Djibouti'),
(58, 'Dominica'),
(59, 'Dominican Republic'),
(60, 'East Timor'),
(61, 'Ecuador'),
(62, 'Egypt'),
(63, 'El Salvador'),
(64, 'Equatorial Guinea'),
(65, 'Eritrea'),
(66, 'Estonia'),
(67, 'Ethiopia'),
(68, 'Falkland Islands (Malvinas)'),
(69, 'Faroe Islands'),
(70, 'Fiji'),
(71, 'Finland'),
(72, 'France'),
(73, 'France, Metropolitan'),
(74, 'French Guiana'),
(75, 'French Polynesia'),
(76, 'French Southern Territories'),
(77, 'Gabon'),
(78, 'Gambia'),
(79, 'Georgia'),
(80, 'Germany'),
(81, 'Ghana'),
(82, 'Gibraltar'),
(83, 'Guernsey'),
(84, 'Greece'),
(85, 'Greenland'),
(86, 'Grenada'),
(87, 'Guadeloupe'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guinea'),
(91, 'Guinea-Bissau'),
(92, 'Guyana'),
(93, 'Haiti'),
(94, 'Heard and Mc Donald Islands'),
(95, 'Honduras'),
(96, 'Hong Kong'),
(97, 'Hungary'),
(98, 'Iceland'),
(99, 'India'),
(100, 'Isle of Man'),
(101, 'Indonesia'),
(102, 'Iran (Islamic Republic of)'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Israel'),
(106, 'Italy'),
(107, 'Ivory Coast'),
(108, 'Jersey'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jordan'),
(112, 'Kazakhstan'),
(113, 'Kenya'),
(114, 'Kiribati'),
(115, 'Korea, Democratic People\'s Republic of'),
(116, 'Korea, Republic of'),
(117, 'Kosovo'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People\'s Democratic Republic'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libyan Arab Jamahiriya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macau'),
(130, 'Macedonia'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia, Federated States of'),
(144, 'Moldova, Republic of'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'Netherlands Antilles'),
(157, 'New Caledonia'),
(158, 'New Zealand'),
(159, 'Nicaragua'),
(160, 'Niger'),
(161, 'Nigeria'),
(162, 'Niue'),
(163, 'Norfolk Island'),
(164, 'Northern Mariana Islands'),
(165, 'Norway'),
(166, 'Oman'),
(167, 'Pakistan'),
(168, 'Palau'),
(169, 'Palestine'),
(170, 'Panama'),
(171, 'Papua New Guinea'),
(172, 'Paraguay'),
(173, 'Peru'),
(174, 'Philippines'),
(175, 'Pitcairn'),
(176, 'Poland'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saint Kitts and Nevis'),
(185, 'Saint Lucia'),
(186, 'Saint Vincent and the Grenadines'),
(187, 'Samoa'),
(188, 'San Marino'),
(189, 'Sao Tome and Principe'),
(190, 'Saudi Arabia'),
(191, 'Senegal'),
(192, 'Serbia'),
(193, 'Seychelles'),
(194, 'Sierra Leone'),
(195, 'Singapore'),
(196, 'Slovakia'),
(197, 'Slovenia'),
(198, 'Solomon Islands'),
(199, 'Somalia'),
(200, 'South Africa'),
(201, 'South Georgia South Sandwich Islands'),
(202, 'South Sudan'),
(203, 'Spain'),
(204, 'Sri Lanka'),
(205, 'St. Helena'),
(206, 'St. Pierre and Miquelon'),
(207, 'Sudan'),
(208, 'Suriname'),
(209, 'Svalbard and Jan Mayen Islands'),
(210, 'Swaziland'),
(211, 'Sweden'),
(212, 'Switzerland'),
(213, 'Syrian Arab Republic'),
(214, 'Taiwan'),
(215, 'Tajikistan'),
(216, 'Tanzania, United Republic of'),
(217, 'Thailand'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad and Tobago'),
(222, 'Tunisia'),
(223, 'Turkey'),
(224, 'Turkmenistan'),
(225, 'Turks and Caicos Islands'),
(226, 'Tuvalu'),
(227, 'Uganda'),
(228, 'Ukraine'),
(229, 'United Arab Emirates'),
(230, 'United Kingdom'),
(231, 'United States'),
(232, 'United States minor outlying islands'),
(233, 'Uruguay'),
(234, 'Uzbekistan'),
(235, 'Vanuatu'),
(236, 'Vatican City State'),
(237, 'Venezuela'),
(238, 'Vietnam'),
(239, 'Virgin Islands (British)'),
(240, 'Virgin Islands (U.S.)'),
(241, 'Wallis and Futuna Islands'),
(242, 'Western Sahara'),
(243, 'Yemen'),
(244, 'Zaire'),
(245, 'Zambia'),
(246, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_jurusan`, `nama_prodi`) VALUES
(5, 6, 'Economics Finance and Banking'),
(6, 4, 'Perpajakan'),
(7, 7, 'Ekonomi, Keuangan dan Perbankan'),
(8, 4, 'Ekonomi Islam'),
(9, 6, 'Economics'),
(10, 6, 'Prodi A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `id_negara`, `nama_provinsi`) VALUES
(1, 101, 'ACEH'),
(2, 101, 'SUMATERA UTARA'),
(3, 101, 'SUMATERA BARAT'),
(4, 101, 'RIAU'),
(5, 101, 'JAMBI'),
(6, 101, 'SUMATERA SELATAN'),
(7, 101, 'BENGKULU'),
(8, 101, 'LAMPUNG'),
(9, 101, 'KEPULAUAN BANGKA BELITUNG'),
(10, 101, 'KEPULAUAN RIAU'),
(11, 101, 'DKI JAKARTA'),
(12, 101, 'JAWA BARAT'),
(13, 101, 'JAWA TENGAH'),
(14, 101, 'DI YOGYAKARTA'),
(15, 101, 'JAWA TIMUR'),
(16, 101, 'BANTEN'),
(17, 101, 'BALI'),
(18, 101, 'NUSA TENGGARA BARAT'),
(19, 101, 'NUSA TENGGARA TIMUR'),
(20, 101, 'KALIMANTAN BARAT'),
(21, 101, 'KALIMANTAN TENGAH'),
(22, 101, 'KALIMANTAN SELATAN'),
(23, 101, 'KALIMANTAN TIMUR'),
(24, 101, 'KALIMANTAN UTARA'),
(25, 101, 'SULAWESI UTARA'),
(26, 101, 'SULAWESI TENGAH'),
(27, 101, 'SULAWESI SELATAN'),
(28, 101, 'SULAWESI TENGGARA'),
(29, 101, 'GORONTALO'),
(30, 101, 'SULAWESI BARAT'),
(31, 101, 'MALUKU'),
(32, 101, 'MALUKU UTARA'),
(33, 101, 'PAPUA BARAT'),
(34, 101, 'PAPUA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id_riwayat_pekerjaan` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `mulai_kerja` date NOT NULL,
  `berhenti_kerja` date NOT NULL,
  `alamat_kerja` varchar(100) DEFAULT NULL,
  `pendapatan_per_bulan` int(100) DEFAULT NULL,
  `golongan_pns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `negara` (`negara`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `get_prodi` (`id_prodi`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `get_provinsi` (`id_provinsi`);

--
-- Indeks untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `user` (`username`);

--
-- Indeks untuk tabel `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `get_jur` (`id_jurusan`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD KEY `get_negara` (`id_negara`);

--
-- Indeks untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id_riwayat_pekerjaan`),
  ADD KEY `get_alumni` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;

--
-- AUTO_INCREMENT untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  MODIFY `id_lowongan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `negara`
--
ALTER TABLE `negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `get_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`),
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `kota` FOREIGN KEY (`kota`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `negara` FOREIGN KEY (`negara`) REFERENCES `negara` (`id_negara`),
  ADD CONSTRAINT `provinsi` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `get_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Ketidakleluasaan untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD CONSTRAINT `user` FOREIGN KEY (`username`) REFERENCES `alumni` (`username`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `get_jur` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `get_negara` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id_negara`);

--
-- Ketidakleluasaan untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD CONSTRAINT `get_alumni` FOREIGN KEY (`username`) REFERENCES `alumni` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
