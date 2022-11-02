var fecha = new Date();

var dia_semana = [
  "Domingo",
  "Lunes",
  "Martes",
  "Miércoles",
  "Jueves",
  "Viernes",
  "Sábado",
];

var mes = [
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre",
];

var dame_fecha = `${dia_semana[fecha.getDay()]} ${fecha.getDate()} de ${mes[fecha.getMonth()]} ${fecha.getFullYear()}`;

document.write("<p>"+dame_fecha+"</p>");

