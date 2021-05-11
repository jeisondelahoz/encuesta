<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="col-md-10">
<h1> <p class="text-center"> ENCUESTA DE CONDICIONES DE SALUD</p></h1>
</div>
<div class="col-md-1"></div>
<div class="col-md-1"></div>

<div class="col-md-10"><h3><p class="text-center"> AÑO 2021</p></h3></div>
<div class="col-md-1"></div>
<form action="{{route('recibir')}}" method="POST" class="row g-3">

    {{ csrf_field() }}
<!--Datos Basicos -->
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <label for="inputEmail4" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" name="nombreC">
    </div>
    <div class="col-md-5">
        <label for="inputPassword4" class="form-label">Documento</label>
        <input type="text" class="form-control" name="DocumentoC">
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Cargo:</label>
            <select name="CargoC" class="form-select">
                <option selected>Seleccione el Cargo...</option>
                <option value="1">Directivo</option>
                <option value="2">Administrativo</option>
                <option value="3">Coordinador</option>
                <option value="4">Docente</option>
                <option value="5">Operativo</option>
                <option value="6">Aprendiz Sena</option>
            </select>
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Método de trabajo:</label>
            <select name="Mtrabajo" class="form-select">
                <option selected>Seleccione el Metodo de trabajo...</option>
                <option value="1">Casa</option>
                <option value="2">Sitio de trabajo</option>
                <option value="3">Incapacitad@</option>
                <option value="3">Aislamiento Preventivo</option>
            </select>
    </div>
    <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Edad</label>
        <input type="text" class="form-control" name="EdadC">
    </div>
    <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Temperatura a la Entrada</label>
        <input type="text" class="form-control" name="TemperaturaE">
    </div>
    <div class="col-md-1"></div>

    <hr>
    <div class="col-md-1"></div>
    
    <div class="col-md-10">
        <h2>1. Antecedentes. ¿Ha tenido alguno de los siguientes antecedentes?</h2>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Hipertensión arterial, o enfermedad cardiovascular, infartos, enfermedad cerebrovascular</p> 
    </div>
   
        <div class="col-md-1">
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="inlineRadio1">Si</label>
                <input class="form-check-input" type="radio"    name="p1-r1"  value="si">  
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="inlineRadio2">No</label>
                <input class="form-check-input" type="radio" name="p1-r1"  value="no"> 
            </div>
        </div>

    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Diabetes</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r2"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r2"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Enfermedades pulmonares crónicas (EPOC/ Asma)</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r3"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r3"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>
   

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Enfermedades renales (riñores) o hepáticas (hígado)</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r4"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r4"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Enfermedades autoinmunes, inmunosupresión, toma medicamentos inmunosupresores, cáncer o VIH</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r5"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r5"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Malnutrición (obesidad o desnutrición)</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r6"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r6"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Tabaquismo</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r7"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r7"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Embarazo actualmente</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r8"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r8"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Si lleva tratamiento médico por su condición de salud, marque Si, de lo contrario marque No</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p1-r9"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p1-r9"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

<hr>

<div class="col-md-1"></div>
    
    <div class="col-md-10">
        <h2>2. ¿Ha tenido algunos de los siguientes síntomas?</h2>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Tos</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r1"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r1"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Dolor de garganta</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r2"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r2"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Fiebre cuantificada mayor a 38°C</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r3"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r3"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Secreción nasal (moco o flema)</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r4"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r4"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Malestar general</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r5"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r5"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Disminución de percepción de olores y sabores</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r6"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r6"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Dificultad respiratoria</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r7"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r7"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Diarrea</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="p2-r8"  value="si">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="p2-r8"  value="no">
            
        </div>
    </div>
    <div class="col-md-1"></div>


    <hr>
    <div class="col-md-1"></div>
    
    <div class="col-md-10">
        <h2>3. Contacto estrecho con Covid-19</h2>
        <h3>En los últimos 7 días</h3>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Ha tenido contacto estrecho (menor a 2 metros por 15 minutos sin protección) con una persona con COVID-19 positivo? </p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Ha tenido contacto estrecho (menor a 2 metros por 15 minutos sin protección) con una persona con síntomas respiratorios y ud no sabe si tiene COVID-19 positivo?</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>
<hr>
    <div class="col-md-1"></div>
 

    <div class="col-md-10">
        <h2>4. Pruebas diagnósticas para Covid-19</h2>
        <h3>En los últimos 7 días</h3>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Le han realizado prueba de COVID-19 con muestra en nariz que ha salido positiva?</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Le han realizado prueba de COVID-19 en sangre que ha salido positiva?</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Ha estado o está en aislamiento preventivo porque ha sido diagnosticado de COVID-19?</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>¿Ha tenido incapacidad temporal por caso asociado a COVID-19?</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <hr>
    <div class="col-md-1"></div>
 

    <div class="col-md-10">
        <h2>5. Situación Vulnerabilidad</h2>
        <h3>Convive con: </h3>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Mayores de 70</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Personas que trabajan en prestación asistencial en salud</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Personas con Comorbilidades</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-8">
        <p>Personas con Covid19 positivo</p> 
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Si</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">No</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option2">
            
        </div>
    </div>
    <div class="col-md-1"></div>


    <div class="col-md-1"></div>
    <div class="col-md-10">
       
        <h3>Convive con: </h3>
    </div>
    <div class="col-md-1"></div>


    <div class="col-md-1"></div>
    <div class="col-md-10">
       
       <p>En caso de presentar uno o más síntomas debe reportar a su Eps y a la Coordinación Administrativa y Financiera de la institución. </p>
        <h3>Que medio de transporte utiliza para trasladarse a el colegio  </h3>
    </div>
    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    
    <div class="col-md-10">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Privado (Carro, Bicicleta, Moto)</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    
    <div class="col-md-10">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Público (Buseta, Taxi, Mototaxi)</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="form-check form-check-inline">
           <label class="form-check-label" for="inlineRadio1">Caminando</label>
           <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">  
        </div>
    </div>

    <div class="col-md-1"></div>


    <div class="col-md-5"></div>
    <div class="col-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

    <div class="col-md-5"></div>
   <!--<input type="submit" value="Enviar" /> -->

</form> 
</body>
</html>



