

@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
   <div class="panel panel-default">
   <div class="panel-heading"><center><font size="5" face="arial">INSCRIPCIONES</center> </div>
   <div class="panel-body">
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderHeader">
   <div class="freebirdFormviewerViewHeaderTitleRow">
      <br>
      <div class="stage">
      <br>
         <div id="SLDR-ONE" class="sldr">
            <ul class="wrp animate">
               <li class="elmnt-one">
                  <div class="wrap"><img src="public/Img/conver.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-two">
                  <div class="wrap"><img src="public/Img/conver1.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-three">
                  <div class="wrap"><img src="public/Img/conver2.png"  height="400">
                  </div>
               </li>
            </ul>
         </div>
         <div class="clear"></div>
         <ul class="selectors">
            <li class="focalPoint"><a href="">•</a></li>
            <li><a href="">•</a></li>
            <li><a href="">•</a></li>
         </ul>
      </div>
      <script src="public/Js/jquery.sldr.js"></script>
      <div class="freebirdFormviewerViewHeaderDescription" dir="auto">
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify">Para fortalecer las competencias de emprendimiento deportivo, cultural y audiovisual, brindando a nuestros empresarios y emprendedores una oportunidad de relacionamiento, el SENA   y el IDRD extiende una cordial invitación para que nos acompañe en el conversatorio y networking, que tiene como propósito hablar sobre oportunidades de negocios, tendencias de mercado, crecimiento de la industria, innovaciones del sector, entre otros. El evento que se realizará en el marco de la Semana Global del Emprendimiento.
         </p>

         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Lugar:</strong> Instituto Distrital de recreación y Deporte IDRD (calle 63 No. 59A - 06) Salón Presidente</p>
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Fecha:</strong> Jueves 16 de Noviembre de 2017</p>
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Hora: </strong>8:30 a.m a 1:00 p.m </p>
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Agenda del día:</strong> </p>
      <ol>
           <li style="line-height: 27px; font-size: 11pt; font-family:arial" align="justify"><strong>8:30 a 9:15 am</strong> Conversatorio: “Retos y oportunidades de la industria deportiva y la economía naranja”</li>
           <li style="line-height: 27px; font-size: 11pt; font-family:arial" align="justify"><strong>9:20 a 9:30 am</strong> Lanzamiento de la II Rueda virtual de negocios SENA </li>
           <li style="line-height: 27px; font-size: 11pt; font-family:arial" align="justify"><strong>9:30 a 10:25 am</strong> Conversatorio: “Del dicho al hecho” Experiencias empresariales de la economía naranja y las industrias deportivas.</li>
           <li style="line-height: 27px; font-size: 11pt; font-family:arial" align="justify"><strong>10:40 am a 1:00 pm  </strong> Networking.</li>
      </ol>
         <br>
         <link rel="stylesheet" type="text/css" href="public/Css/form.css">
         <form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
            <div class="panel-body">
               <!-- nuevo formulario-->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><font size="3" color="#1995dc">INFORMACIÓN PERSONAL</font></h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                     <!--nombres y apellidos-->
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font style="font-family:arial">Nombres Completos </label>
                           <input required type="text" class="form-control" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos</label>
                           <input required type="text" class="form-control" id="apellido" name="apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                        </div>

                        <!-- tipo de documento y número de documento-->
                         <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de Documento</label>
                              <select name="tipo_documento" id="tipo_documento" class="form-control" >
                                   <option value="1">Cédula de Ciudadania</option>
                                   <option value="2">Cédula de Extranjeria</option>
                              </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Número de Documento</label>
                           <input required type="text" class="form-control" id="cedula" name="cedula">
                           <br>
                        </div>

                        <!-- gpenero y fecha de nacimiento-->
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Género</label>
                               <select  required name="genero" id="genero" class="form-control" >
                                   <option value="">Seleccione</option>
                                   <option value="1">Masculino</option>
                                   <option value="2">Femenino</option>
                               </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Fecha de Nacimiento</label>
                           <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" >
                           <br>
                        </div>

                        <!--correo y teléfono-->
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label>
                           <input required type="mail" class="form-control" id="mail" name="mail" >
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Télefono Celular</label>
                           <input required type="number" class="form-control" id="celular" name="celular"><br>
                        </div>

                        <!-- dirección y barrio-->
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Dirección</label>
                           <input required type="text" class="form-control" id="direccion" name="direccion" >
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Barrio</label>
                           <input required type="text" class="form-control" id="barrio" name="barrio"><br>
                        </div>

                      <!-- localidad y grado de estudio-->
                         <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad</label>
                           <select  required name="localidad" id="localidad" class="form-control" >
                            <option value="">Seleccione</option>
                                @foreach ($localidades as $localidad)
                            <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                         @endforeach
                        </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Grado de Estudio</label>
                           <select name="estudio" id="estudio" class="form-control" >
                              <option value="">Seleccione</option>
                              <option value="1">Bachiller</option>
                              <option value="2">Técnico</option>
                              <option value="3">Técnologo</option>
                              <option value="4">Profesional Universitario</option> 
                              <option value="5">Profesional Especializado</option> 
                           </select><br>
                        </div>

                       <!--pregunta y grupo poblacional-->
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="line-height: 20px; font-size: 11pt; font-family:arial" align="justify">¿Que curso o capacitación es necesaria para fortalecer el sector del Deporye, la Recreación  y la Actividad Física?</label>
                          <select name="pregunta" id="pregunta" class="form-control" >
                              <option value="">Seleccione</option>
                              <option value="1">Gestión de Proyectos</option>
                              <option value="2">Organización de Certamenes Deportivos y Recreativos</option>
                              <option value="3">Principios del Entrenamiento</option>
                              <option value="4">Marketing Deportivo</option> 
                              <option value="5">Nuevas Tendencias de la Preparación Física</option>
                              <option value="6">Pedagogía en el Deporte</option>
                              <option value="7">Administración Deportiva</option>
                              <option value="8">Entrenamiento Deportivo</option>
                           </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="line-height: 20px; font-size: 11pt; font-family:arial" align="justify">Grupo Poblacional</label><br><br>
                           <select name="poblacion" id="poblacion" class="form-control" >
                              <option value="">Seleccione</option>
                              <option value="1">SIAB</option>
                              <option value="2">Escuelas Deportivas</option>
                           </select><br><br>
                        </div>

               </div>
               <br>
            
               </fieldset>
               <div class="freebirdFormviewerViewFormContent ">
                  <div class="freebirdFormviewerViewHeaderHeader">
                     <div class="freebirdFormviewerViewHeaderTitleRow">
                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
                     </div>
                     <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
                  </div>
                  <div class="freebirdFormviewerViewItemList" role="list">
                     <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
                        <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">
                           <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
                        </div>
                     </div>
                      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
                     <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
                        <div class="freebirdFormviewerViewItemsItemItemheader">
                           <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
                              <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br></div>
                              <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos  al inicio de este proceso de pre-inscripción</div>
                           </div>
                        </div>
                        <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
                           <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
                              <div class="freebirdFormviewerViewItemsCheckboxChoice">
                                 <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                                    <div class="exportLabelWrapper">
                                       <input type="checkbox" required style="float: left;
                                          margin: 3px;" name="acepto" id="acepto">
                                       <div class="docssharedWizToggleLabeledContent">
                                        <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                              <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
                           </div>
                        </div>
                        <div id="i.req.131124881" class="screenreaderOnly"></div>
                        <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
                     </div>
                  </div>
                  <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
                     <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
                        <div class="freebirdFormviewerViewNavigationButtons">
                           <input class="enviar" type="submit" value="Enviar"> 
                        </div>
                        
                     </div>
                     <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
                  </div>
         </form>
         <script type="text/javascript" src="public/Js/form.js" ></script>
         
@stop

