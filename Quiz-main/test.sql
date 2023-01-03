-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2022 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`account_id`, `name`, `email`, `password`, `role`) VALUES
(2, 'vuong', 'vuong@gmail.com', 'vuong', 'admin'),
(3, 'vuong nguyen', 'ntlv@gmail.com', 'vuong', 'user'),
(4, 'vuong', 'vvv@gmail.com', 'vuong', 'admin'),
(7, 'king', 'king@gmail.com', 'king', 'user'),
(8, 'nguyễn văn phát', 'nvp@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_exam`
--

CREATE TABLE `category_exam` (
  `id_categoryexam` int(11) NOT NULL,
  `name_categoryexam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category_exam`
--

INSERT INTO `category_exam` (`id_categoryexam`, `name_categoryexam`) VALUES
(1, 'Toeic'),
(2, 'Vstep');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_lesson`
--

CREATE TABLE `category_lesson` (
  `id_categorylesson` int(11) NOT NULL,
  `name_categorylesson` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category_lesson`
--

INSERT INTO `category_lesson` (`id_categorylesson`, `name_categorylesson`) VALUES
(1, 'TỪ VỰNG'),
(2, 'NGỮ PHÁP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_question`
--

CREATE TABLE `category_question` (
  `id_categoryquestion` int(11) NOT NULL,
  `name_categoryquestion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category_question`
--

INSERT INTO `category_question` (`id_categoryquestion`, `name_categoryquestion`, `description`) VALUES
(1, 'Part 1', 'Mô Tả Hình Ảnh'),
(2, 'Part 2', 'Hỏi - Đáp'),
(3, 'Part 3', 'Đoạn Hội Thoại'),
(4, 'Part 4', 'Bài Nói Chuyện Ngắn'),
(5, 'Part 5', 'Câu Không Hoàn Chỉnh'),
(6, 'Part 6', 'Hoàn Thành Đoạn Văn'),
(7, 'Part 7', 'Đọc Hiểu'),
(8, 'DESCRIBE A PICTURE', 'MÔ TẢ TRANH'),
(9, 'ANSWER QUESTIONS', 'TRẢ LỜI CÂU HỎI'),
(10, 'WRITE A SENTENCE', 'CÂU DỰA VÀO TRANH'),
(11, 'WRITE A LETTER', 'VIẾT THƯ'),
(12, 'WRITE AN OPINION', 'LUẬN VĂN TRÌNH BÀY QUAN ĐIỂM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailcategory_lesson`
--

CREATE TABLE `detailcategory_lesson` (
  `id_detailcategory` int(11) NOT NULL,
  `name_detailcategory` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_categorylesson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `detailcategory_lesson`
--

INSERT INTO `detailcategory_lesson` (`id_detailcategory`, `name_detailcategory`, `description`, `logo`, `id_categorylesson`) VALUES
(1, 'Shopping', '1. BARGAIN 2. BEAR 3. BEHAVE 4. CHECK OUT 5. COMFORT 6. EXPAND 7. EXPLORE 8. ITEM 9. MANDATORY 10. MERCHANDISE 11. STRICT 12. TREND', 'https://tienganhmoingay.com/static/Vocabulary/images/topic_images/shopping.png', 1),
(2, 'Hotels', '1. ADVANCE 2. CHAIN 3. CHECK IN 4. CONFIRM 5. EXPECT 6. HOUSEKEEPER 7. NOTIFY 8. PRECLUDE 9. QUOTE 10. RATE 11. RESERVE', 'https://tienganhmoingay.com/static/Vocabulary/images/topic_images/hotels.png', 1),
(19, 'Tenes', 'Simple present, Present Continuous, Present Perfect, Present Perfect Continuous, Past Simple, Past Continuous, Past Perfect, Past Perfect Continuous, Simple Future, Future Continuous, Future Perfect, Future Perfect Continuous', 'https://play-lh.googleusercontent.com/Wrvz0PUGtK7DRdCrMDtFkoI20Ms8--VXs0YKl-c_l-PJO2-O0hzER3b4q9C-f5DLIA=w240-h480-rw', 2),
(20, 'Gerund and infinitive', 'Danh động từ (gerund) và động từ nguyên mẫu (infinitives) là hai dạng động từ thường gặp nhất trong các bài thi Tiếng Anh và cả trong giao tiếp', 'https://wiseenglish.edu.vn/wp-content/uploads/2021/07/gerund-va-infinitives-2.jpg', 2),
(21, 'Modal verbs', 'Tổng hợp tất cả về động từ khiếm khuyết trong tiếng Anh: Khái niệm, phân loại và cách sử dụng', 'https://www.voca.vn/assets/img/news/modal-verb-dong-tu-khiem-khuyet-dong-tu-tinh-thai-1510711183.jpg', 2),
(22, 'Accounting', '1. ACCOUNTING\r\n2. ACCUMULATE\r\n3. ASSET\r\n4. AUDIT\r\n5. BUDGET\r\n6. BUILD UP\r\n7. CLIENT\r\n8. DEBT\r\n9. OUTSTANDING\r\n10. PROFIT\r\n11. RECONCILE\r\n12. TURNOVER', 'https://tienganhmoingay.com/static/Vocabulary/images/topic_images/accounting.png', 1),
(23, 'Airlines', '1. DEAL WITH SOMEBODY/SOMETHING\r\n2. DESTINATION\r\n3. DISTINGUISH\r\n4. ECONOMIZE\r\n5. EQUIVALENT\r\n6. EXCURSION\r\n7. EXPENSE\r\n8. EXTEND\r\n9. PROSPECTIVE\r\n10. SITUATION\r\n11. SUBSTANCE', 'https://images-na.ssl-images-amazon.com/images/I/31zijhWjvcL._SX342_SY445_QL70_ML2_.jpg', 1),
(24, 'Types of Words', 'Nouns, Pronouns, Verbs, Adjective, Adverb, Prepositions, Conjunctions, Interjections, Articles', 'https://easyteaching.net/wp-content/uploads/2019/03/partsspeechposters.png', 2),
(25, 'Comparison', '1. Equal Comparison\r\n2. Comparative\r\n3. Superlative', 'https://content.tinytap.it/E52FB82A-CA3F-4876-956F-2E54B6632645/coverImage813x610.png', 2),
(26, 'Passive Voice', 'Passive: active and passive\r\nWe use the terms active voice and passive voice to talk about ways of organising the content of a clause', 'https://www.englishreservoir.com/wp-content/uploads/2021/10/3-1-1024x576.png', 2),
(27, 'Subject – Verb Agreent', 'Subject-verb agreement refers to the grammatical concept that the subject of a sentence must align with the main verb of that same sentence. In particular, singular subjects take singular verbs and plural subjects take plural verbs.', 'https://vkstudy.com/wp-content/uploads/2020/07/Subject-Verb-Agreement-Rules-in-English-Grammer.jpg', 2),
(28, 'If Conditional sentences', 'A conditional sentence is based on the word \'if\'. There are always two parts to a conditional sentence – one part beginning with \'if\' to describe a possible situation, and the second part which describes the consequence', 'https://www.englishclub.com/images/grammar/conditional-sentences.png', 2),
(29, 'Clause', 'A clause is the basic unit of grammar. Typically a main clause is made up of a subject (s) (a noun phrase) and a verb phrase (v). Sometimes the verb phrase is followed by other elements, e.g objects (o), complements (c), adjuncts (ad)', 'https://www.mbarendezvous.com/images/top-stories-img/bannerimage_1558501364.jpg', 2),
(30, 'Present Participle and Past Participle', 'There are two types of participles: present participles and past participles. Present participles end in –ing, while past participles end in –ed, -en, -d, -t, or –n. A present participle is the –ing form of a verb when it is used as an adjective', 'https://static.anhnguathena.vn/anhngu//img.media/2019/10/T%C3%A0i%20li%E1%BB%87u/Marketing-Proposal-e1535120280765.png', 2),
(31, 'Subjunctive', 'The English subjunctive is a special, relatively rare verb form that expresses something desired or imagined.', 'https://tienganhtflat.com/uploads/blog/cau-gia-dinh-trong-tieng-anh-gia-29ce37d7c8.jpg', 2),
(32, 'The Question', 'In English, there are four types of questions: general or yes/no questions, special questions using wh-words, choice questions, and disjunctive or tag/tail questions.', 'https://mocomi.com/wp-content/uploads/2017/08/Types-of-questions-in-English-%E2%80%93-Mocomi_Featured.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_exam`
--

CREATE TABLE `detail_exam` (
  `id_detailExam` int(11) NOT NULL,
  `id_exam` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `detail_exam`
--

INSERT INTO `detail_exam` (`id_detailExam`, `id_exam`, `id_question`) VALUES
(1, 2, 31),
(2, 2, 33),
(8, 2, 36),
(9, 2, 37),
(10, 2, 38),
(11, 2, 39),
(12, 2, 41),
(13, 2, 44),
(27, 2, 42),
(28, 2, 61),
(29, 2, 62),
(30, 2, 63),
(31, 2, 64),
(32, 2, 71),
(33, 2, 72),
(34, 2, 73),
(35, 2, 75),
(36, 2, 74),
(37, 2, 76),
(38, 2, 77),
(39, 2, 78),
(51, 2, 43),
(52, 2, 45),
(53, 2, 46),
(54, 2, 47),
(55, 2, 48),
(56, 2, 49),
(58, 2, 51),
(59, 2, 55),
(60, 2, 56),
(63, 2, 57),
(64, 2, 58),
(65, 2, 59),
(77, 2, 90),
(78, 2, 91),
(79, 2, 92),
(80, 2, 104),
(81, 2, 105),
(82, 2, 106),
(83, 2, 107),
(84, 2, 108),
(86, 2, 50),
(87, 2, 79),
(88, 2, 40),
(89, 2, 93),
(90, 2, 94),
(91, 2, 95),
(92, 2, 96),
(93, 2, 111),
(94, 2, 112),
(95, 2, 113),
(97, 2, 114),
(98, 2, 115),
(99, 2, 116),
(100, 2, 117),
(101, 2, 118),
(102, 2, 119),
(103, 2, 120),
(104, 2, 121),
(105, 2, 122),
(106, 13, 123),
(107, 13, 124),
(108, 13, 125),
(109, 13, 126),
(110, 13, 127),
(111, 13, 128),
(112, 13, 129),
(113, 13, 130),
(114, 13, 131),
(115, 13, 132),
(116, 13, 43),
(117, 13, 44),
(119, 13, 45),
(120, 13, 46),
(121, 13, 47),
(122, 13, 48),
(123, 13, 41),
(124, 13, 42),
(125, 13, 61),
(126, 13, 62),
(127, 13, 49),
(128, 13, 50),
(129, 13, 51),
(130, 13, 63),
(131, 13, 64),
(132, 13, 71),
(133, 13, 72),
(134, 13, 73),
(135, 13, 74),
(136, 13, 75);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_lesson`
--

CREATE TABLE `detail_lesson` (
  `id_detaillesson` int(11) NOT NULL,
  `name_detaillesson` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_detailcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `detail_lesson`
--

INSERT INTO `detail_lesson` (`id_detaillesson`, `name_detaillesson`, `logo`, `id_detailcategory`) VALUES
(1, 'Simple present', 'https://www.voca.vn/assets/img/news/simple-present-hien-tai-don-1510708984.jpg', 19),
(2, 'Present continuous tense', 'https://www.voca.vn/assets/img/news/present-continuous-hien-tai-tiep-dien-1510709086.jpg', 19),
(3, 'Present perfect tense', 'https://www.voca.vn/assets/img/news/present-perfect-hien-tai-hoan-thanh-1510709187.jpg', 19),
(4, 'Gerund and infinitive', 'https://www.voca.vn/assets/img/news/to-infinitive-1510711801.jpg', 20),
(5, 'ACCOUNTING', 'https://kimnhungtoeic.com/wp-content/uploads/2021/10/1-1.jpg', 22),
(6, 'BUILD UP', 'http://tienganhmoingay.com/static/Vocabulary/images/word_images/buildup.jpg', 22),
(7, 'BARGAIN', 'https://www.wikihow.com/images/thumb/f/ff/Bargain-Step-1.jpg/v4-460px-Bargain-Step-1.jpg.webp', 1),
(8, 'ADVANCE', 'https://www.studytienganh.vn/upload/2021/06/103542.png', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_shorttest`
--

CREATE TABLE `detail_shorttest` (
  `id_detailTest` int(11) NOT NULL,
  `id_shortTest` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `detail_shorttest`
--

INSERT INTO `detail_shorttest` (`id_detailTest`, `id_shortTest`, `id_question`) VALUES
(1, 1, 41),
(2, 1, 42),
(3, 1, 61),
(4, 1, 62),
(5, 2, 63),
(6, 2, 64),
(7, 2, 71),
(8, 2, 72),
(9, 3, 33),
(10, 3, 90),
(11, 3, 91),
(12, 3, 92),
(13, 4, 93),
(14, 4, 94),
(15, 4, 95),
(16, 4, 96),
(17, 5, 97),
(18, 5, 98),
(19, 6, 99),
(20, 6, 100),
(25, 7, 101),
(26, 7, 102),
(27, 8, 103),
(28, 9, 31),
(29, 9, 36),
(30, 9, 37),
(31, 9, 38),
(32, 9, 39),
(33, 10, 40),
(34, 10, 39),
(35, 11, 43),
(36, 11, 44),
(37, 11, 45),
(38, 12, 46),
(39, 12, 47),
(40, 12, 48),
(41, 13, 49),
(42, 13, 50),
(43, 13, 50),
(44, 14, 55),
(45, 14, 56),
(46, 14, 57),
(47, 15, 58),
(48, 15, 59),
(49, 16, 104),
(50, 16, 105),
(51, 16, 106),
(52, 16, 107),
(53, 16, 108),
(54, 17, 109),
(55, 18, 110),
(58, 9, 40),
(59, 20, 133),
(60, 21, 134);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam`
--

CREATE TABLE `exam` (
  `id_exam` int(11) NOT NULL,
  `name_exam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_exam` int(11) NOT NULL,
  `time_exam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_categoryexam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `exam`
--

INSERT INTO `exam` (`id_exam`, `name_exam`, `number_exam`, `time_exam`, `id_categoryexam`) VALUES
(2, 'Đề Toeic 1', 30, '120', 1),
(13, 'Đề Vstep 1', 30, '120', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `historyexam`
--

CREATE TABLE `historyexam` (
  `id_historyexam` int(11) NOT NULL,
  `mark` float NOT NULL,
  `mark2` float NOT NULL,
  `number` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account_id` int(11) NOT NULL,
  `id_exam` int(11) NOT NULL,
  `resultTime` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timeExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `historyexam`
--

INSERT INTO `historyexam` (`id_historyexam`, `mark`, `mark2`, `number`, `comment`, `account_id`, `id_exam`, `resultTime`, `timeExam`) VALUES
(51, 6.33, 0, 19, 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)', 3, 2, '23:41 07-06-2022', 2),
(55, 5.33, 0, 16, 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)', 3, 2, '16:42 10-06-2022', 2),
(57, 2.66667, 3.33333, 18, 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)', 3, 2, '08:12 11-06-2022', 2),
(58, 0.666667, 0, 2, 'Mất gốc tiếng anh. Bạn cần học lại từ đầu', 3, 2, '20:22 23-06-2022', 1),
(59, 0.333333, 0.666667, 3, 'Trình độ cơ bản. Khả năng giao tiếp tiếng Anh kém.', 3, 2, '20:26 23-06-2022', 1),
(60, 0.666667, 0.333333, 3, 'Trình độ cơ bản. Khả năng giao tiếp tiếng Anh kém.', 3, 2, '10:34 24-06-2022', 1),
(61, 0, 0.333333, 1, 'Mất gốc tiếng anh. Bạn cần học lại từ đầu', 3, 2, '10:44 24-06-2022', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(11) NOT NULL,
  `name_lesson` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_lesson` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_detaillesson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `name_lesson`, `content_lesson`, `id_detaillesson`) VALUES
(1, 'Thì Hiện Tại Đơn Trong Tiếng Anh', '<h2>Th&igrave; hiện tại đơn (Simple present) l&agrave; một th&igrave; trong tiếng Anh hiện đại. Hiện tại đơn d&ugrave;ng để diễn tả một h&agrave;nh động chung chung, tổng qu&aacute;t lặp đi lặp lại nhiều lần hoặc một sự thật hiển nhi&ecirc;n hoặc một h&agrave;nh động diễn ra trong thời gian hiện tại.</h2>\r\n<p>I. ĐỊNH NGHĨA VỀ HIỆN TẠI ĐƠN</p>\r\n<p>Th&igrave; hiện tại đơn (Simple present) l&agrave; một th&igrave; trong tiếng Anh hiện đại. Hiện tại đơn d&ugrave;ng để diễn tả một h&agrave;nh động chung chung, tổng qu&aacute;t lặp đi lặp lại nhiều lần hoặc một sự thật hiển nhi&ecirc;n hoặc một h&agrave;nh động diễn ra trong thời gian hiện tại.</p>\r\n<p>II. CẤU TR&Uacute;C VỀ TH&Igrave; HIỆN TẠI ĐƠN</p>\r\n<p>1. Cấu Tr&uacute;c Th&igrave; Hiện Tại Đơn Với Độ** Từ &quot;TO BE&quot;</p>\r\n<p>Đối với cấu tr&uacute;c của c&aacute;c TH&Igrave;, ch&uacute;ng ta chỉ cần quan t&acirc;m đến chủ ngữ v&agrave; độ** từ ch&iacute;nh, c&ograve;n c&aacute;c th&agrave;nh phần kh&aacute;c như t&acirc;n ngữ, trạng từ, &hellip; th&igrave; t&ugrave;y từng c&acirc;u m&agrave; c&oacute; cấu tr&uacute;c kh&aacute;c nhau.</p>\r\n<p>Ở đ&acirc;y: &ldquo;to be&rdquo; ở hiện tại c&oacute; 3 dạng: am/ is/ are</p>\r\n<p>A. Khẳ** định:</p>\r\n<p>- Cấu tr&uacute;c: &nbsp; &nbsp; &nbsp;</p>\r\n<p>S + am / ** / are</p>\r\n<p>&nbsp;- ***** đ&oacute;: &nbsp;</p>\r\n<p>S (subject): Chủ ngữ</p>\r\n<p>&nbsp;- Lưu &yacute;:</p>\r\n<p>&nbsp;Khi S = I + am</p>\r\n<p>&nbsp;Khi S = He/ She/ It + is</p>\r\n<p>&nbsp;Khi S = We, You, They + are</p>\r\n<p>- Eg:</p>\r\n<p>&nbsp;I am a doctor. (T&ocirc;i l&agrave; b&aacute;c sĩ.)</p>\r\n<p>&nbsp;She is very beautiful. (C&ocirc; ấy rất xinh đẹp.)</p>\r\n<p>&nbsp;We are friends. (Ch&uacute;ng t&ocirc;i l&agrave; bạn b&egrave;.)</p>\r\n<p>&nbsp;=&gt; Ta thấy với chủ ngữ kh&aacute;c nhau động từ &ldquo;to be&rdquo; chia kh&aacute;c nhau.&nbsp;</p>\r\n<p>B. Phủ định:</p>\r\n<p>- Cấu tr&uacute;c: &nbsp; &nbsp; &nbsp;</p>\r\n<p>S + am/ is/ are + not</p>\r\n<p>- Lưu &yacute;:</p>\r\n<p>Am not: kh&ocirc;ng c&oacute; dạ** viết tắt</p>\r\n<p>Is not = isn&rsquo;t</p>\r\n<p>Are *** = aren&rsquo;t</p>\r\n<p>Eg:</p>\r\n<p>I am *** a good student. (T&ocirc;i kh&ocirc;ng phải l&agrave; học sinh giỏi.)</p>\r\n<p>He isn&rsquo;t my bother. (Anh ấy kh&ocirc;ng phải l&agrave; anh **** của t&ocirc;i.)</p>\r\n<p>They aren&rsquo;t Korean. (Họ kh&ocirc;ng phải l&agrave; người người H&agrave;n Quốc.)</p>\r\n<p>C. C&acirc;u hỏi:</p>\r\n<p>Am/ Is/ Are + &nbsp;S?</p>\r\n<p>- Trả lời: &nbsp; &nbsp; &nbsp;</p>\r\n<p>Yes, &nbsp;I + am. &nbsp; &nbsp;Yes, he/ she/ it + is. &nbsp; &nbsp;Yes, we/ you/ they + are.</p>\r\n<p>No, I + am not. &nbsp; &nbsp;No, he/ she/ ** + isn&rsquo;t. &nbsp; &nbsp;No, we/ you/ they + aren&rsquo;t.</p>\r\n<p>- Eg:</p>\r\n<p>Are you a student? - Yes, I am/ No, I am not.</p>\r\n<p>Am I a bad person? - Yes, you are./ No, *** aren&rsquo;t.</p>\r\n<p>Is he 19 years old? - Yes, he is./ No, he isn&rsquo;t.</p>\r\n<p>Kiểm tra tr&igrave;nh độ tiếng Anh</p>\r\n<p>VOCA EPT: Kiểm *** v&agrave; đ&aacute;nh gi&aacute; tr&igrave;nh độ tiếng Anh</p>\r\n<p>2. Cấu Tr&uacute;c Th&igrave; Hiện Tại Đơn Với Động Từ THƯỜNG</p>\r\n<p>A. Khẳ** định:</p>\r\n<p>- Cấu Tr&uacute;c:</p>\r\n<p><br></p>\r\n<p>S + V(s/es)</p>\r\n<p><br></p>\r\n<p>- Trong đ&oacute;: &nbsp; &nbsp;&nbsp;</p>\r\n<p><br></p>\r\n<p>&nbsp; S (subject): Chủ ngữ&nbsp;</p>\r\n<p>&nbsp; V (verb): Động từ&nbsp;</p>\r\n<p>- Lưu &yacute;:</p>\r\n<p>S = I, We, You, They, danh từ số nhiều th&igrave; ĐỘNG TỪ ở dạng NGUY&Ecirc;N MẪU&nbsp;</p>\r\n<p>S = He, She, It, danh từ số &iacute;t th&igrave; ĐỘ** TỪ th&ecirc;m &ldquo;S&rdquo; hoặc ES&rdquo;&nbsp;</p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>**** ** to work by bus every day. (Họ đi l&agrave;m bằng xe bu&yacute;t h&agrave;ng ng&agrave;y.)&nbsp;</p>\r\n<p>Ở v&iacute; dụ n&agrave;y, chủ ngữ l&agrave; &ldquo;They&rdquo; n&ecirc;n động từ ch&iacute;nh &ldquo;go&rdquo; ta để ở dạng NGUY&Ecirc;N MẪU kh&ocirc;ng chia.&nbsp;</p>\r\n<p><br></p>\r\n<p>He **** to **** by bus ***** day. (Anh ấy đi l&agrave;m bằng xe bu&yacute;t h&agrave;ng ng&agrave;y.)&nbsp;</p>\r\n<p>=&gt; Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;He&rdquo; n&ecirc;n độ** từ ch&iacute;nh &ldquo;go&rdquo; phải th&ecirc;m &ldquo;es&rdquo;.&nbsp;</p>\r\n<p><br></p>\r\n<p>&nbsp;(Ta sẽ t&igrave;m hiểu về quy tắc th&ecirc;m &ldquo;S&rdquo; hoặc &ldquo;ES&rdquo; sau động từ ở phần sau.)&nbsp;</p>\r\n<p><br></p>\r\n<p>B. Phủ định:</p>\r\n<p><br></p>\r\n<p>- Cấu Tr&uacute;c</p>\r\n<p><br></p>\r\n<p>S + don&rsquo;t/ doesn&rsquo;t &nbsp;+ V(nguy&ecirc;n mẫu)</p>\r\n<p><br></p>\r\n<p>- Ta c&oacute;:&nbsp;</p>\r\n<p><br></p>\r\n<p>&nbsp;don&rsquo;t = do not</p>\r\n<p>&nbsp;doesn&rsquo;t = **** not</p>\r\n<p>- Lưu &yacute;:</p>\r\n<p><br></p>\r\n<p>S = I, We, You, They, danh từ số nhiều &nbsp;- Ta mượn trợ động từ &ldquo;do&rdquo; + not</p>\r\n<p>S = He, She, It, danh từ số &iacute;t - Ta mượn trợ động từ &ldquo;does&rdquo; + not</p>\r\n<p>Động từ (V) **** *** ở dạng NGUY&Ecirc;N MẪU kh&ocirc;ng chia.</p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>We don&rsquo;t go to ****** on Sunday. (Ch&uacute;ng t&ocirc;i kh&ocirc;ng đến trường v&agrave;o ng&agrave;y Chủ Nhật.)</p>\r\n<p>Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;We&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;do&rdquo; + not (don&rsquo;t), v&agrave; động từ &ldquo;go&rdquo; theo sau ở dạng NGUY&Ecirc;N MẪU.</p>\r\n<p><br></p>\r\n<p>*** doesn&rsquo;t visit his grandparents regularly. (C&ocirc; ấy kh&ocirc;ng đến thăm &ocirc;** b&agrave; thường xuy&ecirc;n)</p>\r\n<p>=&gt; Tại c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;She&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;does&rdquo; + not (doesn&rsquo;t), v&agrave; động từ &ldquo;visit&rdquo; theo sau ở dạng NGUY&Ecirc;N MẪU.</p>\r\n<p><br></p>\r\n<p>C. C&acirc;u hỏi:</p>\r\n<p><br></p>\r\n<p>- Cấu Tr&uacute;c</p>\r\n<p><br></p>\r\n<p>Do/ Does &nbsp; + &nbsp; S &nbsp; + V(nguy&ecirc;n mẫu)?</p>\r\n<p><br></p>\r\n<p>- Trả lời: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n<p><br></p>\r\n<p>Yes, I/we/you/they + do.&nbsp; &nbsp;&nbsp;Yes, he/she/it + does.</p>\r\n<p>No, I/ we/you/they + don&apos;t&nbsp; &nbsp;&nbsp;No, he/ she/ it + doesn&rsquo;t.</p>\r\n<p><br></p>\r\n<p>- Lưu &yacute;:&nbsp;</p>\r\n<p><br></p>\r\n<p>S = I, We, You, They, danh từ số nhiều &nbsp;- ** mượn trợ độ** từ &ldquo;Do&rdquo; đứng trước chủ ngữ.</p>\r\n<p>S = He, She, It, danh từ số &iacute;t - Ta mượn trợ độ** từ &ldquo;Does&rdquo; đứng trước chủ ngữ.</p>\r\n<p>Độ** từ ch&iacute;nh trong c&acirc;u ở dạng NGUY&Ecirc;N MẪU.</p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>Do you stay with your family? (Bạn c&oacute; ở c&ugrave;ng với gia đ&igrave;nh kh&ocirc;ng?)</p>\r\n<p>Yes, I do./ No, I don&rsquo;t. (C&oacute;, m&igrave;nh ở c&ugrave;ng với gia đ&igrave;nh./ Kh&ocirc;ng, m&igrave;nh kh&ocirc;** ở c&ugrave;ng.)</p>\r\n<p>=&gt; Ở v&iacute; dụ n&agrave;y, chủ ngữ l&agrave; &ldquo;you&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;Do&rdquo; đứng trước chủ ngữ, động từ ch&iacute;nh &ldquo;stay&rdquo; ở dạng nguy&ecirc;n mẫu.</p>\r\n<p><br></p>\r\n<p>Does your sister like reading books? (Chị của bạn c&oacute; th&iacute;ch đọc s&aacute;ch kh&ocirc;ng?)</p>\r\n<p>Yes, she does./ No, she doesn&rsquo;t. (C&oacute;, chị ấy th&iacute;** đọc s&aacute;ch./ Kh&ocirc;ng, chị ấy kh&ocirc;ng th&iacute;ch.)</p>\r\n<p>=&gt; Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;your sister&rdquo; (tương ứng với ng&ocirc;i &ldquo;she&rdquo;) n&ecirc;n ta mượn trợ động từ &ldquo;Does&rdquo; đứng trước chủ ngữ, động từ ch&iacute;nh &ldquo;like&rdquo; ở dạ** nguy&ecirc;n thể.</p>\r\n<p><br></p>\r\n<p>*** C&Aacute;CH SỬ DỤNG TH&Igrave; HIỆN TẠI ĐƠN</p>\r\n<p><br></p>\r\n<p>1. D&ugrave;ng để diễn tả một h&agrave;** động, sự việc diễn ra thường xuy&ecirc;n, lặp đi lặp lại *** một th&oacute;i quen.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>I brush my teeth every day. (T&ocirc;i đ&aacute;** răng mỗi ng&agrave;y.)</p>\r\n<p>=&gt; ** thấy việc đ&aacute;nh răng được lặp đi lặp lại h&agrave;ng ng&agrave;y n&ecirc;n ta sẽ sử dụng th&igrave; hiện tại đơn để diễn tả. V&igrave; chủ ngữ l&agrave; &ldquo;I&rdquo; n&ecirc;n động từ &ldquo;brush&rdquo; ở dạ** nguy&ecirc;n thể.</p>\r\n<p><br></p>\r\n<p>My father usually goes to work by motorbike. (ba t&ocirc;i thường đi l&agrave;m bằng xe m&aacute;y)</p>\r\n<p>=&gt; Việc đi l&agrave;m bằng xe m&aacute;y cũng xảy ra thường xuy&ecirc;n n&ecirc;n ta sẽ sử dụng th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;my father&rdquo; (tương ứ** với &ldquo;he&rdquo;) n&ecirc;n động từ &ldquo;go&rdquo; th&ecirc;m &ldquo;es&rdquo;.</p>\r\n<p><br></p>\r\n<p>2. Diễn tả một sự thật hiển nhi&ecirc;n, một ch&acirc;n l&yacute;.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>The sun rises ** the East and sets in *** West. (Mặt trời mọc hướng Đ&ocirc;ng v&agrave; lặn hướng T&acirc;y)</p>\r\n<p>=&gt; Đ&acirc;y l&agrave; một sự thật hiển nhi&ecirc;n n&ecirc;n ta sử dụng th&igrave; hiện tại đơn để diễn tả. Chủ ngữ l&agrave; &ldquo;the sun&rdquo; (số &iacute;t, tương ứng với &ldquo;it&rdquo;) n&ecirc;n động từ &ldquo;rise&rdquo; v&agrave; &ldquo;set&rdquo; ta phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n<p><br></p>\r\n<p>3. Diễn tả sự việc sẽ xảy xa theo lịch tr&igrave;nh, thời gian biểu r&otilde; r&agrave;ng như giờ t&agrave;u, m&aacute;y bay chạy.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>The train leaves at 6 pm today. (T&agrave;u sẽ rời đi v&agrave;o l&uacute;c 6h chiều ng&agrave;y h&ocirc;m nay.)</p>\r\n<p>The ****** ****** at 10 ** tomorrow. (Chuyến bay sẽ bắt đầu v&agrave;o l&uacute;c 10h s&aacute;ng ng&agrave;y mai.)</p>\r\n<p>=&gt; Mặc d&ugrave; việc &ldquo;t&agrave;u rời đi&rdquo; hay &ldquo;Chuyến bay bắt đầu&rdquo; chưa xảy ra nhưng v&igrave; n&oacute; l&agrave; một lịch tr&igrave;nh n&ecirc;n ** sử dụng th&igrave; hiện tại đơn. Chủ ngữ l&agrave; &ldquo;the train&rdquo; v&agrave; &ldquo;the flight&rdquo; (số &iacute;t, tương ứng với &ldquo;it&rdquo;) n&ecirc;n động từ &ldquo;leave&rdquo; v&agrave; &ldquo;starts&rdquo; ta phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n<p><br></p>\r\n<p>4. Diễn tả suy nghĩ, cảm x&uacute;c, cảm gi&aacute;c.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>I think that your brother is a good person. (T&ocirc;i nghĩ rằng anh trai bạn l&agrave; một người tốt.)</p>\r\n<p>=&gt; Động từ ch&iacute;nh trong c&acirc;u n&agrave;y l&agrave; &ldquo;think&rdquo; diễn tả &ldquo;suy nghĩ&rdquo; n&ecirc;n ta sử dụ** th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;I&rdquo; n&ecirc;n động từ &ldquo;think&rdquo; kh&ocirc;ng **** v&agrave; ở dạng nguy&ecirc;n mẫu.</p>\r\n<p><br></p>\r\n<p>He ***** very ***** now. (B&acirc;y giờ anh ấy cảm thấy rất mệt.)</p>\r\n<p>=&gt; Động từ &ldquo;feel&rdquo; c&oacute; nghĩa l&agrave; &ldquo;cảm thấy&rdquo; chỉ cảm gi&aacute;c n&ecirc;n ta sử dụng th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;he&rdquo; n&ecirc;n động từ &ldquo;feel&rdquo; phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n<p><br></p>\r\n<p>IV. DẤU HIỆU NHẬN BIẾT TH&Igrave; HIỆN TẠI ĐƠN TRONG TIẾNG ANH</p>\r\n<p><br></p>\r\n<p>- Khi trong c&aacute;c c&acirc;u xuất hiện c&aacute;c trạ** từ chỉ tần suất:</p>\r\n<p><br></p>\r\n<p>Always (lu&ocirc;n lu&ocirc;n), usually (thường xuy&ecirc;n), often (thường xuy&ecirc;n), ********** (thường xuy&ecirc;n) , sometimes (thỉ** thoảng), seldom (hiếm khi), ****** (hiếm khi), hardly (hiếm khi) , never (kh&ocirc;ng bao giờ), generally (nh&igrave;n chung), regularly (thườ** xuy&ecirc;n).</p>\r\n<p>Every day, ***** week, every month, every year,&hellip;&hellip;. (Mỗi ng&agrave;y, mỗi tuần, mỗi th&aacute;ng, mỗi năm)</p>\r\n<p>Once/ twice/ three times/ four times&hellip;.. a day/ week/ month/ year,&hellip;&hellip;. (một lần / hai lần/ ** lần/ bốn lần &hellip;&hellip;..một ng&agrave;y/ tuần/ th&aacute;ng/ năm)&nbsp;</p>\r\n<p>- Vị tr&iacute; của trạng từ chỉ tuần suất trong c&acirc;u:</p>\r\n<p><br></p>\r\n<p>C&aacute;c trạng từ: Always, usually, often, sometimes, rarely, seldom - đứng trước động từ thường, đứng sau độ** từ &ldquo;to be&rdquo; v&agrave; trợ động từ .</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>She rarely goes to school by bus. (C&ocirc; ấy hiếm khi đi học bằng xe bus)</p>\r\n<p>He is ******* at home ** the evening. (*** ta thường ở nh&agrave; v&agrave;o buổi tối.)</p>\r\n<p>I don&rsquo;t often go out with my friends. (T&ocirc;i kh&ocirc;** thườ** đi ** ngo&agrave;i với bạn b&egrave;)</p>\r\n<p>V. QUY TẮC TH&Ecirc;M &ldquo;S&rdquo; HOẶC &ldquo;ES&rdquo; SAU ĐỘNG TỪ</p>\r\n<p><br></p>\r\n<p>1. Th&ocirc;ng thường ta th&ecirc;m &ldquo;s&rdquo; v&agrave;o sau c&aacute;c động từ.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>work - works&nbsp; &nbsp;&nbsp;read - reads&nbsp; &nbsp;&nbsp;speak - speaks</p>\r\n<p>love - loves&nbsp; &nbsp;&nbsp;see - sees&nbsp; &nbsp;&nbsp;drink - drinks</p>\r\n<p>2. Những động từ tận c&ugrave;ng bằng: -s; -sh; -ch; -z; -x; -o ta th&ecirc;m &ldquo;es&rdquo;.</p>\r\n<p><br></p>\r\n<p>- Eg:</p>\r\n<p><br></p>\r\n<p>miss - misses&nbsp; &nbsp;&nbsp;watch - watches&nbsp; &nbsp;&nbsp;mix - mixes</p>\r\n<p>wash - washes&nbsp; &nbsp;&nbsp;buzz - buzzes&nbsp; &nbsp;&nbsp;go - goes</p>\r\n<p>3. Những động từ tận c&ugrave;ng l&agrave; &ldquo;y&rdquo;:</p>\r\n<p><br></p>\r\n<p>- Nếu trước &ldquo;y&rdquo; l&agrave; một nguy&ecirc;n &acirc;m (a, e, i, o, u) - ta giữ nguy&ecirc;n &ldquo;y&rdquo; + &ldquo;s&rdquo;</p>\r\n<p><br></p>\r\n<p>+ Eg:&nbsp;</p>\r\n<p><br></p>\r\n<p>play - plays&nbsp; &nbsp;&nbsp;buy - buys &nbsp; &nbsp; &nbsp;&nbsp;pay - pays</p>\r\n<p>- Nếu trước &ldquo;y&rdquo; l&agrave; một phụ &acirc;m - ta đổi &ldquo;y&rdquo; th&agrave;nh &ldquo;i&rdquo; + &ldquo;es&rdquo;</p>\r\n<p><br></p>\r\n<p>+ Eg: &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n<p><br></p>\r\n<p>&nbsp; fly - ***** &nbsp;&nbsp; &nbsp;&nbsp;cry - cries &nbsp;&nbsp; &nbsp;&nbsp;fry - fries</p>\r\n<p>4. Trườ** hợp đặc bi&ecirc;t:</p>\r\n<p><br></p>\r\n<p>- Ta c&oacute;: have - has</p>\r\n<p><br></p>\r\n<p>Động từ &ldquo;have&rdquo; khi đi với chủ ngữ l&agrave; ng&ocirc;i thứ 3 số &iacute;t sẽ kh&ocirc;** th&ecirc;m &ldquo;s&rdquo; m&agrave; biến đổi th&agrave;** &ldquo;has&rdquo;.</p>\r\n<p><br></p>\r\n<p>+ Eg:</p>\r\n<p><br></p>\r\n<p>**** have three children. (Họ c&oacute; 3 người con.)</p>\r\n<p>*** has two children. (C&ocirc; ấy c&oacute; 2 người con.)</p>', 1),
(2, 'Thì Hiện Tại Tiếp Diễn trong tiếng Anh', '<h2>Th&igrave; hiện tại tiếp diễn (present continuous tense) l&agrave; một th&igrave; trong tiếng Anh hiện đại. N&oacute; d&ugrave;ng để diễn tả những sự việc xảy ra ngay l&uacute;c ch&uacute;ng ta n&oacute;i hay xung quanh thời điểm n&oacute;i, v&agrave; h&agrave;nh động chưa chấm dứt (c&ograve;n tiếp tục diễn ra).</h2>\r\n<div>\r\n    <p><strong>I. ĐỊNH NGHĨA VỀ HIỆN TẠI ĐƠN</strong></p>\r\n</div>\r\n<div>\r\n    <p><strong>Th&igrave; hiện tại đơn</strong> (Simple present) l&agrave; một th&igrave; trong tiếng Anh hiện đại. Hiện tại đơn d&ugrave;ng để diễn tả một h&agrave;nh động chung chung, tổng qu&aacute;t lặp đi lặp lại nhiều lần hoặc một sự thật hiển nhi&ecirc;n hoặc một h&agrave;nh động diễn ra trong thời gian hiện tại.</p>\r\n    <p><strong>II. CẤU TR&Uacute;C VỀ TH&Igrave; HIỆN TẠI ĐƠN</strong></p>\r\n    <p><strong>1. Cấu Tr&uacute;c Th&igrave; Hiện Tại Đơn Với Động Từ &quot;TO BE&quot;</strong></p>\r\n    <p>Đối với cấu tr&uacute;c của c&aacute;c TH&Igrave;, ch&uacute;ng ta chỉ cần quan t&acirc;m đến chủ ngữ v&agrave; động từ ch&iacute;nh, c&ograve;n c&aacute;c th&agrave;nh phần kh&aacute;c như t&acirc;n ngữ, trạng từ, &hellip; th&igrave; t&ugrave;y từng c&acirc;u m&agrave; c&oacute; cấu tr&uacute;c kh&aacute;c nhau.</p>\r\n    <p>Ở đ&acirc;y: &ldquo;to be&rdquo; ở hiện tại c&oacute; 3 dạng: <strong>am/ is/ are</strong></p>\r\n    <p><strong>A. Khẳng định:</strong></p>\r\n    <p><strong>- Cấu tr&uacute;c: &nbsp; &nbsp;</strong> &nbsp;</p>\r\n    <p><strong>S&nbsp;+ am / is / are</strong></p>\r\n    <p><strong>&nbsp;- Trong đ&oacute;: &nbsp;</strong></p>\r\n    <ul>\r\n        <li><em>S (subject): Chủ ngữ</em></li>\r\n    </ul>\r\n    <p><strong>&nbsp;- Lưu &yacute;:</strong></p>\r\n    <ul>\r\n        <li><em>&nbsp;Khi <strong>S = I + am</strong></em></li>\r\n        <li><em>&nbsp;Khi <strong>S = He/ She/ It + is</strong></em></li>\r\n        <li><em>&nbsp;Khi <strong>S = We, You, They + are</strong></em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>&nbsp;I <u><strong>am</strong></u> a doctor. (T&ocirc;i l&agrave; b&aacute;c sĩ.)</em></li>\r\n        <li><em>&nbsp;She <u><strong>is</strong></u> very beautiful. (C&ocirc; ấy rất xinh đẹp.)</em></li>\r\n        <li><em>&nbsp;We <u><strong>are</strong></u> friends. (Ch&uacute;ng t&ocirc;i l&agrave; bạn b&egrave;.)</em></li>\r\n    </ul>\r\n    <p>&nbsp;=&gt; Ta thấy với chủ ngữ kh&aacute;c nhau động từ &ldquo;to be&rdquo; chia kh&aacute;c nhau.&nbsp;</p>\r\n    <p><strong>B. Phủ định:</strong></p>\r\n    <p><strong>- Cấu tr&uacute;c: &nbsp; &nbsp; &nbsp;</strong></p>\r\n    <p><strong>S + am/ is/ are + not</strong></p>\r\n    <p><strong>- Lưu &yacute;:</strong></p>\r\n    <ul>\r\n        <li><em>Am not: kh&ocirc;ng c&oacute; dạng viết tắt</em></li>\r\n        <li><em>Is not = isn&rsquo;t</em></li>\r\n        <li><em>Are not = aren&rsquo;t</em></li>\r\n    </ul>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>I <u><strong>am not</strong></u> a good student. (T&ocirc;i kh&ocirc;ng phải l&agrave; học sinh giỏi.)</em></li>\r\n        <li><em>He <u><strong>isn&rsquo;t</strong></u> my bother. (Anh ấy kh&ocirc;ng phải l&agrave; anh trai của t&ocirc;i.)</em></li>\r\n        <li><em>They <u><strong>aren&rsquo;t</strong></u> Korean. (Họ kh&ocirc;ng phải l&agrave; người người H&agrave;n Quốc.)</em></li>\r\n    </ul>\r\n    <p><strong>C. C&acirc;u hỏi:</strong></p>\r\n    <p><strong>Am/ Is/ Are + &nbsp;S?</strong></p>\r\n    <p><strong>- Trả lời: &nbsp; &nbsp; &nbsp;</strong></p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>Yes, &nbsp;I + am.</td>\r\n                <td>Yes, he/ she/ it + is.</td>\r\n                <td>Yes, we/ you/ they + are.</td>\r\n            </tr>\r\n            <tr>\r\n                <td>No, I + am not.</td>\r\n                <td>No, he/ she/ it + isn&rsquo;t.</td>\r\n                <td>No, we/ you/ they + aren&rsquo;t.</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em><u><strong>Are</strong></u> you a student? - Yes, I am/ No, I am not.</em></li>\r\n        <li><em><u><strong>Am</strong></u> I a bad person? - Yes, you are./ No, you aren&rsquo;t.</em></li>\r\n        <li><em><u><strong>Is</strong></u> he 19 years old? - Yes, he is./ No, he isn&rsquo;t.</em></li>\r\n    </ul>\r\n    <p><strong>2. Cấu Tr&uacute;c Th&igrave; Hiện Tại Đơn Với Động Từ THƯỜNG</strong></p>\r\n    <p><strong>A. Khẳng định:</strong></p>\r\n    <p><strong>- Cấu Tr&uacute;c:</strong></p>\r\n    <p><strong>S + V(s/es)</strong></p>\r\n    <p><strong>- Trong đ&oacute;: &nbsp; &nbsp;</strong>&nbsp;</p>\r\n    <ul>\r\n        <li><em>&nbsp; S (subject): Chủ ngữ&nbsp;</em></li>\r\n        <li><em>&nbsp; V (verb): Động từ&nbsp;</em></li>\r\n    </ul>\r\n    <p><strong>- Lưu &yacute;:</strong></p>\r\n    <ul>\r\n        <li><em><strong>S = I, We, You, They</strong>,<strong>&nbsp;danh từ số nhiều</strong> th&igrave; ĐỘNG TỪ ở dạng NGUY&Ecirc;N MẪU&nbsp;</em></li>\r\n        <li><em><strong>S = He, She, It, danh từ số &iacute;t</strong> th&igrave; ĐỘNG TỪ th&ecirc;m &ldquo;S&rdquo; hoặc ES&rdquo;&nbsp;</em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em><u><strong>They go</strong></u> to work by bus every day. (Họ đi l&agrave;m bằng xe bu&yacute;t h&agrave;ng ng&agrave;y.)&nbsp;</em></li>\r\n    </ul>\r\n    <p>Ở v&iacute; dụ n&agrave;y, chủ ngữ l&agrave; &ldquo;They&rdquo; n&ecirc;n động từ ch&iacute;nh &ldquo;go&rdquo; ta để ở dạng NGUY&Ecirc;N MẪU kh&ocirc;ng chia.&nbsp;</p>\r\n    <ul>\r\n        <li><u><em><strong>He goes</strong></em></u> <em>to work by bus every day.&nbsp;</em><em>(Anh ấy đi l&agrave;m bằng xe bu&yacute;t h&agrave;ng ng&agrave;y.)&nbsp;</em></li>\r\n    </ul>\r\n    <p>=&gt; Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;He&rdquo; n&ecirc;n động từ ch&iacute;nh &ldquo;go&rdquo; phải th&ecirc;m &ldquo;es&rdquo;.&nbsp;</p>\r\n    <p>&nbsp;(Ta sẽ t&igrave;m hiểu về quy tắc th&ecirc;m &ldquo;S&rdquo; hoặc &ldquo;ES&rdquo; sau động từ ở phần sau.)&nbsp;</p>\r\n    <p><strong>B. Phủ định:</strong></p>\r\n    <p><strong>- Cấu Tr&uacute;c</strong></p>\r\n    <p><strong>S + don&rsquo;t/ doesn&rsquo;t &nbsp;+ V(nguy&ecirc;n mẫu)</strong></p>\r\n    <p><strong>- Ta c&oacute;:&nbsp;</strong></p>\r\n    <ul>\r\n        <li><em>&nbsp;don&rsquo;t = do not</em></li>\r\n        <li><em>&nbsp;doesn&rsquo;t = does not</em></li>\r\n    </ul>\r\n    <p><strong>- Lưu &yacute;:</strong></p>\r\n    <ul>\r\n        <li><em><strong>S = I, We, You, They, danh từ số nhiều</strong>&nbsp; - Ta mượn trợ động từ &ldquo;do&rdquo; + not</em></li>\r\n        <li><em><strong>S = He, She, It, danh từ số &iacute;t</strong> - Ta mượn trợ động từ &ldquo;does&rdquo; + not</em></li>\r\n        <li><em>Động từ (V) theo sau ở dạng NGUY&Ecirc;N MẪU kh&ocirc;ng chia.</em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>We <u><strong>don&rsquo;t go</strong></u> to school on Sunday. (Ch&uacute;ng t&ocirc;i kh&ocirc;ng đến trường v&agrave;o ng&agrave;y Chủ Nhật.)</em></li>\r\n    </ul>\r\n    <p>Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;We&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;do&rdquo; + not (don&rsquo;t), v&agrave; động từ &ldquo;go&rdquo; theo sau ở dạng NGUY&Ecirc;N MẪU.</p>\r\n    <ul>\r\n        <li><em>She <u><strong>doesn&rsquo;t visit</strong></u> his grandparents regularly. (C&ocirc; ấy kh&ocirc;ng đến thăm &ocirc;ng b&agrave; thường xuy&ecirc;n)</em></li>\r\n    </ul>\r\n    <p>=&gt; Tại c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;She&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;does&rdquo; + not (doesn&rsquo;t), v&agrave; động từ &ldquo;visit&rdquo; theo sau ở dạng NGUY&Ecirc;N MẪU.</p>\r\n    <p><strong>C. C&acirc;u hỏi:</strong></p>\r\n    <p><strong>- Cấu Tr&uacute;c</strong></p>\r\n    <p><strong>Do/ Does &nbsp; + &nbsp; S &nbsp; + V(nguy&ecirc;n mẫu)?</strong></p>\r\n    <p><strong>- Trả lời: &nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>Yes, I/we/you/they + do.</td>\r\n                <td>Yes, he/she/it + does.</td>\r\n            </tr>\r\n            <tr>\r\n                <td>No, I/ we/you/they + don&apos;t</td>\r\n                <td>No, he/ she/ it + doesn&rsquo;t.</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><br><strong>- Lưu &yacute;:&nbsp;</strong></p>\r\n    <ul>\r\n        <li><em><strong>S = I, We, You, They, danh từ số nhiều</strong>&nbsp; - Ta mượn trợ động từ &ldquo;Do&rdquo; đứng trước chủ ngữ.</em></li>\r\n        <li><em><strong>S = He, She, It, danh từ số &iacute;t</strong> - Ta mượn trợ động từ &ldquo;Does&rdquo; đứng trước chủ ngữ.</em></li>\r\n        <li><em>Động từ ch&iacute;nh trong c&acirc;u ở dạng NGUY&Ecirc;N MẪU.</em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em><u><strong>Do</strong></u> you <u><strong>stay</strong></u> with your family? (Bạn c&oacute; ở c&ugrave;ng với gia đ&igrave;nh kh&ocirc;ng?)</em></li>\r\n        <li><em><strong>Yes, I do./ No, I don&rsquo;t.&nbsp;</strong>(C&oacute;, m&igrave;nh ở c&ugrave;ng với gia đ&igrave;nh./ Kh&ocirc;ng, m&igrave;nh kh&ocirc;ng ở c&ugrave;ng.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Ở v&iacute; dụ n&agrave;y, chủ ngữ l&agrave; &ldquo;you&rdquo; n&ecirc;n ta mượn trợ động từ &ldquo;Do&rdquo; đứng trước chủ ngữ, động từ ch&iacute;nh &ldquo;stay&rdquo; ở dạng nguy&ecirc;n mẫu.</p>\r\n    <ul>\r\n        <li><em><u><strong>Does</strong></u> your sister <u><strong>like</strong></u> reading books? (Chị của bạn c&oacute; th&iacute;ch đọc s&aacute;ch kh&ocirc;ng?)</em></li>\r\n        <li><em><strong>Yes, she does./ No, she doesn&rsquo;t.</strong> (C&oacute;, chị ấy th&iacute;ch đọc s&aacute;ch./ Kh&ocirc;ng, chị ấy kh&ocirc;ng th&iacute;ch.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Trong c&acirc;u n&agrave;y, chủ ngữ l&agrave; &ldquo;your sister&rdquo; (tương ứng với ng&ocirc;i &ldquo;she&rdquo;) n&ecirc;n ta mượn trợ động từ &ldquo;Does&rdquo; đứng trước chủ ngữ, động từ ch&iacute;nh &ldquo;like&rdquo; ở dạng nguy&ecirc;n thể.</p>\r\n    <p><strong>III C&Aacute;CH SỬ DỤNG TH&Igrave; HIỆN TẠI ĐƠN</strong></p>\r\n    <p><strong>1. D&ugrave;ng để diễn tả một h&agrave;nh động, sự việc diễn ra thường xuy&ecirc;n, lặp đi lặp lại hay một th&oacute;i quen.</strong></p>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>I brush my teeth <u><strong>every day</strong></u>.&nbsp;(T&ocirc;i đ&aacute;nh răng mỗi ng&agrave;y.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Ta thấy việc đ&aacute;nh răng được lặp đi lặp lại h&agrave;ng ng&agrave;y n&ecirc;n ta sẽ sử dụng th&igrave; hiện tại đơn để diễn tả. V&igrave; chủ ngữ l&agrave; &ldquo;I&rdquo; n&ecirc;n động từ &ldquo;brush&rdquo; ở dạng nguy&ecirc;n thể.</p>\r\n    <ul>\r\n        <li><em>My father <u><strong>usually</strong></u> goes to work by motorbike. (ba t&ocirc;i thường đi l&agrave;m bằng xe m&aacute;y)</em></li>\r\n    </ul>\r\n    <p>=&gt; Việc đi l&agrave;m bằng xe m&aacute;y cũng xảy ra thường xuy&ecirc;n n&ecirc;n ta sẽ sử dụng th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;my father&rdquo; (tương ứng với &ldquo;he&rdquo;) n&ecirc;n động từ &ldquo;go&rdquo; th&ecirc;m &ldquo;es&rdquo;.</p>\r\n    <p><strong>2. Diễn tả một sự thật hiển nhi&ecirc;n, một ch&acirc;n l&yacute;.</strong></p>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>The sun <u><strong>rises</strong></u> in the East and <u><strong>sets</strong></u> in the West. (Mặt trời mọc hướng Đ&ocirc;ng v&agrave; lặn hướng T&acirc;y)</em></li>\r\n    </ul>\r\n    <p>=&gt; Đ&acirc;y l&agrave; một sự thật hiển nhi&ecirc;n n&ecirc;n ta sử dụng th&igrave; hiện tại đơn để diễn tả. Chủ ngữ l&agrave; &ldquo;the sun&rdquo; (số &iacute;t, tương ứng với &ldquo;it&rdquo;) n&ecirc;n động từ &ldquo;rise&rdquo; v&agrave; &ldquo;set&rdquo; ta phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n    <p><strong>3. Diễn tả sự việc sẽ xảy xa theo lịch tr&igrave;nh, thời gian biểu r&otilde; r&agrave;ng như giờ t&agrave;u, m&aacute;y bay chạy.</strong></p>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>The train <u><strong>leaves</strong></u> at 6 pm today. (T&agrave;u sẽ rời đi v&agrave;o l&uacute;c 6h chiều ng&agrave;y h&ocirc;m nay.)</em></li>\r\n        <li><em>The flight <u><strong>starts</strong></u> at 10 am tomorrow. (Chuyến bay sẽ bắt đầu v&agrave;o l&uacute;c 10h s&aacute;ng ng&agrave;y mai.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Mặc d&ugrave; việc &ldquo;t&agrave;u rời đi&rdquo; hay &ldquo;Chuyến bay bắt đầu&rdquo; chưa xảy ra nhưng v&igrave; n&oacute; l&agrave; một lịch tr&igrave;nh n&ecirc;n ta sử dụng th&igrave; hiện tại đơn. Chủ ngữ l&agrave; &ldquo;the train&rdquo; v&agrave; &ldquo;the flight&rdquo; (số &iacute;t, tương ứng với &ldquo;it&rdquo;) n&ecirc;n động từ &ldquo;leave&rdquo; v&agrave; &ldquo;starts&rdquo; ta phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n    <p><strong>4. Diễn tả suy nghĩ, cảm x&uacute;c, cảm gi&aacute;c.</strong></p>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>I <u><strong>think</strong></u> that your brother is a good person. (T&ocirc;i nghĩ rằng anh trai bạn l&agrave; một người tốt.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Động từ ch&iacute;nh trong c&acirc;u n&agrave;y l&agrave; &ldquo;think&rdquo; diễn tả &ldquo;suy nghĩ&rdquo; n&ecirc;n ta sử dụng th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;I&rdquo; n&ecirc;n động từ &ldquo;think&rdquo; kh&ocirc;ng chia v&agrave; ở dạng nguy&ecirc;n mẫu.</p>\r\n    <ul>\r\n        <li><em>He <u><strong>feels</strong></u> very tired now. (B&acirc;y giờ anh ấy cảm thấy rất mệt.)</em></li>\r\n    </ul>\r\n    <p>=&gt; Động từ &ldquo;feel&rdquo; c&oacute; nghĩa l&agrave; &ldquo;cảm thấy&rdquo; chỉ cảm gi&aacute;c n&ecirc;n ta sử dụng th&igrave; hiện tại đơn. V&igrave; chủ ngữ l&agrave; &ldquo;he&rdquo; n&ecirc;n động từ &ldquo;feel&rdquo; phải th&ecirc;m &ldquo;s&rdquo;.</p>\r\n    <p><strong>IV.&nbsp;DẤU HIỆU NHẬN BIẾT TH&Igrave; HIỆN TẠI ĐƠN TRONG TIẾNG ANH</strong></p>\r\n    <p><strong>- Khi trong c&aacute;c c&acirc;u xuất hiện c&aacute;c trạng từ chỉ tần suất:</strong></p>\r\n    <ul>\r\n        <li><em>Always (lu&ocirc;n lu&ocirc;n), usually (thường xuy&ecirc;n), often (thường xuy&ecirc;n), frequently (thường xuy&ecirc;n) , sometimes (thỉnh thoảng), seldom (hiếm khi), rarely (hiếm khi), hardly (hiếm khi) , never (kh&ocirc;ng bao giờ), generally (nh&igrave;n chung), regularly (thường xuy&ecirc;n).</em></li>\r\n        <li><em>Every day, every week, every month, every year,&hellip;&hellip;. (Mỗi ng&agrave;y, mỗi tuần, mỗi th&aacute;ng, mỗi năm)</em></li>\r\n        <li><em>Once/ twice/ three times/ four times&hellip;.. a day/ week/ month/ year,&hellip;&hellip;. (một lần / hai lần/ ba lần/ bốn lần &hellip;&hellip;..một ng&agrave;y/ tuần/ th&aacute;ng/ năm)&nbsp;</em></li>\r\n    </ul>\r\n    <p><strong>- Vị tr&iacute; của trạng từ chỉ tuần suất trong c&acirc;u:</strong></p>\r\n    <p>C&aacute;c trạng từ: Always, usually, often, sometimes, rarely, seldom - đứng trước động từ thường, đứng sau động từ &ldquo;to be&rdquo; v&agrave; trợ động từ .</p>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>She <u><strong>rarely goes</strong></u> to school by bus. (C&ocirc; ấy hiếm khi đi học bằng xe bus)</em></li>\r\n        <li><em>He <u><strong>is usually</strong></u> at home in the evening. (Anh ta thường ở nh&agrave; v&agrave;o buổi tối.)</em></li>\r\n        <li><em>I <strong>don&rsquo;t often</strong> go out with my friends. (T&ocirc;i kh&ocirc;ng thường đi ra ngo&agrave;i với bạn b&egrave;)</em></li>\r\n    </ul>\r\n    <p><strong>V.&nbsp;QUY TẮC TH&Ecirc;M &ldquo;S&rdquo; HOẶC &ldquo;ES&rdquo; SAU ĐỘNG TỪ</strong></p>\r\n    <p><strong>1. Th&ocirc;ng thường ta th&ecirc;m &ldquo;s&rdquo; v&agrave;o sau c&aacute;c động từ.</strong></p>\r\n    <p>- Eg:</p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>work - works</td>\r\n                <td>read - reads</td>\r\n                <td>speak - speaks</td>\r\n            </tr>\r\n            <tr>\r\n                <td>love - loves</td>\r\n                <td>see - sees</td>\r\n                <td>drink - drinks</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><strong>2. Những động từ tận c&ugrave;ng bằng: -s; -sh; -ch; -z; -x; -o ta th&ecirc;m &ldquo;es&rdquo;.</strong></p>\r\n    <p>- Eg:</p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>miss - misses</td>\r\n                <td>watch - watches</td>\r\n                <td>mix - mixes</td>\r\n            </tr>\r\n            <tr>\r\n                <td>wash - washes</td>\r\n                <td>buzz - buzzes</td>\r\n                <td>go - goes</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><strong>3. Những động từ tận c&ugrave;ng l&agrave; &ldquo;y&rdquo;:</strong></p>\r\n    <p><strong>- Nếu trước &ldquo;y&rdquo; l&agrave; một nguy&ecirc;n &acirc;m (a, e, i, o, u) - ta giữ nguy&ecirc;n &ldquo;y&rdquo; + &ldquo;s&rdquo;</strong></p>\r\n    <p>+ Eg:&nbsp;</p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>play - plays</td>\r\n                <td>buy - buys &nbsp;&nbsp;</td>\r\n                <td>pay - pays</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><strong>- Nếu trước &ldquo;y&rdquo; l&agrave; một phụ &acirc;m - ta đổi &ldquo;y&rdquo; th&agrave;nh &ldquo;i&rdquo; + &ldquo;es&rdquo;</strong></p>\r\n    <p>+ Eg: &nbsp; <strong>&nbsp; &nbsp;&nbsp;</strong></p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>\r\n                    <div style=\"text-align: center;\">&nbsp; fly - flies &nbsp;</div>\r\n                </td>\r\n                <td>\r\n                    <div style=\"text-align: center;\">cry - cries &nbsp;</div>\r\n                </td>\r\n                <td>\r\n                    <div style=\"text-align: center;\">fry - fries</div>\r\n                </td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><strong>4. Trường hợp đặc bi&ecirc;t:</strong></p>\r\n    <p>- Ta c&oacute;: <strong>have - has</strong></p>\r\n    <p>Động từ &ldquo;have&rdquo; khi đi với chủ ngữ l&agrave; ng&ocirc;i thứ 3 số &iacute;t sẽ kh&ocirc;ng th&ecirc;m &ldquo;s&rdquo; m&agrave; biến đổi th&agrave;nh &ldquo;has&rdquo;.</p>\r\n    <p>+ Eg:</p>\r\n    <ul>\r\n        <li><em>They <u><strong>have</strong></u> three children. (Họ c&oacute; 3 người con.)</em></li>\r\n        <li><em>She <u><strong>has</strong></u> two children. (C&ocirc; ấy c&oacute; 2 người con.)</em></li>\r\n    </ul>\r\n</div>', 2),
(3, 'Thì Hiện Tại Hoàn Thành trong tiếng Anh', '<h2>Th&igrave; hiện tại ho&agrave;n th&agrave;nh (present perfect tense) l&agrave; một th&igrave; trong tiếng Anh hiện đại. D&ugrave;ng để diễn tả về một h&agrave;nh động đ&atilde; ho&agrave;n th&agrave;nh cho tới thời điểm hiện tại m&agrave; kh&ocirc;ng b&agrave;n về thời gian diễn ra n&oacute;.</h2>\r\n<div>\r\n    <p><strong>I. ĐỊNH NGHĨA VỀ TH&Igrave; HIỆN TẠI HO&Agrave;N TH&Agrave;NH</strong></p>\r\n</div>\r\n<div>\r\n    <p><strong>Th&igrave; hiện tại ho&agrave;n th&agrave;nh</strong> (present perfect tense) l&agrave; một th&igrave; trong tiếng Anh hiện đại. D&ugrave;ng để diễn tả về một h&agrave;nh động đ&atilde; ho&agrave;n th&agrave;nh cho tới thời điểm hiện tại m&agrave; kh&ocirc;ng b&agrave;n về thời gian diễn ra n&oacute;.</p>\r\n    <p><strong>II. CẤU TR&Uacute;C VỀ TH&Igrave; HIỆN TẠI HO&Agrave;N TH&Agrave;NH</strong></p>\r\n    <p><strong>1. Khẳng định:</strong><br><strong>- Cấu tr&uacute;c:&nbsp;</strong></p>\r\n    <p><strong>S + have/ has + Vpp</strong></p>\r\n    <p><strong>- Trong đ&oacute;: &nbsp; &nbsp; &nbsp;</strong></p>\r\n    <ul>\r\n        <li><em>S (subject): chủ ngữ</em></li>\r\n        <li><em>Have/ has: trợ động từ</em></li>\r\n        <li><em>Vpp: Qu&aacute; khứ ph&acirc;n từ&nbsp;</em></li>\r\n    </ul>\r\n    <p><strong>- Lưu &yacute;:&nbsp;</strong></p>\r\n    <ul>\r\n        <li><em>S = I/ We/ You/ They + have</em></li>\r\n        <li><em>S = He/ She/ It + has</em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>I <u><strong>have graduated</strong></u> from my university since 2013. (T&ocirc;i tốt nghiệp đại học từ năm 2013.)</em></li>\r\n        <li><em>She <u><strong>has lived</strong></u> here for one year. (C&ocirc; ấy sống ở đ&acirc;y được một năm rồi.)</em></li>\r\n    </ul>\r\n    <p><strong>2. Phủ định:</strong><br><strong>- Cấu tr&uacute;c:&nbsp;</strong></p>\r\n    <p><strong>S + haven&rsquo;t / hasn&rsquo;t + Vpp</strong></p>\r\n    <p>=&gt; C&acirc;u phủ định trong th&igrave; hiện tại ho&agrave;n th&agrave;nh ta chỉ cần th&ecirc;m &ldquo;not&rdquo; v&agrave;o sau &ldquo;have/ has&rdquo;.</p>\r\n    <p><strong>- Lưu &yacute;:</strong></p>\r\n    <ul>\r\n        <li><em>haven&rsquo;t = have not</em></li>\r\n        <li><em>hasn&rsquo;t = has not</em></li>\r\n    </ul>\r\n    <p>- Eg:</p>\r\n    <ul>\r\n        <li><em>We <u><strong>haven&rsquo;t met</strong></u> each other for a long time. (Ch&uacute;ng t&ocirc;i kh&ocirc;ng gặp nhau trong một thời gian d&agrave;i rồi.)</em></li>\r\n        <li><em>He <u><strong>hasn&rsquo;t come</strong></u> back his hometown since 1995. (Anh ấy kh&ocirc;ng quay trở lại qu&ecirc; hương của m&igrave;nh từ năm 1995.)</em></li>\r\n    </ul>\r\n    <p><strong>3. C&acirc;u hỏi:</strong></p>\r\n    <p><strong>Have/ Has + S + Vpp ?</strong></p>\r\n    <p><strong>- Trả lời:&nbsp;</strong></p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>Yes, I/ we/ you/ they + have</td>\r\n                <td>Yes, he/ she/ it + has.</td>\r\n            </tr>\r\n            <tr>\r\n                <td>No, I/ we/ you/ they + haven&apos;t</td>\r\n                <td>No, he/ she/ it + hasn&apos;t.</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p>=&gt; C&acirc;u hỏi trong th&igrave; hiện tại ho&agrave;n th&agrave;nh ta chỉ cần đảo trợ động từ &ldquo;have/ has&rdquo; l&ecirc;n trước chủ ngữ, động từ theo sau ở dạng qu&aacute; khứ ph&acirc;n từ.</p>\r\n    <p>- Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em><u><strong>Have</strong></u> you ever&nbsp;<u><strong>travelled</strong></u> to Thailand? (Bạn đ&atilde; từng du lịch tới Th&aacute;i Lan bao giờ chưa?)<br>Yes, I have./ No, I haven&apos;t.</em></li>\r\n        <li><em><u><strong>Has</strong></u> she&nbsp;<u><strong>arrived</strong></u> London yet? (C&ocirc; ấy đ&atilde; tới Lu&acirc;n Đ&ocirc;n chưa?)<br>Yes, she has./ No, she hasn&apos;t.</em></li>\r\n    </ul>\r\n    <p><strong>&nbsp;II C&Aacute;CH SỬ DỤNG CỦA TH&Igrave; HIỆN TẠI HO&Agrave;N TH&Agrave;NH</strong></p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>\r\n                    <p><strong>C&aacute;ch d&ugrave;ng th&igrave; Hiện tại ho&agrave;n th&agrave;nh</strong></p>\r\n                </td>\r\n                <td><strong>V&iacute; Dụ</strong></td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <p>- H&agrave;nh động đ&atilde; ho&agrave;n th&agrave;nh cho tới thời điểm hiện tại m&agrave; kh&ocirc;ng đề cập tới n&oacute; xảy ra khi n&agrave;o.</p>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li><em>&nbsp;I&rsquo;ve done all my homeworks<br>( T&ocirc;i đ&atilde; l&agrave;m hết b&agrave;i tập về nh&agrave; )</em></li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>- H&agrave;nh động bắt đầu ở qu&aacute; khứ v&agrave; đang tiếp tục ở hiện tại</td>\r\n                <td>\r\n                    <ul>\r\n                        <li><em>They&rsquo;ve been married for nearly Forty years<br>( Họ đ&atilde; kết h&ocirc;n được 40 năm. )</em></li>\r\n                        <li><em>He has lived in Liverpool all his life<br>(Anh ấy đ&atilde; sống cả đời ở Liverpool. )</em></li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <p>- H&agrave;nh động đ&atilde; từng l&agrave;m trước đ&acirc;y v&agrave; b&acirc;y giờ vẫn c&ograve;n l&agrave;m</p>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li><em>She has written three books and she is working on another book<br>C&ocirc; ấy đ&atilde; viết được 3 cuốn s&aacute;ch v&agrave; đang viết cuốn tiếp theo</em></li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <p>- Một kinh nghiệm cho tới thời điểm hiện tại (thường d&ugrave;ng trạng từ ever )</p>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li><em>My last birthday was the worst day I&rsquo;ve ever had</em><br><em>Sinh nhật năm ngo&aacute;i l&agrave; ng&agrave;y tệ nhất đời t&ocirc;i</em></li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <p>- Về một h&agrave;nh động trong qu&aacute; khứ nhưng quan trọng tại thời điểm n&oacute;i</p>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li><em>I can&rsquo;t get my house. I&rsquo;ve lost my keys.</em><br><em>(T&ocirc;i kh&ocirc;ng thể v&agrave;o nh&agrave; được.T&ocirc;i đ&aacute;nh mất ch&ugrave;m ch&igrave;a kh&oacute;a của m&igrave;nh rồi )</em></li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p>&nbsp;</p>\r\n    <p><strong>III. DẤU HIỆU NHẬN BIẾT TH&Igrave; HIỆN TẠI HO&Agrave;N TH&Agrave;NH</strong></p>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>\r\n                    <ul>\r\n                        <li>Just, recently, lately: gần đ&acirc;y, vừa mới</li>\r\n                    </ul>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li>For + N &ndash; qu&atilde;ng thời gian: trong khoảng (for a year, for a long time, &hellip;)</li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <ul>\r\n                        <li>Already: rồi</li>\r\n                    </ul>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li>Since + N &ndash; mốc/điểm thời gian: từ khi (since 1992, since June, &hellip;)</li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <ul>\r\n                        <li>Before: trước đ&acirc;y</li>\r\n                    </ul>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li>Yet: chưa (d&ugrave;ng trong c&acirc;u phủ định v&agrave; c&acirc;u hỏi)</li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <ul>\r\n                        <li>Ever: đ&atilde; từng</li>\r\n                    </ul>\r\n                </td>\r\n                <td>\r\n                    <ul>\r\n                        <li>So far = until now = up to now = up to the present: cho đến b&acirc;y giờ</li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td>\r\n                    <ul>\r\n                        <li>Never: chưa từng, kh&ocirc;ng bao giờ</li>\r\n                    </ul>\r\n                </td>\r\n                <td>&nbsp;</td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n</div>', 3);
INSERT INTO `lesson` (`id_lesson`, `name_lesson`, `content_lesson`, `id_detaillesson`) VALUES
(6, 'Danh động từ (Gerund) và Động từ nguyên mẫu trong tiếng Anh', '<h2>Trong tiếng Anh, danh động từ (gerund) v&agrave; động từ nguy&ecirc;n mẫu (infinitives) l&agrave; hai dạng động từ thường gặp nhất trong c&aacute;c b&agrave;i thi Tiếng Anh v&agrave; cả trong giao tiếp.</h2>\r\n<div>\r\n    <p><strong>I. TỔNG QUAN VỀ DANH ĐỘNG TỪ V&Agrave; ĐỘNG TỪ NGUY&Ecirc;N MẪU</strong></p>\r\n    <p><strong>Gerund</strong> ( Danh động từ ) v&agrave; <strong>Infinitives</strong> ( Động từ nguy&ecirc;n mẫu ) l&agrave; hai dạng của động từ c&oacute; thể được sử dụng để thay thế cho danh từ trong một c&acirc;u, thường để chỉ c&aacute;c h&agrave;nh động hơn l&agrave; chỉ người hay đối tượng.&nbsp;</p>\r\n    <p><strong>II. DANH ĐỘNG TỪ | GERUND (-ING FORM)</strong></p>\r\n</div>\r\n<div>\r\n    <p><strong>1.&nbsp;Kh&aacute;i niệm</strong></p>\r\n    <p><strong>Gerund</strong> ( danh động từ ) l&agrave; danh từ được h&igrave;nh th&agrave;nh bằng c&aacute;ch th&ecirc;m đu&ocirc;i ing v&agrave;o động từ.</p>\r\n    <ul>\r\n        <li><em>Eg: coming, building, teaching&hellip;</em></li>\r\n    </ul>\r\n    <p><strong>- Phủ định của danh động từ được h&igrave;nh th&agrave;nh bằng c&aacute;ch th&ecirc;m not v&agrave;o trước V-ing.</strong></p>\r\n    <ul>\r\n        <li><em>Eg: not making, not opening&hellip;</em></li>\r\n    </ul>\r\n    <p><strong>- Cũng c&oacute; thể th&ecirc;m t&iacute;nh từ sở hữu v&agrave;o trước danh động từ để n&oacute;i r&otilde; chủ thể thực hiện h&agrave;nh động.</strong></p>\r\n    <ul>\r\n        <li><em>Eg: my turning on the air conditioner.</em></li>\r\n    </ul>\r\n    <p><strong>2. C&aacute;ch sử dụng danh động từ ( Gerund )</strong></p>\r\n    <p><strong>- D&ugrave;ng l&agrave;m chủ ngữ trong c&acirc;u.</strong></p>\r\n    <ul>\r\n        <li><em>Eg: Reading helps you improve your vocabulary.</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng l&agrave;m bổ ngữ cho động từ</strong></p>\r\n    <ul>\r\n        <li><em>Eg: Her favorite hobby is collecting stamps.&nbsp;(Sở th&iacute;ch của c&ocirc; ấy l&agrave; sưu tầm tem.)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng l&agrave;m t&acirc;n ngữ của động từ</strong></p>\r\n    <ul>\r\n        <li><em>Eg: He loves surfing the Internet.&nbsp;(Anh ấy th&iacute;ch lướt Internet.)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng sau giới từ (on, in, by, at&hellip;) v&agrave; li&ecirc;n từ (after, before, when, while&hellip;)</strong></p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>Young people are very much interested <strong><u>in</u></strong> travelling.</em></li>\r\n        <li><em>He cleaned his room <u><strong>before</strong></u> going out with his friends.&nbsp;</em><em>(Anh ấy đ&atilde; dọn dẹp ph&ograve;ng m&igrave;nh trước khi đi chơi với bạn b&egrave;.)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng sau một số động từ v&agrave; cụm động từ sau</strong>: enjoy, avoid, admit, appreciate, mind, finish, practice, advise, suggest, recommend, postpone, delay, consider, hate, like, love, deny, detest, keep, miss, imagine, mention, risk, recall, risk, quiet, waste (time), forbid, permit, resent, escape, cant&rsquo; help, can&rsquo;t bear / can&rsquo;t stand, be used to, get used to, look forward to, it&rsquo;s no use / it&rsquo;s no good, be busy, be worth&hellip;</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>They enjoyed working on the boat.&nbsp;(Họ rất th&iacute;ch l&agrave;m việc tr&ecirc;n thuyền.)</em></li>\r\n        <li><em>The man admitted stealing the company&rsquo;s money.&nbsp;(Người đ&agrave;n &ocirc;ng ấy thừa nhận ăn cắp tiền của c&ocirc;ng ty.)</em></li>\r\n    </ul>\r\n    <p><strong>III. INFINITIVES - Động từ nguy&ecirc;n mẫu</strong></p>\r\n    <p><strong>1. Kh&aacute;i niệm</strong></p>\r\n    <p>Infinitives l&agrave; h&igrave;nh thức động từ nguy&ecirc;n mẫu.</p>\r\n    <p><strong>- C&oacute; 2 loại động từ nguy&ecirc;n mẫu:</strong></p>\r\n    <ul>\r\n        <li><em>Động từ nguy&ecirc;n mẫu c&oacute; &quot;to&quot; (to infinitives)&nbsp;</em></li>\r\n        <li><em>Động từ nguy&ecirc;n dạng kh&ocirc;ng to (bare infinitives).</em></li>\r\n    </ul>\r\n    <p>- Để thuận tiện, người Anh &lsquo;ngầm&rsquo; quy ước rằng khi n&oacute;i &lsquo;động từ nguy&ecirc;n mẫu&rsquo; (infinitives) c&oacute; nghĩa l&agrave; &lsquo;động từ nguy&ecirc;n mẫu c&oacute; to&rsquo; c&ograve;n khi muốn n&oacute;i &lsquo;động từ nguy&ecirc;n mẫu kh&ocirc;ng to&rsquo; th&igrave; người ta phải n&oacute;i đầy đủ &lsquo;infinitives without to&rsquo;.</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>Infinitive: to learn, to watch, to play&hellip;</em></li>\r\n        <li><em>Bare infinitive: learn, watch, play&hellip;</em></li>\r\n    </ul>\r\n    <p><strong>- Phủ định của động từ nguy&ecirc;n mẫu được h&igrave;nh th&agrave;nh bằng c&aacute;ch th&ecirc;m &quot;not&quot; v&agrave;o trước &quot;to V&quot; hoặc &quot;V&quot;.</strong></p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>Infinitive: not to learn, not to watch, not to play&hellip;</em></li>\r\n        <li><em>Bare infinitive: not learn, not watch, not play&hellip;</em></li>\r\n    </ul>\r\n    <p><strong>2. C&aacute;ch sử dụng INFINITIVES - Động từ nguy&ecirc;n mẫu</strong></p>\r\n    <p><strong>a) Động từ nguy&ecirc;n mẫu c&oacute; to:</strong></p>\r\n    <p><strong>- D&ugrave;ng l&agrave;m chủ ngữ trong c&acirc;u:</strong></p>\r\n    <ul>\r\n        <li><em>&nbsp;Eg: To learn English well is important to your future job.</em><em>&nbsp;(Học tiếng Anh rất tốt cho c&ocirc;ng việc tương lai của bạn)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng l&agrave;m bổ ngữ cho động từ:</strong></p>\r\n    <ul>\r\n        <li><em>Eg: The most important thing for you now is to learn hard.&nbsp;(Điều quan trọng nhất đối với bạn l&agrave; học tập chăm chỉ.)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng l&agrave;m t&acirc;n ngữ của động từ, t&iacute;nh từ:</strong></p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>He wants to learn English.&nbsp;(Anh ấy muốn học tiếng Anh.)</em></li>\r\n        <li><em>I am pleased to hear that you have passed your exam.</em><em>&nbsp;(T&ocirc;i mừng khi biết rằng bạn đ&atilde; vượt qua kỳ thi đ&oacute;)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng sau h&igrave;nh thức bị động của động từ số 1:</strong></p>\r\n    <ul>\r\n        <li><em>Eg: &nbsp;We were made to work overtime yesterday.&nbsp;</em><em>(Ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m để l&agrave;m th&ecirc;m giờ ng&agrave;y h&ocirc;m qua.)</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng sau động từ số 1 v&agrave; t&acirc;n ngữ:</strong></p>\r\n    <ul>\r\n        <li><em>Eg: The doctor advised us to take a holiday for a rest.</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng sau t&acirc;n ngữ l&agrave; c&aacute;c từ để hỏi (trừ why):</strong></p>\r\n    <p><em>Eg: We completely didn&rsquo;t know what to do at that time.&nbsp;</em><em>(Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n kh&ocirc;ng biết phải l&agrave;m g&igrave; v&agrave;o thời điểm đ&oacute;.)</em></p>\r\n    <p>- <strong>D&ugrave;ng sau một số động từ sau</strong>: Agree , aim, arrange, attempt, care, choose, appear, afford, ask, demand, expect, hesitate, intend, invite, want, wish, hope, promise, decide, start, learn, fail, plan, manage, pretend, remind, persuade, encourage, force, order, urge, seem, tend, threaten, wait, intend, mean, happen, manage, &hellip;</p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>She agreed to speak before the game.</em></li>\r\n        <li><em>He appeared to lose his weight.&nbsp;</em></li>\r\n    </ul>\r\n    <table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n        <tbody>\r\n            <tr>\r\n                <td>\r\n                    <p><strong>CH&Uacute; &Yacute;:</strong></p>\r\n                    <p>Cả gerund v&agrave; infinitive đều c&oacute; thể được d&ugrave;ng l&agrave;m chủ ngữ, bổ ngữ v&agrave; t&acirc;n ngữ của động từ. Tuy nhi&ecirc;n, khi đ&oacute;ng vai tr&ograve; l&agrave;m chủ ngữ v&agrave; bổ ngữ của động từ, gerund thường được sử dụng phổ biến hơn (đặc biệt l&agrave; trong văn n&oacute;i), infinitive chỉ được sử dụng khi người n&oacute;i muốn nhấn mạnh v&agrave;o mục đ&iacute;ch của h&agrave;nh động. (90% động từ l&agrave;m chủ ngữ v&agrave; bổ ngữ cho động từ được chia ở dạng gerund).</p>\r\n                    <p>Eg:</p>\r\n                    <ul>\r\n                        <li><em>Learning is important. &agrave; phổ biến</em></li>\r\n                        <li><em>To learn is important. &agrave; &iacute;t phổ biến</em></li>\r\n                        <li><em>The most important thing is learning. &agrave; phổ biến</em></li>\r\n                        <li><em>The most important thing is to learn. &agrave; &iacute;t phổ biến</em></li>\r\n                    </ul>\r\n                    <p>- Việc chia động từ ở gerund hay infinitive khi động từ đ&oacute;ng vai tr&ograve; l&agrave;m t&acirc;n ngữ phụ thuộc v&agrave;o động từ ch&iacute;nh.</p>\r\n                    <p>Eg: &nbsp;</p>\r\n                    <ul>\r\n                        <li>We hate cooking. &agrave; hate + Ving</li>\r\n                        <li>We want to eat out. &agrave; want + to V</li>\r\n                    </ul>\r\n                </td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <p><strong>b) Động từ nguy&ecirc;n mẫu kh&ocirc;ng to:</strong></p>\r\n    <p><strong>- D&ugrave;ng sau c&aacute;c động từ khuyết thiếu:</strong></p>\r\n    <ul>\r\n        <li><em>Eg: I can speak Japanese.&nbsp;</em><em>(T&ocirc;i c&oacute; thể n&oacute;i tiếng Nhật.)</em></li>\r\n    </ul>\r\n    <p><strong>- Ch&uacute; &yacute;: khuyết thiếu ought to V.</strong></p>\r\n    <ul>\r\n        <li><em>Eg: We ought to work hard at this time of the year.</em><br><em>Ch&uacute;ng ta phải l&agrave;m việc chăm chỉ v&agrave;o thời điểm n&agrave;y trong năm.</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng trong thể mệnh lệnh thức:</strong></p>\r\n    <ul>\r\n        <li><em>Eg: Look at the picture and answer the questions.</em></li>\r\n    </ul>\r\n    <p><strong>- D&ugrave;ng trong một số cấu tr&uacute;c: would rather, had better+ V v&agrave; have sb, let sb, make sb + V.</strong></p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>They made him repeat the whole story.</em></li>\r\n        <li><em>We had the mechanic service our car last week.</em></li>\r\n    </ul>\r\n    <p><strong>CH&Uacute; &Yacute;:</strong></p>\r\n    <p>+ Help c&oacute; thể d&ugrave;ng cả động từ nguy&ecirc;n dạng c&oacute; to v&agrave; động từ nguy&ecirc;n dạng kh&ocirc;ng to ở sau.</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>They helped us (to) clean our classroom.<br><em>Họ đ&atilde; gi&uacute;p ch&uacute;ng t&ocirc;i (để) dọn dẹp lớp học.</em></em></li>\r\n    </ul>\r\n    <p>+ Một số động từ đặc biệt (need, dare) c&oacute; thể được d&ugrave;ng cả như động từ khuyết thiếu lẫn động từ thường. Khi được d&ugrave;ng như động từ khuyết thiếu, động từ đi sau sẽ để ở nguy&ecirc;n mẫu kh&ocirc;ng to; khi được d&ugrave;ng như động từ thường, động từ đi sau sẽ chia ở nguy&ecirc;n mẫu c&oacute; to.<br>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>We needn&rsquo;t book in advance</em></li>\r\n        <li><em>We don&rsquo;t need to book in advance.</em></li>\r\n    </ul>\r\n    <p><strong>III. KHI N&Agrave;O D&Ugrave;NG GERUNDS V&Agrave; KHI N&Agrave;O D&Ugrave;NG INFINITIVES?</strong></p>\r\n    <p>C&oacute; một số động từ c&oacute; thể theo sau bởi cả gerunds lẫn infinitives. Trong một số trường hợp, việc động từ thứ 2 chia ở dạng V-ing hay to V kh&ocirc;ng l&agrave;m thay đổi hoặc chỉ thay đổi kh&ocirc;ng đ&aacute;ng kể nghĩa của động từ ch&iacute;nh; trong những trường hợp kh&aacute;c, việc d&ugrave;ng V-ing hay to V c&oacute; thể l&agrave;m thay đổi nghĩa của động từ ch&iacute;nh.</p>\r\n    <p><u><strong>Kh&ocirc;ng l&agrave;m thay đổi hoặc thay đổi kh&ocirc;ng đ&aacute;ng kể nghĩa của động từ ch&iacute;nh:</strong></u></p>\r\n    <p>C&aacute;c động từ start, begin, continue, love, like, prefer c&oacute; thể sử dụng cả V-ing lẫn to V theo sau.</p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>I love reading books.</em></li>\r\n        <li><em>I love to go out with my friends.</em></li>\r\n    </ul>\r\n    <p>- Ch&uacute; &yacute;: Ta d&ugrave;ng like/love/prefer + V-ing hoặc like/love/prefer + to V nhưng would like/would love/would prefer + to V.<br>- Ch&uacute; &yacute;: Ta c&oacute; thể n&oacute;i She began laughing/to laugh. They are beginning to shout nhưng thường kh&ocirc;ng n&oacute;i They are beginning shouting.</p>\r\n    <p><strong><u>&nbsp;L&agrave;m thay đổi nghĩa của động từ ch&iacute;nh:</u></strong></p>\r\n    <p>+&nbsp;<strong>remember / forget + V-ing</strong>: nhớ / qu&ecirc;n việc đ&atilde; xảy ra rồi (trong qu&aacute; khứ)<br>+ <strong>remember / forget + to V</strong>: nhớ / qu&ecirc;n việc chưa, sắp xảy ra (trong tương lai)</p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>Remeber to turn off the light before leaving home.</em></li>\r\n        <li><em>I remember meeting you before.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>stop + V-ing:</strong> dừng việc đang l&agrave;m lại<br>+ <strong>stop + to V</strong>: dừng lại để chuyển sang việc kh&aacute;c</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>We stopped talking when the teacher came in.</em></li>\r\n        <li><em>On the way home, I stopped at the post office to buy a newspaper.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>try + V-ing</strong>: thử l&agrave;m g&igrave;<br>+ <strong>try + to V:</strong> cố gắng l&agrave;m g&igrave;</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>You can try mixing these two ingredients together and see what will happen</em></li>\r\n        <li><em>You should try to improve your listening skill.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>regret + V-ing</strong>: hối tiếc rằng đ&atilde; l&agrave;m g&igrave;<br>+&nbsp;<strong>regret + to V</strong>: tiếc rằng sắp phải l&agrave;m g&igrave; (th&ocirc;ng b&aacute;o tin xấu)<br>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>I regret being rude to him yesterday.</em></li>\r\n        <li><em>I regret to inform you that your application has been denied.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>need + V-ing = need + to be P2</strong>: cần được (bị động)<br>+<strong>&nbsp;need + to V</strong>: cần (chủ động)<br>Eg: &nbsp;</p>\r\n    <ul>\r\n        <li><em>I need to wash my car.</em></li>\r\n        <li><em>My car is very dirty. It needs washing.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>refuse + V-ing</strong>: phủ nhận l&agrave; đ&atilde; l&agrave;m g&igrave; (h&agrave;nh động đ&atilde; xảy ra rồi)<br>+ <strong>refuse + to V</strong>: từ chối kh&ocirc;ng muốn l&agrave;m g&igrave; (h&agrave;nh động sẽ kh&ocirc;ng xảy ra)</p>\r\n    <p>Eg:&nbsp;</p>\r\n    <ul>\r\n        <li><em>He refused going out with her last night.</em></li>\r\n        <li><em>He refused to lend me some money.</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>go on + V-ing</strong>: tiếp tục việc đang l&agrave;m<br>+ <strong>go on + to V</strong>: tiếp tục một việc mới sau khi ho&agrave;n th&agrave;nh việc đang l&agrave;m</p>\r\n    <p>Eg:</p>\r\n    <ul>\r\n        <li><em>After finishing her BA, she went on to get a master&rsquo;s degree.</em></li>\r\n        <li><em>She went on watching TV</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>mean + V-ing</strong>: c&oacute; nghĩa l&agrave;, c&oacute; li&ecirc;n quan đến<br>+&nbsp;<strong>mean + to V</strong>: c&oacute; chủ &yacute;, c&oacute; kế hoạch l&agrave;m g&igrave;<br>Eg:</p>\r\n    <ul>\r\n        <li><em>Working harder means getting more money.</em></li>\r\n        <li><em>He meant to move the Newcastle</em></li>\r\n    </ul>\r\n    <p>+&nbsp;<strong>D&ugrave;ng sau c&aacute;c động từ chỉ tri gi&aacute;c v&agrave; t&acirc;n ngữ</strong>: hear, sound, smell, taste, feel, watch, notice, see, listen, find .. + O + V-ing để chỉ khoảnh khắc h&agrave;nh động đang diễn ra.<br>+&nbsp;<strong>D&ugrave;ng sau c&aacute;c động từ chỉ tri gi&aacute;c v&agrave; t&acirc;n ngữ</strong>: hear, sound, smell, taste, feel, watch, notice, see, listen, find .. + O + V để chỉ sự ho&agrave;n tất của h&agrave;nh động &ndash; nghe hoặc thấy to&agrave;n bộ sự việc diễn ra<br>Eg:</p>\r\n    <ul>\r\n        <li><em>When I entered the room, I found him reading a book</em></li>\r\n        <li><em>I saw her go with a strange man yesterday.</em></li>\r\n    </ul>\r\n</div>', 4),
(7, 'ACCOUNTING (danh từ)', '<h3>C&aacute;ch ph&aacute;t &acirc;m</h3>\r\n<audio controls>\r\n  <source src=\"../resources/audio/accounting.mp3\" type=\"audio/mpeg\">\r\n</audio>\r\n<ul>\r\n    <li><a href=\"\" title=\"Wiktionary:IPA\">IPA</a>:&nbsp;/ə.ˈkɑʊn.tiɳ/</li>\r\n</ul>\r\n<h3>Danh từ</h3>\r\n<p><strong>accounting</strong> (<em><a href=\"\" title=\"Phụ lục:Từ điển thuật ngữ\">kh&ocirc;ng đếm được</a></em>)&nbsp;/ə.ˈkɑʊn.tiɳ/</p>\r\n<ol>\r\n    <li>Sự <a href=\"\" title=\"thanh toán\">thanh to&aacute;n</a>, sự <a href=\"\" title=\"tính toán\">t&iacute;nh to&aacute;n</a> (<a href=\"\" title=\"tiền nong\">tiền nong</a>, <a href=\"\" title=\"sổ sách\">sổ s&aacute;ch</a>).</li>\r\n    <li>Sự <a href=\"\" title=\"giải thích\">giải th&iacute;ch</a>.<dl>\r\n            <dd><em>there is no <strong>accounting</strong> for his behaviours</em> &mdash; kh&ocirc;ng thể n&agrave;o giải th&iacute;ch được th&aacute;i độ đối sử của hắn</dd>\r\n        </dl>\r\n    </li>\r\n    <li>Sự <a href=\"\" title=\"hạch toán (trang không tồn tại)\">hạch to&aacute;n</a>.</li>\r\n</ol>\r\n<p><img src=\"https://tienganhmoingay.com/static/Vocabulary/images/word_images/accounting.jpg\" alt=\"Minh họa nghĩa của từ accounting\" style=\"width: 335px;\"></p>', 5),
(8, 'BUILD UP (cụm động từ)', '<h3>C&aacute;ch ph&aacute;t &acirc;m</h3><audio controls=\"\">\r\n    <source src=\"../resources/audio/build-up.mp3\" type=\"audio/mpeg\"></audio>\r\n<ul>\r\n    <li><a href=\"%20\" title=\"Wiktionary:IPA\">IPA</a>: UK &nbsp;/ˈbɪld.ʌp/ US /ˈbɪld.ʌp/&nbsp;</li>\r\n</ul>\r\n<h3>Cụm động từ</h3>\r\n<h1><span style=\"font-size: 18px;\">BUILD UP (cụm động từ) &nbsp;/bɪld ʌp/</span></h1>\r\n<ol>\r\n    <li>\r\n        <p>Ph&aacute;t triển (một c&ocirc;ng ty)</p>\r\n    </li>\r\n    <li>\r\n        <p>Tăng th&ecirc;m, tăng l&ecirc;n</p>\r\n    </li>\r\n</ol>\r\n<p><img src=\"https://tienganhmoingay.com/static/Vocabulary/images/word_images/buildup.jpg\" alt=\"Minh họa nghĩa của từ build up\"><br><br></p>\r\n<p><br></p>', 6),
(9, 'BARGAIN', '<h3>C&aacute;ch ph&aacute;t &acirc;m</h3>\r\n<audio controls>\r\n  <source src=\"../resources/audio/bargain.mp3\" type=\"audio/mpeg\">\r\n</audio>\r\n<ul>\r\n    <li>IPA: /ˈbɑːr.ɡən/</li>\r\n    <li>Hoa Kỳ<sup>(trợ gi&uacute;p &middot;&nbsp;chi tiết)</sup> [ˈbɑːr.ɡən]</li>\r\n</ul>\r\n<h3>Danh từ</h3>\r\n<p><strong>bargain</strong> /ˈbɑːr.ɡən/</p>\r\n<ol>\r\n    <li>Sự <a href=\"\" title=\"mặc cả\">mặc cả</a>, sự <a href=\"\" title=\"thoả thuận\">thoả thuận</a> <a href=\"\" title=\"mua bán\">mua b&aacute;n</a>; <a href=\"\" title=\"giao kèo\">giao k&egrave;o</a> <a href=\"\" title=\"mua bán\">mua b&aacute;n</a>.<dl>\r\n            <dd><em>to make a <strong>bargain</strong> with somebody</em> &mdash; mặc cả với ai</dd>\r\n        </dl>\r\n    </li>\r\n    <li><a href=\"\" title=\"món\">M&oacute;n</a> <a href=\"\" title=\"mua\">mua</a> được, <a href=\"\" title=\"món\">m&oacute;n</a> <a href=\"\" title=\"hời\">hời</a>, <a href=\"\" title=\"món\">m&oacute;n</a> <a href=\"\" title=\"bở\">bở</a>, <a href=\"\" title=\"cơ hội\">cơ hội</a> tốt (bu&ocirc;n b&aacute;n).<dl>\r\n            <dd><em>that was a <strong>bargain</strong> indeed!</em> &mdash; m&oacute;n ấy bở thật đấy!</dd>\r\n            <dd><em>a good <strong>bargain</strong></em> &mdash; n&oacute;n hời</dd>\r\n            <dd><em>a bad <strong>bargain</strong></em> &mdash; m&oacute;n hớ</dd>\r\n        </dl>\r\n    </li>\r\n</ol>\r\n<h4>Th&agrave;nh ngữ</h4>\r\n<ul>\r\n    <li><strong>to be off (with) one&apos;s bargain</strong>:&nbsp;<a href=\"https://vi.wiktionary.org/wiki/hu%E1%BB%B7_b%E1%BB%8F\" title=\"huỷ bỏ\">Huỷ bỏ</a> <a href=\"https://vi.wiktionary.org/wiki/giao_k%C3%A8o\" title=\"giao kèo\">giao k&egrave;o</a> <a href=\"https://vi.wiktionary.org/wiki/mua_b%C3%A1n\" title=\"mua bán\">mua b&aacute;n</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/th%E1%BA%A5t\" title=\"thất\">thất</a> ước trong&nbsp;<a href=\"https://vi.wiktionary.org/wiki/vi%E1%BB%87c\" title=\"việc\">việc</a> <a href=\"https://vi.wiktionary.org/wiki/mua_b%C3%A1n\" title=\"mua bán\">mua b&aacute;n</a>.</li>\r\n    <li><strong>to bind a bargain</strong>:&nbsp;Xem&nbsp;<a href=\"https://vi.wiktionary.org/wiki/bind\" title=\"bind\">Bind</a>.</li>\r\n    <li><strong>to buy at a bargain</strong>:&nbsp;<a href=\"https://vi.wiktionary.org/wiki/mua\" title=\"mua\">Mua</a> được&nbsp;<a href=\"https://vi.wiktionary.org/wiki/gi%C3%A1\" title=\"giá\">gi&aacute;</a> <a href=\"https://vi.wiktionary.org/wiki/h%E1%BB%9Di\" title=\"hời\">hời</a>.</li>\r\n    <li><strong>to close (conclude, strike, settle) a bargain</strong>:&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ng%E1%BA%A3\" title=\"ngả\">Ngả</a> <a href=\"https://vi.wiktionary.org/wiki/gi%C3%A1\" title=\"giá\">gi&aacute;</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/tho%E1%BA%A3_thu%E1%BA%ADn\" title=\"thoả thuận\">thoả thuận</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/k%C3%BD\" title=\"ký\">k&yacute;</a> <a href=\"https://vi.wiktionary.org/wiki/giao_k%C3%A8o\" title=\"giao kèo\">giao k&egrave;o</a> <a href=\"https://vi.wiktionary.org/wiki/mua_b%C3%A1n\" title=\"mua bán\">mua b&aacute;n</a>.</li>\r\n    <li><strong>to drive a hard bargain</strong>:&nbsp;<a href=\"https://vi.wiktionary.org/wiki/m%E1%BA%B7c_c%E1%BA%A3\" title=\"mặc cả\">Mặc cả</a>,&nbsp;<a href=\"https://vi.wiktionary.org/w/index.php?title=c%C3%B2_k%C3%A8&action=edit&redlink=1\" title=\"cò kè (trang không tồn tại)\">c&ograve; k&egrave;</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/b%E1%BB%9Bt\" title=\"bớt\">bớt</a> một th&ecirc;m&nbsp;<a href=\"https://vi.wiktionary.org/wiki/hai\" title=\"hai\">hai</a> <a href=\"https://vi.wiktionary.org/wiki/m%C3%A3i\" title=\"mãi\">m&atilde;i</a>.</li>\r\n    <li><strong>into the bargain</strong>: Th&ecirc;m v&agrave;o đ&oacute;,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/h%C6%A1n_n%E1%BB%AFa\" title=\"hơn nữa\">hơn nữa</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/v%E1%BA%A3_l%E1%BA%A1i\" title=\"vả lại\">vả lại</a>.</li>\r\n    <li><strong>wet (Dutch) bargain</strong>: Cuộc&nbsp;<a href=\"https://vi.wiktionary.org/wiki/th%C6%B0%C6%A1ng_l%C6%B0%E1%BB%A3ng\" title=\"thương lượng\">thương lượng</a> <a href=\"https://vi.wiktionary.org/wiki/mua_b%C3%A1n\" title=\"mua bán\">mua b&aacute;n</a> <a href=\"https://vi.wiktionary.org/wiki/k%E1%BA%BFt_th%C3%BAc\" title=\"kết thúc\">kết th&uacute;c</a> bằng&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ch%E1%BA%A7u\" title=\"chầu\">chầu</a> <a href=\"https://vi.wiktionary.org/wiki/r%C6%B0%E1%BB%A3u\" title=\"rượu\">rượu</a> <a href=\"https://vi.wiktionary.org/wiki/m%E1%BB%ABng\" title=\"mừng\">mừng</a>.</li>\r\n</ul>\r\n<h3>Động từ</h3>\r\n<p><strong>bargain</strong> /ˈbɑːr.ɡən/</p>\r\n<ol>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/m%E1%BA%B7c_c%E1%BA%A3\" title=\"mặc cả\">Mặc cả</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/th%C6%B0%C6%A1ng_l%C6%B0%E1%BB%A3ng\" title=\"thương lượng\">thương lượng</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/mua_b%C3%A1n\" title=\"mua bán\">mua b&aacute;n</a>.<dl>\r\n            <dd><em>to&nbsp;<strong>bargain</strong> with somebody for something</em> &mdash; thương lượng (mặc cả) với ai để mua b&aacute;n c&aacute;i g&igrave;</dd>\r\n        </dl>\r\n    </li>\r\n</ol>\r\n<h4>Th&agrave;nh ngữ</h4>\r\n<ul>\r\n    <li><strong>to bargain away</strong>:&nbsp;<a href=\"https://vi.wiktionary.org/wiki/b%C3%A1n\" title=\"bán\">B&aacute;n</a> <a href=\"https://vi.wiktionary.org/wiki/gi%C3%A1\" title=\"giá\">gi&aacute;</a> <a href=\"https://vi.wiktionary.org/wiki/h%E1%BA%A1\" title=\"hạ\">hạ</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/b%C3%A1n\" title=\"bán\">b&aacute;n</a> <a href=\"https://vi.wiktionary.org/wiki/l%E1%BB%97\" title=\"lỗ\">lỗ</a>.</li>\r\n    <li><strong>to bargain for</strong>:<ol>\r\n            <li><a href=\"https://vi.wiktionary.org/wiki/mong\" title=\"mong\">Mong</a> đợi,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ch%E1%BB%9D\" title=\"chờ\">chờ</a> đ&oacute;n;&nbsp;<a href=\"https://vi.wiktionary.org/wiki/t%C3%ADnh\" title=\"tính\">t&iacute;nh</a> trước.<dl>\r\n                    <dd><em>that&apos;s more than I bargained</em> &mdash; điều đ&oacute; thật qu&aacute; với sự mong đợi của t&ocirc;i</dd>\r\n                </dl>\r\n            </li>\r\n        </ol>\r\n    </li>\r\n</ul>', 7),
(10, 'ADVANCE', '<h3>C&aacute;ch ph&aacute;t &acirc;m</h3>\r\n<audio controls>\r\n  <source src=\"../resources/audio/ADVANCE.mp3\" type=\"audio/mpeg\">\r\n</audio>\r\n<ul>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/Wiktionary:IPA\" title=\"Wiktionary:IPA\">IPA</a>: /əd.ˈv&aelig;nts/</li>\r\n    <li>&nbsp;<a href=\"https://upload.wikimedia.org/wikipedia/commons/5/5c/En-us-advance.ogg\" title=\"En-us-advance.ogg\">Hoa Kỳ</a> <sup>(<a href=\"https://vi.wiktionary.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:%C3%82m_thanh\" title=\"Trợ giúp:Âm thanh\">trợ gi&uacute;p</a> &middot; <a href=\"https://vi.wiktionary.org/wiki/T%E1%BA%ADp_tin:En-us-advance.ogg\" title=\"Tập tin:En-us-advance.ogg\">chi tiết</a>)</sup> [əd.ˈv&aelig;nts]</li>\r\n</ul>\r\n<h3>Danh từ</h3>\r\n<p><strong>advance</strong> /əd.ˈv&aelig;nts/</p>\r\n<ol>\r\n    <li>Sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn\" title=\"tiến\">tiến</a> <a href=\"https://vi.wiktionary.org/wiki/l%C3%AAn\" title=\"lên\">l&ecirc;n</a>, sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn_t%E1%BB%9Bi\" title=\"tiến tới\">tiến tới</a>, sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn_b%E1%BB%99\" title=\"tiến bộ\">tiến bộ</a>.</li>\r\n    <li>Sự đề&nbsp;<a href=\"https://vi.wiktionary.org/wiki/b%E1%BA%A1t\" title=\"bạt\">bạt</a>, sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/th%C4%83ng\" title=\"thăng\">thăng</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ch%E1%BB%A9c\" title=\"chức\">chức</a>.</li>\r\n    <li>Sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/t%C4%83ng\" title=\"tăng\">tăng</a> <a href=\"https://vi.wiktionary.org/wiki/gi%C3%A1\" title=\"giá\">gi&aacute;</a>.</li>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/ti%E1%BB%81n\" title=\"tiền\">Tiền</a> đặt trước,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BB%81n\" title=\"tiền\">tiền</a> <a href=\"https://vi.wiktionary.org/wiki/tr%E1%BA%A3\" title=\"trả\">trả</a> trước.</li>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/ti%E1%BB%81n\" title=\"tiền\">Tiền</a> <a href=\"https://vi.wiktionary.org/w/index.php?title=cho_vay&action=edit&redlink=1\" title=\"cho vay (trang không tồn tại)\">cho vay</a>.</li>\r\n    <li>Sự theo đuổi, sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/l%C3%A0m_th%C3%A2n\" title=\"làm thân\">l&agrave;m th&acirc;n</a>.</li>\r\n    <li>(<em>Điện học</em>) Sự&nbsp;<a href=\"https://vi.wiktionary.org/wiki/s%E1%BB%9Bm\" title=\"sớm\">sớm</a> <a href=\"https://vi.wiktionary.org/wiki/pha\" title=\"pha\">pha</a>.</li>\r\n</ol>\r\n<h4>Th&agrave;nh ngữ</h4>\r\n<ul>\r\n    <li><strong>advance copy</strong>:<ol>\r\n            <li><a href=\"https://vi.wiktionary.org/wiki/b%E1%BA%A3n\" title=\"bản\">Bản</a> (s&aacute;ch, t&agrave;i liệu,... ) đưa (cho t&aacute;c giả... )&nbsp;<a href=\"https://vi.wiktionary.org/wiki/tr%C6%B0%E1%BB%9Bc_khi\" title=\"trước khi\">trước khi</a> <a href=\"https://vi.wiktionary.org/wiki/xu%E1%BA%A5t_b%E1%BA%A3n\" title=\"xuất bản\">xuất bản</a>.</li>\r\n        </ol>\r\n    </li>\r\n    <li><strong>in advance</strong>:<ol>\r\n            <li><a href=\"https://vi.wiktionary.org/wiki/tr%C6%B0%E1%BB%9Bc\" title=\"trước\">Trước</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/s%E1%BB%9Bm\" title=\"sớm\">sớm</a>.<dl>\r\n                    <dd><em>to pay in&nbsp;<strong>advance</strong></em> &mdash; trả tiền trước</dd>\r\n                </dl>\r\n            </li>\r\n        </ol>\r\n    </li>\r\n    <li><strong>in advance of</strong>:<ol>\r\n            <li><a href=\"https://vi.wiktionary.org/wiki/tr%C6%B0%E1%BB%9Bc\" title=\"trước\">Trước</a>, đi trước,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn_b%E1%BB%99\" title=\"tiến bộ\">tiến bộ</a> hơn.<dl>\r\n                    <dd><em>Students are encouraged to read the lecture notes&nbsp;<strong>in advance of</strong> lectures.</em> &mdash; Sinh vi&ecirc;n được khuyến kh&iacute;ch đọc t&oacute;m lược b&agrave;i giảng trước giờ l&ecirc;n lớp.</dd>\r\n                    <dd><em>Marx&apos;s ideas ưere in&nbsp;<strong>advance</strong> of his age</em> &mdash; Những tư tưởng của M&aacute;c đ&atilde; đi trước thời đại của &ocirc;ng.</dd>\r\n                </dl>\r\n            </li>\r\n        </ol>\r\n    </li>\r\n</ul>\r\n<h3>Ngoại động từ</h3>\r\n<p><strong>advance</strong> <em>ngoại động từ</em> /əd.ˈv&aelig;nts/</p>\r\n<ol>\r\n    <li>Đưa&nbsp;<a href=\"https://vi.wiktionary.org/wiki/l%C3%AAn\" title=\"lên\">l&ecirc;n</a>, đưa&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ra\" title=\"ra\">ra</a> <a href=\"https://vi.wiktionary.org/wiki/ph%C3%ADa_tr%C6%B0%E1%BB%9Bc\" title=\"phía trước\">ph&iacute;a trước</a>.</li>\r\n    <li>Đề&nbsp;<a href=\"https://vi.wiktionary.org/wiki/xu%E1%BA%A5t\" title=\"xuất\">xuất</a>, đưa&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ra\" title=\"ra\">ra</a>.<dl>\r\n            <dd><em>to&nbsp;<strong>advance</strong> an opinion</em> &mdash; đưa ra một &yacute; kiến</dd>\r\n        </dl>\r\n    </li>\r\n    <li>Đề&nbsp;<a href=\"https://vi.wiktionary.org/wiki/b%E1%BA%A1t\" title=\"bạt\">bạt</a>,&nbsp;<a href=\"https://vi.wiktionary.org/w/index.php?title=th%C4%83ng_ch%E1%BB%A9c&action=edit&redlink=1\" title=\"thăng chức (trang không tồn tại)\">thăng chức</a> (cho ai).</li>\r\n    <li>L&agrave;m cho&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn_b%E1%BB%99\" title=\"tiến bộ\">tiến bộ</a>, l&agrave;m&nbsp;<a href=\"https://vi.wiktionary.org/wiki/ti%E1%BA%BFn\" title=\"tiến\">tiến</a> <a href=\"https://vi.wiktionary.org/wiki/mau\" title=\"mau\">mau</a> (khoa học... ).</li>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/th%C3%BAc\" title=\"thúc\">Th&uacute;c</a> đẩy (sự việc... ).</li>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/t%C4%83ng\" title=\"tăng\">Tăng</a>,&nbsp;<a href=\"https://vi.wiktionary.org/wiki/t%C4%83ng\" title=\"tăng\">tăng</a> <a href=\"https://vi.wiktionary.org/wiki/l%C3%AAn\" title=\"lên\">l&ecirc;n</a>.<dl>\r\n            <dd><em>to&nbsp;<strong>advance</strong> a price</em> &mdash; tăng gi&aacute;</dd>\r\n        </dl>\r\n    </li>\r\n    <li><a href=\"https://vi.wiktionary.org/wiki/tr%E1%BA%A3\" title=\"trả\">Trả</a> trước, đặt trước.<dl>\r\n            <dd><em>to&nbsp;<strong>advance</strong> a money</em> &mdash; đặt tiền trước</dd>\r\n        </dl>\r\n    </li>\r\n    <li><a href=\"https://vi.wiktionary.org/w/index.php?title=cho_vay&action=edit&redlink=1\" title=\"cho vay (trang không tồn tại)\">Cho vay</a> (tiền).</li>\r\n</ol>', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `name_media` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_media` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`id_media`, `name_media`, `description_media`) VALUES
(1, 'Đề 1 part 1 -1', 'https://storage.googleapis.com/kstoeic/sound/eco2018_Test01_0105.mp3'),
(2, 'Part 6 - 3', '<p>To: Customer Service Department<br>From: Kenneth Venkman<br>Subject: Incorrect billing statement<br>&nbsp;Date: July 20<br>I am contacting you once ____&nbsp; &nbsp;after receiving no reply to my prior e-mail regarding the problem with my gas bill for the month of June.<br>After receiving my bill for last month, I queried the charge that was included for unpaid gas in May. When I called your department about the issue, I ____&nbsp;&nbsp;that the incorrect charges would be removed and that a new bill would be sent to me by e-mail.<br>However, the new bill still includes these erroneous charges, which I have no intention of paying. Therefore, I have attached an image of a receipt ____&nbsp;&nbsp;&nbsp;that I paid my bill for the month of May in full on June 12. ____&nbsp;.<br>Sincerely,<br>&nbsp;Kenneth Venkman&nbsp;</p>'),
(3, 'Đề 1 part 1 -2', 'https://toeicspeakingmsngoc.com/images/audio/audio-1546316897_mozilgeecolc1000ver4at10part-1cutted.mp3'),
(4, '', ''),
(5, 'Đề 1 - part 1- 4', 'https://toeicspeakingmsngoc.com/images/audio/audio-1545176990_t2part-1cutted.mp3'),
(6, 'Đề 1 - part 1- 5', 'https://toeicspeakingmsngoc.com/images/audio/audio-1545177360_t3part-1cutted.mp3'),
(7, 'Đề 1 par1 - 6', 'https://toeicspeakingmsngoc.com/images/audio/audio-1545177567_t4part-1cutted.mp3'),
(8, 'Đề 1 part 2 - 1', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644279_t1part-2cutted.mp3'),
(9, 'Đề 1 part 2 - 2', 'https://toeicspeakingmsngoc.com/images/audio/audio-1545138952_t2part-2cutted.mp3'),
(10, 'Đề 1 part 3 - 11', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544648212_t1part-3cutted.mp3'),
(11, 'Đề 1 part 3 - 12', 'https://toeicspeakingmsngoc.com/images/audio/audio-1545317210_t2part-3cutted.mp3'),
(12, 'Đề 1 Part 4 - 13', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544714393_t1part-4cutted.mp3'),
(13, 'Không', ''),
(14, 'Đề 1 part 2 - 3', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644475_t1part-2cutted.mp3'),
(15, 'Đề 1 part 2 - 4', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644547_t1part-2cutted.mp3'),
(16, 'Đề 1 part 2 - 5', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644417_t1part-2cutted.mp3'),
(17, 'Đề 1 part 2 - 6', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644606_t1part-2cutted.mp3'),
(18, 'Đề 1 part 2 - 7', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644279_t1part-2cutted.mp3'),
(19, 'Đề 1 part 2 - 8', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644808_t1part-2cutted.mp3'),
(20, 'Đề 1 part 2 - 9', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644847_t1part-2cutted.mp3'),
(21, 'Đề 1 part 2 - 10', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644873_t1part-2cutted.mp3'),
(22, 'Đề 1 part 2 - 11', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644965_t1part-2cutted.mp3'),
(23, 'Đề 1 part 2 - 12', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544644987_t1part-2cutted.mp3'),
(24, 'Đề 1 part 2 - 13', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645014_t1part-2cutted.mp3'),
(25, 'Đề 1 part 2 - 14', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645081_t1part-2cutted.mp3'),
(26, 'Đề 1 part 2 - 15', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645123_t1part-2cutted.mp3'),
(27, 'Đề 1 part 2 - 16', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645146_t1part-2cutted.mp3'),
(28, 'Đề 1 part 2 - 17', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645177_t1part-2cutted.mp3'),
(29, 'Đề 1 part 2 - 18', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645204_t1part-2cutted.mp3'),
(30, 'Đề 1 part 2 - 19', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645228_t1part-2cutted.mp3'),
(31, 'Đề 1 part 2 - 20', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645260_t1part-2cutted.mp3'),
(32, 'Đề 1 part 2 - 21', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645319_t1part-2cutted.mp3'),
(33, 'Đề 1 part 2 -22', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645345_t1part-2cutted.mp3'),
(34, 'Đề 1 part 2 - 23', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645381_t1part-2cutted.mp3'),
(35, 'Đề 1 part 2 - 24', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645435_t1part-2cutted.mp3'),
(36, 'Đề 1 part 2 - 25', 'https://toeicspeakingmsngoc.com/images/audio/audio-1544645469_t1part-2cutted.mp3'),
(37, 'Part 6 - 4', '<p>Professor Alex Clarke<br>Miloven Research Laboratories Inc.<br>Renley Industrial Park<br>Birmingham, B15 1SU<br>Dear Professor Clarke,<br>I am a recent graduate of the University of Tayforth, where I obtained a first class honors degree in biotechnology. As a ------ &nbsp;motivated an individual, &nbsp;I felt that I should contact you directly rather than simply wait for a vacancy to be posted.<br>It is specifically for that reason that &nbsp;I ------ &nbsp;to you to inquire whether there are any available positions your research team.<br>After following your work and achievements closely over the past few years, I feel that I could greatly benefit from your expertise in a working laboratory environment. I hope that one day in the future I can work ------ &nbsp; you and learn many things from you. ------ .<br>Kind regards,<br>Christian Miller&nbsp;</p>'),
(38, 'Part 7 - 16', '<div>From: Kana Saito &lt;ksaito@kmail.com&gt;</div> <div>To :&nbsp;Customer Service &lt;CS@lantiauto.com&gt;</div> <div>Subject :&nbsp;Request for information</div> <div>Date :&nbsp;September 16&nbsp;</div> <div>To Whom It May Concern:</div> <div>I currently lease a car from your company. However, I recently accepted a job in Memphis City, and I am going to start taking the bus. My agreement is number LA508. It is a month-to-month lease that automatically renews on the same day each month.&nbsp;</div> <div>My new job starts on Tuesday, September 28, so ideally I would return the car to you on Monday, September 27. However, if the renewal date is earlier than that Monday, I would rather return the car at the end of the current month\'s contract and make other transportation arrangements until my new job starts.&nbsp;</div> <div>Please let me know on what exact day of the month my lease ends and when I need to return the car.&nbsp;</div> <div>Thank you,&nbsp;</div> <div>Kana Saito</div> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>'),
(39, 'Part 7 - 5', '<p>It was previously believed that dinosaurs were cold-blooded creatures, like reptiles. However, a recent discovery has led researchers to believe <strong>they&nbsp;</strong>may have been warm-blooded. The fossilized remains of a 66 million-year-old dinosaur&rsquo;s heart were discovered and examined by x-ray. The basis for the analysis that they were warm-blooded is the number of chambers in the heart as well as the existence of a single aorta.&nbsp;</p> <p>Most reptiles have three chambers in their hearts, although some do have four. But those that have four chambers, such as the crocodile, have two arteries to mix the oxygen-heavy blood with oxygen-lean blood. Reptiles are cold-blooded, meaning that they are dependent on the environment for body heat. Yet the fossilized heart had four chambers in the heart as well as a single aorta. The single aorta means that the oxygen-rich blood was <strong>completely </strong>separated from the oxygen-poor blood and sent through the aorta to all parts of the body.&nbsp;</p> <p>Mammals, on the other hand, are warm-blooded, meaning that they <strong>generate </strong>their own body heat and are thus more tolerant of temperature extremes. Birds and mammals, because they are warm blooded, move more swiftly and have greater physical endurance than reptiles.&nbsp;</p> <p>Scientists believe that the evidence now points to the idea that all dinosaurs were actually warm-blooded. Ironically, the <strong>particular </strong>dinosaur in which the discovery was made was a Tescelosaurus, which translates to &ldquo;marvelous lizard&rdquo;. A lizard, of course, is a reptile.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questtion`
--

CREATE TABLE `questtion` (
  `id_question` int(11) NOT NULL,
  `name_question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option_correct` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_categoryquestion` int(11) NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `questtion`
--

INSERT INTO `questtion` (`id_question`, `name_question`, `option1`, `option2`, `option3`, `option4`, `option_correct`, `answer`, `id_categoryquestion`, `id_media`) VALUES
(31, 'https://storage.googleapis.com/kstoeic/images/5911589_1562638438001.png', '', '', '', '', 'A', 'A. The woman is talking on the phone. D.. The woman is using her cell phone. C.. The woman is typing on the laptop. D.. The woman is writing in a notebook.', 1, 1),
(33, '', 'much', 'before', 'previously', 'again', 'A', '', 6, 2),
(36, 'https://toeicspeakingmsngoc.com/images/toeiconline/toeic-1546316897_1.jpg', '', '', '', '', 'C', '(A) She\'s shelving some books.\n(B) She\'s putting some luggage into her car.\n(C) She\'s wheeling her cart in the store.\n(D) She\'s filling her basket with supplies.', 1, 3),
(37, 'https://toeicspeakingmsngoc.com/images/toeiconline/toeic-1544642918_1.jpg', '', '', '', '', 'B', 'A. Cyclists are riding by a fountain.\nB. There’s a park bench beside a path.\nC.  A man is hanging a map on a sign.\nD. Workers are raking leaves into piles.', 1, 4),
(38, 'https://toeicspeakingmsngoc.com/images/toeiconline/toeic-1545176990_1.jpg', '', '', '', '', 'C', 'A. 	She’s folding a piece of paper. \nB. 	She’s smelling flowers in a garden. \nC. 	She’s holding a book in her hands. \nD. 	She’s closing up a box.', 1, 5),
(39, 'https://toeicspeakingmsngoc.com/images/toeiconline/toeic-1545177360_1a.jpg', '', '', '', '', 'B', 'A. 	She’s arranging jewelry on a display rack. \nB. 	She’s trying on bracelets. \nC. 	She’s removing a dress from a hanger. \nD. 	She’s paying for some merchandise.', 1, 6),
(40, 'https://toeicspeakingmsngoc.com/images/toeiconline/toeic-1545177567_1.jpg', '', '', '', '', 'A', 'A. 	She’s wearing a hat.\nB. 	She’s holding up a table. \nC. 	She’s hanging some artwork. \nD. 	She’s combing her hair.', 1, 7),
(41, '', '', '', '', '', 'B', 'Where can I find the most recent sales data?\nA. 	The store’s having a sale.\nB. 	It’s on my computer.\nC. 	No, not recently.', 2, 9),
(42, '', '', '', '', '', 'B', 'Who is your immediate supervisor?\nA.    Ok, I’ll go now.\nB.    It’s Ms.Tanaka.\nC.    Instructions for the project.', 2, 8),
(43, 'where does the woman most likely work ?', 'At a hospital', 'At a restaurant', 'At a bank', 'At a hotel', 'D', 'SCRIPT :\nM : Hi, this is Neil Chen. I just made an online reservation at your hotel (32), but when I saw the confirmation page, I realized that I’d made a mistake in the dates. Can I make a change ? (33)\nW : I’ll be happy to change your reservation provided we have a room available. Could you please give me your confirmation code ?\nM : Sure, it’s VF732. I want the reservation for the following weekend – January tenth through twelfth. Will the price be the same?\nW : Let me see. Yes, we do have a room available for that weekend at the same rate, so I’ve changed your booking with us. Can you expect an updated confirmation in your e-mail shortly. (34)', 3, 10),
(44, 'why is the man calling?', 'To get directions', 'To ask for a discount', 'To change a reservation', 'To check an address', 'C', 'SCRIPT :\nM : Hi, this is Neil Chen. I just made an online reservation at your hotel (32), but when I saw the confirmation page, I realized that I’d made a mistake in the dates. Can I make a change ? (33)\nW : I’ll be happy to change your reservation provided we have a room available. Could you please give me your confirmation code ?\nM : Sure, it’s VF732. I want the reservation for the following weekend – January tenth through twelfth. Will the price be the same?\nW : Let me see. Yes, we do have a room available for that weekend at the same rate, so I’ve changed your booking with us. Can you expect an updated confirmation in your e-mail shortly. (34)', 3, 10),
(45, 'What will the woman e-mail the man?', 'A confirmation', 'A discount code', 'An application form', 'A menu', 'A', 'SCRIPT :\nM : Hi, this is Neil Chen. I just made an online reservation at your hotel (32), but when I saw the confirmation page, I realized that I’d made a mistake in the dates. Can I make a change ? (33)\nW : I’ll be happy to change your reservation provided we have a room available. Could you please give me your confirmation code ?\nM : Sure, it’s VF732. I want the reservation for the following weekend – January tenth through twelfth. Will the price be the same?\nW : Let me see. Yes, we do have a room available for that weekend at the same rate, so I’ve changed your booking with us. Can you expect an updated confirmation in your e-mail shortly. (34)', 3, 10),
(46, 'Where do the speakers work?', 'At a department store', 'At a pharmacy', 'At a restaurant', 'At a dry cleaner', 'C', 'W: Hi Kenji, (32)   you weren’t at the restaurant staff meeting today so I wanted to let you know that all the servers will be getting new uniforms next month. (33) \nM: Ok, Should I go to a specific store to buy one or will the restaurant supply them?\nW: I’m going to order black T-shirts with your restaurant logo from a supplier here in town, and I’ll take care of the cost. I just need to know your size so I can complete the order. (34)\nM: I usually wear a medium. Thanks.', 3, 11),
(47, 'What change does the woman mention?', 'Employees will have to wear ID badges', 'Credit cards will now be accepted', 'Work shifts will be more flexible', 'Staff will receive different uniforms.', 'D', 'W: Hi Kenji, (32)   you weren’t at the restaurant staff meeting today so I wanted to let you know that all the servers will be getting new uniforms next month. (33) \nM: Ok, Should I go to a specific store to buy one or will the restaurant supply them?\nW: I’m going to order black T-shirts with your restaurant logo from a supplier here in town, and I’ll take care of the cost. I just need to know your size so I can complete the order. (34)\nM: I usually wear a medium. Thanks.', 3, 11),
(48, 'What does the woman need to know?', 'The name of the bank', 'The size of some clothing', 'the day of a delivery', 'the color of an item.', 'B', 'W: Hi Kenji, (32)   you weren’t at the restaurant staff meeting today so I wanted to let you know that all the servers will be getting new uniforms next month. (33) \nM: Ok, Should I go to a specific store to buy one or will the restaurant supply them?\nW: I’m going to order black T-shirts with your restaurant logo from a supplier here in town, and I’ll take care of the cost. I just need to know your size so I can complete the order. (34)\nM: I usually wear a medium. Thanks.', 3, 11),
(49, 'Where does the caller work?', 'At a department store', 'At a department store', 'At a restaurant', 'At a bakery', 'D', 'W:  Hello, Mr. Dario. (71) I\'m calling from Leroy\'s Cake Shop about the cake you ordered. (72) I\'m really sorry but we\'ve made a mistake. We used the wrong filling for the cake-instead of blueberries, we put raspberries in it. (73)You have two choices. If you don\'t mind the different ingredients, we\'ll give you this cake for free. Or, if you still want the cake with blueberry filling, we\'ll offer you a thirty percent discount and bake you a new cake by tomorrow. (73) Please let us know what you decide.', 4, 12),
(50, 'What problem does the caller describe?', 'An appliance is not working properly.', 'An appliance is not working properly.', 'A shipment has been lost.', 'An account has been closed.', 'B', 'W:  Hello, Mr. Dario. (71) I\'m calling from Leroy\'s Cake Shop about the cake you ordered. (72) I\'m really sorry but we\'ve made a mistake. We used the wrong filling for the cake-instead of blueberries, we put raspberries in it. (73)You have two choices. If you don\'t mind the different ingredients, we\'ll give you this cake for free. Or, if you still want the cake with blueberry filling, we\'ll offer you a thirty percent discount and bake you a new cake by tomorrow. (73) Please let us know what you decide.', 4, 12),
(51, 'What is the listener asked to do?', 'Indicate a preference', 'Indicate a preference', 'Contact another vendor', 'Pay an additional fee', 'A', 'W:  Hello, Mr. Dario. (71) I\'m calling from Leroy\'s Cake Shop about the cake you ordered. (72) I\'m really sorry but we\'ve made a mistake. We used the wrong filling for the cake-instead of blueberries, we put raspberries in it. (73)You have two choices. If you don\'t mind the different ingredients, we\'ll give you this cake for free. Or, if you still want the cake with blueberry filling, we\'ll offer you a thirty percent discount and bake you a new cake by tomorrow. (73) Please let us know what you decide.', 4, 12),
(55, 'New patients should arrive 15 minutes before ________________ scheduled appointments', 'Themselves', 'Their', 'Them', 'They', 'B', 'Cần 1 tính từ sở hữu cho “ scheduled appointments”. -> Their.\nDỊCH: bệnh nhân nên đến trước cuộc hẹn đã đặt trước 15p.', 5, 13),
(56, 'The ______________ version of the budget proposal must be submitted by Friday.', 'Total', 'Many', 'Final', 'Empty', 'C', 'phiên bản cuối cùng của sự đề xuất ngân sách phải được nộp trước thứ 6.', 5, 13),
(57, 'Ms. Choi offers clients __________tax preparation services and financial management consultations.', 'Only if', 'Either', 'Both', 'Not only', 'C', 'Both... and : gồm.... và\nDỊCH: Ms Choi cung cấp cho khách hàng dịch vụ về thuế và tư vấn tài chính.\n* either ...or: hoặc ... hoặc...\n* not only.... but also : không những .... mà còn.', 5, 13),
(58, 'Maya Byun _______ by the executive team to head the new public relations department.', 'Chose', 'Choose', 'Was choosing', 'Was choosing', 'D', 'câu bị động do có “ by O” [ be v3 by O]\nDịch : Maya Byun   đã được lựa chọn bởi các lãnh đạo vào vị trí trưởng phòng quan hệ công chúng.', 5, 13),
(59, 'AIZ Office Products offers business a _______ way to send invoices to clients online', 'Secure', 'Securely', 'Securest', 'Secures', 'A', 'cần 1 adj bổ nghĩa cho “way”\nDỊCH : AIZ Office Products cung cấp cho các doanh nghiệp 1 cách an toàn để gửi các hóa đơn/ biên lai online.\n* secure (adj) : safe\n(v) : get/ gain : đạt được, có được.', 5, 13),
(61, '', '', '', '', '', 'C', 'When will you finish editing the final draft on my article ?\nA.    Yes, I think so.\nB.    At the publisher’s.\nC.    By Friday evening.', 2, 14),
(62, '', '', '', '', '', 'B', 'Are you still receiving an error message on your computer screen ?\nA.    A used monitor.\nB.    Yes, do you know why ?\nC.    I’ve returned mine.', 2, 15),
(63, '', '', '', '', '', 'A', 'Aren’t you attending the manager’s training session ?\nA.    No, it was canceled.\nB.    The train arrives at noon.\nC.    My manager.\nA.    A used monitor.\nB.    Yes, do you know why ?\nC.    I’ve returned mine.', 2, 16),
(64, '', '', '', '', '', 'A', 'Will the seminar be a full day or a half day ?\nA.    I haven’t received the schedule yet.\nB.    The third door on the left.\nC.    Why was it moved. ?', 2, 17),
(71, '', '', '', '', '', 'C', 'Who is your immediate supervisor?\nA.    Ok, I’ll go now.\nB.    It’s Ms.Tanaka.\nC.    Instructions for the project.', 2, 18),
(72, '', '', '', '', '', 'B', 'Where is the nearest  currency exchange office ?\nA.    Not currently .\nB.    Right next to the mall.\nC.    Would you like a receipt ?', 2, 19),
(73, '', '', '', '', '', 'C', 'Which file cabinet did you reorganize ?\nA.    Sure, I can send it to you.\nB.    In numerical order.\nC.    The one by the window.', 2, 20),
(74, '', '', '', '', '', 'A', 'How late should we schedule the interviews tomorrow?\nA.    Well, my flight leaves at three o’clock.\nB.    For the office assistant position.\nC.    Yes, the view at the night is beautiful.', 2, 21),
(75, '', '', '', '', '', 'A', 'Isn’t the super market closed on Sundays ?\nA.    No, it’s open every day.\nB.    I live close by\nC.    From the top shelf.', 2, 22),
(76, '', '', '', '', '', 'A', 'Who was at the press conference ?\nA.    Ricardo has the attendance list.\nB.    Only once a quarter.\nC.    A new product release', 2, 23),
(77, '', '', '', '', '', 'C', 'Why are we moving the camera display ?\nA.    They like taking pictures.\nB.    Near the main entrance.\nC.    Doesn’t it look better here ?', 2, 24),
(78, '', '', '', '', '', 'B', 'Let’s look at some colors to paint the hotel lobby.\nA.     A larger painter crew.\nB.    Sure, I’m free after lunch.\nC.    The front desk.', 2, 25),
(79, '', '', '', '', '', 'C', 'The food here isn’t usually this salty .\nA.    The lunch special includes soup.\nB.    It’s not very crowded.\nC.    I wonder if there’s a new chef.', 2, 26),
(80, '', '', '', '', '', 'A', 'Shouldn’t we take a staff poll next week?\nA.    We need a decision before then.\nB.    It already has.\nC.    A revised work schedule.', 2, 27),
(81, '', '', '', '', '', 'C', 'Would you like a room on the first floor or one of the upper floor ?\nA.    It’s just around the corner.\nB.    I like the floor plan.\nC.    Either one is fine.', 2, 28),
(82, '', '', '', '', '', 'B', 'Don’t forget to post this notice on the bulletin board.\nA.    The post office in the city.\nB.    Don’t worry, I won’t.\nC.    I noticed that, too.', 2, 29),
(83, '', '', '', '', '', 'C', 'There were more people at the trade show this year, weren’t there ?\nA.    An additional session.\nB.    No, I won’t be able to come.\nC.    Yes, it was a big success.', 2, 30),
(84, '', '', '', '', '', 'B', 'I think the longer coat would be more practical.\nA.    The men’s section is upstairs.\nB.    Then that’s the one I’ll buy.\nC.    No, I can’t wait any longer.', 2, 31),
(85, '', '', '', '', '', 'B', 'Do we need a standard- sized wondow or a custom -made one ?\nA.    Yes, only for a small fee.\nB.    Here are the measurements.\nC.    Carlos said he would', 2, 32),
(86, '', '', '', '', '', 'A', 'How did you decide  where to go on holiday ?\nA.    I researched places on the Internet.\nB.    Usually by bus.\nC.    No, we’re flying there.', 2, 33),
(87, '', '', '', '', '', 'A', 'Why hasn’t this order been filled yet ?\nA.    It’ll be ready to ship this afternoon.\nB.    Yes, it is a large box.\nC.    Thanks, but that’s enough.', 2, 34),
(88, '', '', '', '', '', 'C', 'We need to put price lables on the new books .\nA.    The lines are really long.\nB.    The table costs 60 dollars.\nC.    Let me go and get them.', 2, 35),
(89, '', '', '', '', '', 'B', 'You should present your research data at the next department meeting.\nA.    No, I didn’t.\nB.    I’d be happy to\nC.    In the database.', 2, 36),
(90, '', 'would have informed', 'would have informed', 'was informed', 'had been informing', 'A', '', 6, 2),
(91, '', 'confirming', 'confirming', 'convincing', 'converting', 'D', '', 6, 2),
(92, '', 'I will send the requested payment at my earliest convenience.', 'I will send the requested payment at my earliest convenience.', 'I will send the requested payment at my earliest convenience.', 'I would like you to rectify this situation as soon as possible', 'B', '', 6, 2),
(93, '', 'likely', 'likely', 'barely', 'highly', 'B', 'Giải Thích:  do better là adv, và sau can là Vo ->B.\nDịch : Lần đầu tiên, Thư viện Oakville đang tiến hành một cuộc khảo sát để tìm hiểu cách nó có thể đáp ứng tốt hơn nhu cầu của công chúng.', 6, 37),
(94, '', 'His', 'His', 'Your', 'Theirs', 'A', 'Giải Thích: cần 1 tính từ sở hữu, do đề cập tới Oakville Library. \n->A.\nDịch : Thông tin thu thập được từ các phản hồi khảo sát sẽ giúp định hướng  kế hoạch 5 năm của nó', 6, 37),
(95, '', 'Patrons of the library are welcome to the event.', 'Patrons of the library are welcome to the event.', 'Membership will be renewed after 5 years.', 'This plan covers programming, services and materials.', 'D', 'Giải Thích : do câu trước đề cập tới kế hoạch 5 năm. ->D.\nDịch : Kế hoạch này bao gồm lập trình, dịch vụ và tài liệu.', 6, 37),
(96, '', 'Showcase', 'Showcase', 'Magazine', 'Copy', 'D', 'Giải Thích : do có cụm “ a... of” -> a copy of sth : bản sao của... ->D.\nDịch : Du khách cũng có thể lấy một bản sao của mẫu này tại bàn lưu thông trên tầng đầu tiên.\nNote: \n- 	Placement (n ) : the act of finding somebody a suitable job or place to live : sự tìm kiếm chổ...\n- 	Showcase (v-n) : proof: chứng minh, chứng tỏ...', 6, 37),
(97, 'https://media.zim.vn/610ab3b792067e001e3dee13/woman.png', '', '', '', '', 'C', '<ul>\n    <li>\n        <p>The woman <u>is paying for</u> the products.&nbsp;</p>\n    </li>\n    <li>\n        <p>The woman&nbsp;<u>is making a payment for</u> the products.&nbsp;</p>\n    </li>\n</ul>', 10, 13),
(98, 'https://media.zim.vn/610ab3b992067e001e3dee19/walk.png', '', '', '', '', 'C', '<ul>\n    <li>\n        <p>They are walking over the bridge.</p>\n    </li>\n    <li>\n        <p>Many people are walking over the bridge.</p>\n    </li>\n</ul>', 10, 13),
(99, 'https://media.zim.vn/610ab3bc92067e001e3dee1d/passenger.png', '', '', '', '', 'C', '<ul>\n    <li>\n        <p>The passenger is boarding the bus.&nbsp;</p>\n    </li>\n    <li>\n        <p>A female passenger is boarding the bus.&nbsp;</p>\n    </li>\n</ul>', 10, 13),
(100, 'https://media.zim.vn/610ab3c092067e001e3dee23/as-soon-as.png', '', '', '', '', 'C', '<ul>\n    <li>\n        <p>As soon as the food is ready, the woman will serve it.</p>\n    </li>\n    <li>\n        <p>She will serve the food as soon as it is ready.</p>\n    </li>\n</ul>', 10, 13),
(101, 'I’m travelling to your country during Tet holiday. Could you give me some information about it? What do people often do? What do children receive? Can you tell me some dishes for Tet?', '', '', '', '', 'C', '<p>Dear Ann,</p>\n<p>Thank you for your email. I hope you and your family are fine. I am very happy to know that you are planning to travel to Vietnam during Tet holiday.</p>\n<p>You asked me some information about Tet holiday in Vietnam. You know, it&rsquo;s a chance for family reunion. I mean that on this special occasion, everyone tries their best to come back home to celebrate the event with their families no matter how far or busy they are. Before Tet, people make lots of preparations such as shopping for new clothes, furniture; having their houses painted or decorating their homes with kumquat trees and peach flowers. On New Year&rsquo;s Eve, we often make offerings to our ancestors and people often go to watch the fireworks. After that, many of them go to pagodas to pray for their good luck, health and business for the upcoming year. On the first days of Lunar New Year, people usually visit their grandparents, close relatives and friends and give them the best wishes. Besides, children and elderly people often receive lucky money. Regarding several dishes for Tet, it&rsquo;s common that people make plenty of traditional dishes, for example, Banh Chung or Spring rolls.</p>\n<p>That&rsquo;s all for now. Please write back to me and tell me about your plans. Hope to see you soon!</p>\n<p>All the best,</p>\n<p><strong>B&agrave;i dịch:</strong></p>\n<p>Cảm ơn bạn đ&atilde; gửi thư cho m&igrave;nh. M&igrave;nh hi vọng bạn v&agrave; gia đ&igrave;nh đều khỏe. M&igrave;nh rất vui khi biết rằng bạn đang c&oacute; kế hoạch đến thăm Việt Nam v&agrave;o dịp Tết.</p>\n<p>Bạn hỏi m&igrave;nh một &iacute;t th&ocirc;ng tin về kỳ nghỉ Tết ở Việt Nam. Bạn biết đấy, đ&oacute; l&agrave; cơ hội đo&agrave;n tụ gia đ&igrave;nh. &Yacute; m&igrave;nh l&agrave; v&agrave;o dịp đặc biệt n&agrave;y mọi người cố gắng quay trở về nh&agrave; v&agrave; tổ chức sự kiện n&agrave;y với gia đ&igrave;nh cho d&ugrave; họ c&oacute; bận đến đ&acirc;u chăng nữa. Trước Tết, mọi người chuẩn bị nhiều thứ như mua sắm quần &aacute;o mới, đồ nội thất, sơn nh&agrave; sửa trang tr&iacute; nh&agrave; cửa với c&acirc;y quất, hoa đ&agrave;o. V&agrave;o đ&ecirc;m giao thừa, ch&uacute;ng m&igrave;nh thường c&uacute;ng &ocirc;ng b&agrave; tổ ti&ecirc;n v&agrave; mọi người thường đi xem ph&aacute;o hoa. Sau đ&oacute;, nhiều người đi ch&ugrave;a cầu may mắn, sức khỏe v&agrave; kinh doanh thuận lợi cho năm mới. V&agrave;o những ng&agrave;y đầu ti&ecirc;n của năm &Acirc;m lịch, mọi người thường thăm &ocirc;ng b&agrave;, họ h&agrave;ng th&acirc;n thuộc, bạn b&egrave; v&agrave; ch&uacute;c họ những lời ch&uacute;c tốt đẹp nhất. B&ecirc;n cạnh đ&oacute;, trẻ em v&agrave; người gi&agrave; được nhận tiền l&igrave; x&igrave;. Về những m&oacute;n ăn dịp Tết, mọi người thường nấu nhiều m&oacute;n ăn truyền thống như B&aacute;nh Chưng v&agrave; nem.</p>\n<p>Thế th&ocirc;i. H&atilde;y viết lại cho m&igrave;nh v&agrave; kể cho m&igrave;nh nghe v&agrave; kế hoạch của bạn nh&eacute;. Hi vọng gặp bạn sớm!</p>', 11, 13),
(102, '<h4>Nội dung đề</h4> <p><em>You have invited an American businessman, Mr. Noah Watson, to give a talk at your English club monthly meeting. Read part of his letter below.</em></p> <p><strong><em>I would be glad to come and give a talk to your English club. In order to make a good preparation, I would like some information about my audience. I could talk about my either experience when starting up my company or some general rules when doing business. Which one would be more interesting?</em></strong></p> <p><strong><em>Also, I am staying in a hotel in the city center. Could you tell me where the meeting is and how to get there?</em></strong></p> <p><strong><em>I look forward to meeting you soon.</em></strong></p> <p><em>Write a letter responding to Mr. Noah Watson. You should write at least 120 words.</em></p>', '', '', '', '', 'C', '<p><em>Dear Mr. &nbsp;Noah Watson,</em></p>\n<p><em><strong>Thank you for&nbsp;</strong>agreeing to speak at our English club monthly meeting.&nbsp;<strong>I am writing to provide you with the information that you asked</strong>.</em></p>\n<p><em><strong>In terms of</strong> the audience, &nbsp;most of them are second- and third-year students of English. They have good English skills; therefore, I think it is easy for you to interact with them.</em></p>\n<p><em><strong>Concerning</strong> the topic of your talk, I believe that everyone will enjoy your experience when starting up your company. It will be useful if you give them practical advice to set up their own business.&nbsp;<strong>Besides</strong>, you can also share with them some interesting stories about your job.</em></p>\n<p><em><strong>Regarding</strong> the venue, &nbsp;the event will be held on the third floor, ABC Building on XYZ Street. It is quite easy for you to get there from your hotel. You can book a ride using Grab or Go Viet app; I guess you will need to pay around 50,000 VND.</em></p>\n<p><em><strong>That&rsquo;s all I think you need to know about</strong> the event to make necessary preparations.&nbsp;<strong>If you need any further assistance, do not hesitate to write.</strong></em></p>\n<p><em><strong>I look forward to seeing you soon</strong>, and thanks again!</em></p>\n<p><em><strong>Best regards,</strong></em></p>\n<p><em>Bản dịch của Google</em>:</p>\n<p>Gửi &ocirc;ng Noah Watson,</p>\n<p>Cảm ơn &ocirc;ng đ&atilde; đồng &yacute; ph&aacute;t biểu trong buổi họp h&agrave;ng th&aacute;ng của c&acirc;u lạc bộ tiếng Anh của ch&uacute;ng t&ocirc;i. T&ocirc;i viết thư n&agrave;y để cung cấp cho &ocirc;ng th&ocirc;ng tin m&agrave; &ocirc;ng đ&atilde; hỏi.</p>\n<p>Về đối tượng, hầu hết họ l&agrave; sinh vi&ecirc;n năm thứ hai v&agrave; thứ ba chuy&ecirc;n ng&agrave;nh tiếng Anh. Họ c&oacute; kỹ năng tiếng Anh tốt; do đ&oacute;, t&ocirc;i nghĩ &ocirc;ng sẽ dễ d&agrave;ng tương t&aacute;c với họ.</p>\n<p>C&ograve;n về chủ đề b&agrave;i n&oacute;i, t&ocirc;i tin rằng mọi người sẽ th&iacute;ch nghe trải nghiệm của &ocirc;ng khi th&agrave;nh lập c&ocirc;ng ty. Sẽ rất hữu &iacute;ch nếu &ocirc;ng cho họ lời khuy&ecirc;n thiết thực để th&agrave;nh lập doanh nghiệp của ri&ecirc;ng m&igrave;nh. B&ecirc;n cạnh đ&oacute;, &ocirc;ng cũng c&oacute; thể chia sẻ với họ một số c&acirc;u chuyện th&uacute; vị về c&ocirc;ng việc của &ocirc;ng.</p>\n<p>Về địa điểm, sự kiện sẽ được tổ chức tại tầng 3, T&ograve;a nh&agrave; ABC tr&ecirc;n đường XYZ. Sẽ kh&aacute; dễ d&agrave;ng cho &ocirc;ng đi đến đ&oacute; từ kh&aacute;ch sạn. Hoặc &ocirc;ng c&oacute; thể đặt xe bằng ứng dụng Grab hoặc Go Viet; t&ocirc;i đo&aacute;n &ocirc;ng sẽ cần phải trả khoảng 50.000 đồng.</p>\n<p>Đ&oacute; l&agrave; tất cả những g&igrave; t&ocirc;i nghĩ &ocirc;ng cần biết về sự kiện để c&oacute; những chuẩn bị cần thiết. Nếu cần hỗ trợ th&ecirc;m, xin &ocirc;ng đừng ngần ngại li&ecirc;n hệ nh&eacute;.</p>\n<p>T&ocirc;i mong được gặp &ocirc;ng sớm, v&agrave; cảm ơn một lần nữa!</p>\n<p>Tr&acirc;n trọng,</p>', 11, 13),
(103, '<h4>Nội dung đề</h4> <p><strong>Thank you letter when receiving gifts</strong></p> <p><em>Write a letter. When should write at least 120 words.</em></p>', '', '', '', '', 'C', '<p><em>Dear Grandma,</em></p>\n<p><em>I am writing to thank you for your present at my birthday party.I really appreciate that you prepared such a wonderful present for me.</em></p>\n<p><em>On that day, everything was ready. However, I was anxious that you were absent. Then grandpa came to me to tell me that you went down with a slight flu and sent me a birthday present. I was hopeful that you would recover soon.</em></p>\n<p><em>The birthday present really made me happy. It was a Sherlock Holmes novel that I had dreamt of for a long time. I was also surprised that you had known my wish. I would keep it carefully.</em></p>\n<p><em>Thank you so much for your meaningful preparation. I would spare time to come to see you as soon as possible. Hope that you and grandpa are still OK.</em></p>\n<p><em>Sincerely,</em></p>', 11, 13),
(104, 'Why did Ms. Saito send the e-mail?', 'To resign from a position', 'To resign from a position', 'To get information about lease', 'To inquire about available parking', 'C', 'Đáp Án : C.\nGợi Ý: đọc email. Đoạn cuối : \nPlease let me know on what exact day of the month my lease', 7, 38),
(105, 'What is suggested about Ms. Saito?', 'She lives near a train station.', 'She lives near a train station.', 'She has recently moved to a new city.', 'She currently drives to work.', 'D', 'Gợi Ý: đọc email. Đoạn đầu : I currently lease a car from your company.', 7, 38),
(106, 'What type of car does Ms. Saito drive?', 'A Sylvon', 'A Sylvon', 'A Thundee', 'A Grayley', 'B', 'Gợi Ý : đọc email. Đoạn 1 , dòng 2 : \nMy agreement is number LA508. \n_ So Sánh với bảng hợp đồng thuê bên dưới ; LA508 -> Sylvon.', 7, 38),
(107, 'When should Ms. Saito go to Lanti Auto?', 'On September 14', 'On September 14', 'On September 25', 'On September 28', 'C', 'Gợi Ý: nhìn vào bảng hợp đồng bên dưới . đối chiêu LA 508  -> 25.', 7, 38),
(108, 'What is indicated about month-to-month agreements?', 'They are available for one year at most.', 'They are available for one year at most.', 'They all cost $199 per month.', 'They include the cost of maintenance.', 'A', 'Đọc bảng hợp đồng, mục * : \n“ For lease termination, cars must be returned by 4 P.M on the final contract date.”', 7, 38),
(109, '<p><b>Your reading habits</b> </p> <p><strong>1. Do you enjoy reading? Why? Why not?</strong></p> <p><strong>2. What types of books/magazines do you enjoy reading?&nbsp;</strong></p> <p><strong>3. Where do you prefer reading?&nbsp;</strong></p>', '', '', '', '', 'C', '<p><strong>1. Do you enjoy reading? Why? Why not?</strong></p>\n<ul>\n    <li>Oh yes, I really love reading because it helps me not only widen my knowledge but also relax after a hard working day</li>\n</ul>\n<p><strong>2. What types of books/magazines do you enjoy reading?&nbsp;</strong></p>\n<ul>\n    <li>History book</li>\n</ul>\n<p><strong>3. Where do you prefer reading?&nbsp;</strong></p>\n<ul>\n    <li>Normally, everyone wants to go to the library to enjoy reading because you know there are a lot of books there.</li>\n</ul>', 9, 13),
(110, '<p><strong>Your free time</strong></p> <p><strong>1. What do you like doing in your&nbsp;</strong>free <strong>time?&nbsp;</strong></p> <p><strong>2. Who do you enjoy spending your free time with?</strong></p> <p><strong>3. Where would you prefer spending your free time?&nbsp;</strong></p>', '', '', '', '', 'C', '<p><strong>1. What do you like doing in your&nbsp;</strong>free&nbsp;<strong>time?&nbsp;</strong></p>\n<ul>\n    <li>I like listening to music because it helps me relax after work</li>\n</ul>\n<p><strong>2. Who do you enjoy spending your free time with?</strong></p>\n<ul>\n    <li>With my family because I love them and it&rsquo;s a good time for all members to be together.</li>\n</ul>\n<p><strong>3. Where would you prefer spending your free time?&nbsp;</strong></p>\n<ul>\n    <li>Indoor or outdoor?</li>\n    <li>After working hard, I just want to get home and listen to music.</li>\n</ul>', 9, 13),
(111, 'While the station is undergoing repair, the train will proceed ----- Cumberland without stopping.', 'Aboard', 'Through', 'Quickly', 'Straight', 'B', 'GIẢI THÍCH: cần 1 Adv  cho từ proceed\nDỊCH: trong khi trạm đang trong quá trình sửa chữa, xe lửa sẽ di chuyển nhanh chống đến Cumberland mà không dừng. \nNOTE:\n- 	Aboard (adv; pre) : on board : lên tàu/ xe\n- 	Through (pre) : thông qua\n- 	Straight (Adj –adv ) : not in curve : thẳng [ go straight]\n- 	Proceed (v1) : đi tới \n(v2) : tiến hành làm...', 5, 13),
(112, 'Dr. Morales, a geologist from the Enviromental Institute, plans to study the soil from the mountains ----- Caracas', 'Next', 'Next', 'Onto', 'Around', 'D', 'GIẢI THÍCH : dịch câu \nDỊCH : Dr. Morales, nhà địa chất học từ Enviromental Institute, lên kế học để nghiên cứu  đất từ các vùng núi xung quanh Caracas.', 5, 13),
(113, 'If you have already signed up for automatic payments, ----- no further steps are required.', 'Additional', 'Additional', 'Then', 'Until', 'C', 'GIẢI THÍCH : DỊCH CÂU \nDỊCH :  nếu bạn đã đăng ký việc thanh toán tự động, về sau sẽ không cần thêm bước nào. \nNOTE: then (adv) : \nE.g: He drank a glass of whisky, then another and then another.\nE.g2 : Life was harder then because neither of us had a job.', 5, 13),
(114, 'Confident that Mr. Takashi Ota was ----- more qualified than other candidates, Argo Corporation hired him as the new vice president.', 'Very', 'Very', 'Rarely', 'Along', 'A', 'GIẢI THÍCH : nhấn mạnh so sánh hơn. Ta thường dùng “ a lot/ far /even/ much / a little..”\nDỊCH: tự tin rằng Mr. Takashi Ota có nhiều tố chất hơn những ứng cử viên khác, Tập Đoàn Argo đã thuê anh ta vào vị trí phó chủ tịch.', 5, 13),
(115, 'ABC Local Marketplace takes pride in carrying only ----- processed dairy products from the region.', 'Natures', 'Natures', 'Natural', 'Naturally', 'D', 'GIẢI THÍCH: cần 1 adv bổ ngữ cho tính từ processed .\nDỊCH: ABC Local Marketplace tự hào trong việc  mang/ cung cấp các sản phẩm sữa được chế biến tự nhiên từ khu vực.', 5, 13),
(116, 'All of Molina Language Institute’s ----- have three or more years of experience and a valid teaching credential.', 'Instruction', 'Instruction', 'Instructing', 'Instructors', 'D', 'GIẢI THÍCH : cần 1 danh từ hợp nghĩa “ three or more years of experience”\nDỊCH: tất cả các người hướng dẫn/ giáo viên ở Molina Language Institute có ít nhất  3 năm kinh nghiệm và giấy chứng nhận giảng dạy hợp lệ.', 5, 13),
(117, 'The restaurant critic for Montreal Times ----- the food at ABC’s Kitchen as affordable and authentic.', 'Admitted', 'Admitted', 'Described', 'Purchased', 'C', 'GIẢI THÍCH : dịch câu\nDỊCH: người bình luận ẩm thực cho Montreal Times đã mô tả thức ăn tại ABC’s Kitchen là giá cả phải chăng và đáng tin cậy. \nNOTE:\n- 	Admit (v): thừa nhận\n- 	Purchase (v) : buy : mua.', 5, 13),
(118, 'The Merrywood Shop will hold a sale in January to clear out an ----- of holiday supplies.', 'Overview', 'Overview', 'Extra', 'Opportunity', 'A', 'GIẢI THÍCH: cần 1 danh từ có nghĩa phù hợp. \nDỊCH: The Merrywood Shop will sẽ tổ chức giảm giá  vào tháng 1 để tống khứ các hàng tồn ở dịp lễ. \nNOTE: \n- 	Excess (n) : dư thừa\n- 	Overview (n) : tổng quan, tổng quát. \n- 	Opportunity (n) : chance : cơ hội.', 5, 13),
(119, 'Zoticos Clothing, Inc. Has acquired 2 other retail companies as part of a plan to expand ----- Europe and Asia.', 'Into', 'Into', 'Here', 'Already', 'B', 'GIẢI THÍCH: cần 1 giới từ phù hợp với expand.... Europe và Asia\nDỊCH: Zoticos Clothing đã mua 2 công ty bán lẻ khác như 1 phần của kế hoạch mở rộng vào Châu Âu và Châu Á.', 5, 13),
(120, 'According to the city planning director, Adel’s old civic center must be ----- demolished before construction on a new center can begin.', 'Defectively', 'Defectively', 'Plentifully', 'Richly', 'A', 'GIẢI THÍCH : cần 1 adv phù hợp nghĩa cho từ demolished \nDỊCH: theo như người giám sát kế hoạch của thành phố, trung tâm hành chính cũ của Adel phải bị phá hủy hoàn toàn trước khi xây dựng 1 trung tâm mới. \nNOTE:\n- 	Defective (adj) : mistaken : lỗi, sai sót. \n- 	Plentiful (Adj) : a lot. : nhiều, dồi dào.', 5, 13),
(121, 'An accompished skater -----, Mr. Loewen also coaches the world-champion figure skater Sara Krasnova.', 'Him', 'Him', 'Himself', 'His', 'C', 'GIẢI THÍCH: dùng đại từ phản thân để nhấn mạnh chủ thể. \nDỊCH: Mr. Loewen 1 nhà trượt băng nghệ thuật tài giỏi cũng huấn luyện vận động viên trượt băng vô địch thế giới Sara Krasnova.\nNOTE:\n- 	Accomplish (v) : achieve : đạt được, có được thành tích..\n- 	Accomplished (Adj) : having a lot of skills : talented : tài năng.', 5, 13),
(122, 'Sefu Asamoah is an innovative architect who is ----- the traditional approach to constructing space- efficient apartment buildings.', 'Challenging', 'Challenging', 'Challenged', 'Challenges', 'B', 'GIẢI THÍCH: cần 1 adj phù hợp.\nDỊCH: Sefu Asamoah 1 kiến trúc sư đầy sáng tạo người thử thách/ đánh thức phương pháp truyền thống để xây dựng các tòa nhà chung cư hiệu quả về không gian. \nNOTE:\n- 	Challeging (adj) : đầy thách thức. Khó khăn\n- 	Challenged (Adj) : bị cản trở...', 5, 13),
(123, 'The word “they” in the first paragraph refers to _________.', 'researchers', 'dinosaurs', 'reptiles', 'discoveries', 'B', '', 7, 39),
(124, 'According to the author, what theory was previously held and now is being questioned?', 'That dinosaurs were cold-blooded', 'That dinosaurs were warm-blooded', 'That dinosaurs had four-chambered hearts', 'That dinosaurs were swifter and stronger than reptiles', 'A', '', 7, 39),
(125, 'What is the basis of the researchers’ new theory?', 'They performed mathematical calculations and determined that dinosaurs must have had fourchambered hearts.', 'They found a fossil of an entire dinosaur and reviewed the arteries and veins flowing from and to the heart.', 'They viewed a fossil of a dinosaur’s heart and discovered that it had two aortas.', 'They found a fossil of a dinosaur’s heart and discovered it had four chambers and one aorta.', 'D', '', 7, 39),
(126, 'The word “those” in the second paragraph refers to _________.', 'hearts', 'chambers', 'reptiles', 'arteries', 'C', '', 7, 39),
(127, 'The author implies that reptiles _________.', 'are cold-blooded', 'have four-chambered hearts', 'have one aorta', 'are faster and have more endurance than mammals', 'A', '', 7, 39),
(128, 'The word “completely” in paragraph two is closest in meaning to _________.', 'constantly', 'unevenly', 'partially', 'entirely', 'D', '', 7, 39),
(129, 'The word “generate” in paragraph three is closest in meaning to _________.', 'use', 'lose', 'produce', 'tolerate', 'C', '', 7, 39),
(130, 'The author implies that birds _________.', 'move slower and have less endurance than reptiles', 'move faster and have greater endurance than reptiles', 'move faster and have greater endurance than dinosaurs', 'move slower and have less endurance than dinosaurs', 'B', '', 7, 39),
(131, 'What does the author imply by the sentence: “Ironically, the particular dinosaur in which the discovery was made was a Tescelosaurus, which translates to “marvelous lizard”.', '. It is unusual that the creature would have a name with the suffix of a dinosaur.', 'It is surprising that the fossilized heart was discovered.', 'It is paradoxical that the dinosaur’s name includes the word lizard, because now scientists believe it is not a lizard', 'It should have been realized long ago that dinosaurs were warm-blooded.', 'C', '', 7, 39),
(132, 'The word “particular” in paragraph four is closest in meaning to _________.', 'special', 'specific', 'sparse', 'spatial', 'B', '', 7, 39),
(133, 'https://www.anhngumshoa.com/uploads/images/userfiles/anh2_unit3.png', '', '', '', '', 'C', 'What I can see in the picture is a street intersection with a crosswalk.// in the foreground of the picture, you can see  a few people crossing the street and  all of them are wearing winter clothes like coats.// Next to the people there is one yellow car stopped at the intersection.// In the background of the picture, there are many large buildings and people walking around on the sidewalks.// The buildings on the left looks like stores.There are some signboards hanging in front of these buildings.// This picture looks like the downtown area of a big city because there are many people and buildings.', 8, 13),
(134, 'In some countries, many more people are choosing to live alone nowadays than in the past. Do you think this is a positive or negative development?', '', '', '', '', 'C', '<p>In recent years it has become far more normal for people to live alone, particularly in large cities in the developed world. In my opinion, this trend could have both positive and negative consequences in equal measure.</p>\n<p>The rise in one-person households can be seen as positive for both personal and broader economic reasons. On an individual level, people who choose to live alone may become more independent and self-reliant than those who live with family members. A young adult who lives alone, for example, will need to learn to cook, clean, pay bills and manage his or her budget, all of which are valuable life skills; an increase in the number of such individuals can certainly be seen as a positive development. From an economic perspective, the trend towards living alone will result in greater demand for housing. This is likely to benefit the construction industry, estate agents and a whole host of other companies that rely on homeowners to buy their products or services.</p>\n<p>However, the personal and economic arguments given above can be considered from the opposite angle. Firstly, rather than the positive feeling of increased independence, people who live alone may experience feelings of loneliness, isolation and worry. They miss out on the emotional support and daily conversation that family or flatmates can provide, and they must bear the weight of all household bills and responsibilities; in this sense, perhaps the trend towards living alone is a negative one. Secondly, from the financial point of view, a rise in demand for housing is likely to push up property prices and rents. While this may benefit some businesses, the general population, including those who live alone, will be faced with rising living costs.</p>\n<p>In conclusion, the increase in one-person households will have both beneficial and detrimental effects on individuals and on the economy.</p>The rise in one-person households can be seen as positive for both personal and broader economic reasons. On an individual level, people who choose to live alone may become more independent and self-reliant than those who live with family members. A young adult who lives alone, for example, will need to learn to cook, clean, pay bills and manage his or her budget, all of which are valuable life skills; an increase in the number of such individuals can certainly be seen as a positive development. From an economic perspective, the trend towards living alone will result in greater demand for housing. This is likely to benefit the construction industry, estate agents and a whole host of other companies that rely on homeowners to buy their products or services.\nHowever, the personal and economic arguments given above can be considered from the opposite angle. Firstly, rather than the positive feeling of increased independence, people who live alone may experience feelings of loneliness, isolation and worry. They miss out on the emotional support and daily conversation that family or flatmates can provide, and they must bear the weight of all household bills and responsibilities; in this sense, perhaps the trend towards living alone is a negative one. Secondly, from the financial point of view, a rise in demand for housing is likely to push up property prices and rents. While this may benefit some businesses, the general population, including those who live alone, will be faced with rising living costs.\nIn conclusion, the increase in one-person households will have both beneficial and detrimental effects on individuals and on the economy.', 12, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shorttest`
--

CREATE TABLE `shorttest` (
  `id_shortTest` int(11) NOT NULL,
  `name_Test` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_categoryquestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `shorttest`
--

INSERT INTO `shorttest` (`id_shortTest`, `name_Test`, `id_categoryquestion`) VALUES
(1, 'Test 1', 2),
(2, 'Test 2', 2),
(3, 'Test 1', 6),
(4, 'Test 2', 6),
(5, 'Test 1', 10),
(6, 'Test 2', 10),
(7, 'INFORMATION GIVING LETTER', 11),
(8, 'THANK-YOU LETTER', 11),
(9, 'Test 1', 1),
(10, 'Test 2', 1),
(11, 'Test 1', 3),
(12, 'Test 2', 3),
(13, 'Test 1', 4),
(14, 'Test 1', 5),
(15, 'Test 2', 5),
(16, 'Test 1', 7),
(17, 'Test 1', 9),
(18, 'Test 2', 9),
(20, 'Test 1', 8),
(21, 'Test 1', 12);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Chỉ mục cho bảng `category_exam`
--
ALTER TABLE `category_exam`
  ADD PRIMARY KEY (`id_categoryexam`);

--
-- Chỉ mục cho bảng `category_lesson`
--
ALTER TABLE `category_lesson`
  ADD PRIMARY KEY (`id_categorylesson`);

--
-- Chỉ mục cho bảng `category_question`
--
ALTER TABLE `category_question`
  ADD PRIMARY KEY (`id_categoryquestion`);

--
-- Chỉ mục cho bảng `detailcategory_lesson`
--
ALTER TABLE `detailcategory_lesson`
  ADD PRIMARY KEY (`id_detailcategory`),
  ADD KEY `id_categorylesson` (`id_categorylesson`);

--
-- Chỉ mục cho bảng `detail_exam`
--
ALTER TABLE `detail_exam`
  ADD PRIMARY KEY (`id_detailExam`),
  ADD KEY `id_exam` (`id_exam`),
  ADD KEY `id_question` (`id_question`);

--
-- Chỉ mục cho bảng `detail_lesson`
--
ALTER TABLE `detail_lesson`
  ADD PRIMARY KEY (`id_detaillesson`),
  ADD KEY `id_detailcategory` (`id_detailcategory`);

--
-- Chỉ mục cho bảng `detail_shorttest`
--
ALTER TABLE `detail_shorttest`
  ADD PRIMARY KEY (`id_detailTest`),
  ADD KEY `id_question` (`id_question`),
  ADD KEY `id_shortTest` (`id_shortTest`);

--
-- Chỉ mục cho bảng `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id_exam`),
  ADD KEY `id_categoryexam` (`id_categoryexam`);

--
-- Chỉ mục cho bảng `historyexam`
--
ALTER TABLE `historyexam`
  ADD PRIMARY KEY (`id_historyexam`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `id_detaillesson` (`id_detaillesson`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Chỉ mục cho bảng `questtion`
--
ALTER TABLE `questtion`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_categoryquestion` (`id_categoryquestion`),
  ADD KEY `id_media` (`id_media`);

--
-- Chỉ mục cho bảng `shorttest`
--
ALTER TABLE `shorttest`
  ADD PRIMARY KEY (`id_shortTest`),
  ADD KEY `shorttest_ibfk_1` (`id_categoryquestion`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `category_exam`
--
ALTER TABLE `category_exam`
  MODIFY `id_categoryexam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_lesson`
--
ALTER TABLE `category_lesson`
  MODIFY `id_categorylesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category_question`
--
ALTER TABLE `category_question`
  MODIFY `id_categoryquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `detailcategory_lesson`
--
ALTER TABLE `detailcategory_lesson`
  MODIFY `id_detailcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `detail_exam`
--
ALTER TABLE `detail_exam`
  MODIFY `id_detailExam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `detail_lesson`
--
ALTER TABLE `detail_lesson`
  MODIFY `id_detaillesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `detail_shorttest`
--
ALTER TABLE `detail_shorttest`
  MODIFY `id_detailTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `exam`
--
ALTER TABLE `exam`
  MODIFY `id_exam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `historyexam`
--
ALTER TABLE `historyexam`
  MODIFY `id_historyexam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `questtion`
--
ALTER TABLE `questtion`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `shorttest`
--
ALTER TABLE `shorttest`
  MODIFY `id_shortTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detailcategory_lesson`
--
ALTER TABLE `detailcategory_lesson`
  ADD CONSTRAINT `detailcategory_lesson_ibfk_1` FOREIGN KEY (`id_categorylesson`) REFERENCES `category_lesson` (`id_categorylesson`);

--
-- Các ràng buộc cho bảng `detail_exam`
--
ALTER TABLE `detail_exam`
  ADD CONSTRAINT `detail_exam_ibfk_1` FOREIGN KEY (`id_exam`) REFERENCES `exam` (`id_exam`),
  ADD CONSTRAINT `detail_exam_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `questtion` (`id_question`);

--
-- Các ràng buộc cho bảng `detail_lesson`
--
ALTER TABLE `detail_lesson`
  ADD CONSTRAINT `detail_lesson_ibfk_1` FOREIGN KEY (`id_detailcategory`) REFERENCES `detailcategory_lesson` (`id_detailcategory`);

--
-- Các ràng buộc cho bảng `detail_shorttest`
--
ALTER TABLE `detail_shorttest`
  ADD CONSTRAINT `detail_shorttest_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questtion` (`id_question`),
  ADD CONSTRAINT `detail_shorttest_ibfk_2` FOREIGN KEY (`id_shortTest`) REFERENCES `shorttest` (`id_shortTest`);

--
-- Các ràng buộc cho bảng `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`id_categoryexam`) REFERENCES `category_exam` (`id_categoryexam`);

--
-- Các ràng buộc cho bảng `historyexam`
--
ALTER TABLE `historyexam`
  ADD CONSTRAINT `historyexam_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `historyexam_ibfk_3` FOREIGN KEY (`id_exam`) REFERENCES `exam` (`id_exam`);

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`id_detaillesson`) REFERENCES `detail_lesson` (`id_detaillesson`);

--
-- Các ràng buộc cho bảng `questtion`
--
ALTER TABLE `questtion`
  ADD CONSTRAINT `questtion_ibfk_1` FOREIGN KEY (`id_categoryquestion`) REFERENCES `category_question` (`id_categoryquestion`),
  ADD CONSTRAINT `questtion_ibfk_2` FOREIGN KEY (`id_media`) REFERENCES `media` (`id_media`);

--
-- Các ràng buộc cho bảng `shorttest`
--
ALTER TABLE `shorttest`
  ADD CONSTRAINT `shorttest_ibfk_1` FOREIGN KEY (`id_categoryquestion`) REFERENCES `category_question` (`id_categoryquestion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
