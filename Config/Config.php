<?php

const BASE_URL = "http://localhost/base-MVC";


$modo = "LOCAL"; //LOCAL || REMOTO

/* --REMOTO */
const DB_HOST = "";
const DB_NAME = "";
const DB_USER = "";
const DB_PASSWORD = ""; 

/* --LOCAL  
const DB_HOST = "localhost";
const DB_NAME = "caninofeliz";
const DB_USER = "root";
const DB_PASSWORD = ""; 
*/

const DB_CHARSET = "utf8";
//Zona horaria
date_default_timezone_set('America/Bogota');

//Datos de conexión a Base de Datos


//Delimitadores decimal y millar Ej. 24,1989.00
const SPD = ",";
const SPM = ".";

//Simbolo de moneda
const SMONEY = "$";