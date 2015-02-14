<?php 
	Class UserTableSeeder extends Seeder{
		public function run()
		{
			
			DB::table('ambitos')->delete();

			Ambito::create(array(
					'nombre'=>'Página de Inicio'
				));

			Ambito::create(array(
					'nombre'=>'Orientación de tareas'
				));

			Ambito::create(array(
					'nombre'=>'Navegabilidad'
				));

			Ambito::create(array(
					'nombre'=>'Formularios'
				));

			Ambito::create(array(
					'nombre'=>'Confianza y credibilidad'
				));

			Ambito::create(array(
					'nombre'=>'Calidad de escritura y contenido'
				));

			Ambito::create(array(
					'nombre'=>'Diagramación y diseño gráfico'
				));

			Ambito::create(array(
					'nombre'=>'Busquedas'
				));

			Ambito::create(array(
					'nombre'=>'Ayuda, retroalimentacion y errores'
				));

		
			DB::table('tareas')->delete();

			Tarea::create(array(
					'enunciado'=>'Todos los elementos de la página de inicio están claramente enfocados en las tareas claves de los usuarios (La featuritis - proliferación de características - ha sido evitada).',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio contiene un campo de texto para búsquedas.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Se presentan las categorías de productos y están claramente visibles en la página de inicio.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Existe contenido de utilidad en la página de inicio o a un clic de distancia de la página inicial.',
					'form_id'=>1,
					'ambitos_id'=>1
				));


			Tarea::create(array(
					'enunciado'=>'La página de inicio contiene buenos ejemplos sobre el contenido en el resto del sitio web.',
					'form_id'=>1,
					'ambitos_id'=>1
				));


			Tarea::create(array(
					'enunciado'=>'Los links de la página de inicio empiezan con la palabra clave más importante (ej. en inglés "Sun holidays" en vez de "Holidays in the sun").',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Existe en la página de inicio una lista breve de elementos recientes, con un link hacia el contenido completo.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Las áreas de navegación en la página de inicio no sufren de un abuso de formato/diseño y los usuarios no las podrían confundir con publicidad.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La proposición de valor está claramente establecida en la página de incio (e.g. con un lema o propaganda de bienvenida).',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio contiene información gráfica con sentido, sin clip art por ejemplo.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Las opciones en la navegación están ordenadas en el orden más lógico o de alguna forma orientada a las tareas más importantes (con la información corporativa menos importante al final) .',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'El título de la página de inicio va a proveer buena visibilidad a máquinas de búsqueda como Google .',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Toda la información corporativa está bien agrupada en una sola área por aparte (ej. "Acerca de") .',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Los usuarios van a entender la proposición de valor.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'Con solo un vistazo a la página de inicio el usuario que ingresa por primera vez puede entender por dónde comenzar.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio muestra todas las opciones principales.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio tiene una dirección URL fácil de recordar.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio está diseñada profesionalmente y va a crear una primera impresión positiva.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'El diseño de la página de inicio va a animar a los usuarios a explorar más del sitio.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			Tarea::create(array(
					'enunciado'=>'La página de inicio realmente luce como una página de inicio, es decir, las páginas secundarias no se podrían confundir con ésta.',
					'form_id'=>1,
					'ambitos_id'=>1
				));

			///// ORIENTACION DE TAREAS


			Tarea::create(array(
					'enunciado'=>'El sitio está libre de información irrelevante, innecesaria y distractora.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Se ha evitado el uso excesivo de scripts, applets, videos, archivos de audio, gráficos e imágenes.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio evita que los usuarios se registren de manera innecesaria.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Una ruta crítica (e.g. para una compra o suscripción) es clara y no hay distracciones durante la misma.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La información es presentada en un orden lógico, simple y natural.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El número de ventanas requeridas por tarea han sido minimizadas.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio requiere muy poco desplazamiento y uso de clicks.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio anticipa correctamente y pregunta al usuario por la siguiente probable actividad.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Cuando se muestran gráficos, los usuarios tienen acceso a los datos reales que se muestran en el mismo (e.g. números y etiquetas en los gráficos de barras).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Las actividades aprovechan totalmente las fortalezas tanto del usuario como de la computadora (acciones que pueden realizarse automáticamente por el sitio, e.g. búsqueda de un código postal).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los usuarios pueden completar rápidamente tareas comunes.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los ítems del sitio pueden ser fácilmente comparados cuando la tarea lo amerite (e.g. comparación entre productos).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La secuencia de tareas es paralela a lo que realiza el usuario en el sitio.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio hace que la experiencia del usuario sea más fácil y rápida que si no se tuviera la aplicación.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los tópicos, características y funciones más importantes y frecuentes se ubican lo más al centro de la página, no en los extremos derecho o izquierdo.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El usuario no necesita ingresar la misma información más de una vez.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Tópicos y tareas importantes y frecuentes están cerca de la "superficie" del sitio.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La digitación (e.g. durante una compra) se mantiene al mínimo, con el uso de aceleradores (un-click) para los usuarios.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La ruta de cualquier tarea es de una longitud razonable (de 2 a 5 clicks).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Cuando existen múltiples pasos en una tarea, el sitio muestra todos los pasos que deben ser completados y provee una retroalimentación al usuario indicándole la posición actual en toda la ruta de la tarea..',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El precio siempre se muestra claro junto a cada producto.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La política de privacidad del sitio es fácil de encontrar, especialmente esas páginas que piden información personal. Dicha política es simple y clara.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los usuarios del sitio no necesitan recordar información de un lugar a otro.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El uso de metáforas es fácilmente entendible por un usuario convencional.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El formato de los datos es culturalmente apropiado (e.g. millas para el Reino Unido).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los detalles del procesamiento interno de la aplicación no son expuestos al usuario.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio ayuda a cualquier usuario con muy poca experiencia en la Web.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio hace fácil para los usuarios el explorar el sitio e intentar diferentes opciones antes de adentrarse por sí mismos en el sitio.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Un usuario típico que visita por primera vez puede llevar a cabo la mayoría de tareas sin necesidad de asistencia.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Cuando los usuarios retornan al sitio, recuerdan como llevar a cabo las tareas clave.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'La funcionalidad de los controles para nuevos dispositivos es exactamente la misma que para los otros dispositivos.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'En la última página de un carrito de compras, existe un botón Proceder al checkout altamente visible tanto en la parte superior como en la parte inferior de la página.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Llamadas importantes, tales como Agregar producto al carrito de compras son altamente visibles.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los botones de acción, (tales como Enviar) siempre son invocados por el usuario y no automáticamente invocados por el sistema cuando el último campo de un formulario ha sido lleno.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Los ítemes de comando y acción son presentados como botones y no como links.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Si un usuario abandona una transacción a la mitad del camino, él más tarde podría reanudar dicha transacción desde donde quedó.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Cuando una página presenta mucha información, el usuario puede ordenar y filtrar la información.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Si existe una imagen en un ícono o botón, debe ser relevante a la tarea a la que se refiere.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio pregunta a un usuario antes de desconectarse; además, el timeout de una sesión es apropiado.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'Las características que no se deseen (e.g. animaciones Flash) pueden ser detenidas y omitidas.',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio es robusto y todas las características clave funcionan bien (e.g. no hay errores javascript, errores CGI o links rotos).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio soporta a los usuarios novatos y expertos brindando diferentes niveles de explicación (e.g. en páginas de ayuda y mensajes de error).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio permite a los usuarios renombrar objetos y acciones en la interface (e.g. direcciones de correo electrónico o cuentas).',
					'form_id'=>1,
					'ambitos_id'=>2
				));

			Tarea::create(array(
					'enunciado'=>'El sitio permite a los usuarios personalizar parámetros operacionales de tiempo (e.g. tiempo antes de una desconexión automática).',
					'form_id'=>1,
					'ambitos_id'=>2
				));


			//////NAVEGABILIDAD Y AI

			Tarea::create(array(
					'enunciado'=>'Existe una manera obvia y conveniente para moverse entre las páginas relacionadas y secciones y es fácil retornar a la página de inicio.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'La información que más necesitan los usuarios es fácil de navegar en la mayoría de las páginas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las opciones de navegación son ordenadas en la manera más lógica u orientada a las tareas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El sistema de navegación es amplio y sencillo (muchos ítems en un menú) en vez de un menú profundo (con varios niveles).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'La estructura es simple, con un modelo conceptual claro sin niveles innecesarios.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'La mayoría de secciones del sitio están disponibles en todas las páginas (navegación persistente) y no hay puntos muertos.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las pestañas de navegación están localizadas en la parte superior de la página y se ven como versiones clickeables de pestañas reales.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El link al mapa del sitio aparece en todas las páginas del sitio.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El mapa del sitio provee una concisa descripción general del sitio y no es una redistribución de la navegación principal o una lista de cada tópico.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Existe una buena retroalimentación para el usuario (e.g. indicándole en cuál lugar del sitio se encuentra).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas de las categorías describen con precisión la información de las mismas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas de navegación y links contienen las palabras clave que los usuarios necesitan para alcanzar su objetivo.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'La terminología y convenciones (como los colores de los links) son aproximadamente consistentes con el uso web general.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Los links se ven igual en las diferentes secciones del sitio.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas de productos contienen links a productos similares o complementarios con el fin de dar soporte a la venta cruzada.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Los términos usados para la navegación de los ítems y links no son ambiguos ni específicos de una región.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Los usuarios pueden ordenar y filtrar las páginas de catálogos (e.g. ordenando según el precio o mostrar los más populares).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Existe un cambio visible cuando el ratón apunta a algo clickeable (excluyendo los cambios de cursor).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El contenido importante puede ser accesado por más de un link (usuarios diferentes pueden requerir diferentes etiquetas para los links).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas de sólo navegación (como la página de inicio) pueden ser vistas sin necesidad de desplazamiento.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Los links que invocan acciones (e.g. descargas, nuevas ventanas) están claramente distinguidos de los links que cargan otras páginas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El sitio permite al usuario controlar el ritmo y secuencia de la interacción.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Existen puntos claros de salida en cada página permitiendo al usuario abandonar la tarea actual sin tener que ir a una ventana extensa.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'El sitio no deshabilita el botón Regresar y dicho botón aparece en la barra de herramientas del navegador en todas las páginas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Un link para el carrito de compras y otro para el checkout aparecen siempre visibles en todas las páginas.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Si el sitio abre nuevas ventanas, estas no deben confundir al usuario (e.g. son del tamaño de las ventanas de diálogo y pueden ser fácilmente cerradas).',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Las instrucciones del menú, las preguntas y los mensajes aparecen en el mismo lugar en cada página.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			Tarea::create(array(
					'enunciado'=>'Hacer click en el botón “Regresar” siempre lleva al usuario de vuelta a la página de donde vino.',
					'form_id'=>1,
					'ambitos_id'=>3
				));

			/////// FORMULARIOS

			Tarea::create(array(
					'enunciado'=>'Los campos de entrada contienen valores predeterminados cuando así se requiera y muestran la estructura de los datos y la longitud del campo.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Cuando una tarea involucra documentos fuente (como un formulario de papel), la interfaz es compatible con las características del documento fuente.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'El sitio automáticamente introduce el formateo de los datos (e.g. símbolos de moneda, comas para los miles, espacios al principio o al final). Los usuarios no necesitan introducir caracteres como £ or %.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas para los campos explican claramente cuáles campos son requeridos.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las cajas de texto en los formularios tienen el tamaño adecuado para el dato que se debe introducir.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Existe una clara distinción entre campos requeridos y opcionales en los formularios.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'El mismo formulario es utilizado tanto para conectarse o registrarse (e.g. como Amazon).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los formularios deben advertir al usuario si información externa es necesitada para su completitud (e.g. número de pasaporte).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las preguntas en los formularios están agrupadas de manera lógica y cada grupo tiene un título descriptivo.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los campos en los formularios contienen ayudas, ejemplos o modelos de respuestas para demostrar el dato que se debe introducir.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Cuando hay campos en el formulario que toman la forma de preguntas, dichas preguntas deben ser claras y en lenguaje simple.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las listas de opciones, botones de radio y casillas son preferibles a las cajas de texto en los formularios (e.g. no se debe abusar del uso de las cajas de texto).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'En las ventanas para introducir información, el cursor es ubicado en donde el dato debe ser introducido.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los formatos de los datos están claramente indicados por el dato de entrada (e.g. fechas) y el dato de salida (e.g. unidades de medida).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los usuarios pueden completar tareas simples introduciendo solamente la información esencial (y el sistema supliendo la información no-esencial de manera predeterminada).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los formularios permiten a los usuarios permanecer con un método simple de interacción lo más que se pueda (e.g. los usuarios no necesitan hacer numerosos cambios de teclado a mouse).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'El usuario puede cambiar los valores predeterminados en los campos de los formularios.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las cajas de texto indican la cantidad y el formato de los datos que deben ser introducidos.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Los formularios son validados cuando la información es enviada (submit).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'En las ventanas para introducir información, el sitio lleva a cabo la revisión de los campos y la revisión del formulario en el momento apropiado.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'El sitio hace fácil corregir los errores (e.g. cuando un formulario está incompleto, posicionar el cursor en donde la corrección debe ser hecha).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Hay consistencia entre los datos que deben ser introducidos y los datos que se muestran en la pantalla.',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas están cerca de los campos del formulario (e.g. las etiquetas están justificadas a la derecha).',
					'form_id'=>1,
					'ambitos_id'=>4
				));

			//////// DIAGRAMACION Y DISEÑO GRAFICO
			Tarea::create(array(
					'enunciado'=>'La densidad de la pantalla es apropiada para los usuarios finales y sus tareas.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El diseño ayuda a poner atención en cuál paso es el siguiente.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'En todas las páginas, la información más importante (como los tópicos, características y funciones más frecuentemente usados) es presentada en la primera pantalla de información (por encima de la tapa).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio puede ser usado sin desplazamiento horizontal.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Todo lo que es clickeable (como los botones) son efectivamente presionables.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los ítems que no son clickeables tienen características que sugieren que efectivamente no son clickeables.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'La funcionalidad de los botones y controles es obvia a partir de sus etiquetas o de su diseño.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las imágenes clickeables incluyen textos redundantes (no existe una navegación misteriosa).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los links son fáciles de identificar sin necesidad de ir pasando el mouse para verificar si son links (e.g. están subrayados).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las fuentes son usadas consistentemente.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'La relación entre los controles y sus acciones es obvia.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los íconos y gráficos son estándar y/o intuitivos (concretos y familiares).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Existe un claro punto visual de partida en todas las páginas.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Cada página del sitio comparte un diseño consistente.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas del sitio son formateadas para impresión, o en su defecto, existe una versión imprimible.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los botones y los links muestran cuando son clickeados.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los componentes gráficos (como los botones de radio y las casillas) son usados apropiadamente.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las fuentes son legibles.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio evita el texto itálico y utiliza el subrayado solamente para los links.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Existe un buen balance entre la densidad de la información y el uso del espacio en blanco.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio es agradable a la vista.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio no contiene elementos que crean la ilusión de que el usuario ha alcanzado el inicio o el final de una página cuando no es así.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio evita el uso excesivo del texto en mayúsculas.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El sitio tiene un consistente y claro diseño visual que es capaz de enganchar a los usuarios..',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El azul saturado se evita para detalles finos (e.g. líneas delgadas y símbolos).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El color es utilizado en la estructura y para agrupar ítems en la página.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los gráficos no deben ser confundidos con los anuncios de publicidad.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'La negrita es usada solamente para enfatizar los tópicos importantes.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'En las páginas de contenido, los renglones no son ni muy cortos (menos de 50 caracteres por renglón) ni muy largos (más de 100 caracteres por renglón) cuando son vistos en un navegador con ancho estándar.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas han sido diseñadas en una cuadrícula, es decir, con ítems y objetos alineados tanto horizontalmente como verticalmente.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas significativas, los colores usados en los fondos y el apropiado uso de bordes y espacios en blanco ayudan a los usuarios a identificar un conjunto de ítems como un bloque funcional.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Existe una correcta combinación de colores y se evitan los fondos complicados.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas individuales están libres de información irrelevante y desordenada.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los elementos estándar (como títulos de páginas, navegación del sitio, navegación de páginas, política de privacidad, etc.) son fáciles de localizar.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'El logo de la organización está ubicado en el mismo lugar en todas las páginas y hacer click en el logo retorna al usuario a la página más lógica (e.g. la página de inicio).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las características que atraen la atención (como las animaciones, las negritas y los elementos con diferente tamaño) son usadas con moderación y sólo cuando son relevantes.',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Los íconos son visualmente y conceptualmente distintos pero mantienen una armonía (pertenecen a la misma familia).',
					'form_id'=>1,
					'ambitos_id'=>5
				));

			Tarea::create(array(
					'enunciado'=>'Las funciones e información relacionada son agrupadas y cada grupo puede ser examinado en un espacio fijo (5 grados, aproximadamente 4.4cm de diámetro de círculo en la pantalla).',
					'form_id'=>1,
					'ambitos_id'=>5
				));


			///////////////CONFIANZA Y CREDIBILIDAD


			Tarea::create(array(
					'enunciado'=>'El contenido está actualizado, autorizado y fidedigno.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'El sitio contiene soporte de terceros (e.g. citas, testimonios) para verificar la precisión de la información.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'Es claro que hay una organización real detrás del sitio (e.g. existe una dirección física o una foto de la oficina).',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'La compañía está compuesta por expertos reconocidos (buscar credenciales).',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'El sitio evita los anuncios, especialmente los de tipo pop-up.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'Los costos de entrega están destacados al inicio del checkout.',
					'form_id'=>1,
					'ambitos_id'=>6
				));
			
			Tarea::create(array(
					'enunciado'=>'El sitio evita la palabrería de mercadeo .',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'Cada página debe contener el logo de la marca de la compañía para que el usuario sepa que se mantiene en el mismo sitio.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'Es fácil contactar a alguien para asistencia y una respuesta es recibida rápidamente.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'El contenido es fresco: es actualizado con frecuencia y el sitio tiene contenido reciente.',
					'form_id'=>1,
					
					'ambitos_id'=>6
				));
			
			Tarea::create(array(
					'enunciado'=>'El sitio está libre de errores tipográficos y de errores ortográficos.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'El diseño visual complementa a la marca de la compañía y a los mensajes de mercadeo.',
					'form_id'=>1,
					'ambitos_id'=>6
				));

			Tarea::create(array(
					'enunciado'=>'Existen personas reales detrás de la organización y son honestos y autorizados (buscar biografías).',
					'form_id'=>1,
					'ambitos_id'=>6
				));


			/////////CALIDAD DE CONTENIDO Y ESCRITURA

			Tarea::create(array(
					'enunciado'=>'El sitio tiene contenido único y atractivo.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El texto es conciso, sin instrucciones innecesarias ni mensajes de bienvenida.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El contenido de cada página comienza con conclusiones o implicaciones y el texto es escrito en estilo de pirámide invertida.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas usan viñetas y listas numeradas en vez del texto narrativo.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las listas son precedidas de una introducción concisa (e.g. una palabra o frase) ayudando a los usuarios a apreciar cómo los ítems se relacionan unos con otros.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'ELos ítemes más importantes de una lista están situados al inicio de la misma.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'La información está organizada jerárquicamente, de lo general a lo específico, y la organización es clara y lógica.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El contenido ha sido específicamente creado para la web (las páginas web no contienen material de brochures por ejemplo).',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas de productos contienen el detalle necesario para hacer una compra y los usuarios pueden ver las imágenes del producto con acercamiento.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El hipertexto ha sido usado apropiadamente en la estructura del contenido.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las oraciones están escritas en voz activa.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas son rápidas de examinar, con títulos grandes, subtítulos y párrafos cortos.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El sitio usa mapas, diagramas, gráficos, diagramas de flujo y otros componentes visuales en vez de puros bloques de texto.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Cada página está claramente etiquetada con un útil y descriptivo título que tiene sentido cuando se desea guardar en los marcadores.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Los links y sus títulos son descriptivos y no hay links tipo Click aquí!.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'El sitio evita los títulos con lenguaje difícil de entender.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Los links coinciden con el título de las páginas destino, así los usuarios sabrán cuando han llegado a la página a la que querían ir.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las etiquetas de los botones y links comienzan con palabras de acción.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Los títulos y subtítulos son cortos, fáciles, sencillos y descriptivos.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las palabras, frases y conceptos utilizados son familiares para cualquier usuario convencional.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Las listas numeradas comienzan en 1 y no en 0.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Los acrónimos y abreviaturas deben ser definidos al ser usados por primera vez.',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			Tarea::create(array(
					'enunciado'=>'Los textos de los links son lo suficientemente largos para ser entendidos, pero lo suficientemente cortos para evitar el corte de palabras en diferentes renglones (especialmente si son usados en una lista de navegación).',
					'form_id'=>1,
					'ambitos_id'=>7
				));

			


			////////////BUSQUEDAS

			Tarea::create(array(
					'enunciado'=>'La búsqueda predeterminada es intuitiva (no hay operadores booleanos).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La página de resultados de una búsqueda le muestra al usuario lo que se buscó y es fácil editar los criterios de búsqueda y reenviarlos para una nueva búsqueda.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'Los resultados de una búsqueda son claros, útiles y clasificados por relevancia.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La página de resultados de una búsqueda indica claramente cuántos resultados tuvo la búsqueda y el número de resultados que se muestran por página es configurable por el usuario.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'Si no hubo resultados después de una búsqueda, el sistema ofrece ideas u opciones para mejorar la búsqueda basados en problemas identificables con la entrada del usuario.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El motor de búsqueda maneja correctamente las búsquedas vacías (el usuario no introduce nada).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'Las consultas más comunes (reflejado en los registros del sitio) producen resultados útiles.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El motor de búsqueda incluye plantillas, ejemplos o consejos para usarlo eficazmente.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El sitio incluye una interfaz más poderosa de búsqueda para ayudar a los usuarios a redefinir sus búsquedas (preferiblemente llamada redefina su búsqueda pero no búsqueda avanzada).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La página de resultados de una búsqueda no muestra resultados duplicados (ni duplicados reales ni duplicados muy parecidos).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La caja de búsqueda es suficientemente grande para manejar la longitud de las consultas más comunes.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'Las búsquedas cubren todo el sitio, no una porción de él.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'Si el sitio permite a los usuarios configurar una búsqueda compleja, dichas búsquedas pueden ser guardadas y ejecutadas periódicamente (así los usuarios pueden estar actualizados con contenido dinámico)..',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La interfaz de búsqueda está ubicada en donde los usuarios esperan encontrarla (en la parte superior derecha de la página).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La caja de búsqueda y sus controles están claramente etiquetados (múltiples cajas de búsqueda pueden ser confusas).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El sitio tiene soporte para personas que deseen navegar y para personas que deseen buscar.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El ámbito de la búsqueda es explícito en la página de resultados de una búsqueda y los usuarios pueden restringir dicho ámbito (si es relevante a la tarea).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'La página de resultados de una búsqueda despliega meta-información que es útil, como el tamaño del documento, la fecha de creación y el tipo de documento (word, pdf, etc).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El motor de búsqueda provee corrección automática de ortografía y busca plurales y sinónimos.',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			Tarea::create(array(
					'enunciado'=>'El motor de búsqueda provee opción para búsquedas relacionadas (más como esto).',
					'form_id'=>1,
					'ambitos_id'=>8
				));

			
			/////////////AYUDA RETROALIMENTACION Y ERRORE....

			Tarea::create(array(
					'enunciado'=>'Las preguntas frecuentes (FAQ) o la ayuda en línea provee instrucciones paso a paso que ayudan a los usuarios a llevar a cabo las tareas más importantes.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Es fácil obtener ayuda en la forma y momento oportuno.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Los avisos al usuario son breves y no ambiguos.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El usuario no necesita consultar manuales de usuario u otra información externa para usar el sitio.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio usa una página 404 personalizada que incluye consejos en cómo encontrar una página perdida y links a la página de inicio y a la búsqueda.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio provee retroalimentación (e.g. indicador de progreso o mensajes) cuando se necesiten (e.g. durante un checkout).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Se le brinda ayuda a los usuarios cuando escogen productos.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'La confirmación del usuario es requerida antes de llevar a cabo acciones potencialmente peligrosas (e.g. al borrar algo).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas de confirmación son claras.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Los mensajes de error contienen instrucciones claras en cuál es el paso siguiente.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Inmediatamente antes de completar una compra, el sitio muestra al usuario un claro resumen y no debe ser confundido con la página de confirmación de compra.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Cuando el usuario necesite escoger entre diferentes opciones (como en una ventana de diálogo) las opciones deben ser obvias.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio mantiene al usuario informado de retrasos inevitables en la respuesta del sitio (e.g. cuando se está autorizando una transacción de una tarjeta de crédito).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Los mensajes de error son escritos en un tono no burlón ni culpando al usuario por el error.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Las páginas cargan rápido (5 segundos o menos).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio provee retroalimentación inmediata en las entradas o acciones del usuario.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El usuario es advertido acerca de las páginas grandes y que tardan en cargar (e.g. Por favor espere...) y la información más importante aparece de primero.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Cuando se usen tooltips, ellos proveen ayuda adicional y no simplemente son un duplicado del texto del ícono, link o etiqueta.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Cuando se muestren instrucciones, las páginas dicen a los usuarios qué hacer en vez de qué no hacer.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio le muestra a los usuarios cómo hacer apropiadamente las tareas comunes (e.g. con demostraciones de la funcionalidad del sitio).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio provee retroalimentación (e.g. ¿Sabía usted?) que ayuda al usuario a aprender cómo usar el sitio.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio provee ayuda sensitiva al contexto.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'La ayuda es clara, directa y expresada en un Español simple, libre de palabrería.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio provee una clara retroalimentación cuando una tarea ha sido completada exitosamente.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Las instrucciones importantes se mantienen en la pantalla cuando son necesitadas y no existen timeouts precipitados que requieren que el usuario esté escribiendo información.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'La distancia entre los controles y su tamaño es apropiada, con el tamaño proporcional a la distancia).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Existe suficiente espacio entre los elementos de acción (links, botones, etc) para prevenir que el usuario haga click en el elemento incorrecto.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Existe un espaciado vertical de al menos 2 pixeles entre ítems clickeables.',
					'form_id'=>1,
					'ambitos_id'=>9
				));
			
			Tarea::create(array(
					'enunciado'=>'El sitio hace obvio cuándo y dónde un error ocurrió (e.g. cuando un formulario está incompleto, destacando los campos que hacen falta).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'El sitio usa apropiadamente los métodos de selección (e.g. las listas desplegables) como alternativa a escribir.',
					'form_id'=>1,
					'ambitos_id'=>9
				));
			

			Tarea::create(array(
					'enunciado'=>'El sitio hace un buen trabajo previniendo al usuario de cometer errores.',
					'form_id'=>1,
					'ambitos_id'=>9
				));
			
			Tarea::create(array(
					'enunciado'=>'El sitio avisa al usuario antes de corregir una entrada errónea (e.g. en Google Quiso decir...).',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Los mensajes de error son escritos en lenguaje sencillo con suficiente explicación del problema.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Cuando sea relevante, el usuario puede esperar a corregir los errores más adelante en una tarea.',
					'form_id'=>1,
					'ambitos_id'=>9
				));
			
			Tarea::create(array(
					'enunciado'=>'El sitio puede proveer más detalle acerca de los mensajes de error, si fuera requerido.',
					'form_id'=>1,
					'ambitos_id'=>9
				));

			Tarea::create(array(
					'enunciado'=>'Es fácil deshacer (o cancelar) así como rehacer acciones.',
					'form_id'=>1,
					'ambitos_id'=>9
				));
			
			
			/*
			http://www.intergraphicdesigns.com/tools/test-usabilidad-web/
			DB::table('partisipantes')->delete();

			Partisipante::create(array(
					'cedula'=>'0503254849',
					'nombres'=>'Mauro Omar',
					'apellidos'=>'Guanoluisa Arciniega',
					'nivel_academico'=>'Tercero',
					'profesion'=>'Ing. Sistemas'
				));

			Partisipante::create(array(
					'cedula'=>'0503111111',
					'nombres'=>'Juan Pablo',
					'apellidos'=>'Perez',
					'nivel_academico'=>'Segundo',
					'profesion'=>'Ing. Contabilidad'
				));
			Partisipante::create(array(
					'cedula'=>'0502222222',
					'nombres'=>'Diego',
					'apellidos'=>'Mosquera',
					'nivel_academico'=>'Primero',
					'profesion'=>'Ing. Comercial'
				));
			
			
			
			DB::table('users')->delete();

			User::create(array(
					'cedula'=>'default',
					'nombres'=>'root',
					'apellidos'=>'root',
					'email'=>'root@root',
					'direccion'=>'default',
					'telefono'=>'default',
					'username'=>'root',
					'password'=>Hash::make('root')
				));
			
			*/

			/*	
			//llenamos los campos para otro usuario
			User::create(array(
					'name'=>'Estefania',
					'last_name'=>'Gualpa',
					'email'=>'nellygualpa04@gmail.com',
					'address'=>'Calle Amazonas',
					'phone'=>958768521,
					'username'=>'nelly04',
					'level'=>1,
					'password'=>Hash::make('estefy1993')
				));
				*/
		}
	}
 ?>