import requests
#URL = "http://localhost/api/index.php?codigo=2"
URL = "http://localhost/api/index2.php?codigo=2"
Respuesta = requests.get(URL)
#print(Respuesta.json())

Datos = Respuesta.json()
print(Datos["Status"])
print(Datos["Nombre"])
print(Datos["Precio"])
print(Datos["Imagen"])