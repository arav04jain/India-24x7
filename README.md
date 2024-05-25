# India-24x7
This is a news website in which articles can be reported, read and written. 

This file requires databse. The MySQL code is given below:
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 07:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `india_24x7`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(7) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `preview` varchar(150) NOT NULL,
  `content` mediumtext NOT NULL,
  `subject` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reports` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `heading`, `image`, `preview`, `content`, `subject`, `writer`, `date`, `reports`) VALUES
(4, 'Cristiano Ronaldo Shares Picture With Lionel Messi', 'https://c.ndtvimg.com/2023-01/18qijn6o_cristiano-ronaldo-and-lionel-messi_625x300_20_January_23.jpg?output-quality=80&downsize=1278:*', 'Cristiano Ronaldo shared a picture with Lionel Messi after the friendly match between PSG and Riyadh XI. ', 'The GOATs reunited on the football field as Lionel Messis Paris Saint-Germain took on Cristiano Ronaldos Al-Nassr Al-Hilal XI in a friendly encounter. The match ended with the French side securing a thrilling 5-4 victory despite playing most of the game with a man short. After the match, Ronaldo posted a number of pictures on Instagram, including one with his greatest-rival Lionel Messi. The caption of the picture simply won fans hearts. Ronaldo found the scoresheet twice, once from the penalty spot and the other time through a header. But, his heroics could prevent the All-Star XI from losing to the Ligue 1 club.\r\n\r\nThough the Portuguese footballer failed to inspire his team to a win on the field, he won the internet with his post after the game. Ronaldo wrote: So happy to be back on the pitch, and on the score sheet!! And nice to see some old friends!.\r\n\r\nHe shared a total of 5 pictures with the post, one of which was with Messi.\r\n\r\nRonaldo had an eventful match. He was decked by PSG keeper Keylor Navas flailing fist but he drilled the resulting penalty and then added another in a 5-4 exhibition defeat, his first appearance since moving to Saudi Arabia in a deal said to total more than 400 million euros.\r\n\r\nFor Qatar-owned PSG, Messi and Kylian Mbappe both scored and Neymar missed a penalty before they withdrew on the hour-mark alongside Ronaldo, who was representing a composite Saudi side, to leave the worlds four best-paid players watching from the bench in Riyadh.\r\n\r\nListen to the latest songs, only on JioSaavn.com\r\n\r\nHundreds of millions of euros worth of footballers were on view for the exhibition game in the Saudi capital, which comes just weeks after neighbouring Qatar spent lavishly on the first World Cup on Arab soil, won by Messis Argentina.\r\n\r\n', 'Sports News', 'Unknown(NDTV)', '2023-01-21', 1),
(3, 'Finland promises $400 million euros additional military aid to Ukraine', 'https://images.hindustantimes.com/img/2023/01/20/550x309/UKRAINE-CRISIS-DONETSK-SHELLING-18_1674202115580_1674202115580_1674202170404_1674202170404.JPG', 'Russia-Ukraine war: The new donation would triple the total value of Finlands defence aid to Ukraine, bringing the total so far to 590 million euros.', 'Russia-Ukraine war: The new donation would triple the total value of Finlands defence aid to Ukraine, bringing the total so far to 590 million euros.\r\n\r\nFinland announced a new donation of 400 million euros ($434 million) worth of defence equipment for Ukraine.\r\n\r\nThe new donation would triple the total value of Finlands defence aid to Ukraine, bringing the total so far to 590 million euros, the Defence Ministry said in a statement. A ministry spokesperson said the package does not include Leopard 2 tanks.', 'International News', 'Unknown(Hindustan Times)', '2023-01-20', 2),
(6, 'France, Germany Renew Alliance Strained Amid War In Ukraine', 'https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/huhsgq9jyptqvcmt_1674373075.jpeg', 'France and Germany are seeking to overcome differences laid bare by Russias war in Ukraine and shore up their...', 'France and Germany are seeking to overcome differences laid bare by Russias war in Ukraine and shore up their alliance with a day of ceremonies and talks Sunday on Europes security, energy, and other challenges.\r\n\r\nFrance and Germany are seeking to overcome differences laid bare by Russias war in Ukraine and shore up their alliance with a day of ceremonies and talks Sunday on Europes security, energy and other challenges.\r\n\r\nGermanys entire Cabinet is in Paris for joint meetings, and 300 lawmakers from both countries are coming together at the Sorbonne University to mark 60 years since a landmark treaty sealed a bond between the longtime enemies that underpins todays European Union.\r\n\r\nFrench President Emmanuel Macron and German Chancellor Olaf Scholz will oversee two rounds of talks at the Elysee Palace, focusing first on energy and economic policy, and then on defense.\r\n\r\nA top priority is working out Europes response to the subsidies for U.S. electric car makers and other businesses in the Biden administrations Inflation Reduction Act, according to senior French and German officials.\r\n\r\nFrance wants Europe to counter what it considers an unfair move by Washington. Paris is pushing for the EU to relax rules on state subsidies in order to accelerate their allocation, simplify the blocs support for investments and create an EU sovereign fund to boost green industries. Berlin, however, warns against protectionism.\r\n\r\nOn defense, the neighbors are expected to discuss military aid to Ukraine , according to French and German officials who werent authorized to be publicly named according to their governments policies.\r\n\r\nBoth countries have contributed significant weaponry, but Ukraine is asking for tanks and more powerful arms as Russias war drags on.\r\n\r\nThe war has exposed differences in strategy between the two countries, notably in European talks on how to deal with the resulting energy crisis and punishing inflation, as well as over future military investment.\r\n\r\nSundays gathering is the first such in-person joint government meeting since 2019. It was originally scheduled for October, but was repeatedly delayed.\r\n\r\nThe officials are marking the 60th anniversary of the Elysee Treaty signed by French President and wartime anti-Nazi resistance leader Charles de Gaulle and West German Chancellor Konrad Adenauer on Jan. 22, 1963.', 'International News', 'Unknown(Republic World)', '2023-01-22', 5),
(13, 'hello', 'hello', 'hello', 'hello', 'National News', 'ierbe', '2024-04-13', 0),
(2, 'I abused Ishan Kishan, fought with him: Shubman Gill reveals pre-match banter after double century', 'https://images.hindustantimes.com/img/2023/01/18/550x309/India-New-Zealand-Cricket-19_1674072024438_1674072024438_1674072198720_1674072198720.jpg', 'Indian opener Shubman Gill slammed a sensational...', 'Indian opener Shubman Gill slammed a sensational double-century in Team Indias thrilling final-over win against New Zealand on Wednesday. The Player of the Match also gave Ishan Kishan a special mention after the hosts defeated the Black Caps by 12 runs. Indian opener Shubman Gill fashioned Team Indias impressive win over New Zealand in the high-scoring contest at the Rajiv Gandhi International Stadium in Hyderabad on Wednesday. Days after his teammate Ishan Kishan slammed a stunning double century in Bangladesh, Indian opener Gill became bettered the left-hander by becoming the fastest to the landmark in ODIs at the age of 23. Gill smashed a blistering 208 off 149 balls in the 1st ODI between the 2019 World Cup semi-finalists. Gills sublime knock powered India to 349/8 in the 50-over contest. The Indian opener was named the Player of the Match for his majestic innings that was laced with 19 fours and 9 sixes against the top-ranked ODI side. Speaking at the post-match ceremony, the Indian opener gave Kishan a special mention. When asked about joining Kishan in the elite club of double century-makers, Gill told sports presenter Harsha Bhogle that the Indian wicketkeeper-batter is one of his best friends. \"He (Kishan) is one of my best mates. I was there when he scored his ODI double-hundred and it was special. It feels nice when you want to do something and it is coming off regularly. Definitely a sense of satisfaction. It (double ton) has sunk in pretty well. The game went much closer than I expected,\" Gill said. Gill was not a part of the ODI squad but the right-hander was there in the dressing room as part of the Test match when Kishan smashed the double century in the last ODI. After Gills heroics on Wednesday, he was joined by India captain Rohit Sharma and Ishan Kishan for a chat. The video of the candid conversation was shared by BCCI in which the right-hander from Punjab revealed how roommate Kishan irritates on the eve of the match.', 'Sports News', 'Unknown(Hindustan Times)', '2023-01-19', 1),
(1, 'Indian Conversation Conflict', 'https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/ejg1kegwvir9r7yl_1674117217.jpeg', '3 double opener centurions, 2 spots. ', 'Ishan Kishan: I have a question for him) What was your pre-match routine?\r\nRohit Sharma: (Interrupting) You should know that as you guys stay in the same room…\r\nShubman Gill: He (Kishan) spoils my entire pre-match routine as he does not let me sleep. He does not use earphones and watches movie in full volume. Isko main gaali deke bolta hu bhai awaz kam kar le ya earphones laga le. Par ye bolta hai ki tu mere room mein so raha hai. Meri marzi se chalega. Har roz ladai hoti hai. (I abuse him and ask him to turn down the volume but he says it is his room and the rules will be according to him. I fight with him daily). This is my pre-match.\r\nIshan Kishan: I think it is because you slept in my room, you scored my runs.\r\nRohit Sharma: Just to let you know guys. These two are real buddies. They have been playing cricket together since ages. They go back a long way. They have got great camaraderie.\r\nBecoming the fifth Indian batter to slam a double ton in mens ODI cricket, Gill also surpassed batting legend Sachin Tendulkar and became the highest individual run-getter against New Zealand in the 50-over format. Master Blaster Tendulkar had played an unbeaten knock of 186 against New Zealand at Hyderabad in 1999. The 23-year-old is the youngest batter to register a double hundred in the 50-over format. Opener Gill is also the fastest Indian to complete 1,000 runs in ODI cricket.\r\nI was waiting eagerly to go out and do what I want to do. With wickets falling, at times I wanted to unleash and I am glad I could do it at the end. Sometimes when the bowler is on top, you need to make them feel pressure. Need to avoid dot balls, show some intent and hit hard into the gaps. Which is what I was doing. Was not really thinking of 200, but once I hit sixes in the 47th over, I did feel that I could. Before that, I was playing what was coming to me Gill said after Indias 12-run win over the Black Caps.\r\n', 'Sports News', 'Unknown(Hindustan Times)', '2023-01-19', 3),
(11, 'xx', 'xxx', 'xxx', 'xxxx', 'International News', 'xxx', '2023-07-21', 2),
(12, 'xxx', 'rbveh', 'jb i3bi', 'eb iu4n', 'Business News', ' hneir', '2024-04-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `heading` (`heading`),
  ADD UNIQUE KEY `preview` (`preview`),
  ADD UNIQUE KEY `image` (`image`) USING HASH,
  ADD UNIQUE KEY `content` (`content`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
