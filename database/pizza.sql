-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 10:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `full_price` double NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_desserts`
--

CREATE TABLE `products_desserts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(91) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_desserts`
--

INSERT INTO `products_desserts` (`id`, `name`, `ingredients`, `image`, `price`) VALUES
(1, 'Plazma Shake', 'Milk, plazma, cream, chocolate topping', 'https://filipsfood.files.wordpress.com/2014/05/plazma-sejk.jpg', '2.50'),
(2, 'American Pancakes', ' Eggs, milk, flour, sugar, baking powder', 'https://www.delscookingtwist.com/wp-content/uploads/2022/01/Easy-Fluffy-American-Pancakes_1.jpg', '4.50');

-- --------------------------------------------------------

--
-- Table structure for table `products_drinks`
--

CREATE TABLE `products_drinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(91) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_drinks`
--

INSERT INTO `products_drinks` (`id`, `name`, `image`, `price`) VALUES
(1, 'Coca-Cola 1.5l', 'https://plitvicemarketi.rs/images/thumbs/0017321_coca-cola-15l_511.png', '1.00'),
(2, 'Coca-Cola 0.5l', 'https://usarafastfood.rs/slike/proizvodi/31/1_Coca-Cola_0.5l.png', '0.80'),
(3, 'Rosa 1.5l', 'https://www.kipper.mk/wp-content/uploads/2022/01/4929.png', '1.00'),
(4, 'Knjaz Milos 0.5l', 'https://www.lalunaristorante.rs/wp-content/uploads/2020/11/knjaz-milos-0.5l.png', '0.80'),
(5, 'Fanta 1.5l', 'https://positano.lv/wp-content/uploads/2021/11/fanta-0.5-new.png', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `products_pizzas`
--

CREATE TABLE `products_pizzas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(91) NOT NULL,
  `ingredients` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_pizzas`
--

INSERT INTO `products_pizzas` (`id`, `name`, `ingredients`, `description`, `image`) VALUES
(1, 'Capricciosa', 'Mozzarella cheese, Italian baked ham, mushroom, artichoke and tomato', 'Pizza capricciosa is a style of pizza in Italian cuisine prepared with mozzarella cheese, Italian baked ham, mushroom, artichoke and tomato. Types of edible mushrooms used may include cremini and others. Some versions may also use prosciutto, marinated artichoke hearts, olive oil, olives, basil leaves, and egg.', 'https://www.italianstylecooking.net/wp-content/uploads/2022/01/Pizza-capricciosa-1200x900.jpg'),
(2, 'Margherita', 'Tomatoes, mozzarella cheese, garlic, fresh basil, and extra-virgin olive oil.', 'Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt, and extra-virgin olive oil.', 'https://assets.afcdn.com/recipe/20200206/107152_w1024h1024c1cx176cy267.webp'),
(3, 'Marinara', 'Tomato sauce, extra virgin olive oil, oregano, garlic', 'Pizza marinara, also known as pizza alla marinara, is a style of Neapolitan pizza in Italian cuisine seasoned with only tomato sauce, extra virgin olive oil, oregano and garlic. It is supposedly the most ancient tomato-topped pizza.', 'https://www.pizzarecipe.org/wp-content/uploads/2019/01/Pizza-Marinara-2000x1500.jpg'),
(4, 'Pugliese', 'Tomato, onion, mozzarella, Oregano, olives, and capers', 'Pizza pugliese is a style of pizza in Italian cuisine prepared with tomato, onion, and mozzarella. It is named after the region of Apulia (called in Italian Puglia). It should not be confused with pizza barese, the local Barese variant of preparing the pizza dough, which tends to be thinner and crispier than pizza napoletana.', 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2015/05/pizza_pugliese-ev-672x372.jpg'),
(5, 'Pepperoni pizza', 'Olive oil, pizza sauce, shredded mozzarella cheese, pepperoni slices, parmesan cheese', 'Pepperoni is an American variety of spicy salami made from cured pork and beef seasoned with paprika or other chili pepper.\r\n\r\nPrior to cooking, pepperoni is characteristically soft, slightly smoky, and bright red. Thinly sliced pepperoni is one of the most popular pizza toppings in American pizzerias.', 'https://www.cookingclassy.com/wp-content/uploads/2014/07/pepperoni-pizza6+srgb..jpg'),
(6, 'Greek pizza', 'Pizza sauce, dried oregano, mozzarella, roasted red peppers, artichoke, olives, feta', 'In the cuisine of the United States, Greek pizza is a style of pizza crust and preparation where the pizza is proofed and cooked in a metal pan rather than stretched to order and baked on the floor of the pizza oven. A shallow pan is used, unlike the deep pans used in Sicilian, Chicago, or Detroit-styled pizzas. Its crust is typically spongy, airy, and light, like focaccia but not as thick. The crust is also rather oily, due to the coating of oil applied to the pan during preparation.', 'https://inquiringchef.com/wp-content/uploads/2020/05/Greek-Pizza_square.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_pizzas_prices`
--

CREATE TABLE `products_pizzas_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `pizza_id` int(10) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_pizzas_prices`
--

INSERT INTO `products_pizzas_prices` (`id`, `pizza_id`, `size`, `price`) VALUES
(1, 1, 24, '5.99'),
(2, 1, 30, '9.50'),
(3, 1, 38, '15.00'),
(4, 2, 24, '6.45'),
(5, 2, 30, '8.45'),
(6, 3, 24, '11.75'),
(7, 3, 30, '14.55'),
(8, 4, 30, '10.75'),
(9, 4, 38, '14.50'),
(12, 5, 24, '6.50'),
(13, 5, 30, '9.50'),
(14, 5, 38, '15.80'),
(15, 6, 24, '12.50'),
(16, 6, 30, '16.50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products_desserts`
--
ALTER TABLE `products_desserts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_drinks`
--
ALTER TABLE `products_drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_pizzas`
--
ALTER TABLE `products_pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_pizzas_prices`
--
ALTER TABLE `products_pizzas_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_desserts`
--
ALTER TABLE `products_desserts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_drinks`
--
ALTER TABLE `products_drinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_pizzas`
--
ALTER TABLE `products_pizzas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_pizzas_prices`
--
ALTER TABLE `products_pizzas_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products_pizzas_prices`
--
ALTER TABLE `products_pizzas_prices`
  ADD CONSTRAINT `products_pizzas_prices_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `products_pizzas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
