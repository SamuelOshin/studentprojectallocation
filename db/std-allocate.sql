-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 02:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allocate`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'demo', 'password'),
(3, 'stephen', '11tomtom'),
(4, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `name`, `username`, `password`) VALUES
(1, 'Prof. Rahman', 'Lecturer1', 'password'),
(2, 'Dr. Ayeniko', 'Lecturer2', 'password'),
(3, 'Dr. Raji', 'Raji@user.com', 'password'),
(4, 'Prof. Toyin', 'toyin@user.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_case` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_level` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'BSc',
  `allocation` tinyint(1) NOT NULL DEFAULT 0,
  `field_of_interest` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_case`, `project_level`, `allocation`, `field_of_interest`) VALUES
(1, 'Speech Recognition System for Multilingual Support', 'Implementing a system that recognizes speech in multiple languages.', 'BSc', 0, 'AI'),
(2, 'AI-driven Personalized Content Recommendation System', 'Developing a content recommendation system using AI algorithms.', 'BSc', 0, 'AI'),
(3, 'Implementing Progressive Web Apps (PWAs) for Offline Access', 'Creating web applications with offline capabilities using PWAs.', 'BSc', 0, 'Web Development'),
(4, 'Building a Social Media Platform with Real-time Updates', 'Developing a social media platform with real-time content updates.', 'BSc', 0, 'Web Development'),
(5, 'Version Control System for Collaborative Software Development', 'Building a system for version control in collaborative software development.', 'BSc', 0, 'Software Development'),
(6, 'Creating a Cross-platform Mobile App with Flutter', 'Developing a mobile app that runs on multiple platforms using Flutter.', 'BSc', 0, 'Software Development'),
(7, 'Clustering Analysis for Customer Segmentation', 'Applying clustering analysis for customer segmentation in marketing.', 'BSc', 0, 'Data Science'),
(8, 'Time Series Forecasting for Predicting Stock Market Trends', 'Using time series forecasting to predict trends in the stock market.', 'BSc', 0, 'Data Science'),
(9, 'Gesture Recognition Using Machine Learning Algorithms', 'Implementing gesture recognition using machine learning algorithms.', 'BSc', 1, 'Machine Learning'),
(10, 'Health Monitoring System with ML-based Anomaly Detection', 'Developing a health monitoring system with machine learning-based anomaly detection.', 'BSc', 1, 'Machine Learning'),
(11, 'Generative Adversarial Networks (GANs) for Image Synthesis', 'Creating images using Generative Adversarial Networks (GANs).', 'BSc', 0, 'ML/DL'),
(12, 'Transfer Learning in Medical Imaging for Disease Diagnosis', 'Applying transfer learning in medical imaging for improved disease diagnosis.', 'BSc', 0, 'ML/DL'),
(13, 'Implementing a Cloud-based Content Delivery Network (CDN)', 'Building a cloud-based CDN for efficient content delivery.', 'BSc', 0, 'Cloud Computing'),
(14, 'Serverless Function for Real-time Image Processing', 'Developing a serverless function for real-time image processing in the cloud.', 'BSc', 0, 'Cloud Computing'),
(15, 'Smart Agriculture Monitoring System with IoT Sensors', 'Creating a smart agriculture monitoring system using IoT sensors.', 'BSc', 0, 'IoT'),
(16, 'IoT-based Smart Parking Management System', 'Developing a smart parking management system using IoT technology.', 'BSc', 0, 'IoT'),
(17, 'AR Navigation App for Indoor Spaces', 'Creating an augmented reality navigation app for indoor spaces.', 'BSc', 0, 'AR/VR'),
(18, 'VR Training Simulations for Emergency Responders', 'Developing virtual reality training simulations for emergency responders.', 'BSc', 0, 'AR/VR'),
(19, 'Multiplayer Online Battle Arena (MOBA) Game Development', 'Creating a multiplayer online battle arena (MOBA) game.', 'BSc', 0, 'Game Development'),
(20, 'Educational Game for Teaching History through Gamification', 'Developing an educational game that teaches history through gamification.', 'BSc', 0, 'Game Development'),
(21, 'Autonomous Drone Navigation System', 'Building an autonomous drone navigation system for various applications.', 'BSc', 0, 'Robotics'),
(22, 'Humanoid Robot for Assistance in Healthcare', 'Developing a humanoid robot to assist in healthcare tasks.', 'BSc', 0, 'Robotics'),
(23, 'Implementing Blockchain for Secure Data Storage', 'Creating a secure data storage system using blockchain technology.', 'BSc', 0, 'Cybersecurity'),
(24, 'Biometric Authentication System for Access Control', 'Developing a biometric authentication system for access control.', 'BSc', 0, 'Cybersecurity'),
(25, 'Sentiment Analysis on Social Media Data Streams', 'Analyzing sentiment in social media data streams for insights.', 'BSc', 0, 'Big Data Analytics'),
(26, 'Fraud Detection in Financial Transactions with Big Data', 'Detecting fraud in financial transactions using big data analytics.', 'BSc', 0, 'Big Data Analytics'),
(27, 'Automated Email Classification with Natural Language Processing', 'Implementing NLP for automated email classification and organization.', 'BSc', 0, 'AI'),
(28, 'E-commerce Recommendation Engine using Collaborative Filtering', 'Building a recommendation engine for e-commerce websites using collaborative filtering.', 'BSc', 0, 'AI'),
(29, 'Responsive Web Design with CSS Grid and Flexbox', 'Creating a responsive web design using CSS Grid and Flexbox techniques.', 'BSc', 0, 'Web Development'),
(30, 'Blockchain-based Document Verification System', 'Developing a system for secure document verification using blockchain technology.', 'BSc', 0, 'Software Development'),
(31, 'Predictive Analytics for Customer Churn in Telecom', 'Applying predictive analytics to forecast customer churn in the telecommunications industry.', 'BSc', 0, 'Data Science'),
(32, 'Machine Learning-based Fraud Detection in Online Transactions', 'Using ML algorithms to detect fraudulent activities in online transactions.', 'BSc', 0, 'Machine Learning'),
(33, 'Deep Learning for Image Recognition in Autonomous Vehicles', 'Implementing deep learning techniques for image recognition in autonomous vehicles.', 'BSc', 0, 'ML/DL'),
(34, 'Serverless Architecture for Scalable Cloud Applications', 'Designing and implementing serverless architecture for scalable cloud applications.', 'BSc', 1, 'Cloud Computing'),
(35, 'IoT-enabled Smart Home Automation System', 'Creating a smart home automation system using IoT devices and sensors.', 'BSc', 0, 'IoT'),
(36, 'Augmented Reality for Interactive Museum Exhibits', 'Developing AR applications to enhance interactivity in museum exhibits.', 'BSc', 0, 'AR/VR'),
(37, 'Mobile Game Development with Unity', 'Creating a mobile game using the Unity game development framework.', 'BSc', 0, 'Game Development'),
(38, 'Humanoid Robot with Natural Language Processing Abilities', 'Developing a humanoid robot capable of understanding and processing natural language.', 'BSc', 0, 'Robotics'),
(39, 'Biometric Encryption for Secure Data Storage', 'Implementing biometric encryption methods for secure data storage.', 'BSc', 0, 'Cybersecurity'),
(40, 'Big Data Analysis for Social Media Marketing Insights', 'Analyzing big data from social media for marketing insights and trends.', 'BSc', 0, 'Big Data Analytics'),
(41, 'Online Learning Platform with Real-time Collaboration', 'Build a platform that enables real-time collaboration among students and instructors, offering features like live streaming, chat, and collaborative document editing.', 'BSc', 0, 'Web Development'),
(42, 'Event Management System with Ticketing', 'Develop an event management system that allows users to organize and promote events, sell tickets online, and manage attendee information.', 'BSc', 0, 'Web Development'),
(43, 'Social Networking Platform for Professionals', 'Create a niche social networking platform tailored for professionals to connect, share industry insights, and collaborate on projects.', 'BSc', 0, 'Web Development'),
(44, 'Travel Blogging Website with Location-Based Features', 'Design a travel blogging website that incorporates location-based features, allowing users to share their travel experiences and recommendations.', 'BSc', 0, 'Web Development'),
(45, 'Job Board with AI Matching Algorithm', 'Develop a job board platform that uses AI algorithms to match job seekers with relevant job opportunities based on their skills and preferences.', 'BSc', 0, 'Web Development'),
(46, 'Predictive Maintenance for Industrial Equipment', 'Implement a predictive maintenance system using machine learning to anticipate equipment failures and schedule timely maintenance.', 'BSc', 0, 'Data Science'),
(47, 'Customer Churn Prediction for Subscription Services', 'Build a model to predict customer churn for subscription-based services, helping businesses identify and retain at-risk customers.', 'BSc', 0, 'Data Science'),
(48, 'Sentiment Analysis on Customer Support Interactions', 'Analyze customer support interactions using sentiment analysis to understand customer satisfaction levels and improve support services.', 'BSc', 0, 'Data Science'),
(49, 'Recommendation System for Online Retail', 'Create a personalized recommendation system for an online retail platform, enhancing the user experience and increasing sales.', 'BSc', 0, 'Data Science'),
(50, 'Anomaly Detection in Network Security', 'Develop a system for detecting anomalies in network traffic, providing early warnings for potential security threats.', 'BSc', 0, 'Data Science'),
(51, 'Wearable Health Monitoring Device', 'Design a wearable device that monitors various health metrics, such as heart rate and sleep patterns, and provides insights to users.', 'BSc', 0, 'IoT'),
(52, 'Smart City Parking Management System', 'Implement an IoT-based solution for smart parking in urban areas, helping drivers find available parking spaces efficiently.', 'BSc', 0, 'IoT'),
(53, 'Aquaponics Monitoring System', 'Create an IoT system for monitoring and controlling aquaponics setups, optimizing conditions for both plants and fish.', 'BSc', 0, 'IoT'),
(54, 'Home Energy Management System', 'Build a system that uses IoT devices to monitor and optimize home energy consumption for cost savings and environmental sustainability.', 'BSc', 0, 'IoT'),
(55, 'Asset Tracking System for Logistics', 'Develop an IoT-based asset tracking system for logistics companies to monitor the location and condition of shipments in real-time.', 'BSc', 0, 'IoT'),
(56, 'Virtual Workplace Collaboration', 'Create a virtual reality workspace that facilitates remote collaboration among team members, providing a shared virtual environment for meetings and projects.', 'BSc', 0, 'AR/VR'),
(57, 'AR Navigation for Outdoor Adventure', 'Develop an augmented reality navigation app designed for outdoor enthusiasts, offering trail guidance, points of interest, and safety information.', 'BSc', 0, 'AR/VR'),
(58, 'VR Therapy for Stress Reduction', 'Build a virtual reality therapy application that helps users manage stress and anxiety through immersive and relaxing environments.', 'BSc', 0, 'AR/VR'),
(59, 'Interactive AR Product Catalog for Retail', 'Design an augmented reality product catalog for retail businesses, allowing customers to visualize products in their own space before making a purchase.', 'BSc', 0, 'AR/VR'),
(60, 'VR Historical Reconstruction', 'Create a virtual reality experience that reconstructs historical events or places, providing an immersive educational experience for users.', 'BSc', 0, 'AR/VR'),
(61, 'Multiplayer Strategy Game with Blockchain Integration', 'Develop a multiplayer strategy game that incorporates blockchain technology for secure and transparent in-game transactions.', 'BSc', 0, 'Game Development'),
(62, 'Simulation Game for Sustainable City Planning', 'Create a simulation game that challenges players to plan and build sustainable cities, considering environmental impact and resource management.', 'BSc', 0, 'Game Development'),
(63, 'VR Fitness Game with Personalized Workouts', 'Design a virtual reality fitness game that tailors workouts to individual preferences and fitness levels, providing an engaging exercise experience.', 'BSc', 0, 'Game Development'),
(64, 'Educational Game for Language Learning', 'Build an interactive game that makes language learning enjoyable for users, incorporating gamified lessons and vocabulary challenges.', 'BSc', 0, 'Game Development'),
(65, 'AR Escape Room Adventure', 'Combine augmented reality with the escape room concept, creating an AR adventure game that challenges players with puzzles and mysteries.', 'BSc', 0, 'Game Development'),
(66, 'Automated Customer Support Chatbot', 'Develop an AI-powered chatbot that can handle customer queries and provide relevant responses in real-time.', 'BSc', 0, 'AI'),
(67, 'Image Recognition for Medical Diagnosis', 'Implement an image recognition system using AI to analyze medical images and assist in the diagnosis of diseases.', 'BSc', 0, 'AI'),
(68, 'Predictive Maintenance for Industrial Equipment', 'Create an AI model that predicts maintenance needs for industrial machinery, reducing downtime and improving efficiency.', 'BSc', 0, 'AI'),
(69, 'AI-Based Fraud Detection in Financial Transactions', 'Build a system that uses AI algorithms to detect and prevent fraudulent activities in financial transactions.', 'BSc', 0, 'AI'),
(70, 'Personalized Learning Platform', 'Develop an AI-driven educational platform that adapts to each student\'s learning style, providing personalized learning experiences.', 'BSc', 0, 'AI'),
(71, 'Automated Sentiment Analysis for Social Media', 'Implement a system that uses AI to analyze sentiments expressed on social media platforms, providing insights into public opinion.', 'BSc', 0, 'AI'),
(72, 'Autonomous Drone Navigation', 'Create an AI-powered system for autonomous drone navigation, allowing drones to navigate complex environments without human intervention.', 'BSc', 0, 'AI'),
(73, 'Speech Recognition for Multilingual Support', 'Develop a speech recognition system that can understand and transcribe speech in multiple languages.', 'BSc', 0, 'AI'),
(74, 'AI-Based Recommendation System for E-commerce', 'Build a recommendation system that uses AI algorithms to suggest products to users based on their preferences and behavior.', 'BSc', 0, 'AI'),
(75, 'Traffic Flow Optimization with AI', 'Implement an AI system that analyzes traffic patterns and optimizes traffic light timings to improve overall traffic flow in urban areas.', 'BSc', 0, 'AI'),
(76, 'E-commerce Website with Payment Integration', 'Develop a fully functional e-commerce platform with secure payment gateway integration for online transactions.', 'BSc', 0, 'Web Development'),
(77, 'Content Management System (CMS) for Blogs', 'Create a CMS that allows users to easily manage and publish content for their blogs, including text, images, and multimedia.', 'BSc', 0, 'Web Development'),
(78, 'Real-time Chat Application', 'Build a real-time chat application that enables users to communicate instantly, supporting features like private messaging and group chats.', 'BSc', 0, 'Web Development'),
(79, 'Portfolio Website for Creative Professionals', 'Design and develop a sleek portfolio website for creative professionals to showcase their work, including art, photography, and design projects.', 'BSc', 0, 'Web Development'),
(80, 'Event Management Platform', 'Create a web application for managing events, including features for event registration, ticketing, and real-time updates.', 'BSc', 0, 'Web Development'),
(81, 'Online Learning Platform', 'Develop a platform for online education with features such as course creation, video lectures, quizzes, and progress tracking for students.', 'BSc', 0, 'Web Development'),
(82, 'Social Networking Site for a Specific Niche', 'Build a social networking site tailored to a specific niche or community, offering unique features and functionalities.', 'BSc', 1, 'Web Development'),
(83, 'Job Board for a Specific Industry', 'Design a job board website focused on a particular industry, allowing employers to post job openings and candidates to apply.', 'BSc', 0, 'Web Development'),
(84, 'Travel Planning and Itinerary Generator', 'Create a web app that helps users plan their travel itineraries, suggesting activities, accommodations, and attractions based on preferences.', 'BSc', 0, 'Web Development'),
(85, 'Recipe Sharing and Cooking Community', 'Build a platform where users can share and discover recipes, join cooking communities, and participate in discussions about food and cooking.', 'BSc', 0, 'Web Development'),
(86, 'Task Management System', 'Develop a comprehensive task management system with features like deadlines and priority levels.', 'BSc', 0, 'Software Development'),
(87, 'Expense Tracker App', 'Create an application for tracking personal or business expenses with budgeting and financial reporting features.', 'BSc', 0, 'Software Development'),
(88, 'Inventory Management System', 'Build an inventory management system for businesses with features like categorization, stock level alerts, and order processing.', 'BSc', 0, 'Software Development'),
(89, 'Collaborative Code Editor', 'Develop a web-based code editor for real-time collaborative code editing, supporting various programming languages.', 'BSc', 0, 'Software Development'),
(90, 'Online Appointment Booking System', 'Create a system for scheduling and managing appointments online, suitable for various businesses.', 'BSc', 0, 'Software Development'),
(91, 'Customer Relationship Management (CRM) Software', 'Build a CRM solution to help businesses manage customer interactions, track leads, and streamline sales processes.', 'BSc', 0, 'Software Development'),
(92, 'File Encryption and Decryption Tool', 'Develop a desktop application or command-line tool for encrypting and decrypting files, providing secure data protection.', 'BSc', 0, 'Software Development'),
(93, 'Employee Attendance and Leave Management System', 'Create a system to track employee attendance, manage leave requests, and generate reports for HR purposes.', 'BSc', 0, 'Software Development'),
(94, 'Collaborative Project Management Platform', 'Build a platform facilitating collaboration among team members working on projects, with features for task assignment and progress tracking.', 'BSc', 0, 'Software Development'),
(95, 'Health and Fitness App', 'Develop a mobile application offering health and fitness tracking, including workout plans, nutrition tracking, and goal setting.', 'BSc', 0, 'Software Development'),
(96, 'Project Allocation System', 'Build a Student project allocation System to allocate project for students ', 'BSc', 0, ''),
(112, 'Project Allocation System', 'Build a Student project allocation System to allocate project for students ', 'BSc', 0, 'Web Dev');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Computer Science',
  `field_of_interest` varchar(255) COLLATE utf8_bin NOT NULL,
  `level` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'BSc',
  `matric` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `project_id` int(11) NOT NULL,
  `lecturer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `department`, `field_of_interest`, `level`, `matric`, `date`, `project_id`, `lecturer_id`) VALUES
(1, 'Samuel Oshin', 'Computer Science', 'Web Development', 'BSc', '190591248', '2023-11-21', 82, 1),
(2, 'Micheal  Iyiomo', 'Computer Science', '', 'BSc', '190591234', '2023-11-22', 0, NULL),
(17, 'Joy Owolabi', 'Computer Science', 'Machine Learning', 'BSc', '190591223', '2023-11-29', 9, NULL),
(18, 'Abass Tokosi', 'Computer Science', 'Cloud Computing', 'BSc', '190591453', '2023-11-30', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `registration_id` int(11) NOT NULL,
  `student_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matric` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `lecturer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`registration_id`, `student_id`, `name`, `matric`, `password`, `registration_date`, `lecturer_id`) VALUES
