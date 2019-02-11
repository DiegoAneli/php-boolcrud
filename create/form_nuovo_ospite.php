<?php include '../partials/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Crea nuovo ospite</h1>

    </div>

  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" action="http://localhost/ospiti-crud/create/dbsave.php" method="post">


        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" name="name" class="form-control" placeholder="Inserisci il nome ospite" />
        </div>

        <div class="form-group">
          <label for="lastname">Cognome</label>
          <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome ospite" />
        </div>

        <div class="form-group">
          <label for="date_of_birth">Data di nascita</label>
          <input type="text" name="date_of_birth" class="form-control" placeholder="Inserisci la data di nascita ospite" />
        </div>

        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <select type="text" name="document_type">
            <option value="">Inserisci il tipo di documento</option>
            <option value="CI">Carta identità</option>
            <option value="Driver License">Patente</option>
          </select>

          <div class="form-group">
            <label for="document_number">Numero documento</label>
            <input type="text" name="document_number" placeholder="Inserisci il numero di documento" class="form-control" />

          </div>

          <div class="form-group">
            <input type="submit" name="" value="Salva" class="form-control"/>

          </div>

        </div>


      </form>

    </div>

  </div>

</div>

<?php include '../partials/footer'; ?>
