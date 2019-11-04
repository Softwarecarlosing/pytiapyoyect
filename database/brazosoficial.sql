create database brazosoficial;

use brazosoficial;

CREATE TABLE `administradores` (
  `idAdmin` int(11) NOT NULL,
  `nombreadmin` tinytext NOT NULL,
  `password` varchar(45) NOT NULL,
  `correoelectronicoadmin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdmin`, `nombreadmin`, `password`, `correoelectronicoadmin`) VALUES
(1, 'carlos carmona', '123456', 'carlos@gmail.com'),
(4, 'damian', '12', 'damian@gmail.com'),
(5, 'oscar', '12', 'da@gmail.com'),
(6, 'damian', '14', 'pol@gmail.com'),
(8, 'oscar', '12', 'carloscarmoaperez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manoafectacion`
--

CREATE TABLE `manoafectacion` (
  `idManoAfectacion` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `anchoMunon` double NOT NULL,
  `largoMunon` double NOT NULL,
  `anchoMuneca` double NOT NULL,
  `superheroe` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manosaludable`
--

CREATE TABLE `manosaludable` (
  `idManoSaludable` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `largodedomenique` double NOT NULL,
  `largodedoanular` double NOT NULL,
  `largodedomedio` double NOT NULL,
  `largodedopulgar` double NOT NULL,
  `largodorso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `nombrepaciente` tinytext NOT NULL,
  `apellidopaterno` tinytext NOT NULL,
  `apellidomaterno` tinytext NOT NULL,
  `edad` int(11) NOT NULL,
  `nombretutor` tinytext NOT NULL,
  `apellidopaternotutor` tinytext NOT NULL,
  `apellidomaternotutor` tinytext NOT NULL,
  `parentesco` tinytext NOT NULL,
  `correoelectronico` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `nombreusuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulantes`
--

INSERT INTO `postulantes` (`nombreusuario`, `email`) VALUES
('carlos', 'carlos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropostulantes`
--

CREATE TABLE `registropostulantes` (
  `idPostulante` int(11) NOT NULL,
  `nombrepaciente` tinytext NOT NULL,
  `apellidopaterno` tinytext NOT NULL,
  `apellidomaterno` tinytext NOT NULL,
  `edad` int(11) NOT NULL,
  `nombretutor` tinytext NOT NULL,
  `apellidopaternotutor` tinytext NOT NULL,
  `apellidomaternotutor` tinytext NOT NULL,
  `parentesco` tinytext NOT NULL,
  `correoelectronico` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `calle` tinytext NOT NULL,
  `noexterior` int(11) NOT NULL,
  `condicion` tinytext NOT NULL,
  `ingresomensual` int(11) NOT NULL,
  `dedomenique` varchar(44) NOT NULL,
  `dedoanular` varchar(44) NOT NULL,
  `dedomedio` varchar(44) NOT NULL,
  `dedopulgar` varchar(44) NOT NULL,
  `largodorso` varchar(44) NOT NULL,
  `anchomunon` varchar(44) NOT NULL,
  `largomunon` varchar(44) NOT NULL,
  `anchomuneca` varchar(44) NOT NULL,
  `superheroe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registropostulantes`
--

INSERT INTO `registropostulantes` (`idPostulante`, `nombrepaciente`, `apellidopaterno`, `apellidomaterno`, `edad`, `nombretutor`, `apellidopaternotutor`, `apellidomaternotutor`, `parentesco`, `correoelectronico`, `telefono`, `estado`, `municipio`, `calle`, `noexterior`, `condicion`, `ingresomensual`, `dedomenique`, `dedoanular`, `dedomedio`, `dedopulgar`, `largodorso`, `anchomunon`, `largomunon`, `anchomuneca`, `superheroe`) VALUES
(1, 'ssadsadsads', 'sdsd', '', 0, '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', ''),
(2, 'sdadasd', 'sadasdasd', 'sdfsadasd', 4, 'dsfdsfsdfds', 'dfdsfsd', 'fdsfsdf', 'fferfer', 'carlos@gamil.com', 344324324, 'hidlago', 'tulancingo', 'sds', 13, 'ddddd', 1, 'sdasd', 'dsadsad', 'sdsadsad', 'sdfdsf', 'sdfdsf', 'sdfdsf', 'sadasd', 'asdasd', 'see'),
(3, 'hgj', 'hjgh', 'kjgjgjjk', 28, 'hhhghghgjh', 'rreretr', 'fejhhj', 'jhhjjjdfe', 'carlos@gmai.com', 77532, 'eeefef', 'ghhg', 'jgjkgjk', 1213, 'ggu', 76, 'hjgjhgh', 'hjghjghj', 'hjkgkj', 'hghjg', 'khjg', 'hfhj', 'jhfhg', 'hjfjhfg', 'ghfghf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropostulantess`
--

CREATE TABLE `registropostulantess` (
  `idPostulante` int(11) NOT NULL,
  `nombrepaciente` tinytext NOT NULL,
  `apellidopaterno` tinytext NOT NULL,
  `apellidomaterno` tinytext NOT NULL,
  `edad` int(11) NOT NULL,
  `nombretutor` tinytext NOT NULL,
  `apellidopaternotutor` tinytext NOT NULL,
  `apellidomaternotutor` tinytext NOT NULL,
  `parentesco` tinytext NOT NULL,
  `correoelectronico` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `calle` tinytext NOT NULL,
  `noexterior` int(11) NOT NULL,
  `condicion` tinytext NOT NULL,
  `ingresomensual` int(11) NOT NULL,
  `dedomenique` double NOT NULL,
  `dedoanular` double NOT NULL,
  `dedomedio` double NOT NULL,
  `dedopulgar` double NOT NULL,
  `largodorso` double NOT NULL,
  `anchomunon` double NOT NULL,
  `largomunon` double NOT NULL,
  `anchomuneca` double NOT NULL,
  `superheroe` varchar(69) NOT NULL,
  `estatus` varchar(30) default 'en espera',
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registropostulantess`
--

INSERT INTO `registropostulantess` (`idPostulante`, `nombrepaciente`, `apellidopaterno`, `apellidomaterno`, `edad`, `nombretutor`, `apellidopaternotutor`, `apellidomaternotutor`, `parentesco`, `correoelectronico`, `telefono`, `estado`, `municipio`, `calle`, `noexterior`, `condicion`, `ingresomensual`, `dedomenique`, `dedoanular`, `dedomedio`, `dedopulgar`, `largodorso`, `anchomunon`, `largomunon`, `anchomuneca`, `superheroe`) VALUES
(1, 'fsfsdf', 'xcvxdv', 'dfsdfds', 7, 'sadsadas', 'sdsadasd', 'sdasdas', 'sdsadas', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 33, 'jksjksad', 123213, 2.3, 3.2, 0, 0, 0, 0, 0, 0, ''),
(2, 'dsfdsfsd', 'sdfsdf', 'sdfsdfsd', 6, 'sdfsdfsdfsd', 'dsfsdfds', 'dsfsdf', 'sdfsdf', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 43, 'sdfsdfsdf', 3434324, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'jkdhd'),
(3, 'carlos', 'carmona', 'perez', 8, 'daniel', 'ortega', 'perez', 'tio', 'tio@gmail.com', 54545, 'hidlago', 'san jose', 'ferreira', 123, 'medio', 4000, 2.2, 2.2, 2.4, 3.3, 3.3, 4.3, 4.3, 4.3, 'iron main'),
(4, 'Jose', 'Sabedra', 'Lora', 6, 'VLadis', 'Carmona', 'Perez', 'bvcvb', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 8, 'der', 4545, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron main'),
(5, 'Luis', 'Ortega', 'Amaranto', 7, 'Alejandro', 'Lopez', 'Perez', 'bvcvb', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 8, '', 0, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron man'),
(6, 'daniel', 'Lopez', 'Ancho', 7, 'Oscar', 'Perez', 'Fernandez', 'Padre', 'carlos@gmail.com', 777777, 'rfref', 'rfefref', 'rfefer', 32323, 'rfref', 12000, 2.2, 2.2, 2.2, 3.2, 3.2, 3.3, 3.3, 3.3, 'iron main'),
(7, 'Carlos', 'Lopez', 'Carmona', 6, 'Alejandro', 'Lopez', 'Perez', 'Padre', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 12, 'medio', 12000, 2.2, 2.2, 2.2, 2.2, 2.7, 2.7, 2.3, 2.4, 'iron main'),
(8, 'fdsf', 'dfsdsf', 'dfdsf', 7, 'dsfdsf', 'dsfdsf', 'dsfdfs', 'dfdsfds', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 3423, 'dsfds', 3221, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron main'),
(9, 'fdsf', 'dfsdsf', 'dfdsf', 7, 'dsfdsf', 'dsfdsf', 'dsfdfs', 'dfdsfds', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 3423, 'dsfds', 3221, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron main'),
(10, 'fdsf', 'dfsdsf', 'dfdsf', 7, 'dsfdsf', 'dsfdsf', 'dsfdfs', 'dfdsfds', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 3423, 'dsfds', 3221, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron main'),
(11, 'fdgfdg', 'fgfdg', 'fdgfdg', 7, 'fgfdgfd', 'fdgfdg', 'fdgfdg', 'hgfghfgh', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 54, '56546', 56546, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, '2.2'),
(12, 'dsfdsf', 'dsfdsf', 'dsfdsf', 7, 'dfdsf', 'dfdsf', 'dsfds', 'dsfdsfsd', 'carloscarmoaperez@gmail.com', 734783478, 'rfref', 'rfefref', 'rfefer', 6456546, 'rfref', 45654, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 'iron main');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socioeconomico`
--

CREATE TABLE `socioeconomico` (
  `idEstudioSocioEconomico` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(25) NOT NULL,
  `municipio` varchar(25) NOT NULL,
  `estado` tinytext NOT NULL,
  `condicion` varchar(30) NOT NULL,
  `ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `manoafectacion`
--
ALTER TABLE `manoafectacion`
  ADD PRIMARY KEY (`idManoAfectacion`);

--
-- Indices de la tabla `manosaludable`
--
ALTER TABLE `manosaludable`
  ADD PRIMARY KEY (`idManoSaludable`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `registropostulantes`
--
ALTER TABLE `registropostulantes`
  ADD PRIMARY KEY (`idPostulante`);

--
-- Indices de la tabla `registropostulantess`
--
ALTER TABLE `registropostulantess`
  ADD PRIMARY KEY (`idPostulante`);

--
-- Indices de la tabla `socioeconomico`
--
ALTER TABLE `socioeconomico`
  ADD PRIMARY KEY (`idEstudioSocioEconomico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registropostulantes`
--
ALTER TABLE `registropostulantes`
  MODIFY `idPostulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registropostulantess`
--
ALTER TABLE `registropostulantess`
  MODIFY `idPostulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
