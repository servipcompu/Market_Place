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
								< a  class =" nav-link active " href =" cart.php " > Carro de la compra </ a >
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
								< li  class =" breadcrumb-item active " aria-current =" página " > Carrito </ li >
							</ol> _ _
						</nav> _ _
					</ div > <!-- col-md-12 termina -->
				</ div > <!-- extremos de fila -->
				< div  clase =" fila " >
					< div  class =" col-md-9 " id =" carrito " >
						< div  clase =" tarjeta " >
							< div  class =" cuerpo de la tarjeta " >
								< acción de formulario  =" carrito.php " método =" publicación " enctype =" datos de formulario de varias partes " >
									< h3 > Carro de la compra </ h3 >
									< p  class =" texto-silenciado " >
										Actualmente tiene 3 artículo(s) en su carrito.
									</ p >
									< div  class =" table-responsive " >
										< clase de tabla  =" tabla " >
											< cabeza >
												<tr> _ _
													< th  colspan =" 2 " > Producto </ th >
													< th > Cantidad </ th >
													< th > Precio Unitario </ th >
													< th > Tamaño </ th >
													< th  colspan =" 1 " > Eliminar </ th >
													< th  colspan =" 2 " > Subtotal </ th >
												</tr> _ _
											</ cabeza >
											< cuerpo >
												<tr> _ _
													< td > < img  src =" admin_area/product_images/produk1.jpg " > </ td >
													< td > < a  href =" # " > Camiseta polo negra Marvel </ a > </ td >
													< td > 2 </ td >
													< td > $50.00 </ td >
													< td > Grande </ td >
													< td > < tipo de entrada  =" casilla de verificación " nombre =" eliminar[] " > </ td >
													< td > $100.000 </ td >
												</tr> _ _
												<tr> _ _
													< td > < img  src =" admin_area/product_images/produk1.jpg " > </ td >
													< td > < a  href =" # " > Camiseta polo negra Marvel </ a > </ td >
													< td > 2 </ td >
													< td > $50.00 </ td >
													< td > Grande </ td >
													< td > < tipo de entrada  =" casilla de verificación " nombre =" eliminar[] " > </ td >
													< td > $100.000 </ td >
												</tr> _ _
												<tr> _ _
													< td > < img  src =" admin_area/product_images/produk1.jpg " > </ td >
													< td > < a  href =" # " > Camiseta polo negra Marvel </ a > </ td >
													< td > 2 </ td >
													< td > $50.00 </ td >
													< td > Grande </ td >
													< td > < tipo de entrada  =" casilla de verificación " nombre =" eliminar[] " > </ td >
													< td > $100.000 </ td >
												</tr> _ _
											</ tcuerpo >
											< pie >
												<tr> _ _
													< th  colspan =" 5 " > Total </ th >
													< th  colspan =" 2 " > $100.00 </ th >
												</tr> _ _
											</ pie >
										</ mesa >
									</ div > <!-- extremos sensibles a la tabla -->
									< div  class =" pie de página de tarjeta " >
										< div  class =" float-left " >
											< a  href =" index.php " class =" btn btn-secundario btn-sm " >
												< i  clase =" fa fa-chevron-izquierda " > </ i >
												Seguir comprando
											</ a >
										</ div > <!-- extremos izquierdos flotantes -->
										< div  class =" float-right " >
											< clase de botón  =" btn btn-secundario btn-sm " tipo =" enviar " nombre =" actualizar " valor =" Actualizar carrito " >
												< i  class =" fas fa-sync " > </ i > Actualizar carro
											</ botón >
											< a  href =" pago.php " clase =" btn btn-éxito btn-sm " >
												Proceso de pago
												< i  class =" fa fa-chevron-right " > </ i >
											</ a >
										</ div > <!-- extremos flotantes a la derecha -->
									</ div > <!-- termina el pie de página de la tarjeta -->
								</ formulario >
							</ div > <!-- finaliza el cuerpo de la tarjeta -->
						</ div > <!-- termina la tarjeta -->
						< clase div  =" fila mt-2 " >
							< div  class =" col-md-3 col-sm-6 " >
								< div  class =" titular de la tarjeta " >
									< div  class =" cuerpo de la tarjeta " >
										< h4  class =" text-center " > También te gustan estos productos </ h4 >
									</div> _ _
								</div> _ _
							</div> _ _
							< div  class =" col-md-3 col-sm-6 " >
								< div  clase =" tarjeta " >
									< img  src =" admin_area/product_images/produk11.jpg " class =" img-fluid " >
									< div  class =" cuerpo de la tarjeta " >
										< clase h5  =" centro-de-texto " >
											< a  href =" detalles.php " >
												Camiseta polo Marvel
											</ a >
										</ h5 >
										< p  class =" precio centro-texto " > $45 </ p >
									</div> _ _
								</div> _ _
							</div> _ _
							< div  class =" col-md-3 col-sm-6 " >
								< div  clase =" tarjeta " >
									< img  src =" admin_area/product_images/produk5.jpg " class =" img-fluid " >
									< div  class =" cuerpo de la tarjeta " >
										< clase h5  =" centro-de-texto " >
											< a  href =" detalles.php " >
												Camiseta polo Marvel
											</ a >
										</ h5 >
										< p  class =" precio centro-texto " > $45 </ p >
									</div> _ _
								</div> _ _
							</div> _ _
							< div  class =" col-md-3 col-sm-6 " >
								< div  clase =" tarjeta " >
									< img  src =" admin_area/product_images/produk9.jpg " class =" img-fluid " >
									< div  class =" cuerpo de la tarjeta " >
										< clase h5  =" centro-de-texto " >
											< a  href =" detalles.php " >
												Camiseta polo Marvel
											</ a >
										</ h5 >
										< p  class =" precio centro-texto " > $45 </ p >
									</div> _ _
								</div> _ _
							</div> _ _
						</ div > <!-- fila mt-2 extremos -->
					</ div > <!-- .col-md-9 #cart termina -->
					< clase div  =" col-md-3 " >
						< div  class =" tarjeta " id =" orden-resumen " >
							< div  clase =" encabezado de tarjeta " >
								< h5 > Resumen del pedido </ h5 >
							</ div > <!-- termina el encabezado de la tarjeta -->
							< div  class =" cuerpo de la tarjeta " >
								< p  class =" texto-silenciado " >
									Los gastos de envío y adicionales se calculan en función de los valores que ha introducido.
								</ p >
								< div  class =" table-responsive " >
									< clase de tabla  =" tabla " >
										< cuerpo >
											<tr> _ _
												< td > Subtotal del pedido </ td >
												< th > $200.00 </ th >
											</tr> _ _
											<tr> _ _
												< td > Envío y manipulación </ td >
												< td > $0.00 </ td >
											</tr> _ _
											<tr> _ _
												< td > Impuestos </ td >
												< td > $0.00 </ td >
											</tr> _ _
											< tr  clase =" total " >
												< td > Total </ td >
												< th > $200.00 </ th >
											</tr> _ _
										</ tcuerpo >
									</ mesa >
								</ div > <!-- termina la respuesta de la tabla -->
							</ div > <!-- finaliza el cuerpo de la tarjeta -->
						</ div > <!-- finaliza el resumen del orden de la tarjeta -->
					</ div > <!-- col-md-3 termina -->
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
