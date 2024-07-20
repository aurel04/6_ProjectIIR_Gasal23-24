-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2024 pada 19.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_iir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `number_citations` int(11) NOT NULL,
  `authors` varchar(300) NOT NULL,
  `abstract` longtext NOT NULL,
  `similarity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `title`, `number_citations`, `authors`, `abstract`, `similarity`) VALUES
(1, 'The game definition game: A review', 235, 'J Stenros ', 'In this article, over 60 definitions of games since the 1930s are reviewed in order to pinpoint what those definitions agree on and, more importantly, what they disagree on. This article is conceived of as a tool game scholars can use to better position themselves in regard to the concept of &#8220;game&#8221; by working out their answers to the 10 questions regarding game definition presented in here.', 5),
(2, 'Introduction to game analysis', 410, 'C Fernández', 'This accessible textbook gives students the tools they need to analyze games using strategies borrowed from textual analysis. As the field of game studies grows, videogame writing is evolving from the mere evaluation of gameplay, graphics, sound, and replayablity, to more reflective writing that manages to convey the complexity of a game and the way it is played in a cultural context. Clara Fernández-Vara&#8217;s concise primer provides readers with instruction on the basic building blocks of game analysis&#8212;examination of context, content and reception, and formal qualities&#8212;as well as the vocabulary necessary for talking about videogames&#39; distinguishing characteristics. Examples are drawn from a range of games, both digital and non-digital&#8212;from Portal and World of Warcraft to Monopoly&#8212;and the book provides a variety of exercises and sample analyses, as well as a comprehensive ludography and glossary. In this second edition of the popular textbook, Fernández-Vara brings the book firmly up-to-date, pulling in fresh examples from ground-breaking new works in this dynamic field. Introduction to Game Analysis remains a unique practical tool for students who want to become more fluent writers and critics not only of videogames, but also of digital media overall.', 3),
(3, 'From game-story to cyberdrama', 395, 'J Murray ', 'Interactive drama has been discussed for a number of years as a new AI-based interactive experience (Laurel 1986; Bates 1992). While there has been substantial technical progress in building believable agents (Bates, Loyall, and Reilly 1992; Blumberg 1996, Hayes-Roth, van Gent, and Huber 1996), and some technical progress in interactive plot (Weyhrauch 1997), no work has yet been completed that combines plot and character into a full-fledged dramatic experience. The game industry has been producing plot-based interactive experiences (adventure games) since the beginning of the industry, but only a few of them (such as The Last Express) begin to approach the status of interactive drama. Part of the difficulty in achieving interactive drama is due to the lack of a theoretical framework guiding the exploration of the technological and design issues surrounding interactive drama. This paper proposes a theory of interactive drama based on Aristotle&#8217;s dramatic theory, but modified to address the interactivity added by player agency. This theory both provides design guidance for interactive dramatic experiences that attempt to maximize player agency (answering the question &#8220;What should I build?&#8221;) and technical direction for the AI work necessary to build the system (answering the question &#8220;How should I build it?&#8221;). In addition to clarifying notions of interactive drama, the model developed in this essay also provides general framework for analyzing player agency in any interactive experience (eg, interactive games). This neo-Aristotelian theory integrates Murray&#8217;s (1998) proposed aesthetic categories for interactive stories and Aristotle&#8217;s &#8230;', 5),
(4, 'Why game (culture) studies now?', 300, 'CA Steinkuehler ', 'Games are an extremely valuable context for the study of cognition as inter(action) in the social and material world. They provide a representational trace of both individual and collective activity and how it changes over time, enabling the researcher to unpack the bidirectional influence of self and society. As both designed object and emergent culture, g/Games (a) consist of overlapping well-defined problems enveloped in ill-defined problems that render their solutions meaningful; (b) function as naturally occurring, selfsustaining, indigenous versions of online learning communities; and (c) simultaneously function as both culture and cultural object&#8212;as microcosms for studying the emergence, maintenance, transformation, and even collapse of online affinity groups and as talkaboutable objects that function as tokens in public conversations of broader societal issues within contemporary offline society. In this article &#8230;', 4),
(5, 'Game theory', 16012, 'D Fudenberg, J Tirole ', 'Games are an extremely valuable context for the study of cognition as inter(action) in the social and material world. They provide a representational trace of both individual and collective activity and how it changes over time, enabling the researcher to unpack the bidirectional influence of self and society. As both designed object and emergent culture, g/Games (a) consist of overlapping well-defined problems enveloped in ill-defined problems that render their solutions meaningful; (b) function as naturally occurring, selfsustaining, indigenous versions of online learning communities; and (c) simultaneously function as both culture and cultural object&#8212;as microcosms for studying the emergence, maintenance, transformation, and even collapse of online affinity groups and as talkaboutable objects that function as tokens in public conversations of broader societal issues within contemporary offline society. In this article &#8230;', 3),
(6, 'To game or not to game?', 171, 'CG Von Wangenheim, F Shull ', 'One challenge in software engineering education is to give students sufficient hands-on experience in actually building software. This is necessary so that students can understand which practices and techniques are useful in various situations. Some researchers have advocated alternative teaching methods to help in this regard. If successful, such methods could give students some experience with different approaches&#39; effects in a shorter, more constrained time period. We examine one such approach, game-based learning, here.', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
