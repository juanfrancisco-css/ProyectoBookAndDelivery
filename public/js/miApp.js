
/*******************************************ofertas ******************************************************* */
//////////////// funciones que se van a cargar al body \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function cargar(){

    ObtenerPromocion();
    ObtenerDiaPizza();
    setCalendar() ;
    }
    
    ////////////// obtener el dia y la promocion \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
    function obtenerDiaActual() {
        const diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        const fecha = new Date();
        const diaActual = diasSemana[fecha.getDay()];
        return diaActual;
      }
      function Promocion(dia) {
        dia=dia.toLowerCase()
        let offer="";
        let btn="";
        switch (dia) {
            case 'martes':
               
            case 'miércoles':
              offer="<span> 5% </span> en nuestras hamburguesas  ";
              btn=" <a href='/carta'>Pedir Ahora</a>";
            break;
            case 'jueves':
              offer="<span>10%</span> en nuestra CheeseBurger  ";
              btn="<a href='/carta'> Pedir Ahora</a>";
            break;
          
          default:
           offer=" de disfrutar";
           btn="<a href='/carta'>Ver la Carta </a>";
        }
        document.getElementById('btn-dia').innerHTML=btn;
    
        return offer;
      }
    
      function ObtenerPromocion(){
    
        var dia = obtenerDiaActual();
        document.getElementById('dia').innerHTML=dia;
        console.log(dia);
    
    var offer=  Promocion(dia) 
    console.log(offer);
    
    if(offer != ""){
    document.getElementById('oferta').innerHTML=offer;
    
    }
      }/////////////////// fin \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ºº
    
      ///////////////////////////////   Obtener dia de la pizza \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ºº
      function DiaPizza(dia){
    
        dia=dia.toLowerCase()
        let offer="";
        let btn="";
        switch (dia) {
           
            case 'miércoles':
             
           
            case 'jueves':
              offer=" Dia de la Pizza ";
              btn="<a href=''>Pedir Ahora</a>";
            break;
          
          default:
           offer=" Miercoles y Jueves dia de la Pizza ";
           btn="<a href='/carta'>Ver la Carta</a>";
        }
        document.getElementById('btn-pizza').innerHTML=btn;
        return offer;
      }
    
      function ObtenerDiaPizza(){
    
        var dia = obtenerDiaActual();
        var offer=  DiaPizza(dia);
    console.log(offer);
    
    if(offer != ""){
    document.getElementById('DiaPizza').innerHTML=offer;
    }
      }//////////////////////// fin \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
     /**********************************************************************************fin  */

      /*************************************************************************************Calendario 2 */
  //check the console for date click event
//Fixed day highlight
//Added previous month and next month view

