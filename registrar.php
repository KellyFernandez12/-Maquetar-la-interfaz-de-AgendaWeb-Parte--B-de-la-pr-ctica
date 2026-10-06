<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgendaWeb — Nuevo Evento</title>
  
  <!-- Tipografías de Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  
  <!-- Hoja de estilos unificada -->
 <link rel="stylesheet" href="estilo.css">
</head>
<body class="layout">

  <!-- Encabezado con menú -->
  <header class="site-header">
    <div class="contenedor site-header__inner">
      <a href="index.php" class="logo">Agenda<span>Web</span></a>
      <nav class="nav">
        <a href="index.php" class="nav__link">Mis eventos</a>
        <a href="registrar.php" class="nav__link is-active">Nuevo evento</a>
      </nav>
    </div>
  </header>

  <!-- Contenido Principal: Formulario -->
  <main class="contenedor">
    
    <div class="page__header">
      <div>
        <h1 class="page__title">Registrar nuevo evento</h1>
        <p class="page__subtitle">Ingresa los datos para agendar una nueva actividad</p>
      </div>
    </div>

    <!-- Formulario que redirige a index.php -->
    <form action="index.php" method="get" class="form-card">
      
      <div class="form-group">
        <label for="titulo" class="form-label">Título del evento *</label>
        <input type="text" id="titulo" name="titulo" class="form-input" placeholder="Ej. Entrega de equipo / Reunión" required>
      </div>

      <div class="form-group">
        <label for="categoria" class="form-label">Categoría *</label>
        <select id="categoria" name="categoria" class="form-input" required>
          <option value="" disabled selected>Selecciona una categoría</option>
          <option value="Trabajo">Trabajo</option>
          <option value="Personal">Personal</option>
          <option value="Servicio">Servicio</option>
          <option value="Mantenimiento">Mantenimiento</option>
        </select>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="fecha" class="form-label">Fecha *</label>
          <input type="date" id="fecha" name="fecha" class="form-input" required>
        </div>

        <div class="form-group">
          <label for="hora" class="form-label">Hora (opcional)</label>
          <input type="time" id="hora" name="hora" class="form-input">
        </div>
      </div>

      <div class="form-group">
        <label for="descripcion" class="form-label">Descripción (opcional)</label>
        <textarea id="descripcion" name="descripcion" class="form-input form-textarea" rows="4" placeholder="Detalles adicionales del evento..."></textarea>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn-primary">Guardar evento</button>
        <a href="index.php" class="btn-secondary">Cancelar</a>
      </div>

    </form>

  </main>

  <!-- Pie de página -->
  <footer class="site-footer">
    <div class="contenedor">AgendaWeb · Tu nombre · 2026</div>
  </footer>

</body>
</html>
