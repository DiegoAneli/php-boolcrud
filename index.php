<?php include 'partials/header.php'; ?>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1>Tutti gli ospiti</h1>

      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-primary">Crea Ospite</a>

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-12">

/* se l array è pieno (o non è vuoto) stampa la table */

        <?php include 'database.php'; ?>

        <?php if (!empty($ospiti)) { ?>

            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Cognome</th>
                </tr>

              </thead>
              <tbody>
                <?php foreach ($ospiti as $ospite) { ?>
                  <tr>
                    <td><?php echo $ospite['id']; ?></td>
                    <td><?php echo $ospite['name']; ?></td>
                    <td><?php echo $ospite['lastname']; ?></td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>

          <?php } else { ?>

            Non ci sono risultati

          <?php } ?>

      </div>

    </div>

  </div>
<?php include 'partials/footer.php'; ?>
