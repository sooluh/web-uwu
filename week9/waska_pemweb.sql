SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
    AUTOCOMMIT = 0;

START TRANSACTION;

CREATE TABLE `tb_mahasiswa` (
    `id` int(11) NOT NULL,
    `nim` varchar(10) NOT NULL,
    `nama` varchar(20) NOT NULL,
    `tgl_lahir` date NOT NULL,
    `no_telpon` varchar(15) NOT NULL,
    `status` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

INSERT INTO
    `tb_mahasiswa` (
        `id`,
        `nim`,
        `nama`,
        `tgl_lahir`,
        `no_telpon`,
        `status`
    )
VALUES
    (
        1,
        '220151001',
        'Rendy',
        '2003-04-11',
        '0822334455',
        1
    ),
    (
        2,
        '220151002',
        'Anna',
        '2003-02-20',
        '0833445566',
        1
    );

CREATE TABLE `tb_user` (
    `username` varchar(10) NOT NULL,
    `pass` varchar(8) NOT NULL,
    `role` varchar(15) NOT NULL,
    `status` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

INSERT INTO
    `tb_user` (`username`, `pass`, `role`, `status`)
VALUES
    ('admin1', 'admin123', 'admin', 1),
    ('user1', 'user123', 'supervisor', 1);

ALTER TABLE
    `tb_mahasiswa`
ADD
    PRIMARY KEY (`id`);

ALTER TABLE
    `tb_user`
ADD
    PRIMARY KEY (`username`);

ALTER TABLE
    `tb_mahasiswa`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

COMMIT;