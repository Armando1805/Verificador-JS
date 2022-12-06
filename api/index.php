<?php
header("Content-Type:application/json");

$productos = array
(
 array  ("1",  "Play Station 5",       "44",    "01.png" ),
 array  ("2",  "Xbone One S",          "45",    "02.png" ),
 array  ("3",  "Nintendo Switch",      "47",    "03.png" ),
 array  ("4",  "SteamDeck",            "49",    "04.png" ),
 array  ("5",  "Atari",                "30",    "05.png" ),
 array  ("6",  "Game Cube",            "44",    "06.png" ),
 array  ("7",  "Nintendo DS",          "45",    "07.png" ),
 array  ("8",  "Wii U",                "47",    "08.png" ),
 array  ("9",  "Psp",                  "49",    "09.png" ),
 array  ("10", "Psp Vita",             "30",    "10.png" )
);

if(!empty($_GET["codigo"]))
{
   $codigo = $_GET ["codigo"];    
   //peticion(200, "El producto a buscar es:".$codigo);
   $bandera = false;
   for ($i=0; $i < 10; $i++) { 
      if ($productos [$i][0] == $codigo) {
        peticion(200, $productos[$i][1], $productos[$i][2], $productos[$i][3]);
        $bandera=true;
      }
      
   }
   if ($bandera==false) {
      peticion(200,NULL,NULL,NULL);
   }
}
else{
 peticion(400,NULL,NULL,NULL);
}
function peticion($status, $data, $precio, $imagen){
   header("HTTP/1.1".$status);
   $respuesta["Status"] = $status;
   $respuesta["Nombre"] = $data;
   $respuesta["Precio"] = $precio;
   $respuesta["Imagen"] = $imagen;

   $json_response = json_encode($respuesta);
   echo $json_response;
}
?>