# PruebaAnalistaDesarrolloVG

Se Crea Crud de registro de clientes con laravel 8 y manejo de la base de datos con el ORM de ELOQUENT De la siguiente manera  

- Se crea base de datos con las siguientes tablas :
  - tip_id
  - estado
  - tipo_cliente
  - cliente
  
  las tabla tipo_id, estado, tipo_cliente cuenta con su primary Key y estas se relacionan en la tabla cliente  como foreign key 

- Se despliega modulo de registro de clientes en Heroku y base de datos posgres 

- Se crea interface de registro con laravel el cual se puede consulta en la siguiente ruta 
  https://pruebaanalistadesarrollovg.herokuapp.com/

- se puede ingresar con los siguientes datos de logueo a la interface grafica 
  Usuario : demo@demo.com
  Clave : admindemo
 
- Se crea ruta de la API para su consumo con las siguientes rutas 

  - Consulta methodo GET
     https://pruebaanalistadesarrollovg.herokuapp.com/api/clientes/consultar
     
  - Crear Registro methodo POST
     https://pruebaanalistadesarrollovg.herokuapp.com/api/clientes/crear
     
     - Variable para el registro 
     -  txtTid
     -  txtNid
     -  txtPnom
     -  txtSnom
     -  txtPape
     -  txtSape
     -  txtCorreo
     -  txtTel
     -  txtEstado
     -  txtTipCli

  - Editar Registro methodo PUT
    https://pruebaanalistadesarrollovg.herokuapp.com/api/clientes/{id}
    
     - Variable para editar registro 
     -  txtTid
     -  txtNid
     -  txtPnom
     -  txtSnom
     -  txtPape
     -  txtSape
     -  txtCorreo
     -  txtTel
     -  txtEstado
     -  txtTipCli

  - Eliminar Registro  methodo DELETE
    https://pruebaanalistadesarrollovg.herokuapp.com/api/clientes/{id}
     
 
