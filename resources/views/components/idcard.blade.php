<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<main class="container">
      
      <section class="preview">
         <article class="doc-card glow id-card">
          <header>
            <span>Repubblica Italiana</span>
            <strong>Carta d'identità</strong>
          </header>
          <div class="body">
            <p><b>Cognome:</b> Minutoli</p>
            <p><b>Nome:</b> Alessio</p>
            <p><b>Nato il:</b> 18/01/2000</p>
            <p><b>A:</b> Messina</p>
            <p><b>Sesso:</b> M</p>
            <p><b>Codice fiscale:</b> MNTLSS00A18F158H</p>
            
             <p>
              <b>N. documento:</b>
              <span
                class="doc-number-trigger"
                role="button"
                tabindex="0"
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
                aria-label="Apri i contatti"
              >
                ########
              </span>
            </p>
          
        </div>
        </article>
        <article class="doc-card glow license-card">
          <header>
            <span>Unione Europea</span>
            <strong>Patente di guida</strong>
          </header>
          <div class="body">
            <p><b>Cognome:</b> Alessio</p>
            <p><b>Nome:</b> Minutoli</p>
            <p><b>Data di nascita:</b> 18/01/2000</p>
            <p><b>Luogo di nascita:</b> Messina</p>
            
             <p>
              <b>N. documento:</b>
              <span
                class="doc-number-trigger"
                role="button"
                tabindex="0"
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
                aria-label="Apri i contatti"
              >
                ########
              </span>
            </p>
            
            <p><b>Categoria:</b> B</p>
            <p><b>Ente:</b> MIT - Catanzaro</p>
          </div>
        </article>


      </section>
       <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content text-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="contactModalLabel">Sei sicuro?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
            </div>
            <div class="modal-body">
              <p class="mb-2"><b>Email:</b> alessio.minutoli@libero.it</p>
              <p class="mb-0"><b>Telefono:</b> +39 3287375596</p>
            </div>
          </div>
        </div>
      </div>
    </main>