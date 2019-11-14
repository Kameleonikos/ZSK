CREATE TABLE `users` (
  `id_user` int(20) PRIMARY KEY,
  `login` varchar(50) UNIQUE NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(70) UNIQUE NOT NULL,
  `date_of_join` timestamp DEFAULT (now()),
  `id_status` int(1) DEFAULT (inactive)
);

CREATE TABLE `status` (
  `id_status` int(1) PRIMARY KEY,
  `status` varchar(20) NOT NULL
);

CREATE TABLE `userpanel` (
  `id_userpanel` int(20) PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `birthday` date,
  `nation` varchar(30),
  `about` varchar(250)
);

CREATE TABLE `flashcard` (
  `id_flashcard` int(20) PRIMARY KEY,
  `id_set` int(10) UNIQUE,
  `id_word` int(20),
  `id_translate` int(20),
  `how_many_turns` int(10)
);

CREATE TABLE `words` (
  `id_word` int(20) PRIMARY KEY,
  `word` varchar(50)
);

CREATE TABLE `translateword` (
  `id_translate` int(20) PRIMARY KEY,
  `translateword` varchar(50)
);

CREATE TABLE `set` (
  `id_set` int(10) PRIMARY KEY,
  `created_by` int(20),
  `name_of_set` varchar(50),
  `id_difficulty` int(1)
);

CREATE TABLE `whos_set` (
  `id_set` int(10),
  `id_user` int(20)
);

CREATE TABLE `difficulty` (
  `id_difficulty` int(1) PRIMARY KEY,
  `difficulty` varchar(20)
);

ALTER TABLE `users` ADD FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

ALTER TABLE `whos_set` ADD FOREIGN KEY (`id_set`) REFERENCES `set` (`id_set`);

ALTER TABLE `whos_set` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

ALTER TABLE `flashcard` ADD FOREIGN KEY (`id_word`) REFERENCES `words` (`id_word`);

ALTER TABLE `flashcard` ADD FOREIGN KEY (`id_translate`) REFERENCES `translateword` (`id_translate`);

ALTER TABLE `set` ADD FOREIGN KEY (`id_difficulty`) REFERENCES `difficulty` (`id_difficulty`);

ALTER TABLE `userpanel` ADD FOREIGN KEY (`id_userpanel`) REFERENCES `users` (`id_user`);

ALTER TABLE `flashcard` ADD FOREIGN KEY (`id_set`) REFERENCES `set` (`id_set`);
