
CREATE TABLE sistema_reclamos (
  id_sistema_reclamo INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  nombre_creador VARCHAR(45) NOT NULL,
  logo   VARCHAR(200)NOT NULL,    
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_sistema_reclamo))
ENGINE = InnoDB;



CREATE TABLE areas (
  id_area INT NOT NULL AUTO_INCREMENT,
    id_sistema_reclamo INT  NOT NULL,

  nombre VARCHAR(100) NOT NULL,
  descripcion VARCHAR(200) NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_area),
 
    FOREIGN KEY (id_sistema_reclamo)
    REFERENCES sistema_reclamos (id_sistema_reclamo))
ENGINE = InnoDB;


CREATE TABLE jefes_areas (
  id_jefe_area INT NOT NULL AUTO_INCREMENT,
    id_area INT NOT NULL,

  nombres VARCHAR(150) NOT NULL,
  ap VARCHAR(200) NOT NULL,
  am VARCHAR(200) NOT NULL,
  ci INT NOT NULL,
  telefono VARCHAR(60)NOT NULL,
  correo CHAR(200) NOT NULL,
  fec_inicio DATE NOT NULL,
  fec_fin DATE  NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_jefe_area),
  
    FOREIGN KEY (id_area)
    REFERENCES areas (id_area))
ENGINE = InnoDB;

CREATE TABLE tipo_empleados (
  id_tipo_empleado INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  descripcion VARCHAR(200) NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_tipo_empleado))

ENGINE = InnoDB;

CREATE TABLE empleados (
  id_empleado INT NOT NULL AUTO_INCREMENT,
  id_tipo_empleado INT NOT NULL,
   id_area INT NOT NULL,
    id_sistema_reclamo INT NOT NULL,
  nombres VARCHAR(100) NOT NULL,
  ap VARCHAR(200) NOT NULL,
  am VARCHAR(200) NOT NULL,
  ci INT NOT NULL,
  tel_fijo VARCHAR(45) NOT NULL,
  tel_cel VARCHAR(45) NOT NULL,
  direccion VARCHAR(200) NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_empleado),
  FOREIGN KEY (id_tipo_empleado) REFERENCES tipo_empleados(id_tipo_empleado),
  FOREIGN KEY (id_sistema_reclamo) REFERENCES sistema_reclamos(id_sistema_reclamo),
      FOREIGN KEY (id_area)
    REFERENCES areas (id_area))
ENGINE = InnoDB;



CREATE TABLE horarios (
  id_hora INT NOT NULL AUTO_INCREMENT,
    id_empleado INT NOT NULL,

  hora_entrada DATETIME(6),
  hora_salida DATETIME(6),
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,

  PRIMARY KEY (id_hora),
    FOREIGN KEY (id_empleado)
    REFERENCES empleados (id_empleado))
  
ENGINE = InnoDB;

CREATE TABLE reclamos (
  id_reclamo INT NOT NULL AUTO_INCREMENT,
  nombres VARCHAR(100) NOT NULL,
  ap VARCHAR(100) NOT NULL,
  am VARCHAR(100) NOT NULL,
  telefono INT(100) NOT NULL,
  correo CHAR(1) NOT NULL,
  codigo_usuario VARCHAR(100) NOT NULL,
  barrio VARCHAR(100) NOT NULL,
  calle_avenida VARCHAR(100) NOT NULL,
  entre_que_calles VARCHAR(100) NOT NULL,
  numero_de_casa INT NOT NULL,
  referencias VARCHAR(100) NOT NULL,
  descripcion_del_reclamo VARCHAR(100),
  map VARCHAR(100),
  otro_recurrente VARCHAR(100) NOT NULL,
  telefono_del_recurrente INT NOT NULL,
  tipo_de_calzada VARCHAR(100) NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_reclamo)
 
  
  )
ENGINE = InnoDB;



