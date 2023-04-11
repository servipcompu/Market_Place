<!DOCTYPEhtml >
< html  lang =" es " >
	< cabeza >
		<!-- Metaetiquetas requeridas -->
		< juego de caracteres meta  =" utf-8 " >
		< meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1, reducción-para-ajustar=no " >
		< título > Ecommerce Fajar </ título >
		
		<!-- fuentes -->
		< enlace  rel =" hoja de estilo " href =" http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100 " />
		<!-- Bootstrap CSS -->
		< enlace  rel =" hoja de estilo " href =" estilos/bootstrap.min.css " />
		<!-- fuente impresionante -->
		< enlace  rel =" hoja de estilo " href =" fontawesome/web-fuentes-con-css/css/fontawesome-all.min.css "/>
		<!-- estilo.css -->
		< enlace  rel =" hoja de estilo " tipo =" texto/css " href =" estilos/estilos.css " />
	</ cabeza >
	< cuerpo >

		
		< div  id =" parte superior " > <!-- comienzos superiores -->
			< div  class =" contenedor " > <!-- inicio del contenedor -->
				< div  clase =" fila " >
					< clase div  =" oferta col-md-6 " >
						< a  href =" # " clase =" btn btn-éxito btn-sm " >
							Bienvenido Invitado
						</ a >
						< a  href =" # " > Precio total del carrito de compras: $100, artículo total 2 </ a >
					</div> _ _
					< clase div  =" columna-md-6 " >
						< ul  clase =" menú " >
							< li > < a  href =" registro_cliente.php " > Registro </ a > </ li >
							< li > < a  href =" checkout.php " > Mi Cuenta </ ​​a > </ li >
							< li > < a  href =" carrito.php " > Ir al carrito </ a > </ li >
							< li > < a  href =" checkout.php " > Iniciar sesión </ a > </ li >
						</ ul > <!-- fin del menú -->
					</div> _ _
				</div> _ _
			</ div > <!-- final del contenedor -->
		</ div > <!-- extremo superior -->

		< clase de navegación  =" barra de navegación barra de navegación-expand-lg barra de navegación-luz " id =" barra de navegación " >
			< div  clase =" contenedor " >
				< a  class =" navbar-brand home " href =" index.php " > FajarStore </ a >
				< button  class =" navbar-toggler " type =" button " data-toggle =" colapsar " data-target =" #navegación " aria-controls =" navegación " aria-expanded =" false " aria-label =" Alternar navegación " >
					< abarcan  clase =" barra-navegador-icono " > </ abarcan >
				</ botón >

				< div  class =" colapsar navbar-collapse " id =" navegación " >
					< div  class =" padding-nav " >
						< ul  class =" navbar-nav mr-auto " >
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" index.php " > Inicio < span  class =" sr-only " > (actual) </ span > </ a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" shop.php " > Tienda </ a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" checkout.php " > Mi cuenta </ ​​a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" cart.php " > Carro de la compra </ a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" contact.php " > Contáctenos </ a >
							</li> _ _
						</ ul >
					</ div > <!-- padding-nav termina -->		
				</ div > <!-- colapsar la barra de navegación-colapsar termina -->
				< clase div  =" corrección clara " >
					< button  class =" btn btn-primary mr-1 " type =" button " data-toggle =" colapsar " data-target =" #search " aria-expanded =" false " aria-controls =" colapsoExample " >
						< i  clase =" fa fa-búsqueda " > </ i >
					</ botón >
					< a  href =" cart.php " class =" btn btn-primary navbar-btn right " >
						< i  class =" fa fa-carrito-de-compras " > </ i >
						< span > 4 artículos en carros </ span >
					</ a >
				</ div > <!-- clearfix termina -->
			</ div > <!-- extremos del contenedor -->
		</ nav > <!-- finaliza la barra de navegación -->

		< div  class =" colapsar clearfix bg-white " id =" buscar " >
			< div  clase =" contenedor " >
				< form  class =" form-inline navbar-form my-1 " method =" get " action =" resultados.php " >
						< clase de entrada  =" formulario-control mr-sm-1 " tipo =" texto " marcador de posición =" Buscar " aria-label =" Buscar " nombre =" usuario-consulta " requerido >
						< button  class =" btn btn-outline-success my-2 my-sm-0 " type =" enviar " > Buscar </ button >
				</ formulario >
			</ div > <!-- extremos del contenedor -->
		</ div > <!-- contraer celarfix -->

		< div  id =" contenido " >
			< div  clase =" contenedor " >
				< div  clase =" fila " >
					< clase div  =" col-md-12 " >
						< nav  aria-label =" migas de pan " clase =" navigasi-migas de pan " >
							< ol  class =" breadcrumb nav-breadcrumb " >
								< li  class =" elemento de migas de pan " > < a  href =" index.php " > Inicio </ a > </ li >
								< li  class =" breadcrumb-item active " aria-current =" página " > Pagar </ li >
							</ol> _ _
						</nav> _ _
					</ div > <!-- col-md-12 termina -->
				</ div > <!-- extremos de fila -->
				< div  clase =" fila " >
					< clase div  =" col-md-3 mb-3 " >
						<?php  include_once (" incluye/sidebar.php "); ?>
					</ div > <!-- col-md-3 termina -->
					< clase div  =" col-md-9 " >
						< div  clase =" tarjeta " >
							< div  clase =" encabezado de tarjeta " >
								< h3  class =" text-center " > Iniciar sesión </ h3 >
								< h5  class ="" > Ya es nuestro cliente </ h5 >
							</div> _ _
							< div  class =" cuerpo de la tarjeta " >
								< acción de formulario  =" registro_cliente.php " método =" publicación " enctype =" multipart/form-data " >
									< div  class =" form-group " >
										< etiqueta > Nombre del cliente </ etiqueta >
										< tipo de entrada  =" texto " nombre =" nombre_cliente " clase =" control de formulario " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > Correo electrónico del cliente </ etiqueta >
										< tipo de entrada  = " correo electrónico " nombre = " cliente_correo electrónico " clase = " control de formulario " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > contraseña </ etiqueta >
										< tipo de entrada  =" contraseña " nombre =" contraseña " clase =" control de formulario " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > País </ etiqueta >
										< tipo de entrada  =" texto " nombre =" país " clase =" formulario-control " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > Ciudad </ etiqueta >
										< tipo de entrada  =" texto " nombre =" ciudad " clase =" formulario-control " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > Contacto </ etiqueta >
										< tipo de entrada  =" texto " nombre =" contacto " clase =" formulario-control " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > Dirección </ etiqueta >
										< tipo de entrada  =" texto " nombre =" dirección " clase =" formulario-control " requerido >
									</div> _ _
									< div  class =" form-group " >
										< etiqueta > Imagen </ etiqueta >
										< tipo de entrada  =" archivo " nombre =" imagen " clase =" formulario-control-archivo " requerido >
									</div> _ _

									< div  clase =" texto-centro " >
										< botón  nombre =" registro " tipo =" enviar " clase =" btn btn-primary " >
											< i  class =" fa fa-user-md " > </ i >   Registro
										</ botón >
									</div> _ _
								</ formulario >
							</div> _ _
						</div> _ _
					</ div > <!-- col-md-9 termina -->
				</ div > <!-- extremos de fila -->
			</ div > <!-- extremos del contenedor -->
		</ div > <!-- finaliza el contenido -->

		
		<?php  include_once " include/footer.php "; ?>

		<!-- JavaScript opcional -->
		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		< guión  src =" js/jquery.min.js " > </ guión >
		< guión  src =" js/popper.min.js " > </ guión >
		< guión  src =" js/bootstrap.min.js " > </ guión >
	</ cuerpo >
</html> _ _
