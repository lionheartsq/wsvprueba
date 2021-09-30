------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Tipos documentos
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

tipoDocumento
	C
	T
	E
	P
	R

------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Métodos médico
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Crear médico:

http://127.0.0.1:8000/medico/crear?primerNombre=Luis&segundoNombre=Jose&primerApellido=Garcia&segundoApellido=Pinzon&tipoDocumento=C&numeroDocumento=13514998&fechaExpedicion=1996-06-19

Listar médicos:	
	
http://127.0.0.1:8000/medico/listar

Información médico:	

http://127.0.0.1:8000/medico/getInfo?id=13514998

Eliminar médico:

http://127.0.0.1:8000/medico/eliminar?id=135149981

Editar médico:

http://127.0.0.1:8000/medico/editar?id=13514998&primerNombre=Luis&segundoNombre=Jose&primerApellido=Garcia&segundoApellido=Pinzon&tipoDocumento=C&fechaExpedicion=1996-06-19

------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Métodos paciente
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Crear paciente:

http://127.0.0.1:8000/paciente/crear?primerNombre=Luis&segundoNombre=Jose&primerApellido=Garcia&segundoApellido=Pinzon&tipoDocumento=C&numeroDocumento=13514998&fechaExpedicion=1996-06-19

Listar pacientes:	

http://127.0.0.1:8000/paciente/listar

Información paciente:	

http://127.0.0.1:8000/paciente/getInfo?id=13514998

Eliminar paciente:

http://127.0.0.1:8000/paciente/eliminar?id=131514998

Editar paciente:

http://127.0.0.1:8000/paciente/editar?id=131514998&primerNombre=Luis&segundoNombre=Jose&primerApellido=Garcia&segundoApellido=Pinzon&tipoDocumento=C&fechaExpedicion=1996-06-19
