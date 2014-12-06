@extends('layout')

@section('title')
	<title>MiRumbo.org - FAQ</title>
@stop

@section('content')
	<div class="rumbo-page">
		<div class="container" id="page-faq">
			<h2 id="faq-title">FAQ</h2>

<h3>¿QUÉ ES PRESUPUESTO?</h3>
<p>Es el dinero que el gobierno tiene para hacer cosas en las ciudades y para los ciudadanos. Este dinero viene de nuestros impuestos, es tu
dinero.</p>

<h3>¿QUÉ ES PRESUPUESTO PARTICIPATIVO?</h3>
<p>Es común que los gobiernos decidan solos como gastarán el dinero y qué tipo de inversiones hacen en nuestras ciudades. Sin embargo,
en los países de Latinoamérica están empezando a involucrar a los ciudadanos en el proceso de elegir cómo y dónde se gastará ese
dinero.</p>

<h3>¿QUÉ ES LO BUENO DEL PRESUPUESTO PARTICIPATIVO?</h3>
<p>Que la ley garantiza a los ciudadanos la participación en la toma de decisión de un porcentaje del presupuesto público.</p>

<h3>QUE TU PUEDES DECIDIR EN QUE SE GASTA EL DINERO-</h3>

<h3>¿QUÉ ES NECESARIO PARA VOLVER LOS PRESUPUESTOS PARTICIPATIVOS MÁS PARTICIPATIVOS?</h3>
<p>Que te involucres en el proceso de: conocer los problemas de tu comunidad, relacionarte con los proyectos en ejecución en tu colonia,
proponer soluciones, acercarse a los consejeros y monitorear las acciones. Tu eres parte del cambio que necesita tu colonia.</p>

<h3>¿CÓMO SE HACE UN PRESUPUESTO PARTICIPATIVO?</h3>
<h3>PASO A PASO</h3>
<ul>
  <li>Definición por ley o acuerdo sociedad civil- gobierno del porcentaje y el rubro sobre el que se realizará la presupuestación.</li>
  <li>Convocatoria a la presentación de proyectos por parte de la ciudadanía.</li>
  <li>Promoción, socialización y votación de los proyectos.</li>
  <li>Trámite para la asignación de recursos.</li>
  <li>Inicio de la ejecución de las obras.</li>
  <li>Monitoreo por parte de la sociedad civil y rendición pública de cuentas.</li>
  <li>Evaluación del proyecto.</li>
</ul>

<h3>CONTÁCTO DIRECTO</h3>
<p id="mail-faq"><a href="mailto:mirumbomx@gmail.com">mirumbomx@gmail.com</a></p>

		</div><!-- .container -->
	</div><!-- .rumbo-page -->
@stop

@section('scripts')   
   {{ HTML::script('js/home.js') }}
@stop
