document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 500,
      locale:'es',
      headerToolbar: {
        center: 'addEventButton'
      },
      customButtons: {
        addEventButton: {
          text: 'Añadir evento',
          click: function() {
            var dateStr = prompt('Introduce fecha en formato aaaa-mm-dd');
            var date = new Date(dateStr + 'T00:00:00'); // will be in local time

            if (!isNaN(date.valueOf())) { // valid?
              calendar.addEvent({
                title: 'Evento dinámco, cambiar estas líneas por base de datos',
                start: date,
                allDay: true
              });
            alert('Fecha añadida, esto es opcional en lo que conectamos BD. Archivo calendario.js');
            } else {
            alert('Fecha inválida.');
            }
          }
        }
      }
    });

    calendar.render();
    });
  