function CalendarControl() {
    const calendar = new Date();
    const calendarControl = {
      localDate: new Date(),
      prevMonthLastDate: null,
      calWeekDays: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
      calMonthName: [
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
        "Deciembre"
      ],
      daysInMonth: function (month, year) {
        return new Date(year, month, 0).getDate();
      },
      firstDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
      },
      lastDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
      },
      firstDayNumber: function () {
        return calendarControl.firstDay().getDay() + 1;
      },
      lastDayNumber: function () {
        return calendarControl.lastDay().getDay() + 1;
      },
      getPreviousMonthLastDate: function () {
        let lastDate = new Date(
          calendar.getFullYear(),
          calendar.getMonth(),
          0
        ).getDate();
        return lastDate;
      },
      navigateToPreviousMonth: function () {
        calendar.setMonth(calendar.getMonth() - 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToNextMonth: function () {
        calendar.setMonth(calendar.getMonth() + 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToCurrentMonth: function () {
        let currentMonth = calendarControl.localDate.getMonth();
        let currentYear = calendarControl.localDate.getFullYear();
        calendar.setMonth(currentMonth);
        calendar.setYear(currentYear);
        calendarControl.attachEventsOnNextPrev();
      },
      displayYear: function () {
        let yearLabel = document.querySelector(".calendar .calendar-year-label");
        yearLabel.innerHTML = calendar.getFullYear();
      },
      displayMonth: function () {
        let monthLabel = document.querySelector(
          ".calendar .calendar-month-label"
        );
        monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
      },
      selectDate: function (e) {
        let dia_select=`${e.target.textContent} ${
          calendarControl.calMonthName[calendar.getMonth()]
        } ${calendar.getFullYear()}`
        console.log(
          `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
        );
        //La fecha obtenida se devuelve a una caja 
      
        console.log("dia de hoy "+dia_select);
        document.getElementById('fecha_select').value=dia_select;
       // document.getElementById('fecha_select').value=dia_select;
    // let resp=  confirm("Has elegido el dia " + dia_select + " a las "+ document.getElementById('hora').value +" para la reserva" )
  
     // if(resp){
       
  //respuesta del alert 
 // document.getElementById('fecha_select').value=dia_select;
    //  }
       
      },
      plotSelectors: function () {
        document.querySelector(
          ".calendar"
        ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Hoy: 
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
            ${calendarControl.localDate.getDate()}, 
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
      },
      plotDayNames: function () {
        for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
        }
      },
      /*agregado*/ 
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
      
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates">${calendarControl.prevMonthLastDate--}</div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            let dayClass = "";
            if (count < calendarControl.localDate.getDate()) {
              dayClass = "prev-day";
            }
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item ${dayClass}" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          let dayClass = "";
          if (count < calendarControl.localDate.getDate()) {
            dayClass = "prev-day";
          }
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item ${dayClass}" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },
      
      /*modificado*/
      /*
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
  
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates"></div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },*/
      attachEvents: function () {
        let prevBtn = document.querySelector(".calendar .calendar-prev a");
        let nextBtn = document.querySelector(".calendar .calendar-next a");
        let todayDate = document.querySelector(".calendar .calendar-today-date");
        let dateNumber = document.querySelectorAll(".calendar .dateNumber");
        prevBtn.addEventListener(
          "click",
          calendarControl.navigateToPreviousMonth
        );
        nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
        todayDate.addEventListener(
          "click",
          calendarControl.navigateToCurrentMonth
        );
        for (var i = 0; i < dateNumber.length; i++) {
            dateNumber[i].addEventListener(
              "click",
              calendarControl.selectDate,
              false
            );
        }
      },
      highlightToday: function () {
        let currentMonth = calendarControl.localDate.getMonth() + 1;
        let changedMonth = calendar.getMonth() + 1;
        let currentYear = calendarControl.localDate.getFullYear();
        let changedYear = calendar.getFullYear();
        if (
          currentYear === changedYear &&
          currentMonth === changedMonth &&
          document.querySelectorAll(".number-item")
        ) {
          document
            .querySelectorAll(".number-item")
            [calendar.getDate() - 1].classList.add("calendar-today");
        }
      },
      plotPrevMonthDates: function(dates){
        dates.reverse();
        for(let i=0;i<dates.length;i++) {
            if(document.querySelectorAll(".prev-dates")) {
                document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
            }
        }
      },
      plotNextMonthDates: function(){
       let childElemCount = document.querySelector('.calendar-body').childElementCount;
       //7 lines
       if(childElemCount > 42 ) {
           let diff = 49 - childElemCount;
           calendarControl.loopThroughNextDays(diff);
       }
  
       //6 lines
       if(childElemCount > 35 && childElemCount <= 42 ) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
       }
  
      },
      loopThroughNextDays: function(count) {
        if(count > 0) {
            for(let i=1;i<=count;i++) {
                document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
            }
        }
      },
      attachEventsOnNextPrev: function () {
        calendarControl.plotDates();
        calendarControl.attachEvents();
      },
      init: function () {
        calendarControl.plotSelectors();
        calendarControl.plotDates();
        calendarControl.attachEvents();
      }
    };
    calendarControl.init();
  }
  
  const calendarControl = new CalendarControl();
  /********************************************************************************fin */

//hora 
/*
const hora = ['10:30','11:00','11:30','12:00','12:35','13:05','13:35',
'14:00','14:30','15:00','15:30','16:00','16:30'
,'17:00','17:35','18:05','18:35','19:00','19:35'
,'20:05','20:35','21:00','21:30','22:00','22:30','23:00'];*/


  function hora_(hora_requerida){
    document.getElementById('hora').value=hora_requerida;

    //añadido
    for (let i = 0; i < hora.length; i++) {
      const id = 'hora_' + i;
      document.getElementById(id).style.backgroundColor ="blue";
      if (hora[i] === hora_requerida) {
        document.getElementById(id).style.backgroundColor = "green";
      }
    }
}


function hora_1($hora){

document.getElementById('hora').value=$hora;
}
function hora_2($hora){

document.getElementById('hora').value=$hora;
}