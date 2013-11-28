CREATE TABLE mahasiswa (
	NIM CHAR(8) NOT NULL,
	nama VARCHAR(50),
	email VARCHAR(50),
	jenis_kelamin VARCHAR(10),
	PRIMARY KEY (NIM)
);

CREATE TABLE mata_kuliah (
	kode_kuliah CHAR(10) NOT NULL,
	nama_kuliah VARCHAR(20),
	deskripsi VARCAHR(500),
	PRIMARY KEY (kode_kuliah)
);

CREATE TABLE mengambil (
	NIM CHAR(8) NOT NULL,
	kode_kuliah CHAR(10) NOT NULL
);

ALTER TABLE mengambil ADD CONSTRAINT mahasiswa_mengambil FOREIGN KEY(NIM) REFERENCES mahasiswa(NIM);
ALTER TABLE mengambil ADD CONSTRAINT mata_kuliah_mengambil FOREIGN KEY(kode_kuliah) REFERENCES mata_kuliah(kode_kuliah);

INSERT INTO mahasiswa (NIM, nama, email, jenis_kelamin) VALUES
('18211001', 'Adit', 'adit@std.stei.itb.ac.id', 'Laki-laki'),('18211002', 'Mawar', 'mawar@std.stei.itb.ac.id', 'Perempuan'),
('18211003', 'Dinda', 'dinda@std.stei.itb.ac.id', 'Perempuan'),('18211004', 'Rio', 'rio@std.stei.itb.ac.id', 'Laki-laki'),
('18211005', 'Reni', 'reni@std.stei.itb.ac.id', 'Perempuan'),('18211006', 'Eka', 'eka@std.stei.itb.ac.id', 'Perempuan'),
('18211007', 'Gunawan', 'gunawan@std.stei.itb.ac.id', 'Laki-laki'),('18211008', 'Danny', 'danny@std.stei.itb.ac.id', 'Laki-laki'),
('18211009', 'Ardian', 'ardian@std.stei.itb.ac.id', 'Laki-laki'),('18211010', 'Fania', 'fania@std.stei.itb.ac.id', 'Perempuan'),
('18211011', 'Anthony', 'anthony@std.stei.itb.ac.id', 'Laki-laki'),('18211012', 'Hendy', 'hendy@std.stei.itb.ac.id', 'Laki-laki'),
('18211013', 'William', 'william@std.stei.itb.ac.id', 'Laki-laki'),('18211014', 'Olivia', 'olivia@std.stei.itb.ac.id', 'Perempuan'),
('18211015', 'Vivi', 'vivi@std.stei.itb.ac.id', 'Perempuan');

