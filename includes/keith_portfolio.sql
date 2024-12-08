-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 07, 2024 at 10:07 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keith_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int UNSIGNED NOT NULL,
  `full_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `msg`) VALUES
(1, '.Keith Lie.', '.cataalog@gmail.com.', '.Hi.'),
(2, 'Keith Lie', 'cataalog@gmail.com', 'Hi 2'),
(3, 'Keith Lie', 'cataalog@gmail.com', 'Test 2');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int UNSIGNED NOT NULL,
  `works_id` int UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `media_type` varchar(30) NOT NULL,
  `alt` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `works_id`, `name`, `media_type`, `alt`) VALUES
(1, 1, 'eternity-brainstorm.png', 'Image', 'Eternity Brainstorm Process');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `tag_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `alias`) VALUES
(1, 'UXUI', 'User Experience and Interface'),
(2, '3D', '3D Asset Production'),
(3, 'Graphic', 'Graphic Design'),
(4, 'Website', 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `icon_img` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int UNSIGNED NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `m_thumb` varchar(300) DEFAULT NULL,
  `banner` varchar(300) NOT NULL,
  `link` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_vis` varchar(8) DEFAULT NULL,
  `cs_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `team` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `overview` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `problem` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `how_might` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `how_might_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `how_might_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `target_audience` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `brainstorm` varchar(500) DEFAULT NULL,
  `brainstorm_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `key_findings` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `key_findings_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_persona_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_persona_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `design_decisions` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `design_decisions_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sketches` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sketches_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sketches_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `site_map` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `site_map_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `site_map_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ia_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ia_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `flow_chart` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `flow_chart_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `flow_chart_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `wireframe` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `wireframe_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `wireframe_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `highfid` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `highfid_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prototyping` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prototype_link` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prototype_img` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prototype_img_vis` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL,
  `feedback_vis` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `feedback_img` varchar(40) NOT NULL,
  `key_takeaways` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `logo`, `thumbnail`, `m_thumb`, `banner`, `link`, `link_vis`, `cs_no`, `title`, `type`, `team`, `year`, `overview`, `problem`, `how_might`, `how_might_img`, `how_might_vis`, `target_audience`, `brainstorm`, `brainstorm_img`, `key_findings`, `key_findings_img`, `user_persona_img`, `user_persona_vis`, `design_decisions`, `design_decisions_img`, `sketches`, `sketches_img`, `sketches_vis`, `site_map`, `site_map_img`, `site_map_vis`, `ia`, `ia_img`, `ia_vis`, `flow_chart`, `flow_chart_img`, `flow_chart_vis`, `wireframe`, `wireframe_img`, `wireframe_vis`, `highfid`, `highfid_img`, `prototyping`, `prototype_link`, `prototype_img`, `prototype_img_vis`, `feedback`, `feedback_vis`, `feedback_img`, `key_takeaways`) VALUES
(1, 'eternity-logo', 'd-eternity-thumb', 'm-eternity-thumb', 'eternity-banner', NULL, 'hidden', '04', 'Eternity', 'Website', 'BIGDONTE Entertainment', '2022', 'Eternity is a trading and investment company in Indonesia that wants to target youngsters to start investing and trading for the future. The vision of this company is to make trading easier with more engaging experience so that it\'s going to be easier for younger generation to start trading.', 'The client is a company called Topgrowth Futures which works on Forex and Commodity trading field. Most of their clients are older people ranged from 30 to 50 years old with a high economic status. However they want to expand their business to catch the interest of younger audiences. Then they create a new brand called Eternity and need a Brand Activation for younger ones to join them. ', 'After knowing the problem, I come up with some “How Might We” questions to trigger ideas and ways to solve this problem.', 'eternity-how-might-we', NULL, 'eternity-target-audience', 'First of all after understanding the problem and design challenge, together with the agency team, consists of me, creative director, and brand division team, give out ideas about how might we activate the new brand digitally.', 'eternity-brainstorm', 'After the brainstorm process within the design team, we come up with several key findings:', 'eternity-key-findings', 'eternity-user-persona', NULL, 'To sum up all of the information and data, Helena as the user persona in this projects is a beginner in financial investment, yet eager to learn in a fun way and wanted to prepare future savings. However most of the existing investment platform seems too serious and need huge capital to start. So I tried to point out the stakeholders’ needs to decide what output needs to be designed.', 'eternity-design-decisions', NULL, NULL, 'hidden', 'Starting off from creating a sitemap for the website.', 'eternity-sitemap', NULL, '', '', 'hidden', 'Then continuing in creating a Flowchart\r\nThe core flow is for user to be aware of the brand and register on the website\r\nThe subsidiary would be for users to learn about trading.', 'eternity-flowchart', NULL, 'Then creating wireframes.', 'eternity-wireframe', NULL, 'Approved design and High-Fidelity website design.', 'eternity-highfid', 'After all the designs are approved by the client, then I tried creating a web prototype using Figma Prototype feature for then be given to the developer team after client approval.', 'https://embed.figma.com/proto/TAv77bOaemxgQ61UIHn1rC/Webpage?page-id=1754%3A25&node-id=1754-32&node-type=canvas&viewport=1605%2C1485%2C0.06&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1754%3A32&show-proto-sidebar=1&embed-host=share', NULL, 'hidden', 'After presenting to the client, I got some feedbacks regarding the website prototype:\r\nNeed to add another financial investment/trading aspect\r\nLets do a grouping of registration section by removing “Redeem” to decrease confusion\r\nDevelop more on the gift, so that people will have another motivation in joining the services. This point gamification mechanic will reward users after using the platform', NULL, 'eternity-feedback', 'Designing company profile website for specific purpose was not as easy as it looks like! There were several concepts rejected because it does not meet the criteria of the financial/investment field of work.\r\n\r\nNeeded more research and understanding of the company’s industry and the users’ behaviour to further designed the best experience for the target audiences\r\nUnderstanding the perspective of the developer’s is important! This will lead to a better decision making in designing the interactivity with various micro-interactions.\r\n\r\nDesigning as ideal as possible might not work in reality. Needed to communicate well and measure the feasibility of the product.'),
(2, NULL, 'mot-thumbnail.png', NULL, '', NULL, '0', '02', 'Manager of Time', 'Mobile App', 'Keith Lie', '2021', 'Early teenagers within the range of 13 to 15 years old are beginning to develop negative trait such as anxiety, confusion, restlessness, etc. In addition, Indonesian teenagers are encouraged with many activities such as extracullicular, group study, musical course, and others.\r\n', 'Early teenagers within the range of 13 to 15 years old are beginning to develop negative trait such as anxiety, confusion, restlessness, etc. In addition, Indonesian teenagers are encouraged with many activities such as extracullicular, group study, musical course, and others.\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(3, 'hk-logo', 'd-hk-thumb', 'm-hk-thumb', 'hk-banner', 'https://housejapanesecurry.com/', '0', '01', 'House Kari', 'Website', 'BIGDONTE Entertainment', '2024', 'House Kari ala Jepang is a brand that sells cooking ingredients, especially Curry Roux. Not only selling Curry Roux in the shape of a packaged ready to cook, they also sell other spices such as wasabi powder, nutmeg, edamame, ito kezuri, and others. ', 'Being a company that export a lot of ingredients from Indonesia to other countries, House Kari ala Jepang needs a website that can uphold that reputation and brand image of being the trusted partner in spices industry. They had a website before, yet it wasn’t working as expected and needed a redesigned to enhance their sales and brand awareness.', 'Some brainstorming required to design the website. I start of as thinking how might we can help the client solve their problem.', 'hk-how-might-we', NULL, 'hk-target-audience', 'After organizing questions and making an initial target audience based on interview with the clients, I continue to brainstorm some ideas with my design team to provide more constructive and creative ideas.', 'hk-brainstorm', 'After the brainstorm process within the design team, we come up with several key findings:', 'hk-key-findings', 'hk-user-persona', NULL, 'To sum up all of the information and data, helena as the user persona in this projects is a beginner in financial investment, yet eager to learn in a fun way and wanted to prepare future savings. However most of the existing investment platform seems too serious and need huge capital to start. So I tried to point out the stakeholders’ needs to decide what output needs to be designed.', 'hk-design-decisions', NULL, NULL, 'hidden', 'Starting off from creating a sitemap for the website.', 'hk-sitemap', NULL, 'Detailed Information Architecture', 'hk-ia', NULL, NULL, NULL, 'hidden', 'Then creating wireframes.', 'hk-wireframe', NULL, 'Approved design and High-Fidelity website design.', 'hk-highfid', 'After all the designs are approved by the client, then I tried creating a web prototype using Figma Prototype feature for then be given to the developer team after client approval.', 'https://embed.figma.com/proto/pX6BLiCg3et88HRUFDw0fV/HKAJ?page-id=0%3A1&node-id=203-2076&node-type=canvas&viewport=524%2C423%2C0.24&scaling=scale-down&content-scaling=fixed&starting-point-node-id=203%3A2076&show-proto-sidebar=1&embed-host=share', NULL, 'hidden', 'After presenting the design and prototype to the client, there are series of revisions, feedbacks, and iterations. One of the sample that made a major layout change was the article section. From left to right on the picture below. The previous design looks too cluttered with many unimportant visual elements and a generic article looks. So I revised it to the right picture.', NULL, 'hk-feedback', 'The redesign highlighted the importance of simplicity and focus, as the initial cluttered layout was streamlined for better usability and engagement. Iterative feedback from the client played a key role in refining the design to align with their vision and expectations. The revised article section successfully balanced aesthetics with functionality, creating a more modern and intuitive layout. Understanding the target audience was crucial, ensuring the design catered to both mothers and business owners effectively. Clear communication and flexibility throughout the process fostered trust and resulted in a successful outcome.'),
(4, 'beeliv-logo', 'd-beeliv-thumb', 'm-beeliv-thumb', 'beeliv-banner', 'https://beeliv.co.id/', '0', '02', 'Beeliv', 'Website', 'Keith Lie & Jennifer Anjanette', '2023', 'Beeliv is a company that focuses on the renting industry. Yet they offer their services not only to people who are searching for rent, but also to prospective landlords or individuals that have a real estate property but have no time to operate it as a rental.', 'Having so many competitors such as Airbnb, RedDoorz, Cove, and others in the Asian market, especially Indonesia. Beeliv need a branding and product to be able to compete and show the market what their unique selling propositions are. So Beeliv is in a deep need of Brand Identity to show their existence in the industry together with a product to showcase their services.', 'Some brainstorming required to design the website. I start of as thinking how might we can help Beeliv compete in the market and showcases their strength to the masses.', 'beeliv-how-might-we', NULL, 'beeliv-target-audience', 'After organizing questions and making an initial target audience based on interview with the clients, I continue to brainstorm some ideas with my design partner, Jennifer. We discussed about many things regarding the problem and gave each other interesting ideas.', 'beeliv-brainstorm', 'After the brainstorm process within the design team, we come up with several key findings:', 'beeliv-key-findings', 'beeliv-user-persona', NULL, 'The platform should offer a seamless experience for renters and landlords, featuring verified listings, secure payments, and clear rental terms. Community-driven tools like forums and reviews will build trust, engagement, and accountability.', 'beeliv-design-decisions', 'Brand Identity design process before going to the website design development.', 'beeliv-sketches', NULL, 'After the branding and visual identity was approved by the client, I then start off by the simple sitemap of the website.', 'beeliv-sitemap', NULL, 'Detailed Information Architecture', 'beeliv-ia', NULL, NULL, NULL, 'hidden', 'Then creating wireframes.', 'beeliv-wireframe', NULL, 'Approved design and High-Fidelity website design.', 'beeliv-highfid', 'After all the designs are approved by the client, then I tried creating a web prototype using Figma Prototype feature for then be given to the developer team after client approval.', 'https://embed.figma.com/proto/Vvhec6FmyhZcPqaJWqC0FF/Beeliv?page-id=56%3A446&node-id=504-1232&node-type=canvas&viewport=275%2C434%2C0.13&scaling=scale-down&content-scaling=fixed&starting-point-node-id=504%3A1232&show-proto-sidebar=1&embed-host=share', NULL, 'hidden', 'Throughout the process, there were of course a series of revisions. The most notable one for me is the feedback on the logo in which me and my friend Jennifer created another logo to fit the client’s needs. From the entire process, I feel like the feedbacks were on point and finally we can create a brand we proud of.', NULL, 'beeliv-feedback', 'The Beeliv project highlights the importance of creating a dual-sided platform that caters equally to both renters and landlords, addressing their unique needs and challenges. Incorporating community engagement tools such as forums and review systems fosters accountability and creates a supportive ecosystem. The design must prioritize simplicity, convenience, and accessibility to meet the expectations of tech-savvy users in a competitive rental market. Additionally, a strong brand identity and innovative digital features are essential for differentiating Beeliv from competitors, while ensuring the platform is scalable for expansion into other Southeast Asian markets.'),
(5, 'alga-logo', 'd-alga-thumb', 'm-alga-thumb', 'alga-banner', 'https://www.algamattress.com/', '0', '03', 'ALGA', 'Website', 'BIGDONTE Entertainment', '2022', 'ALGA is a company that sells high-quality mattresses in Indonesia. It has been a strong company for a long time. Yet they finally feel a need in following current trend and felt that their brand is a bit outdated. So me and my team at BIGDONTE tried to rebrand and I’m responsible to create the UXUI in the form of a website.', 'ALGA is a mattress-producing company that sells high quality mattress for high economic people. From the day it was founder, ALGA only sell their products on existing e-commerce and offline outlets. This situation then made the company’s brand awareness is low and the availability/customizability of products are limited.', 'Some brainstorming required to design the website. I start of as thinking how might we can help the client solve their problem.', 'alga-how-might-we', NULL, 'alga-target-audience', 'After organizing questions and making an initial target audience based on interview with the clients, I continue to brainstorm some ideas with my design team to provide more constructive and creative ideas.', 'alga-brainstorm', 'After the brainstorm process within the design team, we come up with several key findings:', 'alga-key-findings', 'alga-user-persona', NULL, 'To summarize, Budi is a family man that cares a lot about the quality of sleep. Since having the best rest will leads to a better health, especially for himself and his loved ones. For him, money is not the issue, but finding the right product in the market with the variety of brand is.', 'alga-design-decisions', 'Start off with doing a rebrand and make a photo treatment with the team.', 'alga-sketches', NULL, 'Then creating a sitemap for the website.', 'alga-sitemap', NULL, NULL, NULL, 'hidden', 'After having a great understanding of the structure, then I continue to make user flows with scenarios:\r\nThe core flow is for user to learn and understand each mattress type that suit their specific condition\r\nThe secondary would be for users to buy the product', 'alga-flowchart', NULL, 'Then creating wireframes.', 'alga-wireframe', NULL, 'Approved design and High-Fidelity website design.', 'alga-highfid', 'After all the designs are approved by the client, then I tried creating a web prototype using Figma Prototype feature for then be given to the developer team after client approval.', 'https://embed.figma.com/proto/M2xvjdITa1UcdWjvyqrIrk/Website-ALGA?page-id=1215%3A1024&node-id=1215-15442&node-type=canvas&viewport=1011%2C2900%2C0.17&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1215%3A15442&show-proto-sidebar=1&embed-host=share', NULL, 'hidden', 'After presenting the design and prototype to the client, there are series of revisions, feedbacks, and iterations. This is an example of the overall flow when user wanted to buy a mattress after understanding its specification and use. Also some feedbacks on the product details page.', NULL, 'alga-feedback', 'Designing an online shopping website is more complex than just simply company profile! There are more user flow, especially to buy the product. Needed a detailed information of the company from the beginning to get through simple content revision, instead have a more focus on design-based iteration. Different purpose need different treatment in guiding the design through the brand guideline and target audience. This would lead to a more user centric design. Combining brand vision and user need is as exciting and challenging as it sounds! Its interesting how to design for the user while thinking about the brand guideline of a company.');

-- --------------------------------------------------------

--
-- Table structure for table `work_tags`
--

CREATE TABLE `work_tags` (
  `id` int UNSIGNED NOT NULL,
  `tags_id` int UNSIGNED NOT NULL,
  `works_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_tools`
--

CREATE TABLE `work_tools` (
  `id` int UNSIGNED NOT NULL,
  `tools_id` int UNSIGNED NOT NULL,
  `works_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_id` (`works_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_tags`
--
ALTER TABLE `work_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_id` (`tags_id`),
  ADD KEY `work_tag_group` (`works_id`);

--
-- Indexes for table `work_tools`
--
ALTER TABLE `work_tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tools_id` (`tools_id`),
  ADD KEY `work_tools_group` (`works_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_tags`
--
ALTER TABLE `work_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_tools`
--
ALTER TABLE `work_tools`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `works_id` FOREIGN KEY (`works_id`) REFERENCES `medias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_tags`
--
ALTER TABLE `work_tags`
  ADD CONSTRAINT `tags_id` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_tag_group` FOREIGN KEY (`works_id`) REFERENCES `works` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `work_tools`
--
ALTER TABLE `work_tools`
  ADD CONSTRAINT `tools_id` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_tools_group` FOREIGN KEY (`works_id`) REFERENCES `works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