(1, 1, 'Samuel Oshin', '190591248', '$2y$10$FocJ78qdN57Yo4Pr2HjIB.dGs8BLYs8vupnZyjOAswBD6hfwKo3U2', '2023-11-21', 2),
(2, 2, 'Micheal  Iyiomo', '190591234', '$2y$10$CBZBqAACKLTUpH8Na87knekk/9XurZg4baas7MvnFyzD6ENNvbtNu', '2023-11-22', NULL),
(3, 17, 'Joy Owolabi', '190591223', '$2y$10$ZBZ6ON9JXKv5RHpDqNojje9a37cuJdFqzotKYcGjpEZjYj2nmcTfq', '2023-11-29', 1),
(5, 18, 'Abass Tokosi', '190591453', '$2y$10$rxgnoEpHj1Gi5PhbhH20TucKZrpN1AnomruTAeYEP1Xm9GWRrtuni', '2023-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `user_type` enum('admin','lecturer','student') NOT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `additional_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `user_type`, `lecturer_id`, `additional_info`) VALUES
(1, 'admin', 'password', NULL, 'admin', NULL, NULL),
(2, '190591248', '$2y$10$FocJ78qdN57Yo4Pr2HjIB.dGs8BLYs8vupnZyjOAswBD6hfwKo3U2', NULL, 'student', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`registration_id`),
  ADD KEY `fk_student_registration_student` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`id`);

--
-- Constraints for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `fk_lecturer_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`id`),
  ADD CONSTRAINT `fk_student_registration_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
