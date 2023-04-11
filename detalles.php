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
								< li  class =" breadcrumb-item active " aria-current =" página " > Tienda </ li >
							</ol> _ _
						</nav> _ _
					</ div > <!-- col-md-12 termina -->
				</ div > <!-- extremos de fila -->
				< div  clase =" fila " >
					< clase div  =" col-md-3 mb-3 " >
						<?php  include_once (" incluye/sidebar.php "); ?>
					</ div > <!-- col-md-3 termina -->
					< clase div  =" col-md-9 " >
						< div  clase =" fila " id =" productoPrincipal " >
							< div  clase =" col-sm-6 " >
								< div  id =" imagen principal " >
									< div  id =" myCarousel " class =" diapositiva del carrusel " data-ride =" carrusel " >
										< ol  class =" carrusel-indicadores " >
											< li  data-target =" #myCarousel " data-slide-to =" 0 " class =" active " > </ li >
											< li  datos-objetivo =" #myCarousel " datos-slide-to =" 1 " > </ li >
											< li  datos-objetivo =" #myCarousel " datos-slide-to =" 2 " > </ li >
										</ ol > <!-- carrusel-indicadores extremos -->
										< div  class =" carrusel-interior " >
											< div  class =" elemento de carrusel activo " >
												< img  class =" d-block w-100 h-25 " src =" admin_area/product_images/produk1.jpg " alt =" Primera diapositiva " >
											</div> _ _
											< div  class =" carrusel-elemento " >
												< img  class =" d-block w-100 h-25 " src =" admin_area/product_images/produk2.jpg " alt =" Segunda diapositiva " >
											</div> _ _
											< div  class =" carrusel-elemento " >
												< img  class =" d-block w-100 h-25 " src =" admin_area/product_images/produk3.jpg " alt =" Tercera diapositiva " >
											</div> _ _
										</ div > <!-- carrusel-extremos internos -->
										< a  class =" carrusel-control-prev " href =" #myCarousel " role =" button " data-slide =" anterior " >
											< abarcan  clase =" carrusel-control-anterior-icono " aria-hidden =" verdadero " > </ abarcan >
											< abarcan  clase =" solo sr " > Anterior </ abarcan >
										</ a >
										< a  class =" carrusel-control-siguiente " href =" #myCarousel " role =" button " data-slide =" next " >
											< abarcan  clase =" carrusel-control-siguiente-icono " aria-hidden =" verdadero " > </ abarcan >
											< abarcan  clase =" solo sr " > Siguiente </ abarcan >
										</ a >
									</div> _ _
								</ div > <!-- termina la imagen principal -->
							</ div > <!-- col-sm-6 extremos -->
							< div  clase =" col-sm-6 " >
								< div  clase =" tarjeta " >
									< div  class =" cuerpo de la tarjeta " >
										< h3  class =" text-center " > Camiseta Polo Asesinato de EE. UU. </ h3 >
										< acción de formulario  =" detalles.php " método =" publicación " >
											< div  class =" fila de grupo de formularios " >
												< label  class =" col-md-5 col-form-label " > Cantidad de producto </ label >
												< clase div  =" col-md-7 " >
													< seleccione  nombre =" cantidad_producto " clase =" formulario-control formulario-control-sm " >
														< valor de opción  ="" > 1 </ opción >
														< valor de opción  ="" > 2 </ opción >
														< valor de la opción  ="" > 3 </ opción >
														< valor de opción  ="" > 4 ​​</ opción >
														< valor de la opción  ="" > 5 </ opción >
													</ seleccionar >
												</div> _ _
											</ div > <!-- termina la fila del grupo de formularios -->
											< div  class =" fila de grupo de formularios " >
												< label  class =" col-md-5 col-form-label " > Tamaño del producto </ label >
												< clase div  =" col-md-7 " >
													< seleccionar  nombre =" tamaño_producto " clase =" formulario-control formulario-control-sm " >
														< valor de opción  ="" > Seleccione un tamaño </ opción >
														< valor de opción  ="" > pequeño </ opción >
														< valor de opción  ="" > Medio </ opción >
														< valor de opción  ="" > grande </ opción >
													</ seleccionar >
												</div> _ _
											</ div > <!-- termina la fila del grupo de formularios -->
											< p  clase =" precio " > $59 </ p >
											< p  class =" botones de centro de texto " >
												< clase de botón  =" btn btn-primary " tipo =" enviar " >
													< i  class =" fa fa-carrito-de-compras " > </ i >
													Añadir a la cesta
												</ botón >
											</ p >
										</ formulario >
									</div> _ _
								</ div > <!-- termina la tarjeta -->
								< div  class =" fila mt-2 " id =" pulgares " >
									< div  clase =" col-sm-4 " >
										< a  href =" # " clase =" pulgar " >
											< img  src =" admin_area/product_images/produk1.jpg " class =" img-fluid " >
										</ a >
									</div> _ _
									< div  clase =" col-sm-4 " >
										< a  href =" # " clase =" pulgar " >
											< img  src =" admin_area/product_images/produk1.jpg " class =" img-fluid " >
										</ a >
									</div> _ _
									< div  clase =" col-sm-4 " >
										< a  href =" # " clase =" pulgar " >
											< img  src =" admin_area/product_images/produk1.jpg " class =" img-fluid " >
										</ a >
									</div> _ _
								</div> _ _
							</ div > <!-- col-sm-6 extremos -->
						</ div > <!-- termina la fila #productMain -->
						< div  clase =" tarjeta " id =" detalles " >
							< div  class =" cuerpo de la tarjeta " >
								< h4 > Detalles del producto </ h4 >
								< p  class =" text-justify " > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud ejercicio ullamco laboris nisi ut aliquip ex ea commodo
									consecuencia. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui oficia deserunt mollit anim id est laborum. </ p >

								< h4 > Tamaño </ h4 >
								< ul >
									< li > Pequeño </ li >
									< li > Medio </ li >
									< li > Grande </ li >
								</ ul >
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