CREATE TABLE reclamo_confirmados (
  id_conf INT NOT NULL AUTO_INCREMENT,
  id_reclamo INT NOT NULL,
   nombres VARCHAR(100) NOT NULL,
  ap VARCHAR(100) NOT NULL,
  am VARCHAR(100) NOT NULL,
  telefono INT(100) NOT NULL,
  correo CHAR(1) NOT NULL,
  codigo_usuario VARCHAR(100) NOT NULL,
  barrio VARCHAR(100) NOT NULL,
  calle_avenida VARCHAR(100) NOT NULL,
  entre_que_calles VARCHAR(100) NOT NULL,
  numero_de_casa INT NOT NULL,
  referencias VARCHAR(100) NOT NULL,
  descripcion_del_reclamo VARCHAR(100),
  fotos VARCHAR(250),
  map VARCHAR(100),
  otro_recurrente VARCHAR(100) NOT NULL,
  telefono_del_recurrente INT NOT NULL,
  tipo_de_calzada VARCHAR(100) NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  
  PRIMARY KEY (id_conf),
 FOREIGN KEY (id_reclamo) REFERENCES reclamos(id_reclamo) )

   ENGINE = InnoDB;







CREATE TABLE asignaciones (
  id_asignar INT NOT NULL AUTO_INCREMENT,
  id_conf INT NOT NULL,
  id_empleado INT NOT NULL,
  descripcion VARCHAR(100) NOT NULL,
  fec_inicio DATE NOT NULL,
  fec_fin DATE NOT NULL,
  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1) NOT NULL,
  PRIMARY KEY (id_asignar),
    FOREIGN KEY (id_conf)
    REFERENCES reclamo_confirmados (id_conf),
   
    FOREIGN KEY (id_empleado)
    REFERENCES empleados (id_empleado))
   
  
    ENGINE = InnoDB;



CREATE TABLE personas(
 id_persona INT NOT NULL AUTO_INCREMENT,
 id_sistema_reclamo INT NOT NULL,
 ci VARCHAR(80) NOT NULL,
 nombres VARCHAR(100)NOT NULL,
 ap VARCHAR(100),
 am VARCHAR(100),
 telefono VARCHAR(30),
 direccion VARCHAR(200),
 genero VARCHAR(90) NOT NULL,

  fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
 PRIMARY KEY(id_persona),
 FOREIGN KEY(id_sistema_reclamo)REFERENCES sistema_reclamos(id_sistema_reclamo)
)ENGINE INNODB;


CREATE TABLE usuarios(
id_usuario INT NOT NULL AUTO_INCREMENT,
id_persona INT NOT NULL,
nom_usuario VARCHAR(100)NOT NULL,
clave VARCHAR(100)NOT NULL,
 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_usuario),
FOREIGN KEY(id_persona)REFERENCES personas(id_persona)
)ENGINE INNODB;




CREATE TABLE roles(
id_rol INT NOT NULL AUTO_INCREMENT,
rol VARCHAR(100)NOT NULL,
 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_rol)
)ENGINE INNODB;


CREATE TABLE usuario_roles(
id_usuario_rol INT NOT NULL AUTO_INCREMENT,
id_usuario INT NOT NULL,
id_rol INT NOT NULL,
 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_usuario_rol),
FOREIGN KEY(id_usuario)REFERENCES usuarios(id_usuario),
FOREIGN KEY(id_rol)REFERENCES roles(id_rol)
)ENGINE INNODB;


CREATE TABLE grupos(
id_grupo INT NOT NULL AUTO_INCREMENT,
grupo VARCHAR(30)NOT NULL,
  icono VARCHAR(200) NOT NULL,

 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_grupo)
)ENGINE INNODB;



CREATE TABLE opciones(
id_opcion INT NOT NULL AUTO_INCREMENT,
id_grupo INT NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  op_url VARCHAR(200) NOT NULL,
  mostrar VARCHAR(20) NOT NULL,
  orden INT(100) NOT NULL,
 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_opcion),
FOREIGN KEY(id_grupo)REFERENCES grupos(id_grupo)
)ENGINE INNODB;


CREATE TABLE accesos(
id_acceso INT NOT NULL AUTO_INCREMENT,
 id_grupo INT NOT NULL,
id_opcion INT NOT NULL,
id_rol INT NOT NULL,
  permisos VARCHAR(70) NOT NULL,
 fec_insercion TIMESTAMP NOT NULL,
  fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  usuario INT NOT NULL,
  estado CHAR(1)NOT NULL,
PRIMARY KEY(id_acceso),
FOREIGN KEY(id_grupo) REFERENCES opciones(id_grupo),

FOREIGN KEY(id_opcion) REFERENCES opciones(id_opcion),
FOREIGN KEY(id_rol)REFERENCES roles(id_rol)
)ENGINE INNODB;




