<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgendaWeb — Tablero de Eventos</title>
  
  <!-- Tipografías de Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  
  <!-- Hoja de estilos unificada -->
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="layout">

  <!-- Encabezado con menú -->
  <header class="site-header">
    <div class="contenedor site-header__inner">
      <a href="index.php" class="logo">Agenda<span>Web</span></a>
      <nav class="nav">
        <a href="index.php" class="nav__link is-active">Mis eventos</a>
        <a href="registrar.php" class="nav__link">Nuevo evento</a>
      </nav>
    </div>
  </header>

  <!-- Contenido Principal: Tablero -->
  <main class="contenedor">
    
    <!-- Paso 3: Aviso de confirmación -->
    <div class="alert alert--ok" role="status">&#9989; Evento guardado.</div>

    <!-- Encabezado del tablero -->
    <div class="page__header">
      <div>
        <h1 class="page__title">Mis eventos</h1>
        <p class="page__subtitle">3 eventos registrados</p>
      </div>
      <a href="registrar.php" class="btn-primary">+ Nuevo evento</a>
    </div>

    <!-- Pasos 4 y 5: Rejilla de Tarjetas -->
    <section class="card-list">

      <!-- ▼ INICIO EVENTO 1: Completo -->
      <article class="card">
        <span class="card__badge">Trabajo</span>
        <h2 class="card__title">Reunión de academia</h2>
        <p class="card__meta">
          <time datetime="2026-09-25T10:30">25/09/2026 · 10:30</time>
        </p>
        <p class="card__text">Revisar calificaciones del 1er parcial.</p>

        <div class="card__actions">
          <a href="editar.php?id=1" class="btn-secondary btn-sm">Editar</a>
          <form method="post" action="borrar.php" class="form-inline">
            <input type="hidden" name="id" value="1">
            <button type="submit" class="btn-danger btn-sm">Borrar</button>
          </form>
        </div>
      </article>
      <!-- ▲ FIN EVENTO 1 -->

      <!-- ▼ INICIO EVENTO 2: Sin descripción -->
      <article class="card">
        <span class="card__badge">Personal</span>
        <h2 class="card__title">Cita médica de rutina</h2>
        <p class="card__meta">
          <time datetime="2026-09-28T16:00">28/09/2026 · 16:00</time>
        </p>

        <div class="card__actions">
          <a href="editar.php?id=2" class="btn-secondary btn-sm">Editar</a>
          <form method="post" action="borrar.php" class="form-inline">
            <input type="hidden" name="id" value="2">
            <button type="submit" class="btn-danger btn-sm">Borrar</button>
          </form>
        </div>
      </article>
      <!-- ▲ FIN EVENTO 2 -->

      <!-- ▼ INICIO EVENTO 3: Sin hora y con título largo -->
      <article class="card">
        <span class="card__badge">Servicio</span>
        <h2 class="card__title">Mantenimiento preventivo de equipo en sucursal centro</h2>
        <p class="card__meta">
          <time datetime="2026-10-02">02/10/2026</time>
        </p>
        <p class="card__text">Llevar la lista de verificación y piezas de repuesto.</p>

        <div class="card__actions">
          <a href="editar.php?id=3" class="btn-secondary btn-sm">Editar</a>
          <form method="post" action="borrar.php" class="form-inline">
            <input type="hidden" name="id" value="3">
            <button type="submit" class="btn-danger btn-sm">Borrar</button>
          </form>
        </div>
      </article>
      <!-- ▲ FIN EVENTO 3 -->

    </section>

    <!-- Paso 6: Estado Vacío -->
    <div class="empty-state">
      <p>Aún no tienes eventos registrados.</p>
      <a href="registrar.php" class="btn-primary">Registrar el primero</a>
    </div>

  </main>

  <!-- Pie de página -->
  <footer class="site-footer">
    <div class="contenedor">AgendaWeb · Tu nombre · 2026</div>
  </footer>

</body>
</html>