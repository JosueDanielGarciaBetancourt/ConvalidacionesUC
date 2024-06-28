@extends('layouts.layoutDashboard')

@section('title', 'Convalidar cursos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convalidarCursosSt.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/datatables.net-dt/css/dataTables.dataTable.css') }}">
@endpush

@section('main-content')
    <div class="convalidarcursosContainer">
        <div class="row">
            <div class="col">
              <h4>Postulante</h4>
              <div class="input-select" id="postulanteSelect">
                <input type="text" id="postulanteInput" placeholder="Ingresar nombre" oninput="filterOptions()" onclick="toggleOptions('postulanteOptions')">
                <ul class="select-items" id="postulanteOptions" style="display: none;">
                    @foreach ($postulantes as $postulante)
                      <li onclick="selectOption('{{ $postulante->idPostulante }} - {{ $postulante->nombrePostulante }}',
                                                '{{ $postulante->institucionProcedenciaPostulante }}',
                                                '{{ $postulante->carreraProcedenciaPostulante}}')">
                        {{ $postulante->idPostulante }} - {{ $postulante->nombrePostulante }}
                      </li>
                    @endforeach
                </ul>
            </div>
            </div>
            <div class="col">
              <h4>Institución</h4>
              <label class="bordered_label" id="institucionLabel">No se encontró institución</label>
            </div>
            <div class="col">
              <h4>Carrera Procedencia</h4>
              <label class="bordered_label" id="carreraProcedenciaLabel">No se encontró carrera</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4>Malla solicitada</h4>
              <select class="selectable">
                <option value="" selected disabled>Seleccionar malla</option>
                <option value="2015">2015</option>
                <option value="2015">2018</option>
                <option value="2015">2024</option>
              </select>
            </div>
            <div class="col">
              <h4>Carrera Destino</h4>
              <select class="selectable">
                <option value="" selected disabled>Seleccionar carrera</option>
                @foreach ($carrerasaLocales as $carreraLocal)
                  <option value="{{ $carreraLocal->idCarreraLocal }}">{{ $carreraLocal->idCarreraLocal }} - {{ $carreraLocal->nombreCarreraLocal }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="col">
              <form method="GET" action="{{ route('postulantesRegistrar.create') }}">
                <button class="btnNuevoPostulante">
                  <span class="material-symbols-outlined">add</span>
                  Registrar nuevo postulante
                </button>
              </form>
            </div>
          </div>
        </div>
        
        <div class="row1">
          <div class="col">
            <h4>Cursos Locales</h4>
          </div>
        </div>

        <!--Tabla de cursos locales-->
        <div class="row1">
          <table id="tblCursoLocales">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Periodo</th>
                    <th>Nombre</th>
                    <th>Sumilla</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->idCurso }}</td>
                    <td>{{ $curso->tipoCurso }}</td>
                    <td>{{ $curso->periodoCurso }}</td>
                    <td>{{ $curso->nombreCurso }}</td>
                    <td>{{ $curso->sumillaSilabo_Curso }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
    
    <script src={{ asset('js/convalidarCursosScrip.js') }}> </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables.net/js/dataTables.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('#tblCursoLocales').DataTable({
            // Configurando el idioma
            language: {
              "processing": "Procesando...",
              "lengthMenu": "Mostrar _MENU_ registros",
              "zeroRecords": "No se encontraron resultados",
              "emptyTable": "Ningún dato disponible en esta tabla",
              "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
              "infoFiltered": "(filtrado de un total de _MAX_ registros)",
              "search": "Buscar:",
              "loadingRecords": "Cargando...",
              "paginate": {
                  "first": "Primero",
                  "last": "Último",
                  "next": "Siguiente",
                  "previous": "Anterior"
              },
              "aria": {
                  "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                  "sortDescending": ": Activar para ordenar la columna de manera descendente"
              },
              "buttons": {
                  "copy": "Copiar",
                  "colvis": "Visibilidad",
                  "collection": "Colección",
                  "colvisRestore": "Restaurar visibilidad",
                  "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                  "copySuccess": {
                      "1": "Copiada 1 fila al portapapeles",
                      "_": "Copiadas %ds fila al portapapeles"
                  },
                  "copyTitle": "Copiar al portapapeles",
                  "csv": "CSV",
                  "excel": "Excel",
                  "pageLength": {
                      "-1": "Mostrar todas las filas",
                      "_": "Mostrar %d filas"
                  },
                  "pdf": "PDF",
                  "print": "Imprimir",
                  "renameState": "Cambiar nombre",
                  "updateState": "Actualizar",
                  "createState": "Crear Estado",
                  "removeAllStates": "Remover Estados",
                  "removeState": "Remover",
                  "savedStates": "Estados Guardados",
                  "stateRestore": "Estado %d"
              },
              "autoFill": {
                  "cancel": "Cancelar",
                  "fill": "Rellene todas las celdas con <i>%d<\/i>",
                  "fillHorizontal": "Rellenar celdas horizontalmente",
                  "fillVertical": "Rellenar celdas verticalmente"
              },
              "decimal": ",",
              "searchBuilder": {
                  "add": "Añadir condición",
                  "button": {
                      "0": "Constructor de búsqueda",
                      "_": "Constructor de búsqueda (%d)"
                  },
                  "clearAll": "Borrar todo",
                  "condition": "Condición",
                  "conditions": {
                      "date": {
                          "before": "Antes",
                          "between": "Entre",
                          "empty": "Vacío",
                          "equals": "Igual a",
                          "notBetween": "No entre",
                          "not": "Diferente de",
                          "after": "Después",
                          "notEmpty": "No Vacío"
                      },
                      "number": {
                          "between": "Entre",
                          "equals": "Igual a",
                          "gt": "Mayor a",
                          "gte": "Mayor o igual a",
                          "lt": "Menor que",
                          "lte": "Menor o igual que",
                          "notBetween": "No entre",
                          "notEmpty": "No vacío",
                          "not": "Diferente de",
                          "empty": "Vacío"
                      },
                      "string": {
                          "contains": "Contiene",
                          "empty": "Vacío",
                          "endsWith": "Termina en",
                          "equals": "Igual a",
                          "startsWith": "Empieza con",
                          "not": "Diferente de",
                          "notContains": "No Contiene",
                          "notStartsWith": "No empieza con",
                          "notEndsWith": "No termina con",
                          "notEmpty": "No Vacío"
                      },
                      "array": {
                          "not": "Diferente de",
                          "equals": "Igual",
                          "empty": "Vacío",
                          "contains": "Contiene",
                          "notEmpty": "No Vacío",
                          "without": "Sin"
                      }
                  },
                  "data": "Data",
                  "deleteTitle": "Eliminar regla de filtrado",
                  "leftTitle": "Criterios anulados",
                  "logicAnd": "Y",
                  "logicOr": "O",
                  "rightTitle": "Criterios de sangría",
                  "title": {
                      "0": "Constructor de búsqueda",
                      "_": "Constructor de búsqueda (%d)"
                  },
                  "value": "Valor"
              },
              "searchPanes": {
                  "clearMessage": "Borrar todo",
                  "collapse": {
                      "0": "Paneles de búsqueda",
                      "_": "Paneles de búsqueda (%d)"
                  },
                  "count": "{total}",
                  "countFiltered": "{shown} ({total})",
                  "emptyPanes": "Sin paneles de búsqueda",
                  "loadMessage": "Cargando paneles de búsqueda",
                  "title": "Filtros Activos - %d",
                  "showMessage": "Mostrar Todo",
                  "collapseMessage": "Colapsar Todo"
              },
              "select": {
                  "cells": {
                      "1": "1 celda seleccionada",
                      "_": "%d celdas seleccionadas"
                  },
                  "columns": {
                      "1": "1 columna seleccionada",
                      "_": "%d columnas seleccionadas"
                  },
                  "rows": {
                      "1": "1 fila seleccionada",
                      "_": "%d filas seleccionadas"
                  }
              },
              "thousands": ".",
              "datetime": {
                  "previous": "Anterior",
                  "hours": "Horas",
                  "minutes": "Minutos",
                  "seconds": "Segundos",
                  "unknown": "-",
                  "amPm": [
                      "AM",
                      "PM"
                  ],
                  "months": {
                      "0": "Enero",
                      "1": "Febrero",
                      "10": "Noviembre",
                      "11": "Diciembre",
                      "2": "Marzo",
                      "3": "Abril",
                      "4": "Mayo",
                      "5": "Junio",
                      "6": "Julio",
                      "7": "Agosto",
                      "8": "Septiembre",
                      "9": "Octubre"
                  },
                  "weekdays": {
                      "0": "Dom",
                      "1": "Lun",
                      "2": "Mar",
                      "4": "Jue",
                      "5": "Vie",
                      "3": "Mié",
                      "6": "Sáb"
                  },
                  "next": "Próximo"
              },
              "editor": {
                  "close": "Cerrar",
                  "create": {
                      "button": "Nuevo",
                      "title": "Crear Nuevo Registro",
                      "submit": "Crear"
                  },
                  "edit": {
                      "button": "Editar",
                      "title": "Editar Registro",
                      "submit": "Actualizar"
                  },
                  "remove": {
                      "button": "Eliminar",
                      "title": "Eliminar Registro",
                      "submit": "Eliminar",
                      "confirm": {
                          "_": "¿Está seguro de que desea eliminar %d filas?",
                          "1": "¿Está seguro de que desea eliminar 1 fila?"
                      }
                  },
                  "error": {
                      "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                  },
                  "multi": {
                      "title": "Múltiples Valores",
                      "restore": "Deshacer Cambios",
                      "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
                      "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
                  }
              },
              "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
              "stateRestore": {
                  "creationModal": {
                      "button": "Crear",
                      "name": "Nombre:",
                      "order": "Clasificación",
                      "paging": "Paginación",
                      "select": "Seleccionar",
                      "columns": {
                          "search": "Búsqueda de Columna",
                          "visible": "Visibilidad de Columna"
                      },
                      "title": "Crear Nuevo Estado",
                      "toggleLabel": "Incluir:",
                      "scroller": "Posición de desplazamiento",
                      "search": "Búsqueda",
                      "searchBuilder": "Búsqueda avanzada"
                  },
                  "removeJoiner": "y",
                  "removeSubmit": "Eliminar",
                  "renameButton": "Cambiar Nombre",
                  "duplicateError": "Ya existe un Estado con este nombre.",
                  "emptyStates": "No hay Estados guardados",
                  "removeTitle": "Remover Estado",
                  "renameTitle": "Cambiar Nombre Estado",
                  "emptyError": "El nombre no puede estar vacío.",
                  "removeConfirm": "¿Seguro que quiere eliminar %s?",
                  "removeError": "Error al eliminar el Estado",
                  "renameLabel": "Nuevo nombre para %s:"
              },
              "infoThousands": "."
            } 
        });
    });
    </script>
@endsection