INSERT INTO mata_kuliah (kode_kuliah, nama_kuliah, deskripsi) VALUES
('II2110', 'Matematika STI', 'Understanding of Discrete Mathematic, Proportional Logic, Sets, Predicate Calculus, Relations, Discrete Structure, Numbers, Program/Algorithm'),
('II2111','Probabilitas dan Statistik','Konsep probabilitas, variabel random dan distribusinya, elemen geometrik kombinatorial, probabilitas kondisional, teorema Bayes, fungsi distribusi, variabel random bivirate, fungsi variabel random, estimasi, pengujian hipotesis, penerapan probabilitas statistik pada domain computing & electrical engineering'),
('IF2110','Algoritma & Struktur Data','Mata kuliah ini memberikan pemahaman atas konsep algoritma dan struktur dipakai di bidang informatika/ilmu komputer'),
('IF2140','Pemodelan Basis Data','Mata kuliah ini memberikan pengetahuan mengenai secara arsitektur sistem basis data, perancangan skema basis data relasional, pemanfaatan dan pengelolaan data'),
('IF2130','Organisasi & Arsitektur Komputer','Pengantar arsitektur computer, representasi level compile, linking dan optimasi program, hierarki memory, I/O dan interrupt'),
('II3130','Sistem Operasi','Konsep system operasi, manajemen proses, manajemen memory, manajemen file dan device I/O, keamanan system computer, system operasi untuk sistem terdistribusi'),
('II2221','Manajemen Proyek','Kuliah ini memberikan pengetahuan dan pemahaman mengenai manajemen, manajemen proyek, proses pada manajemen proyek perangkat lunak , serta beberapa area keilmuan di bidang manajemen proyek perangkat lunak'),
('IF3240','Sistem Informasi','Pada kuliah ini diberikan pengertian, pemahaman dan pengetahuan mengenai informasi dan meningkatkan keunggulan kompetitif organisasi'),
('II3150','Sistem Multimedia','Mata kuliah ini mengajarkan konsep dasar dari multimedia termasuk modalities-nya (teks, suara, gambar, animasi dan video), sensor dan kamera, video encoding, streaming video dan audio, multimedia container, interaksi pengguna, dan pemrograman multimedia'),
('IF4090','Kerja Praktek','Pelamaran ke perusahaan, mekanisme kerja praktek, teknik presentasi, etika kerja, penulisan laporan kerja praktek, seminar kerja praktek.'),
('IF4150','Rekayasa Perangkat Lunak Spesifik Domain','Matakuliah ini memberikan dasar pengetahuan tentang produk, teknologi, tools dan proses/metodologi mengembangkan perangkat lunak di mana domain memegang peranan penting yang harus diperhatikan'),
('IF4022','Ilmu dan Rekayasa Komputasi Lanjut','Mata kuliah ini menawarkan topik-topik lanjutan dalam bidang ilmu dan rekayasa komputasi untuk memperkaya wawasan mahasiswa yang meminati bidang sains komputer. Setiap tahun topik yang diberikan bisa berbeda-beda bergantung pada isu yang hangat dan menarik saat itu.'),
('IF4020','Kriptografi','Pengantar, serangan pada kriptografi, algoritma kriptografi klasik, kriptanalisis, stream cipher dan block cipher, sistem kriptografi kunci-publik, fungsi hash dan MAC, tanda tangan digital, protokol kriptografi, infrastruktur kunci publik, manajemen kunci, steganografi dan watermarking, kriptografi visual'),
('IF3250','Proyek Perangkat Lunak','Kuliah ini memberikan gambaran kompleksitas dan pengalaman mengenai pengembangan perangkat lunak skala besar. Mahasiswa memanfaatkan/ menggunakan berbagai platform, framework, dan tools yang biasa dipakai untuk proyek berskala besar'),
('IF3260','Grafika Komputer','Pembuatan image, framebuffer, primitif dari penggambaran objek, algoritma Bresenham, transformasi geometri, window-view, layering, clipping, object filling, optimasi anti-clipping, struktur data spatial, pemodelan hierarki, kurva Bezier & Spline');

INSERT INTO mengambil (NIM, kode_kuliah) VALUES
('18211001', 'II2110'),
('18211001', 'II2111'),
('18211002', 'II2110'),
('18211002', 'II2111'),
('18211002', 'IF2110'),
('18211003', 'II3130'),
('18211003', 'II2110'),
('18211004', 'IF2110'),
('18211004', 'IF2140'),
('18211005', 'II2110'),
('18211005', 'II3110'),
('18211006', 'IF3250'),
('18211006', 'IF3260'),
('18211007', 'IF3240'),
('18211007', 'IF4090'),
('18211008', 'II3130'),
('18211008', 'II3150'),
('18211009', 'II2221'),
('18211009', 'IF2130'),
('18211009', 'IF4150'),
('18211010', 'IF4022'),
('18211010', 'IF4020'),
('18211010', 'IF3250'),
('18211011', 'IF3260'),
('18211011', 'II2110'),
('18211012', 'IF3260'),
('18211012', 'IF4090'),
('18211013', 'II2221'),
('18211013', 'II3130'),
('18211014', 'II3150'),
('18211014', 'IF2130'),
('18211015', 'IF3240'),
('18211015', 'II2111');