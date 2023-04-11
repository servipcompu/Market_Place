<?php  
include_once " incluye/db.php "
?>


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
							< li  class =" elemento de navegación activo " >
								< a  class =" nav-link " href =" index.php " > Inicio < span  class =" sr-only " > (actual) </ span > </ a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" shop.php " > Tienda </ a >
							</li> _ _
							< li  clase =" elemento de navegación " >
								< a  class =" nav-link " href =" cliente/mi_cuenta.php " > Mi cuenta </ ​​a >
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


		<!-- sección de diapositivas -->
		< div  class =" contenedor my-4 mx-auto " id =" control deslizante " >
			< div  id =" slides_images " class =" diapositiva carrusel " data-ride =" carrusel " >
				< ol  class =" carrusel-indicadores " >
					< li  data-target =" #slides_images " data-slide-to =" 0 " class =" active " > </ li >
					< li  datos-objetivo =" #slides_images " datos-slide-to =" 1 " > </ li >
					< li  datos-objetivo =" #slides_images " datos-slide-to =" 2 " > </ li >
					< li  data-target =" #slides_images " data-slide-to =" 3 " > </ li >
				</ol> _ _
				< div  class =" carrusel-interior " >
				<?php  
				$ get_slides = " SELECT * FROM slider LIMIT 0,1 ";
				$ ejecutar_diapositivas = mysqli_query ( $ con , $ obtener_diapositivas );

				while ( $ fila_diapositivas = mysqli_fetch_array ( $ ejecución_diapositivas )):
					$ slide_name = $ row_slides [ 'slider_name' ];
					$ slide_img = $ row_slides [ 'slider_img' ];
				?>
					< div  class =" elemento de carrusel activo " >
						< img  class =" d-block w-100 h-25 " src =" admin_area/slides_images/ <?= $ slide_img ; ?> " alt =" <?= $ slide_name ; ?> " >
					</div> _ _
				<?php  
				mientras tanto ;

				$ get_slides2 = " SELECT * FROM slider LIMIT 1,3 ";
				$ ejecutar_diapositivas2 = mysqli_query ( $ con , $ obtener_diapositivas2 );

				while ( $ fila_diapositivas2 = mysqli_fetch_array ( $ ejecución_diapositivas2 )):
					$ slide_name2 = $ row_slides2 [ 'slider_name' ];
					$ slide_img2 = $ row_slides2 [ 'slider_img' ];
				?>
					
				< div  class =" carrusel-elemento " >
					< img  class =" d-block w-100 h-25 " src =" admin_area/slides_images/ <?= $ slide_img2 ; ?> " alt =" <?= $ slide_name2 ; ?> " >
				</div> _ _

				<?php  
				mientras tanto ;
				?>	
					<!-- <div class="carrusel-elemento activo">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide1.jpg" alt="Primera diapositiva">
					</div>
					<div class="elemento-carrusel">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide2.jpg" alt="Segunda diapositiva">
					</div>
					<div class="elemento-carrusel">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide3.jpg" alt="Tercera diapositiva">
					</div>
					<div class="elemento-carrusel">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide4.jpg" alt="Cuarta diapositiva">
					</div> -->
				</ div > <!-- extremos interiores del carrusel -->
				< una  clase =" carrusel-control-prev " href =" #slides_images " role =" button " data-slide =" anterior " >
					< abarcan  clase =" carrusel-control-anterior-icono " aria-hidden =" verdadero " > </ abarcan >
					< abarcan  clase =" solo sr " > Anterior </ abarcan >
				</ a >
				< una  clase =" carrusel-control-siguiente " href =" #slides_images " role =" button " data-slide =" siguiente " >
					< abarcan  clase =" carrusel-control-siguiente-icono " aria-hidden =" verdadero " > </ abarcan >
					< abarcan  clase =" solo sr " > Siguiente </ abarcan >
				</ a >
			</div> _ _
		</div> _ _

		< div  id =" ventajas " >
			< div  clase =" contenedor " >
				< div  class =" fila de fila de la misma altura " >
					< div  clase =" col-sm-4 " >
						< div  class =" caja de la misma altura " >
							< div  clase =" icono " >
								< i  class =" fa fa-tags " > </ i >
							</div> _ _
							< h3 >
								< a  href =" # " > Amamos a nuestro cliente </ a >
							</h3> _ _
							< p > Somos conocidos por brindar el mejor servicio posible </ p >
						</div> _ _
					</div> _ _
					< div  clase =" col-sm-4 " >
						< div  class =" caja de la misma altura " >
							< div  clase =" icono " >
								< i  class =" fa fa-heart " > </ i >
							</div> _ _
							< h3 >
								< a  href =" # " > Mejor precio </ a >
							</h3> _ _
							< p > Puede consultar todos los demás sitios sobre los precios y luego comparar con nosotros </ p >
						</div> _ _
					</div> _ _
					< div  clase =" col-sm-4 " >
						< div  class =" caja de la misma altura " >
							< div  clase =" icono " >
								< i  class =" fa fa-bolsa-de-la-compra " > </ i >
							</div> _ _
							< h3 >
								< a  href =" # " > 100 % de satisfacción garantizada </ a >
							</h3> _ _
							< p > Devoluciones gratuitas en todo durante 3 meses </ p >
						</div> _ _
					</div> _ _
				</ div > <!-- extremos de fila de la misma altura -->
			</ div > <!-- extremos del contenedor -->
		</ div > <!-- termina ventajas -->

		< div  id =" caliente " >
			< div  clase =" caja " >
				< div  clase =" contenedor " >
					< clase div  =" col-md-12 " >
						< h2 > último esta semana </ h2 >
					</div> _ _
				</div> _ _
			</ div > <!-- extremos del cuadro -->
		</ div > <!-- extremos calientes -->

		< div  id =" contenido " clase =" contenedor " >
			< div  clase =" fila " >
				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras " > </ i >
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  origen ="admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						<div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php "> Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< pag clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles</ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras "> </ i >
									Añadir a la cesta
								</a >
							</p >
						</ div>  <!-- termina el texto -->
					</ div>  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra de Marvel para niños </a >
							</_ _
							< p  clase =" precio " > $50 </p >
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase ="btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras " > </i >
									Añadir a la cesta
								</ a>
							</ pag>
						</div> _ _ <!-- termina el texto -->
					</div> _ _ <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple ">
					< div  clase =" producto ">
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " clase =" img-fluid "/>
						</ a>
						< div  clase =" texto ">
							< h3>
								< a  href =" detalles.php " > Camiseta polo negra de Marvel para niños </ a>
							</ h3_
							< p  clase =" precio " > $50 </ p>
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras " > </ i >
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-la-compra " > </ i>
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras " > </ i >
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class =" img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< p  clase =" botones " >
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary ">
									< i  class =" fa fa-carrito-de-la-compra " > </ i>
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->

				< div  class =" col-md-3 col-sm-6 simple " >
					< div  clase =" producto " >
						< a  href =" detalles.php " >
							< img  src =" admin_area/product_images/produk1.jpg " alt =" produk 1 " class ="img-fluid "/>
						</ a >
						< div  clase =" texto " >
							< h3 >
								< a  href =" detalles.php " > Camiseta polo negra Marvel para niños </ a >
							</h3> _ _
							< p  clase =" precio " > $50 </ p >
							< p  clase =" botones ">
								< a  href =" detalles.php " clase =" btn btn-sm btn-light " > Ver detalles </ a >
								< a  href =" detalles.php " clase =" btn btn-sm btn-primary " >
									< i  class =" fa fa-carrito-de-compras " > </i >
									Añadir a la cesta
								</ a >
							</ p >
						</ div >  <!-- termina el texto -->
					</ div >  <!-- finaliza el producto -->
				</ div >  <!-- col-sm-4 col-sm-6 extremos simples -->
			
			</ div >  <!-- extremos de fila -->
		</ div > <!-- extremos del contenedor -->
		
		<?php  include_once " include/footer.php "; ?>

		<!-- JavaScript opcional -->
		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		< guión  src =" js/jquery.min.js " > </ guión >
		< guión  src =" js/popper.min.js " > </ guión >
		< guión  src =" js/bootstrap.min.js " > </ guión >
	</ cuerpo >
</html> _ _
